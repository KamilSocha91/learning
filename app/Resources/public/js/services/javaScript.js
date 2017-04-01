define(['./module'], function (services) {
  'use strict';
  
  services.service( 'JS', function($http) {
    this.getValueByClass = function(name) {
      return document.getElementsByClassName(name)[0].value;
    };

  });

});
