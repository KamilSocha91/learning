var gulp = require('gulp'),
	sass = require('gulp-sass');
	
	gulp.task('sass', function () {
	    gulp.src('./app/Resources/public/scss/master.scss')
	        .pipe(sass({sourceComments: 'map'}))
	        .pipe(gulp.dest('./app/Resources/public/css/'));
	});