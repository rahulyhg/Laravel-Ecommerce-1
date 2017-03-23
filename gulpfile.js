var gulp = require('gulp'),
    concat = require('gulp-concat'),
    minify = require('gulp-minify'),
    uglify = require('gulp-uglify');
gulp.task('js', function() {
    return gulp.src(['resources/assets/js/**/*.js'])
        .pipe(concat('main.js'))
        .pipe(minify())
        .pipe(uglify())
        .pipe(gulp.dest('public/js/'));
});
gulp.task('default', ['js'], function(){});
