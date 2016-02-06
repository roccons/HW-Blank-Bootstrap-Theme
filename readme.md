#blank-bootstrap-gulp-sass-wp-theme
Based on
[Bootstrap-3-blank-wordpress-theme](https://github.com/sebastienb/Bootstrap-3-blank-wordpress-theme)

I created this theme from the Bootstrap 3 Starter Wordpress theme by 3sparks as a starting point for my theme development. It adds **Gulp** and **Sass** support and fixes some issues found in the source theme. **It's aim is to be as simple and small as possible.** Contributions in the direction of having a cleaner theme would be greately welcome!


###Instructions
* [Download the Bootrstap Sass version](http://getbootstrap.com/getting-started/#download) and put it in the src/ directory
* Update the path to the _bootstrap.scss file in css/bootstrap.scss
* Run `gulp` to start watching your files. Use the [livereload browser extension](http://livereload.com/extensions/) to have your browser automatically refreshed.
* To use the bootstrap variables you can edit the original _variables.scss or use any of them directly in your css/bootstrap.scss file, just before the `@import`. This way you can keep your variables if you update your bootstrap version
* To optimize your final Bootstrap css, comment in _bootstrap.css all the components you're not using


###Function file include
* Menu Support
* Post thumbnails (not tested yet)
* 1 registered sidebar (was broken, now it's working)
* Theme options for storing Social Links (not tested yet)
* Gravity forms submit button bootstrap btn class (not tested yet)
