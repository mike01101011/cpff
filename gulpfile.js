// Required Gulp Task
var gulp = require('gulp'),

// Required Gulp Plugins
	sass = require('gulp-sass'),
	browserSync = require('browser-sync'),
	reload = browserSync.reload,
	autoprefixer = require('gulp-autoprefixer'),
	minifyCSS = require('gulp-minify-css'),
	imagemin = require('gulp-imagemin');

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


// Minify images
gulp.task('images', function() {
	return gulp.src('./img/*.*')
		.pipe(imagemin({
			svgoPlugins: [{removeViewBox: false}]
		}))
		.pipe(gulp.dest('./img/'))
});

gulp.task('watch', function() {
	gulp.watch("*.php").on("change", browserSync.reload);
	gulp.watch('./sass/*.scss', ['styles']);
	gulp.watch('./img/*.*', ['images']);

});

// Default
gulp.task('default', ['styles', 'images', 'browser-sync', 'watch']);
