define(['./module'], function (directives) {
  'use strict';
    
  directives.directive('talk', function() {
    return function( $scope, $element, $attrs ) {
      talkifyConfig.host = 'http://talkify.net';

      console.log(talkifyConfig);

      var player = new TtsPlayer();
      var test = "I would like to eat sandwich";
      player.playText(test);    



/*
        var compile = function( newHTML ) { // Create re-useable compile function
            newHTML = $compile(newHTML)($scope); // Compile pure html!!
            $element.html('').append(newHTML); // Clear and append it
        };

        var htmlName = $attrs.bindHtmlUnsafe; // Get the name of the variable 

        $scope.$watch(htmlName, function( newHTML ) { // Watch for changes to 
                                              // the HTML
            if(!newHTML) return;
            compile(newHTML);   // Compile it
        });*/

    };
  });

/*  directives.directive('onReadFile', function ($parse) {
  return {
    restrict: 'A',
    scope: false,
    link: function(scope, element, attrs) {
            var fn = $parse(attrs.onReadFile);
            
      element.on('change', function(onChangeEvent) {
        var reader = new FileReader();
        reader.onload = function(onLoadEvent) {
          scope.$apply(function() {
            fn(scope, {$fileContent:onLoadEvent.target.result});
          });
        };

        reader.readAsText((onChangeEvent.srcElement || onChangeEvent.target).files[0]);
      });
    }
  };
});*/
  
});