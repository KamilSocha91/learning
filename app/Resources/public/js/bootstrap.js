/**
 * bootstraps angular onto the window.document node
 */
define([
    'require',
    'angular',
    'app',
    'routes',
    'jquery',
    'promise-polyfill',
/*    'talkify'
*/    'talkify-player-core',
    'talkify-player',
    'talkify-config',
    'talkify-word-highlighter',
    'talkify-timer'
], function (require, ng) {
    'use strict';

    require(['domReady!'], function (document) {
        ng.bootstrap(document, ['app']);
    });
});
