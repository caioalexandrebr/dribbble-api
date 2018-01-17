"use strict";
var app = angular.module("app", ["ngRoute", "ngCookies", "ngResource", "ngSanitize"]);

app.config(["$httpProvider", function(a) {
    a.defaults.headers.get || (a.defaults.headers.get = {}), a.defaults.headers.get["If-Modified-Since"] = "Mon, 26 Jul 1997 05:00:00 GMT", a.defaults.headers.get["Cache-Control"] = "no-cache", a.defaults.headers.get.Pragma = "no-cache"
}]), 

app.config(["$routeProvider", function(a) {
    a.when("/", {
        templateUrl: function(a) {
            return "js/views/main.html?random=" + Math.random() // Home
        }
    }).when("/detail/:id", {
        templateUrl: function(a) {
            return "js/views/detail.html?random=" + Math.random() // Detail
        }
    }).otherwise({
        redirectTo: "/"
    })
}])