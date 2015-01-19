// Required Gulp Task
var gulp = require('gulp'),

// Required Gulp Plugins
	sass = require('gulp-sass'),
	livereload = require('gulp-livereload'),
	autoprefixer = require('gulp-autoprefixer'),
	sourcemaps = require('gulp-sourcemaps'),
	minifyCSS = require('gulp-minify-css'),
	imagemin = require('gulp-imagemin'),
	plumber = require('gulp-plumber');

// Styles
// Compiles SASS to CSS
gulp.task('styles', function(){
	return gulp.src('./sass/*.scss')
		// .pipe(sourcemaps.init())
			.pipe(sass())
			.pipe(plumber())
			.pipe(autoprefixer({
				browsers: ['last 5 version']
			}))
		// .pipe(sourcemaps.write('./sass/maps'))
		.pipe(minifyCSS())
		.pipe(gulp.dest('./'))
		.pipe(livereload());
});

gulp.task('images', function() {
	return gulp.src('./img/*.*')
		.pipe(imagemin({
			svgoPlugins: [{removeViewBox: false}]
		}))
		.pipe(gulp.dest('./img/'))
});

// Watch Task
// Watch SASS
gulp.task('watch', function() {
	livereload.listen();
	gulp.watch('./sass/*.scss', ['styles']);
	gulp.watch('./img/*.*', ['images']);
});

// Default
gulp.task('default', ['styles', 'images', 'watch']);