'gulp start' from pinnaclecoaching folder to run workflow.

Worflow as follows:

- Compiles SASS
- Minifies CSS
- Packs all JS files (Vendor First)
- Minifies JS
- Watches .SCSS, .JS and .PHP files and reloads via BrowserSync on Change.

Dependencies List:

"devDependencies": {
  "browser-sync": "^2.26.7",
  "gulp": "^4.0.2",
  "gulp-clean-css": "^4.2.0",
  "gulp-concat": "^2.6.1",
  "gulp-connect": "^5.7.0",
  "gulp-connect-php": "^1.0.3",
  "gulp-minify": "^3.1.0",
  "gulp-sass": "^4.0.2"
}
