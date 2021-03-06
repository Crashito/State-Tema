const gulp = require('gulp'),
    autoprefixer = require('gulp-autoprefixer'),
    browserSync = require('browser-sync').create(),
    reload = browserSync.reload,
    sass = require('gulp-sass')(require('sass')),
    cleanCSS = require('gulp-clean-css'),
    sourcemaps = require('gulp-sourcemaps'),
    concat = require('gulp-concat'),
    imagemin = require('gulp-imagemin'),
    changed = require('gulp-changed'),
    uglify = require('gulp-uglify'),
    lineec = require('gulp-line-ending-corrector'),
    rename = require('gulp-rename'),
    cwebp = require('gulp-cwebp'),
    criticalCss = require('gulp-penthouse'),
    purgecss = require('gulp-uncss');

    
        
const root = '../STATE/';

const php = root + '**.php',
    js = root + 'assets/js/',
    css = root + 'assets/css/',
    scss = root + 'assets/scss/',
    img = root + 'assets/images/';

const cssfiles =
    [
            css + 'font-icons.min.css',
            css + 'theme-vendors.min.css',
            css + 'style.css',
            css + 'responsive.css',
            css + 'hover.min.css',
            css + 'custom.css'
    ];

const jsfiles =
    [
            js + 'theme-vendors.min.js',
            js + 'main.js',
            js + 'custom.js'
    ];



function process_scss() {
    return gulp.src(scss + '**/*.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(sourcemaps.init({ loadMaps: true, largeFile: true }))
        .pipe(rename('custom.css'))
        .pipe(sourcemaps.write())
        .pipe(gulp.dest(css));
}


function process_css() {
    process_scss();
    return gulp.src(cssfiles)
        .pipe(sourcemaps.init({ loadMaps: true, largeFile: true }))
        .pipe(autoprefixer())
        .pipe(cleanCSS())
        .pipe(concat('style.min.css'))
       /* .pipe(purgecss({
            content: [php]
        })) */
        .pipe(sourcemaps.write())
        .pipe(gulp.dest(css));
}

function process_js() {
    return gulp.src(jsfiles)
        .pipe(sourcemaps.init({ loadMaps: true, largeFile: true }))
        .pipe(concat('index.js'))
        //.pipe(uglify())
        .pipe(sourcemaps.write())
        //.pipe(lineec())
        .pipe(gulp.dest(js));
}


function process_img_marca() {
    return gulp.src(img + 'marcas/**')
        .pipe(imagemin([
            imagemin.gifsicle({ interlaced: true }),
            imagemin.mozjpeg({ progressive: true }),
            imagemin.optipng({ optimizationlevel: 3 })
        ]))
        .pipe(cwebp())
        .pipe(gulp.dest(img +'marcas/'));
}

function process_img() {
    return gulp.src(img + 'src/**')
        .pipe(imagemin([
            imagemin.gifsicle({ interlaced: true }),
            imagemin.mozjpeg({ progressive: true }),
            imagemin.optipng({ optimizationlevel: 3 })
        ]))
        .pipe(cwebp())
        .pipe(gulp.dest(img));
        process_img_marca();
}


function purgeStyle() {
    return gulp.src(css + 'style.min.css')
        .pipe(
            purgecss({ html: ['http://localhost/state/'] })
        )   
        .pipe(rename('purgedCss.css'))
        .pipe(gulp.dest(css+'purgedStyle/'));
        
}

function watch() {
    browserSync.init({
        open: 'external',
        proxy: 'http://localhost/state/',
        port: 8080,
        browser: ["msedge"]
    });
    process_scss();
    process_css();
    process_js();

    gulp.watch(scss + '**/*.scss', process_css).on('change', browserSync.reload);
    gulp.watch(js + 'custom.js', process_js).on('change', browserSync.reload);
    gulp.watch(css + 'custom.css').on('change', browserSync.reload);
    gulp.watch(php).on('change', browserSync.reload);
}

exports.watch       = watch;
exports.process_css = process_css;
exports.process_scss = process_scss;
exports.process_js = process_js;
exports.process_img = process_img;
exports.process_img_marca = process_img_marca;
exports.purgeStyle = purgeStyle;


var build = gulp.parallel(watch);
gulp.task('default', build);


