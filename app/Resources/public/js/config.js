/*require.config({
    baseUrl: "js",    
    paths: {
        'angular': '../vendor/angular/angular',
        'angular-route': '../vendor/angular-route/angular-route.min'
    },
    shim: { 'app': ['angular'], 'angular-route': ['angular'] },
    deps: ['app', 'angular-route']
});*/
/*
require.config({
    baseUrl: "js",
    shim: {
        "angular": {
            exports: "angular"
        },
        "angular-route": {
            deps: ["angular"]
        }
    },
    paths: {
        'angular': '../vendor/angular/angular',
        'angular-route': '../vendor/angular-route/angular-route.min'
    }
});

require(['angular', 'app', 'controller'], function (app) {
    	angular.element(document).ready(function () {
    		angular.bootstrap(document, ['courseApp']);
    	});
});*/

require.config({
    paths: {
        'domReady': '../vendor/domReady/domReady',
        'angular': '../vendor/angular/angular',
        'angular-route': '../vendor/angular-route/angular-route.min'
    },
    shim: { 'angular': { exports: 'angular' } },
    deps: ['bootstrap']
});

/*http://plnkr.co/edit/3UkSd2UXhlzOWymhLkzK?p=preview*/