(function() {
    var app = angular.module('app', []);
    var resizeItem = function() {
        var width = $(".thumbnail").first().width();

        var height = width * 1.2;
        $(".thumbnail").height(height);
        // console.log('resize to ' + width + ', ' + height);
    }


    var ctrl = function($scope, $http, $window) {
        $scope.items = [];

        var url = '../cart/catalog.php';

        $scope.addToCart = function(item) {
            console.log(item);
        }


        var onSuccess = function(response) {
            $scope.catalog = response.data;
        }

        var onError = function(reason) {
            $scope.errorMsg = "Fail to fetch info " + reason;
        }

        $http.get(url).then(onSuccess, onError);

        angular.element(document).ready(function() {
            resizeItem();
        });

        var w = angular.element($window);
        w.bind('resize', resizeItem);
    }

    // the second parameter using an array
    // the last element of the array is the function
    // the previous element are parameters passed to the functoin
    // 
    // in minimize process, the parameter name in function ctrl
    // might minized from $scope => s
    // 
    // and pass it as array gives angular know that 
    // which parameter should inject in when invoke ctrl
    app.controller('cart', ['$scope', '$http', '$window', ctrl]);

    app.directive('resizedirective', function() {
        return function(scope, element, attrs) {
            scope.$watch('$first', function(v) {
                if (v) resizeItem();
            });
            scope.$watch('$last', function(v) {
                if (v) $(".glyphicon").css("top", "");
            });

        };
    })

    // if don't think about minimize, the following way also work
    // app.controller('acontroller', ctrl);
}());
