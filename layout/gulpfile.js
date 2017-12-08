var gulp = require('gulp'),
    plumber = require('gulp-plumber'),
    rename = require('gulp-rename');
var autoprefixer = require('gulp-autoprefixer');
var babel = require('gulp-babel');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var inject = require('gulp-inject');
var imagemin = require('gulp-imagemin'),
    cache = require('gulp-cache');
var minifycss = require('gulp-minify-css');
var sass = require('gulp-sass');
var browserSync = require('browser-sync');

gulp.task('browser-sync', function() {
    browserSync({
        server: {
            baseDir: "./"
        }
    });
});

gulp.task('bs-reload', function() {
    browserSync.reload();
});

gulp.task('images', function() {
    gulp.src('src/img/**/*')
        .pipe(cache(imagemin({
            optimizationLevel: 3,
            progressive: true,
            interlaced: true
        })))
        .pipe(gulp.dest('dist/img/'));
});

gulp.task('fonts', function() {
    gulp.src('src/fonts/*')
        .pipe(gulp.dest('dist/fonts/'));
});

gulp.task('styles', function(){
  gulp.src(['src/scss/**/*.scss'])
    .pipe(plumber({
      errorHandler: function (error) {
        console.log(error.message);
        this.emit('end');
    }}))
    .pipe(sass())
    .pipe(autoprefixer('last 2 versions'))
    .pipe(rename({suffix: '.min'}))
    .pipe(gulp.dest('dist/css/'))
    .pipe(minifycss())
    .pipe(gulp.dest('dist/css/'))
    .pipe(browserSync.reload({stream:true}))
});

gulp.task('scripts', function(){
  return gulp.src('src/js/*.js')
    .pipe(plumber({
      errorHandler: function (error) {
        console.log(error.message);
        this.emit('end');
    }}))
    .pipe(concat('main.js'))
    .pipe(babel())
    .pipe(rename({suffix: '.min'}))
    .pipe(gulp.dest('dist/js/'))
    .pipe(uglify())
    .pipe(gulp.dest('dist/js/'))
    .pipe(browserSync.reload({stream:true}))
});

gulp.task('insertPlugins', function() {
    return gulp.src('src/js/plugins/**/*.js')
        .pipe(plumber({
            errorHandler: function(error) {
                console.log(error.message);
                this.emit('end');
            }
        }))
        .pipe(concat('plugins.js'))
        .pipe(babel())
        .pipe(rename({suffix: '.min'}))
        .pipe(gulp.dest('dist/js/plugins/'))
        .pipe(uglify())
        .pipe(gulp.dest('dist/js/plugins/'))
        .pipe(browserSync.reload({stream:true}))
});

gulp.task('default', ['browser-sync', 'fonts', 'scripts', 'insertPlugins', 'styles', 'images'], function() {
    gulp.watch("src/scss/**/*.scss", ['styles']);
    gulp.watch("src/js/*.js", ['scripts']);
    gulp.watch("*.html", ['bs-reload']);
    gulp.src('./*.html')
    .pipe(inject(gulp.src(['dist/js/plugins/plugins.min.js', 'dist/js/main.min.js', 'dist/css/*.css'], 
    {read: false}), {relative: true}))
    .pipe(gulp.dest('./'));
});