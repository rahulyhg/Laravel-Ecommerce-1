var gulp = require('gulp'),
    concat = require('gulp-concat'),
    minify = require('gulp-minify'),
    uglify = require('gulp-uglify'),
    cleanCSS = require('gulp-clean-css');
gulp.task('js', function() {
    return gulp.src(['resources/assets/js/**/*.js'])
        .pipe(concat('main.js'))
        .pipe(minify())
        .pipe(uglify())
        .pipe(gulp.dest('public/js/'));
});
gulp.task('css', function() {
    return gulp.src(['resources/assets/css/**/*.css'])
        .pipe(concat('main.css'))
        .pipe(cleanCSS())
        .pipe(gulp.dest('public/css/'));
});
gulp.task('watch', function() {
    gulp.watch('resources/assets/js/**/*.js', ['js']);
    gulp.watch('resources/assets/css/**/*.css', ['css']);
});
gulp.task('default', ['watch'], function(){
});
