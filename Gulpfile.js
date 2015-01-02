// Get modules
var gulp = require('gulp');
var sass = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');

// Task boilerplate
gulp.task('css', function() {
	gulp.src('app/assets/sass/*.scss')
	.pipe(sass())
	.pipe(autoprefixer('last 10 version'))
	.pipe(gulp.dest('public/assets/css'));
});

gulp.task('watch', function() {
	gulp.watch('app/assets/sass/**/*.scss', ['css']);
});

// The default task (called when you run `gulp` from cli)
gulp.task('default', ['watch']);