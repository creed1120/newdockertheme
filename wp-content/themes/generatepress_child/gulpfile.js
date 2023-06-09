'use strict';

// const gulp = require('gulp');

const { src, dest, watch, parallel } = require("gulp");
const sass = require('gulp-sass')(require('sass'));
const webpack = require('webpack-stream');

// const filePaths = {
//     js: './assets/src/js/**/*.js',
//     css: './assets/src/scss/**/*.scss'
// }

function buildStyles(cb) {
    src('./assets/src/scss/**/*.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(dest('./assets/dist/css'));

    cb();
};

// exports.watch = function () {
//   gulp.watch('./sass/**/*.scss', ['sass']);
// };

function buildScripts(cb) {
    src('./assets/src/js/main.js')
        .pipe(webpack())
        .pipe(dest('./assets/dist/js'));
    cb();
}

function watchFiles(cb) {
    watch(['./assets/src/js/**/*.js', './assets/src/scss/**/*.scss'], parallel(buildStyles, buildScripts))
    cb();
}

exports.buildStyles = buildStyles;
exports.buildScripts = buildScripts;

exports.watch = watchFiles;