# HW Blank Bootstrap 3 Wordpress Theme (Gulp + Sass powered)

This is a Blank Bootstrap 3 Theme for Wordpress. It uses **Gulp** and brings the possibility to recompile Bootstrap css from **Sass**. It also has various other features aimed to have a **fast and clean start** on the theme and website development. It's aim is to be as simple and small as possible. Contributions in the direction of having a cleaner theme would be greately welcome!

### Main features
* Bootstrap two-level reponsive menu ready to be used (with selectors for its styling already available in the main scss file).
* Bootstrap pagination.
* Bootstrap styles are compiled from sass, along with your own styles, into the standard style.css file, using gulp.
* Browser reloads automatically each time you edit a sass or php file (requires livereload browser extension).
* Avoids browser cache for style.css and scripts.js when updated.
* Optional stylesheet for fast styling of Contact Form 7.
* Includes generic logo and favicon, to be replaced with the real ones (It's recommended to use [favicomatic](http://www.favicomatic.com/) to generate the favicon variations).
* Relative URLs for image paths in posts (for portability).
* 1 registered sidebar and 1 footer menu.
* Theme options for storing social links, plus a helper function to show them.
* Text editor includes buttons for adding divs and spans (for easily add classes inside your posts).
* Visual editor shows divs and spans as outlines and a soft background color, respectively.

### Setup
* After installing WordPress, clone this repository within the themes directory.
* [Download the Bootrstap Sass version](http://getbootstrap.com/getting-started/#download) and put it in your theme `/vendor` directory and rename the directory as "bootstrap-sass" (removing the version part). Alternatively, you can clone it from the [Bootstrap Sass Repository](https://github.com/twbs/bootstrap-sass).
* Run `npm install` and then run `gulp` to start watching your files. Use the [livereload browser extension](http://livereload.com/extensions/) to have your browser automatically refreshed.

### To customize Bootstrap
* To use the bootstrap variables you just need to include the variables you want in your theme's `/css/_variables.scss`. The full variables source file is located in `../vendor/bootstrap-sass/assets/stylesheets/bootstrap/_variables.scss`.
* Don't forget to check the [Bootstrap 3 docs](http://getbootstrap.com/docs/3.3/).
* To optimize your final Bootstrap css, comment in `assets/stylesheets/_bootstrap.css` all the components you're not using.

### Credits
* The starting point for this theme was [this 3sparks's theme](https://github.com/sebastienb/Bootstrap-3-blank-wordpress-theme). It already included the main bootstrap menu code.
* [Relative Image URL's](http://scottwernerdesign.com/plugins/relative-image-urls).
* I don't have at this moment th link/credit for The Boostrap Pagination I'm using.