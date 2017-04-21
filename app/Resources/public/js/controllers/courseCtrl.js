define(['./module'], function (controllers) {
  'use strict';

  controllers.controller('courseCtrl', function ($scope, Course, JS, Question) {
    $scope.start = function(data) { 
      $scope.loading = true;
      delete $scope.create;
      Course.start(data).then(function(response) {
        $scope.course = response.data;

        if (response.data.question.sound) {
          $scope.talkify(response.data.question.question);
        } else {
          JS.removeChildrensById("talkify");
        }

      }).catch(console.log.bind(console)).finally(function () {
        $scope.loading = false;
      });
    };

    $scope.saveQuestion = function(data) {
      $scope.loading = true;
      Question.save(data).then(function(response) {
        $scope.course = response.data;
      }).catch(console.log.bind(console)).finally(function () {
        $scope.loading = false;
      });
    };

    $scope.skip = function(data) {
      $scope.loading = true;
      data['skip'] = true;
      Question.save(data).then(function(response) {
        $scope.course = response.data;
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

    $scope.new = function() { 
      delete $scope.course;
      $scope.create = Course.create();
    };

    $scope.add = function(type, key) {
      switch(type) {
        case 'questions':
          $scope.create.questions.push( Course.add() );
          break;
        case 'patterns':
          $scope.create.questions[key].patterns.push( Course.pattern() );
          break;
        case 'chooses':
          $scope.create.questions[key].chooses.push( Course.choose() );
          break;
      }
    };

    $scope.remove = function(index, type, key) {
      switch(type) {
        case 'questions':
          $scope.create.questions.splice(index, 1);
          break;
        case 'patterns':
          $scope.create.questions[key].patterns.splice(index, 1);
          break;
        case 'chooses':
          $scope.create.questions[key].chooses.splice(index, 1);
          break;
        case 'images':
          $scope.create.questions[key].images.splice(index, 1);
          break;
      }
    };
    
    $scope.processFiles = function(files, key) {
      angular.forEach(files, function(flowFile, i) {
          var fileReader = new FileReader();

          fileReader.onload = function (event) {
            var uri = {'base64':event.target.result};   
            $scope.create.questions[key].images.push(uri);  
          };
          fileReader.readAsDataURL(flowFile.file);
      });
    };

    $scope.save = function() {
      $scope.loading = true;
      console.log($scope.create);
      Course.save($scope.create).then(function(response) {
        $scope.create = response.data;

      }).catch(console.log.bind(console)).finally(function () {
        $scope.loading = false;
      });
    };

    $scope.change = function(type, key) {
      if (type==0||type==1||type==4||type==5||type==8||type==9) {
        $scope.create.questions[key].sound = true;
      } else {
        $scope.create.questions[key].sound = false;
      }

      if (type==0||type==2||type==4||type==6||type==8) {
        $scope.create.questions[key].image = true;
      } else {
        $scope.create.questions[key].image = false;
      }

      if (type==1||type==3||type==5||type==7||type==9) {
        $scope.create.questions[key].choose = true;
      } else {
        $scope.create.questions[key].choose = false;
      }
    };

  });

});
