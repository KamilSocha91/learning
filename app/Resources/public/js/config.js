require.config({
  paths: {
      'jquery': '../vendor/jquery/dist/jquery.min',
      'talkify': '../vendor/talkify/src/talkify.min',
      'domReady': '../vendor/domReady/domReady',
      'angular': '../vendor/angular/angular'/*,
      'angular-route': '../vendor/angular-route/angular-route.min'*/
  },
  shim: { 
  	'angular': { exports: 'angular' }
  },
  deps: ['bootstrap']
});