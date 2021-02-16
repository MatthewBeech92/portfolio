const { src, dest, series, watch } = require('gulp');
const browserSync = require('browser-sync').create();
const sass = require('gulp-sass');

sass.compiler = require('sass');

function css(cb) {
  src('./src/sass/*.scss')
    .pipe(sass({ outputStyle: 'compressed' }))
    .pipe(dest('./public/css/'));
  cb();
}

function watcher(cb) {
  watch('./src/sass/*.scss').on('change', series(css, browserSync.reload));
  cb();
}

function devServer(cb) {
  browserSync.init({
    notify: false,
    open: false,
    server: {
      baseDir: './public',
    },
  });
  cb();
}

exports.default = series(css, devServer, watcher);
