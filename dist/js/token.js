app.factory("DribbbleShotsService", ["$http", "$sce", function(a, b) {
    var c = "523956f95976a4ec8b9cd9f17a86d314126a1e1261a767e7e6465ccb8bcc6ccf"; // Token
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
}])