define(['./module'], function (services) {
    'use strict';
    services.service( 'Course', function($http) {
      this.start = function (id) {
        return  $http({ 
            method: 'GET', 
            url: Routing.generate('question',{id: id})
        });
      };

      this.create = function () {
        return  {
          'name': 'course name',
          'questions': [
            {
              'hide': false,
              'type': 'type',
              'title': 'question title',
              'answer': 'answer',
              'difficulty': 'difficulty',
              'question': 'question',
              'choose': false,
              'image': false,
              'sound': false,
              'patterns': [
                {
                  'answer': 'another valid answer'
                },
                {
                  'answer': 'another valid answer'
                }
              ],
              'images': [{}],
              'chooses': [
                {
                  'answer': 'choose 1',
                  'status': false
                },
                {
                  'answer': 'choose 2',
                  'status': false
                }
              ]
            }
          ]
        };
      };

      this.add = function () {
        return {
          'hide': false,
          'type': 'type',
          'title': 'New question title',
          'answer': 'answer',
          'difficulty': 'difficulty',
          'question': 'New question',
          'choose': false,
          'image': false,
          'sound': false,
          'patterns': [
            {
              'answer': 'another valid answer'
            },
            {
              'answer': 'another valid answer'
            }
          ],
          'images': [{}],
          'chooses': [
            {
              'answer': 'choose 1',
              'status': false
            },
            {
              'answer': 'choose 2',
              'status': false
            }
          ]
        };
      };

    });

});
