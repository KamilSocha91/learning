define([
  'angular',
  'flow',
  './controllers/index',
  './services/index',
  './directives/index'/*,
  './filters/index',*/
], function (ng) {
  'use strict';

  return ng.module('app', [ 
      'app.controllers',
      'app.services',
      'app.directives'/*
      'app.filters'
      */
  ]);
});
