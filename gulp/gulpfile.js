// Dependências: npm i gulp gulp-sass sass gulp-clean-css gulp-rename gulp-terser -D

const { src, dest, watch, series, parallel } = require('gulp')

const sass = require('gulp-sass')(require('sass'))

const cleanCSS = require('gulp-clean-css')

const rename = require('gulp-rename')

const terser = require('gulp-terser')

const themePath = '../'

function styles() {

  return src(themePath+'styles/style.scss').pipe(sass().on('error', sass.logError)).pipe(cleanCSS()).pipe(rename({ suffix: '.min' })).pipe(dest(themePath+'styles/minified'))

}

function scripts() {

  return src(themePath+'scripts/script.js').pipe(terser()).pipe(rename({ suffix: '.min' })).pipe(dest(themePath+'scripts/minified'))

}

exports.default = series(parallel(styles, scripts), function() {

  watch(themePath+'styles/**/*.scss', styles)

  watch(themePath+'scripts/script.js', scripts)

})