// Required Gulp Task
var gulp = require('gulp'),

// Required Gulp Plugins
	sass = require('gulp-sass'),
	browserSync = require('browser-sync'),
	reload = browserSync.reload,
	autoprefixer = require('gulp-autoprefixer'),
	minifyCSS = require('gulp-minify-css'),
	uglify = require('gulp-uglify');

// Proxy Server
gulp.task('browser-sync', function() {
	browserSync({
		proxy: "localhost:8888/cpff/"
	});
});

// Styles - Compiles SASS to CSS
gulp.task('styles', function(){
	return gulp.src('./sass/*.scss')
		.pipe(sass({errLogToConsole: true}))
		.pipe(autoprefixer({
			browsers: ['last 5 version']
		}))
		.pipe(minifyCSS())
		.pipe(gulp.dest('./'))
		.pipe(reload({stream:true}));
});

//Minify Javascript
gulp.task('compress', function(){
	return gulp. src('./js/production/*.js')
		.pipe(uglify())
		.pipe(gulp.dest('./js/live'));
});


gulp.task('watch', function() {
	gulp.watch("*.php").on("change", browserSync.reload);
	gulp.watch('./sass/*.scss', ['styles']);
	gulp.watch('./js/production/*.js', ['compress']);
	gulp.watch('./js/live/*.js').on("change", browserSync.reload);
});

// Default
gulp.task('default', ['styles', 'compress', 'browser-sync', 'watch']);
