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
