'use strict';

var app = angular.module('admin', ['ngRoute', 'ngResource', 'ngCookies', 'rzModule', 'ui.bootstrap'])
.config(['$routeProvider', '$compileProvider', '$locationProvider', '$httpProvider', function ($routeProvider, $compileProvider, $locationProvider, $httpProvider) {
	
	$routeProvider
		.when('/dashboard', {
            controller: 'dashboardController',
            templateUrl: 'dashboard.php',
			authenticated:true
        })
        .otherwise({ redirectTo: '/dashboard' });
}]);