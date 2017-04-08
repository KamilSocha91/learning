define(['./module'], function (services) {
  'use strict';
  
  services.service( 'JS', function() {
    this.getValueByClass = function(name) {
      return document.querySelector('.'+name).value;
    };
    this.removeChildrensById = function(name) {
      var myNode = document.getElementById(name);
      while (myNode.firstChild) {
          myNode.removeChild(myNode.firstChild);
      }
    };
  });

});
