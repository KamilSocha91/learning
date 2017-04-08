define(['./module'], function (controllers) {
  'use strict';

  controllers.controller('questionCtrl', function ($scope, Question, JS) {
    $scope.save = function(data) {
      $scope.loading = true;
      Question.save(data).then(function(response) {
        $scope.course = response.data;
      }).catch(console.log.bind(console)).finally(function () {
        $scope.loading = false;
      });
    };
    
  });

});
