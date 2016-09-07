var gulp = require('gulp'),
    gutil = require('gulp-util');

gulp.task('craft-base', function () {
    return gulp.src('./craft/**/*').pipe(gulp.dest('build/craft'));
});

gulp.task('craft-config', ['craft-base'], function() {
    return gulp.src('./src/craft/config/*.php').pipe(gulp.dest('build/craft/config'))
});

gulp.task('public', function () {
    return gulp.src('src/public/*', { dot: true }).pipe(gulp.dest('build/public'));
});

gulp.task('default', ['craft-config', 'public'], function() {
    return gutil.log('Gulp is running!')
});