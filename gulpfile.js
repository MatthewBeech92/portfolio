const { src, dest, series, parallel, watch } = require('gulp');
const browserSync = require('browser-sync').create();
const postcss = require('gulp-postcss');

function php() {
  return src('./public/index.php');
}

function css(cb) {
  src('./src/css/*.css')
    .pipe(postcss([require('tailwindcss'), require('postcss-nesting'), require('autoprefixer')]))
    .pipe(dest('./public/css/'));
  cb();
}

function watcher(cb) {
  watch('./public/index.php', php).on('change', browserSync.reload);
  watch('./src/css/*.css').on('change', series(css, browserSync.reload));
  watch(['./tailwind.config.js', './postcss.config.js', './gulpfile.js'], css).on('change', browserSync.reload);
  cb();
}

function devServer(cb) {
  browserSync.init({
    notify: false,
    open: false,
    proxy: 'portfolio.test',
  });
  cb();
}

exports.default = series(parallel(css, php), devServer, watcher);
