"use strict";

app.controller("MainCtrl", ["$scope", "$http", "$location", "$routeParams", "$rootScope", "DribbbleShotsService", function(a, b, c, d, e, f) {
    var g = this;
    f.getRecentShots().then(function(a) {
        g.shots = a.data.data
    }, function(a) {
        console.log(a.data.data)
    })
}]);