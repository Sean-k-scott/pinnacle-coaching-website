var gulp = require('gulp');
var sass = require('gulp-sass');
var minify = require('gulp-minify');
var cleanCSS = require('gulp-clean-css');
var concat = require('gulp-concat');
var browserSync = require('browser-sync').create();


// Compile sass into CSS & auto-inject into browsers
gulp.task('sass', function() {
    return gulp.src("assets/scss/**/*.scss")
        .pipe(sass())
        .pipe(gulp.dest("./"))
        .pipe(browserSync.stream());
});

// Minify CSS

gulp.task('minify-css', function() {
  return gulp.src("./*.css")
        .pipe(cleanCSS())
        .pipe(gulp.dest('./'));
})

// Concatenate JS files into one files

gulp.task('pack-js', function () {
    return gulp.src(['assets/js/vendor/*.js', 'assets/js/pinnacle.js'])
        .pipe(concat('build.js'))
        .pipe(gulp.dest('./'));
});

// Minify JS File

gulp.task('minify-js', function() {
  return gulp.src("build.js")
        .pipe(minify())
        .pipe(gulp.dest("./"))
});

// Run BrowserSync and run SASS Compile task, also refresh Browser on PHP and Javascript Changes.

gulp.task('start', gulp.series('sass', 'minify-css', 'pack-js', 'minify-js', function() {

    browserSync.init({
        proxy: "http://dev.pinnaclecoaching.net/"
    });

    gulp.watch("./assets/scss/**/*.scss", gulp.series('sass', 'minify-css'));
    gulp.watch("./build.js", gulp.series('minify-js'));
    gulp.watch(['assets/js/vendor/*.js', 'assets/js/pinnacle.js'], gulp.series('pack-js'));
    gulp.watch("./*.php").on('change', browserSync.reload);
    gulp.watch("./*.js").on('change', browserSync.reload);
}));
