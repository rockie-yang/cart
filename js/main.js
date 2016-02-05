(function() {
    var app = angular.module('app', []);
    var ctrl = function($scope, $http) {
        $scope.items = [];
        
        var url = '../cart/catalog.php';

        var onSuccess = function(response) {
            $scope.catalog = response.data;
        }

        var onError = function(reason) {
            $scope.errorMsg = "Fail to fetch info " + reason;
        }

        $http.get(url).then(onSuccess, onError);

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
	app.controller('cart', ['$scope', '$http', ctrl]);

	// if don't think about minimize, the following way also work
    // app.controller('acontroller', ctrl);
}());