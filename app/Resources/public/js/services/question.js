define(['./module'], function (services) {
  'use strict';

  services.service( 'Question', function($http, JS) {
    this.save = function (data) {
      if (data == undefined) {
        data = {};
      }

      return  $http({
        method: 'POST',
        url: Routing.generate('answer'),
        data: data,
        dataType: "json"
      });
    };
    
  });

});
