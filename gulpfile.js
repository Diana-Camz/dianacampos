const { src, dest, watch, parallel } = require('gulp');
//CSS
const sass = require('gulp-sass')(require('sass'));
const plumber = require("gulp-plumber");

//IMAGENES
const webp = require('gulp-webp');
const notify = require('gulp-notify');

//JAVASCRIPT
const terser = require('gulp-terser-js');

const paths = {
  scss: 'src/scss/**/*.scss',
  js: 'src/js/**/*.js',
  imagenes: 'src/img/**/*'
}

function css(done) {
  src("src/scss/**/*.scss")
    .pipe(plumber())
    .pipe(sass())
    .pipe(dest("build/css"))

  done();
}

function javascript(done) {
  src("src/js/**/*.js")
    .pipe(terser())
    .pipe(dest("build/js"))

  done();
}

function dev(done){
  watch("src/scss/**/*.scss", css);
  watch("src/js/**/*.js", javascript);


  done();
}

function versionWebp() {
  return src(paths.imagenes)
      .pipe(webp())
      .pipe(dest('build/img'))
      .pipe(notify({ message: 'Imagen Completada' }));
}

function watchArchivos() {
  watch(paths.scss, css);
  watch(paths.js, javascript);
  watch(paths.imagenes, versionWebp);
}

exports.css = css;
exports.watchArchivos = watchArchivos;
exports.dev = parallel(css, javascript, versionWebp, watchArchivos, dev); 