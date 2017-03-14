define([
    'angular',
    './controllers/index'/*,
    './directives/index',
    './filters/index',
    './services/index'*/
], function (ng) {
    'use strict';

    return ng.module('app', [
        'app.controllers'/*,
        'app.services',
        'app.filters',
        'app.directives'*/
    ]);
});
