var gulp = require('gulp');
var sass = require('gulp-sass');
var sourcemaps = require('gulp-sourcemaps');
var browserSync = require('browser-sync');
var reload      = browserSync.reload;
var prefix = require('gulp-autoprefixer');

gulp.task('styles', function() {
    gulp.src('sass/style.scss')
    	.pipe(sourcemaps.init())
        .pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
        .pipe(prefix("last 1 version", "> 1%", "ie 8"))
        .pipe(sourcemaps.write('.'))
        .pipe(gulp.dest('./'));
});

gulp.task('copy-dep', function() {
    gulp
    	.src(['./node_modules/bootstrap/dist/js/bootstrap.min.js', './node_modules/popper.js/dist/umd/popper.min.js', './node_modules/jquery-match-height/dist/jquery.matchHeight-min.js'])
    	.pipe(gulp.dest('./js/lib'));
    gulp
    	.src(['./node_modules/font-awesome/font-awesome/*.scss'])
    	.pipe(gulp.dest('./sass/lib/font-awesome'));
    gulp
    	.src(['./node_modules/font-awesome/fonts/*'])
    	.pipe(gulp.dest('./fonts/font-awesome'));
});

gulp.task('default',function() {
	gulp.start('copy-dep');
    gulp.watch('sass/**/*.scss', ['styles']);
});

// Temporary include browser Sync(by default browser-sync doesnt start)
// all options here https://www.browsersync.io/docs/gulp -> https://www.browsersync.io/docs/options
gulp.task('advance',['styles', 'browser-sync'], function() {
  gulp.watch('sass/**/*.scss', ['styles']);
})
