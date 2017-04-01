define(['./module'], function (controllers) {
  'use strict';

  controllers.controller('questionCtrl', function ($scope, Question, JS) {
    $scope.save = function(data) {
      Question.save(data).then(function(response) {
        $scope.list = response;
      }).catch(console.log.bind(console));
    };

    angular.element(document).ready(function () {
      var player = new TtsPlayer();

      player.playText(JS.getValueByClass('question')); 
    });

  });

});
