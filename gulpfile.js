let gulp = require('gulp'),
concat = require('gulp-concat'),
importCss = require('gulp-cssimport'),
cssmin = require('gulp-cssmin'),
autoprefixer = require('gulp-autoprefixer'),
watch = require('gulp-watch');

function generateCatalog(){
    return gulp.src('css/catalog.css')
    // .pipe(concat('main.css'))
    .pipe(importCss())
    .pipe(autoprefixer({
        browsers: ['>0.1%'],
        cascade: false
    }))
    .pipe(cssmin())
    .pipe(gulp.dest('css/dist'));
}

function generateBascet(){
    return gulp.src('css/bascet.css')
    // .pipe(concat('main.css'))
    .pipe(importCss())
    .pipe(autoprefixer({
        browsers: ['>0.1%'],
        cascade: false
    }))
    .pipe(cssmin())
    .pipe(gulp.dest('css/dist'));
}

function watchChanges(){
    gulp.watch('css/blocks/**/*.css', gulp.series('style'));
    gulp.watch('css/blocks/*.css', gulp.series('styleBascet'));
}

gulp.task('style', generateCatalog);
gulp.task('styleBascet', generateBascet);
gulp.task('watch', watchChanges);