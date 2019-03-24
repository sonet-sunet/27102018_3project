let gulp = require('gulp'),
concat = require('gulp-concat'),
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
                .pipe(cleanCSS({levl: 2}))

                // .pipe(concat('main.css')) 
                .pipe( gulp.dest('css/dist'));
}

function watchChanes(){
    gulp.watch('css/blocks/*.css', gulp.series('style') );
}

// Задание, которое необходимо выолнить gulp-у
gulp.task('style', generateCatalog );
gulp.task('watch', watchChanes );

