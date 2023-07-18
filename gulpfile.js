const gulp = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const concat = require('gulp-concat');
const uglify = require('gulp-uglify');
const rename = require('gulp-rename');
const livereload = require('gulp-livereload');

const srcPath = 'src';
const destPath = 'assets';

// Compilar arquivos Sass
gulp.task('sass', function () {
    return gulp.src(srcPath + '/css/style.scss')
        .pipe(sass({ outputStyle: 'compressed' }).on('error', sass.logError))
        .pipe(rename('style.min.css'))
        .pipe(gulp.dest(destPath + '/css'))
        .pipe(livereload());
});

// Concatenar e minificar arquivos JavaScript
gulp.task('scripts', function () {
    return gulp.src(srcPath + '/js/script.js')
        .pipe(concat('script.min.js'))
        .pipe(uglify())
        .pipe(gulp.dest(destPath + '/js'))
        .pipe(livereload());
});

// Observar alterações nos arquivos Sass e JavaScript
gulp.task('watch', function () {
    livereload.listen();
    gulp.watch(srcPath + '/**/*.scss', gulp.series('sass'));
    gulp.watch(srcPath + '/**/*.js', gulp.series('scripts'));
});

// Tarefa padrão do Gulp
gulp.task('default', gulp.series('sass', 'scripts', 'watch'));
