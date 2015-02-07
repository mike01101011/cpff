// Required Gulp Task
var gulp = require('gulp'),

// Required Gulp Plugins
	sass = require('gulp-sass'),
	// livereload = require('gulp-livereload'),
	browserSync = require('browser-sync'),
	reload = browserSync.reload,
	autoprefixer = require('gulp-autoprefixer'),
	// sourcemaps = require('gulp-sourcemaps'),
	minifyCSS = require('gulp-minify-css'),
	imagemin = require('gulp-imagemin'),
	plumber = require('gulp-plumber');

// Static Server
gulp.task('browser-sync', function() {
	browserSync({
		proxy: "localhost:8888/cpff/"
	});
});

// Styles
// Compiles SASS to CSS
gulp.task('styles', function(){
	return gulp.src('./sass/*.scss')
		.pipe(sass())
		.pipe(plumber())
		.pipe(autoprefixer({
			browsers: ['last 5 version']
		}))
		// .pipe(sourcemaps.init())
		// .pipe(sourcemaps.write('./sass/maps'))
		.pipe(minifyCSS())
		.pipe(gulp.dest('./'))
		.pipe(reload({stream:true}));
});

gulp.task('images', function() {
	return gulp.src('./img/*.*')
		.pipe(imagemin({
			svgoPlugins: [{removeViewBox: false}]
		}))
		.pipe(gulp.dest('./img/'))
});

// Default
gulp.task('default', ['styles', 'images', 'browser-sync'], function () {
	gulp.watch('./sass/*.scss', ['styles']);
});
