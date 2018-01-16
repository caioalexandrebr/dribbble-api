"use strict";
var app = angular.module("app", ["ngRoute", "ngCookies", "ngResource", "ngSanitize"]);
app.config(["$httpProvider", function(a) {
    a.defaults.headers.get || (a.defaults.headers.get = {}), a.defaults.headers.get["If-Modified-Since"] = "Mon, 26 Jul 1997 05:00:00 GMT", a.defaults.headers.get["Cache-Control"] = "no-cache", a.defaults.headers.get.Pragma = "no-cache"
}]), app.config(["$routeProvider", function(a) {
    a.when("/", {
        templateUrl: function(a) {
            return "views/main.php?random=" + Math.random()
        }
    }).when("/detail/:id", {
        templateUrl: function(a) {
            return "views/detail.php?random=" + Math.random()
        }
    }).otherwise({
        redirectTo: "/"
    })
}]), app.factory("DribbbleShotsService", ["$http", "$sce", function(a, b) {
    var c = "523956f95976a4ec8b9cd9f17a86d314126a1e1261a767e7e6465ccb8bcc6ccf";
    return {
        getRecentShots: function() {
            var d = "https://api.dribbble.com/v1/shots?access_token=" + c,
                e = b.trustAsResourceUrl(d);
            return a.jsonp(e, {
                jsonpCallbackParam: "callback"
            })
        },
        getShotForDetail: function(d) {
            var e = "https://api.dribbble.com/v1/shots/" + d + "?access_token=" + c,
                f = b.trustAsResourceUrl(e);
            return a.jsonp(f, {
                jsonpCallbackParam: "callback"
            })
        }
    }
}]), app.controller("AppCtrl", ["$scope", "$http", "$location", "$routeParams", "$rootScope", function(a, b, c, d, e) {}]), app.controller("DetailCtrl", ["$scope", "$http", "$location", "$routeParams", "$rootScope", "DribbbleShotsService", function(a, b, c, d, e, f) {
    var g = this;
    f.getShotForDetail(d.id).then(function(a) {
        g.shot = a.data.data
    }, function(a) {
        console.log(a.data.data)
    })
}]), app.controller("MainCtrl", ["$scope", "$http", "$location", "$routeParams", "$rootScope", "DribbbleShotsService", function(a, b, c, d, e, f) {
    var g = this;
    f.getRecentShots().then(function(a) {
        g.shots = a.data.data
    }, function(a) {
        console.log(a.data.data)
    })
}]);