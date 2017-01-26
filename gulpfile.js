var gulp = require('gulp');
var browserify = require('browserify');
var babelify = require('babelify');
var source = require('vinyl-source-stream');
var uglify = require('gulp-uglify');
var buffer = require('vinyl-buffer');

gulp.task('build', function () {
    return browserify({entries: './react-classes/app.jsx', extensions: ['.jsx'], debug: true})
        .transform('babelify', {presets: ['es2017', 'es2016', 'es2015', 'react']})
        .bundle()
        .pipe(source('app.js'))
        // .pipe(buffer())
        // .pipe(uglify())
        .pipe(gulp.dest('dist'));
});

gulp.task('watch', ['build'], function () {
    gulp.watch('./react-classes/*.jsx', ['build']);
});

gulp.task('default', ['watch']);