const   gulp = require('gulp'),
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
        webp = require('gulp-webp'),
        rename = require('gulp-rename');
        
const   proyectname = 'PPS',
        root = '../' + proyectname + '/',
        src = root + 'assets/src/';


const   phpWatchFiles       = root + '**/*.php',
        jsWatchFiles        = src  +'js/*.js',
        cssWatchFiles       = src  +'css/*.css',
        scssWatchFiles      = src + 'scss/*scss',
        imgWatchFiles       = src + 'img/**/**',
        imgDEST             = root + 'assets/img/',
        cssDEST             = root + 'assets/css/',
        jsDEST              = root + 'assets/js/';
        
function process_css() {
    return gulp.src([src + '/css/*.css'])
        .pipe(sourcemaps.init({ loadMaps: true , largeFile: true}))
        .pipe(cleanCSS({compatibility: '*'}))
        .pipe(autoprefixer('last 2 versions'))
        .pipe(sourcemaps.write())
        .pipe(lineec())
        .pipe(gulp.dest(cssDEST));
}

function process_scss() {
    return gulp.src([src + '/sass/*.scss'])
        .pipe(sourcemaps.init({ loadMaps: true , largeFile: true}))
        .pipe(sass({ outputStyle: 'compressed', }).on('error', sass.logError))
        .pipe(cleanCSS({compatibility: '*'}))
        .pipe(autoprefixer('last 2 versions'))
        .pipe(sourcemaps.write())
        //.pipe(lineec())
        .pipe(rename('custom.css'))
        .pipe(gulp.dest(cssDEST));
}

let jsSRC = [
    src + 'js/theme-vendors.min.js',
    src + 'js/main.js'
];


function process_js() {
    return gulp.src(jsSRC)
        .pipe(sourcemaps.init({ loadMaps: true, largeFile: true}))
        .pipe(uglify())
        .pipe(sourcemaps.write())
        //.pipe(lineec())
        .pipe(rename('index.js'))
        .pipe(gulp.dest(jsDEST));
}

function process_img() {
    return gulp.src(src + '/img/**/**')
        .pipe(changed(imgDEST))
        .pipe(imagemin([
            imagemin.gifsicle({ interlaced: true }),
            imagemin.mozjpeg({ progressive: true }),
            imagemin.optipng({ optimizationlevel: 5 })
        ]))
        .pipe(webp())
        .pipe(gulp.dest(imgDEST));
}
/*
function imgmin() {
    return gulp.src(imgSRC+'/*')
        .pipe(changed(imgDEST))
        .pipe(imagemin([
            imagemin.gifsicle({ interlaced: true }),
            imagemin.mozjpeg({ progressive: true }),
            imagemin.optipng({ optimizationlevel: 5 })
        ]))
        .pipe(webp())
        .pipe(gulp.dest(imgDEST));
}gulp
*/
/*
function webpTransform() {
    return gulp.src(imgMIN + '*.jpeg')
        .pipe(webp())
        .pipe(gulp.dest(imgDEST));
}
*/

function watch() {
    browserSync.init({
        open: 'external',
        proxy: 'http://localhost/ppstech/',
        port:  8080
    });
    process_css();
    process_scss();
    process_js();

    gulp.watch(cssWatchFiles,process_css);
    gulp.watch(scssWatchFiles, process_scss);
    gulp.watch(jsWatchFiles, process_js).on('change',  browserSync.reload);;
    gulp.watch(imgWatchFiles, process_img).on('change',  browserSync.reload);;
    gulp.watch([phpWatchFiles, jsDEST + 'index.js', cssDEST + 'main.min.css']).on('change', browserSync.reload);
}

exports.watch       = watch;
exports.process_css = process_css;
exports.process_css = process_scss;
exports.process_js  = process_js;
exports.process_img = process_img;

var build = gulp.parallel(watch);
gulp.task('default', build);


