define(['./module'], function (controllers) {
  'use strict';

  controllers.controller('questionCtrl', function ($scope, Question) {
    $scope.save = function(data) {
      Question.save(data).then(function(response) {
        $scope.list = response;
      });
    }

  });

});
