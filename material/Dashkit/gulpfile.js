const config = require('./config');

const enablePartials = true;

const autoprefixer = require('gulp-autoprefixer');
const browsersync = require('browser-sync').create();
const csscomb = require('gulp-csscomb');
const cached = require('gulp-cached');
const cssnano = require('gulp-cssnano');
const del = require('del');
const fileinclude = require('gulp-file-include');
const gulp = require('gulp');
const gulpif = require('gulp-if');
const npmdist = require('gulp-npm-dist');
const postcss = require('gulp-postcss');
const runsequence = require('run-sequence');
const replace = require('gulp-replace');
const sass = require('gulp-sass');
const uglify = require('gulp-uglify');
const useref = require('gulp-useref-plus');
const wait = require('gulp-wait');

const paths = {
  base:   {
    base:         {
      dir:    './'
    },
    node:         {
      dir:    'node_modules'
    },
    packageLock:  {
      files:  'package-lock.json'
    }
  },
  dist:   {
    base:   {
      dir:    'dist'
    },
    libs:   {
      dir:    'dist/assets/libs'
    }
  },
  src:    {
    base:   {
      dir:    'src',
      files:  'src/**/*'
    },
    css:    {
      dir:    'src/assets/css',
      files:  'src/assets/css/**/*'
    },
    html:   {
      dir:    'src',
      files:  'src/*.html',
    },
    js:     {
      dir:    'src/assets/js',
      files:  'src/assets/js/**/*'
    },
    partials:   {
      dir:    'src/partials',
      files:  'src/partials/**/*'
    },
    scss:   {
      dir:    'src/assets/scss',
      files:  'src/assets/scss/**/*',
      main:   'src/assets/scss/*.scss'
    },
    tmp:    {
      dir:    'src/.tmp',
      files:  'src/.tmp/**/*'
    }
  }
};

gulp.task('sass', function() {
  gulp.src(paths.src.scss.main)
    .pipe(wait(500))
    .pipe(sass().on('error', sass.logError))
    .pipe(postcss([require('postcss-flexbugs-fixes')]))
    .pipe(autoprefixer({
      browsers: ['> 1%']
    }))
    .pipe(csscomb())
    .pipe(gulp.dest(paths.src.css.dir))
    .pipe(browsersync.reload({
      stream: true
    }));
});

gulp.task('fileinclude', function() {

  if ( enablePartials ) {
    gulp.src(paths.src.html.files)
      .pipe(fileinclude({
        prefix: '@@',
        basepath: '@file',
        indent: true,
        context: config
      }))
      .pipe(gulp.dest(paths.src.tmp.dir))
      .pipe(browsersync.reload({
        stream: true
      }));
  } else {
    browsersync.reload();
  }
});

gulp.task('browsersync', function() {
  browsersync.init({
    server: {
      baseDir: [paths.src.tmp.dir, paths.src.base.dir, paths.base.base.dir]
    },
  })
});

gulp.task('watch', ['browsersync', 'sass', 'fileinclude'], function() {
  gulp.watch(paths.src.js.files, browsersync.reload);
  gulp.watch(paths.src.scss.files, ['sass']);
  gulp.watch(paths.src.html.files, ['fileinclude']);
  gulp.watch(paths.src.partials.files, ['fileinclude']);
});

gulp.task('clean:tmp', function() {
  del.sync(paths.src.tmp.dir);
});

gulp.task('clean:packageLock', function() {
  del.sync(paths.base.packageLock.files);
});

gulp.task('clean:dist', function() {
  del.sync(paths.dist.base.dir);
});

gulp.task('copy:all', function() {
  gulp.src([
    paths.src.base.files,
    '!' + paths.src.partials.dir, '!' + paths.src.partials.files,
    '!' + paths.src.scss.dir, '!' + paths.src.scss.files,
    '!' + paths.src.tmp.dir, '!' + paths.src.tmp.files,
    '!' + paths.src.js.dir, '!' + paths.src.js.files,
    '!' + paths.src.css.dir, '!' + paths.src.css.files,
    '!' + paths.src.html.files,
    ])
    .pipe(gulp.dest(paths.dist.base.dir))
});

gulp.task('copy:libs', function() {
  gulp.src(npmdist(), { base: paths.base.node.dir })
    .pipe(gulp.dest(paths.dist.libs.dir));
});

gulp.task('html', function() {
  gulp.src(paths.src.html.files)
    .pipe(fileinclude({
      prefix: '@@',
      basepath: '@file',
      indent: true,
      context: config
    }))
    .pipe(replace('<link rel="stylesheet" href="node_modules/', '<link rel="stylesheet" href="assets/libs/'))
    .pipe(replace('<link href="node_modules/', '<link href="assets/libs/'))
    .pipe(replace('<script src="node_modules/', '<script src="assets/libs/'))
    .pipe(useref())
    .pipe(cached('assets'))
    .pipe(gulpif('*.js', uglify()))
    .pipe(gulpif('*.css', cssnano()))
    .pipe(gulp.dest(paths.dist.base.dir))
});

gulp.task('build', function(callback) {
  runsequence(['clean:tmp', 'clean:packageLock', 'clean:dist', 'copy:all', 'copy:libs'], ['sass', 'html'], 
    callback);
});

gulp.task('default', function (callback) {
  runsequence(['sass','browsersync', 'watch'],
    callback)
});