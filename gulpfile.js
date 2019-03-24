let gulp = require('gulp');
var importCss = require('gulp-import-css');
let cleanCSS = require('gulp-clean-css');
let autoprefixer = require('gulp-autoprefixer');
let watch = require('gulp-watch');

function generateCatalog (){
    return gulp .src('css/catalog.css')
                .pipe(importCss())
                .pipe(autoprefixer({
                    browsers: ['last 2 versions'],
                    cascade: false
                }))
                .pipe(cleanCSS({level: 2}))
                .pipe(gulp.dest('css/dist'));
}

function watchChanges(){
    gulp.watch('css/blocks/*.css', gulp.series('style'))
}

gulp.task('style', generateCatalog);
gulp.task('watch', watchChanges);
