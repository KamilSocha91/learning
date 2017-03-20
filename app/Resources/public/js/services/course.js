define(['./module'], function (services) {
    'use strict';
    services.service( 'Course', function($http) {
      this.start = function (id) {
        return  $http({ 
            method: 'GET', 
            url: Routing.generate('question',{id: id})
        });
      };
      this.list = function () {
        return {
          1: {
            'name':'oneoneoneoneoneone oneone oneoneone oneone oneoneone oneone',
            'id': 1
          },
          2: {
            'name':'two',
            'id': 2
          },
          3: {
            'name':'three',
            'id': 3
          }
        };
        /*return  $http({ 
            method: 'GET', 
            url: Routing.generate('list')
        });*/
      };
    });
});