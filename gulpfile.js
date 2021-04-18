const gulp = require('gulp');
const autoprefixer = require('gulp-autoprefixer');
const concat = require('gulp-concat');
const cleanCSS = require('gulp-clean-css');
const sass = require('gulp-sass');

const srcFiles = [
  './assets/css/sass/pages/about.scss',
  './assets/css/sass/pages/blog.scss',
  './assets/css/sass/pages/home.scss',
  './assets/css/sass/pages/shop.scss',
];
const watchDirs = ['./assets/css/sass/*.scss','./assets/css/sass/pages/*.scss'];
const destDir = './assets/css';
const concatFile = 'all_styles.css';

// functions
const rollupCSS = function() {
  return gulp.src(srcFiles)
    .pipe(sass()) // compile sass
    .pipe(autoprefixer({ // add vendor prefixes
      browsers: ['last 2 versions'],
      cascade: false
    }))
    // .pipe(concat(concatFile)) // concatenate
    .pipe(cleanCSS({compatibility: 'ie8'})) // minify
    .pipe(gulp.dest(destDir)) // write
};

// tasks
gulp.task('build', function() {
  rollupCSS();
});
gulp.task('watch', function() {
  rollupCSS();
  gulp.watch(watchDirs, ['build']);
});
