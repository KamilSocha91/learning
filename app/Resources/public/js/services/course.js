define(['./module'], function (services) {
    'use strict';
    services.service( 'Course', function($http) {
      this.start = function (id) {
        return  $http({ 
            method: 'GET', 
            url: Routing.generate('question',{id: id})
        });
      };

      this.save = function (data) {
        return  $http({
          method: 'POST',
          url: Routing.generate('create'),
          data: data,
          dataType: "json"
        });
      }

      this.create = function () {
        return  {
          'succes': false,
          'message': '',
          'name': 'course name',
          'questions': [
            {
              'hide': false,
              'type': 0,
              'title': 'question title',
              'answer': 'answer',
              'difficulty': 1,
              'question': 'question',
              'choose': false,
              'image': false,
              'sound': true,
              'types': [              
                {
                  'type': 'sound+text=text'
                },
                {
                  'type': 'sound+text=checkbox'
                },
                {
                  'type': 'text=text'
                },
                {
                  'type': 'text=checkbox'
                },
                {
                  'type': 'sound=text'
                },
                {
                  'type': 'sound=checkbox'
                },
                {
                  'type': 'image=text'
                },
                {
                  'type': 'image=checkbox'
                },
                {
                  'type': 'image+sound=text'
                },
                {
                  'type': 'image+sound=checkbox'
                }
              ],
              'patterns': [],
              'images': [],
              'chooses': []
            }
          ]
        };
      };

      this.add = function () {
        return {
          'hide': false,
          'type': 0,
          'title': 'New question title',
          'answer': 'answer',
          'difficulty': 1,
          'question': 'New question',
          'choose': false,
          'image': false,
          'sound': true,
          'types': [              
            {
              'type': 'sound+text=text'
            },
            {
              'type': 'sound+text=checkbox'
            },
            {
              'type': 'text=text'
            },
            {
              'type': 'text=checkbox'
            },
            {
              'type': 'sound=text'
            },
            {
              'type': 'sound=checkbox'
            },
            {
              'type': 'image=text'
            },
            {
              'type': 'image=checkbox'
            },
            {
              'type': 'image+sound=text'
            },
            {
              'type': 'image+sound=checkbox'
            }
          ],
          'patterns': [],
          'images': [],
          'chooses': []
        };
      };

      this.pattern = function () {
        return {
          'answer': 'another valid answer'
        }
      };
      
      this.choose = function () {
        return {
          'answer': 'new choose question',
          'status': false
        }
      };

    });

});
