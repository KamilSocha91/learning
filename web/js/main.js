console.log('teste');
require.config({
    paths: {
        angular: '../app/Resources/vendor/angular/angular.min.js'
    },
    shim: {
        "angular": {
            exports: "angular"
        }
    }
})