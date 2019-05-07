'use strict';

var gulp = require('gulp');
var sass = require('gulp-sass');
var rename = require('gulp-rename');

sass.compiler = require('node-sass');

gulp.task('sass', function () {
  return gulp.src('sitio/css/*.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(rename("style.css"))
    .pipe(gulp.dest('./'));
});

gulp.task('sass:watch', function () {
  gulp.watch('./css/*.scss', gulp.series('sass'));
});
