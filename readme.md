# HW Blank Bootstrap 4 Wordpress Theme (Gulp + Sass powered)

This is a Blank Bootstrap 4 Theme for Wordpress. It uses **Gulp** and brings the possibility to recompile Bootstrap css from **Sass**. It also has various other features aimed to have a **fast and clean start** on the theme and website development. It's aim is to be as simple and small as possible. Contributions in the direction of having a cleaner theme would be greately welcome!

### Main features
* Bootstrap three-level reponsive menu ready to be used (with selectors for its styling already available in the main scss file).
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
* After installing WordPress, clone this repository within the themes directory and rename it as you wish. (It is suggested that you also update your theme's name at the beggining of `/css/index.scss`)
* Optional: To use this theme as a starting point for your own Wordpress project repository you may want to delete the hidden `git` directory inside the theme directory, and create a new git repo using `git init`.
* Run `npm install` (You might need to use nvm or n to specify the node version to use, since it hasn't worked succesfully with newer node versions than v8.9.x) and then run `gulp` to start watching your files. 
* Use the [livereload browser extension](http://livereload.com/extensions/) to have your browser automatically refreshed.

### To customize Bootstrap
* Optionally, you can replace all the files inside the `vendor/bootstrap` directory with a fresh copy from [Getbootrstap](https://getbootstrap.com/), to ensure you have the latest version of Bootstrap 4.x
* To use the bootstrap variables you just need to include the variables you want in your theme's `/css/_variables.scss`. The full variables source file is located in `../vendor/bootstrap/assets/scss/_variables.scss`.
* Don't forget to check the [Bootstrap 4 docs](https://getbootstrap.com/docs/4.1/getting-started/introduction/).
* To optimize your final Bootstrap css, comment in `scss/bootstrap.css` all the components you're not using you could delete this readme.md

### Credits
* The starting point for this theme was [this 3sparks's theme](https://github.com/sebastienb/Bootstrap-3-blank-wordpress-theme). 
* [Code for nav menu](https://github.com/jprieton/wp-bootstrap4-navwalker).
Adding [this modifications](https://github.com/jprieton/wp-bootstrap4-navwalker/issues/5) for multi level menu support (only 3) 
* [Relative Image URL's](http://scottwernerdesign.com/plugins/relative-image-urls).
* Using [the function of this post](http://fellowtuts.com/twitter-bootstrap/wordpress-pagination-bootstrap-4-style/)
for Bootstrap Pagination