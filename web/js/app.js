/*define(['angularAMD', 'angular-route'], function (angularAMD) {
    var app = angular.module("webapp", ['ngRoute']);
    app.config(function ($routeProvider) {
        $routeProvider.when("/course", angularAMD.route({
            //templateUrl: '../App/', controller: 'courseCtrl',
            controllerUrl: '../js/course/controller'
        }))
    });
    return angularAMD.bootstrap(app);
});*/
/*
	var learningApp = angular.module('courseApp', []);
	console.log(learningApp);

	angular.bootstrap(document, ['courseApp']);

	requirejs(["controller"], function(controller) {});
*/

/*require(["app"],
  function (app){
    angular.element(document).ready(function() {
      angular.bootstrap(document, ['courseApp']);
    });
  }
);*/

console.log('app');

/*define(['angular', 'angular-route'], function() {
	var app = angular.module('courseApp', ["ngRoute"]);
        
	return app;
});*/

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