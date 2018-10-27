var gulp = require('gulp');
var yargs = require('yargs');
var sequence = require('run-sequence');
var build = require('./build');
var func = require('./helpers');
var rename = require('gulp-rename');
var glob = require('glob');
var fs = require('fs');
var pretty = require('pretty');
var sass = require('gulp-sass');

// merge with default parameters
var args = Object.assign({'prod': false, 'rtl': '', 'metronic': false, 'keen': false}, yargs.argv);

if (args.prod !== false) {
  // force disable debug for production
  build.config.debug = false;
  build.config.compile = Object.assign(build.config.compile, {
    'jsUglify': true,
    'cssMinify': true,
    'jsSourcemaps': false,
    'cssSourcemaps': false,
  });
}

// task to bundle js/css
gulp.task('build-bundle', function(cb) {
  // build by demo, leave demo empty to generate all demos
  if (build.config.demo !== '') {
    for (var demo in build.build.demo) {
      if (!build.build.demo.hasOwnProperty(demo)) {
        continue;
      }
      if (build.config.demo !== demo) {
        delete build.build.demo[demo];
      }
    }
  }

  func.objectWalkRecursive(build.build, function(val, key) {
    if (val.hasOwnProperty('src')) {
      if (val.hasOwnProperty('bundle')) {
        func.bundle(val);
      }
      if (val.hasOwnProperty('output')) {
        func.output(val);
      }
    }
  });

  cb();
});

var tasks = ['clean'];
// entry point
gulp.task('default', tasks, function(cb) {
  // clean first and then start bundling
  return sequence(['build-bundle'], cb);
});