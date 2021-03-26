// 初期設定
const gulp = require("gulp");
const sass = require("gulp-sass");
// メディアクエリをまとめる
const mqpacker = require('css-mqpacker');
// autoprefixer
const postcss = require('gulp-postcss');
const autoprefixer = require('autoprefixer');


// sassコンパイル (autoprefixer)
gulp.task('sass', function () {
  return gulp.src('./assets/_sass/**/*.scss')
    .pipe(sass({ outputStyle: 'expanded' }))
    .pipe(postcss([mqpacker()]))
    .pipe(postcss([autoprefixer()]))
    .pipe(gulp.dest('./assets/css'));
});

gulp.task('watch', function () {
  gulp.watch('./sass/**/*.scss', gulp.task('sass'));
});

// 保存時にsassコンパイル
gulp.task('watch', function () {
  gulp.watch('./assets/_sass/**/*.scss', gulp.task('sass'));
});
