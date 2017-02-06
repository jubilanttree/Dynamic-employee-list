app.controller("headerController", ['$scope', '$http', '$location', '$resource', '$timeout', '$rootScope', function($scope, $http, $location, $resource, $timeout, $rootScope){


}]);

app.controller("dashboardController", ['$scope', '$http', '$location', '$resource', '$timeout', '$rootScope', function($scope, $http, $location, $resource, $timeout, $rootScope){
	

	$http({
		method:'GET',
		url:'data/data.json'
	}).then( function successCallBack(response){
		$scope.response = response;
		$scope.employees = $scope.response.data.employees;
	}, function errorCallBack(response){
		$scope.status = status;
	});

	$scope.employeeDetails = false;
	$scope.showDetails = function(id, worked_with, name, bio, biolink, picture_url, popularity){
		$scope.employeeDetails = false;
		$scope.id			= id;
		$scope.workedWith	= worked_with;
		$scope.workedWithCol = new Array();
		var lengthy = $scope.workedWith;
		console.log(lengthy.length);
		if(lengthy.length>0){
			for(var i=0;i<lengthy.length;i++){
				$scope.workedWithCol[$scope.workedWith[i]] = $scope.workedWith[i];
			}
		}
		$scope.name			= name;
		$scope.bio			= bio;
		$scope.biolink		= biolink;
		$scope.pictureUrl	= picture_url;
		$scope.popularity	= popularity;
		$scope.fontSize		= popularity;
		$scope.priceSlider1 = {'value':$scope.fontSize+'0'};
		if($scope.popularity<4){
			$scope.fontSize = 4;
			$scope.priceSlider1 = {'value':4+'0'};
		}
		$scope.employeeDetails = true;
	}

    $scope.priceSlider1 = {
        floor: 0,
        ceil: 500,
        value: 100
    };
	$scope.refreshSlider = function () {
        $timeout(function () {
            $scope.$broadcast('rzSliderForceRender');
        });
    };

}]);

app.controller("leftController", ['$scope', '$http', '$location', '$resource', '$timeout', '$rootScope', function($scope, $http, $location, $resource, $timeout, $rootScope){	

}]);