/**
 * bootstraps angular onto the window.document node
 */
define([
    'require',
    'angular',
    'app',
    'routes'
], function (require, ng) {
    'use strict';
console.log('bootstrap');
    require(['domReady!'], function (document) {
        ng.bootstrap(document, ['app']);
    });
});