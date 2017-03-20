define(['./module'], function (controllers) {
  'use strict';

  controllers.controller('courseCtrl', function ($scope, Course) {
    $scope.list = Course.list();

    $scope.start = function(data) {      
      Course.start(data).then(function(response) {
        $scope.course = response.data;
      });
    }
    
  });

});
