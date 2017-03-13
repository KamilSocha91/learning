'use strict';
var gulp = require('gulp'),
	sass = require('gulp-sass'),
	cleanCSS = require('gulp-clean-css'),
	uglify = require('gulp-uglify'),
	pump = require('pump');
	
	gulp.task('sass', function () {
	    gulp.src('./app/Resources/public/scss/master.scss')
	        .pipe(sass({sourceComments: 'map'}))
	        .pipe(gulp.dest('./web/css/'));
	});

	gulp.task('minify', function () {
	    gulp.src('./app/Resources/public/scss/master.scss')
	        .pipe(sass({sourceComments: 'map'}))
	        .pipe(cleanCSS({compatibility: 'ie8'}))
	        .pipe(gulp.dest('./web/css/'));
	});

	gulp.task('js', function () {
	    gulp.src('./app/Resources/public/js/**/*.js')
	        .pipe(gulp.dest('./web/js/'));
	});


	gulp.task('js-minify', function (cb) {
	  pump([
	        gulp.src('./app/Resources/public/js/*.js'),
	        uglify(),
	        gulp.dest('./web/js/')
	    ],
	    cb
	  );
	});