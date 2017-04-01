define(['./module'], function (directives) {
  'use strict';
    
  directives.directive('bindHtmlUnsafe', function( $compile, $sce ) {
    return function( $scope, $element, $attrs ) {

        var compile = function( newHTML ) { // Create re-useable compile function
            newHTML = $compile(newHTML)($scope); // Compile pure html!!
            $element.html('').append(newHTML); // Clear and append it
        };

        var htmlName = $attrs.bindHtmlUnsafe; // Get the name of the variable 

        $scope.$watch(htmlName, function( newHTML ) { // Watch for changes to 
                                              // the HTML
            if(!newHTML) return;
            compile(newHTML);   // Compile it
        });

    };
  });
  
});