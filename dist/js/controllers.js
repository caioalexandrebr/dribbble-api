app.controller("AppCtrl", ["$scope", "$http", "$location", "$routeParams", "$rootScope", function(a, b, c, d, e) {}]), app.controller("DetailCtrl", ["$scope", "$http", "$location", "$routeParams", "$rootScope", "DribbbleShotsService", function(a, b, c, d, e, f) {
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