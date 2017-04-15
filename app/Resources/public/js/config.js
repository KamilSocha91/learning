require.config({
  paths: {
      'jquery': '../vendor/jquery/dist/jquery',
      'promise-polyfill': '../vendor/promise-polyfill/promise',
      'talkify-player-core': '../vendor/talkify/src/talkify-player-core',
      'talkify-player': '../vendor/talkify/src/talkify-player',
      'talkify-config': '../vendor/talkify/src/talkify-config',
      'talkify-word-highlighter': '../vendor/talkify/src/talkify-word-highlighter',
      'talkify-timer': '../vendor/talkify/src/talkify-timer',
      'domReady': '../vendor/domReady/domReady',/*
      'hammer': '../vendor/hammerjs/hammer.min',
      'materialize': '../vendor/materialize/js/materialize.min',*/
      'angular': '../vendor/angular/angular'/*,
      'angular-route': '../vendor/angular-route/angular-route.min'*/
  },
  shim: { 
  	'angular': { exports: 'angular' }
  },
  deps: ['bootstrap']
});