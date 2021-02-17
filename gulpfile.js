const { src, dest, series, watch } = require('gulp');
const browserSync = require('browser-sync').create();
const postcss = require('gulp-postcss');

function css(cb) {
  src('./src/css/*.css')
    .pipe(postcss([require('tailwindcss'), require('autoprefixer')]))
    .pipe(dest('./public/css/'));
  cb();
}

function watcher(cb) {
  watch('./src/css/*.css').on('change', series(css, browserSync.reload));
  watch(['./tailwind.config.js', './postcss.config.js', './gulpfile.js'], css).on('change', browserSync.reload);
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
