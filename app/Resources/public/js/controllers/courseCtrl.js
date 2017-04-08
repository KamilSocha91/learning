define(['./module'], function (controllers) {
  'use strict';

  controllers.controller('courseCtrl', function ($scope, Course, JS) {
    $scope.start = function(data) { 
      $scope.loading = true;
      Course.start(data).then(function(response) {
        $scope.course = response.data;

        if (response.data.question.sound) {
          $scope.talkify(response.data.question.question);
        } else {
          JS.removeChildrensById("talkify");
        }

        if (response.data.question.choose) {
        }

        if (response.data.question.image) {
          //convert base64 to image
          response.data.question.images.forEach(function(val) {
            var image = new Image();
            image.src = val;

            console.log(val);
            var blob = new Blob([val], {type: 'image/png'});
            console.log(blob);
            var file = new File([blob], 'imageFileName.png');
            console.log(file);
          });
        }
/*
        var imageBase64 = "image base64 data";
var blob = new Blob([imageBase64], {type: 'image/png'});
From this blob, you can generate file object.

var file = new File([blob], 'imageFileName.png');
*/
      }).catch(console.log.bind(console)).finally(function () {
        $scope.loading = false;
      });
    };

    $scope.talkify = function(data) {
      if (!!data) {
        talkifyConfig.host = 'http://talkify.net';
        var player = new TtsPlayer();

        player.playText(data); 
      }
    };
    
  });

});
