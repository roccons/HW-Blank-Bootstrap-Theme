# HW Blank Bootstrap Wordpress Theme (Gulp + Sass powered)

I created this theme from the Bootstrap 3 Starter Wordpress [theme by 3sparks](https://github.com/sebastienb/Bootstrap-3-blank-wordpress-theme) as a starting point for my theme development. It adds **Gulp** and **Sass** support and fixes some issues I found in the source theme. **It's aim is to be as simple and small as possible.** Contributions in the direction of having a cleaner theme would be greately welcome!

### Main features
* Bootstrap 2 level reponsive menu ready to be used
* Bootstrap styles are compiled from sass, along with your own styles, into the standard style.css file, using gulp
* Browser reloads automatically each time you edit a sass or php file
* 1 registered sidebar and 1 footer menu
* Theme options for storing social links, plus a helper function to show them
* Text editor includes buttons for adding divs and spans (for easily add classes inside your posts)
* Visual editor shows divs and spans as outlines and a soft background color, respectively

### Setup
* After installing WordPress, clone this repository within the themes directory.
* [Download the Bootrstap Sass version](http://getbootstrap.com/getting-started/#download) and put it in your theme src/ directory and rename the directory as "bootstrap-sass" (removing the version part). Alternatively, you can clone it from the [Bootstrap Sass Repository](https://github.com/twbs/bootstrap-sass).
* Run `npm install` and then run `gulp` to start watching your files. Use the [livereload browser extension](http://livereload.com/extensions/) to have your browser automatically refreshed.

### To customize Bootstrap
* To use the bootstrap variables you can edit the original assets/stylesheets/bootstrap/_variables.scss or use any of them directly in your css/bootstrap.scss file, just before the `@import`. This way you can keep your variables if you update your bootstrap version.
* To optimize your final Bootstrap css, comment in `assets/stylesheets/_bootstrap.css` all the components you're not using.

### Known issues
* Menu doesn't work correctly with 3 or more levels of depth