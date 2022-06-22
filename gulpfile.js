var gulp = require('gulp')
var concat = require('gulp-concat')
var uglify = require('gulp-uglify')
var sass = require('gulp-sass')(require('sass'))
var concatCss = require('gulp-concat-css')
var cleanCSS = require('gulp-clean-css')

gulp.task('js', async function () {
  return gulp
    .src(['assets/js/functions.js'])
    .pipe(concat('functions.min.js'))
    .pipe(uglify())
    .pipe(gulp.dest('./assets/dist/'))
})

gulp.task('sass', async function () {
  return gulp
    .src(['./assets/scss/styles.scss'])
    .pipe(sass({ style: 'compressed' }))
    .pipe(concatCss('styles.min.css'))
    .pipe(cleanCSS({ compability: 'ie8' }))
    .pipe(gulp.dest('./assets/dist/'))
})
