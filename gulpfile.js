var gulp = require('gulp'),
    sass = require('gulp-sass'),
    plumber = require('gulp-plumber'),
    browserSync = require('browser-sync').create(),
    reload = browserSync.reload,
    concat = require('gulp-concat'),
    uglify = require('gulp-uglify');
 
//Concat all JS
gulp.task('concatJs', function() {
  gulp.src(['./dist/js/main.js', './dist/js/token.js', './dist/js/controllers.js'])
    .pipe(uglify())
    .pipe(concat('main.min.js'))
    .pipe(gulp.dest('./dist/js/'));
});

// browser-sync task for starting the server.
gulp.task('browserSync', function() {
    //watch files
    var files = [
    './dist/style.css',
    './dist/*.php',
    './dist/js/*.js'
    ];
 
    //initialize browsersync
    browserSync.init(files, {
    //browsersync with a php server
    proxy: "dribbble-api.dev",
    notify: false
    });
});

gulp.task('sass', function() {
  gulp.src('./dist/**/*.scss') // Gets all files ending with .scss in app/scss
    .pipe(plumber({
      handleError: function (err) {
        console.log(err)
        this.emit('end')
      }
    }))
    .pipe(sass())
    .pipe(sass({outputStyle: 'compressed'}))
    .pipe(gulp.dest('./dist/'))
    .pipe(browserSync.reload({
      stream: true
    }))
});

gulp.task('default', ['browserSync', 'concatJs', 'sass'], function(){
  gulp.watch('./dist/**/*.scss', ['sass']);
  // Other watchers
})