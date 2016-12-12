// https://markgoodyear.com/2014/01/getting-started-with-gulp/

var gulp = require('gulp'),
    sass = require('gulp-ruby-sass'),
    autoprefixer = require('gulp-autoprefixer'),
    cssnano = require('gulp-cssnano'),
    htmlmin = require('gulp-htmlmin'),
    jshint = require('gulp-jshint'),
    uglify = require('gulp-uglify'),
    imagemin = require('gulp-imagemin'),
    rename = require('gulp-rename'),
    concat = require('gulp-concat'),
    notify = require('gulp-notify'),
    cache = require('gulp-cache'),
    livereload = require('gulp-livereload'),
    del = require('del');

gulp.task('prod', ['clean'], function() {

  gulp.start('html', 'css', 'js', 'img');

});

gulp.task('clean', function() {

  return del(['dist/*.html', 'dist/css', 'dist/js', 'dist/img']);
});

gulp.task('watch', function() {
  // watch .scss files
  gulp.watch('styles/**/*.scss', ['css']);

  // watch .js files
  gulp.watch('scripts/**/*.js', ['js']);

  // watch image files
  gulp.watch('img/**/*', ['img']);

  // create LiveReload server
  livereload.listen();

  // watch any files in dist/, reload on change
  gulp.watch(['dist/**']).on('change', livereload.changed);
});

gulp.task('html', function() {

  return gulp.src('*.html')
    .pipe(htmlmin({collapseWhitespace: true}))
    .pipe(gulp.dest('dist'));
});

gulp.task('css', function() {

  return sass('styles/app.scss', { style: 'expanded' })
    .pipe(autoprefixer('last 2 version'))
    .pipe(gulp.dest('dist/css'))
    .pipe(rename({suffix: '.min'}))
    .pipe(cssnano())
    .pipe(gulp.dest('dist/css'))
    .pipe(notify({ message: 'Styles task complete' }));
});

gulp.task('js', function() {

  return gulp.src(['scripts/app.js', 'scripts/controllers/*.js', 'scripts/services/*.js'])
    .pipe(jshint('.jshintrc'))
    .pipe(jshint.reporter('default'))
    .pipe(concat('main.js'))
    .pipe(gulp.dest('dist/js'))
    .pipe(rename({suffix: '.min'}))
    .pipe(uglify())
    .pipe(gulp.dest('dist/js'))
    .pipe(notify({ message: 'Scripts task complete' }));
});

gulp.task('img', function() {

  return gulp.src('img/**/*')
    .pipe(imagemin({ optimizationLevel: 3, progressive: true, interlaced: true }))
    .pipe(gulp.dest('dist/img'))
    .pipe(notify({ message: 'Images task complete' }));
});
