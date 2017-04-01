define(['./module'], function (services) {
    'use strict';
    services.service( 'Course', function($http) {
      this.start = function (id) {
        return  $http({ 
            method: 'GET', 
            url: Routing.generate('question',{id: id})
        });
      };
    });

});
