define(['./module'], function (controllers) {
    'use strict';
    controllers.controller('courseCtrl', [function ($scope) {
    	console.log('test');
    	$scope.message = "RequireJs Integrated successfully";
    	console.log($scope.message);
    }]);
});