let gulp = require('gulp'),
    importCss = require('gulp-import-css'),
    cleanCSS = require('gulp-clean-css'),
    autoprefixer = require('gulp-autoprefixer'),
    watch = require('gulp-watch');

function generateCatalog(){
    return gulp .src('css/catalog.css')
                .pipe(importCss())
                .pipe(autoprefixer({
                    browsers: ['>0.1%'],
                    cascade: false
                }))
                .pipe(cleanCSS({level:2}))
                .pipe(gulp.dest('css/dist'));
}
function generateDetails(){
    return gulp .src('css/details.css')
                .pipe(importCss())
                .pipe(autoprefixer({
                    browsers: ['>0.1%'],
                    cascade: false
                }))
                .pipe(cleanCSS({level:2}))
                .pipe(gulp.dest('css/dist'));
}
function generateBasket(){
    return gulp .src('css/basket.css')
                .pipe(importCss())
                .pipe(autoprefixer({
                    browsers: ['>0.1%'],
                    cascade: false
                }))
                .pipe(cleanCSS({level:2}))
                .pipe(gulp.dest('css/dist'));
}
function watchChanges () {
    gulp.watch('css/blocks/**/*.css', gulp.series('styleCatalog'));
    gulp.watch('css/style.css', gulp.series('styleCatalog'));
    gulp.watch('css/catalog.css', gulp.series('styleCatalog'));

    gulp.watch('css/blocks/**/*.css', gulp.series('styleDetails'));
    gulp.watch('css/style.css', gulp.series('styleDetails'));
    gulp.watch('css/details.css', gulp.series('styleDetails'));

    gulp.watch('css/blocks/**/*.css', gulp.series('styleBasket'));
    gulp.watch('css/style.css', gulp.series('styleBasket'));
    gulp.watch('css/basket.css', gulp.series('styleBasket'));
}
gulp.task('styleCatalog', generateCatalog );
gulp.task('styleDetails', generateDetails );
gulp.task('styleBasket', generateBasket );
gulp.task('watch', watchChanges);