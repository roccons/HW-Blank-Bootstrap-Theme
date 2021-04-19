# HW Blank Bootstrap 4 Wordpress Theme (Laravel Mix + Sass powered)

This is a Blank Bootstrap 4 Theme for Wordpress. It uses **Laravel Mix** and brings the possibility to recompile  Bootstrap css from **Sass**. It also has various other features aimed to have a **fast and clean start** on the theme and website development. It's aim is to be as simple and small as possible. Contributions in the direction of having a cleaner and more efficient theme would be greately welcome!

### Main features
* Bootstrap three-level reponsive menu ready to be used (TO-DO: restore selectors and multilevel behaviour).
* Bootstrap pagination.
* Bootstrap styles are compiled from sass, along with your own styles, into a style.css file, using laravel-mix.
* If you use `npm run watch` Browser reloads automatically each time you edit a sass, js or php file..
* Prettier and eslint to lint your code.
* Avoids browser cache for style.css and scripts.js when updated.
* Optional stylesheet for fast styling of Contact Form 7.
* Includes generic logo and favicon, to be replaced with the real ones (It's recommended to use [favicomatic](http://www.favicomatic.com/) to generate the favicon variations).
* Relative URLs for image paths in posts (for portability).
* 1 registered sidebar and 1 footer menu.
* Theme options for storing social links, plus a helper function to show them, also you can set Google Tag Manager's ID.
* Improved code organization using an `app` folder for all the business logic and `public` for all the final and compiled files.
* Updated for working smoothly with Gutenberg.

### Setup
* After installing WordPress, clone this repository within the themes directory and rename the created folder as you wish. (It is suggested that you also update your theme's name at the beggining of the `index.css` file)
* Optional: To use this theme as a starting point for your own Wordpress project repository you may want to delete the hidden `git` directory inside the theme directory, and create a new git repo using `git init`.
* Run `yarn install` to install bootstrap, browser-sync and many other dependencies (tested with node version 14)
* Run `composer install`.
* Create a `.env` file at root of your theme, then you need to write LOCAL_DOMAIN const, the value of this constant will be your virtual domain name, for example "wp-domain.test" (A `.env.example` file is included).
* Run `npm run watch` to start watching your files.
* To see you changes you need to open in the browser the "Local" URL that the console gives to you (not the virtual domain), for example "http://localhost:3000".
* Open the file `assets/scss/index.scss` to start creating your theme styles.

#### Where is function.php code?

We divided that code into several files inside app folder, wich are:

* admin: This file is for all code that is related to WP-admin, for example Theme options(Social links,GTM Id )
* config: This file is for define some constants or configuration variables, for example IMG path
* filters: This file is for make some filters
* helpers: This file is for helper functions, for example display social icons
* setup: This file is for make inicial setup like scripts and styles enqueuing and loading external fonts.

In `app/View` you can see two folder, the first one (Admin) is for make code to admin panel, the diference between this folder and Admin.php is that in this folder you write the logic and in Admin.php you just invoke the classes or funciontions. The second one (Components) is for usefull components linke Navbar or Navigation.

#### To customize Bootstrap
* Optionally, your can use `npm outdated` or `yarn outdated` to check if it is a newer bootstrap.
* To use the bootstrap variables you just need to include the variables you want in your theme's `/scss/_variables.scss`. The full variables source file is located in `../node_modules/bootstrap/scss/_variables.scss`.
* Don't forget to check the [Bootstrap 4 docs](https://getbootstrap.com/docs/4.6/getting-started/introduction/).
* To optimize your final Bootstrap css you can comment every import that you don't use.

### Credits
* The starting point for this theme was [this 3sparks's theme](https://github.com/sebastienb/Bootstrap-3-blank-wordpress-theme). 
* [Code for nav menu](https://github.com/jprieton/wp-bootstrap4-navwalker).
Adding [this modifications](https://github.com/jprieton/wp-bootstrap4-navwalker/issues/5) for multi level menu support (only 3) 
* [Relative Image URL's](http://scottwernerdesign.com/plugins/relative-image-urls).
* Using [the function of this post](http://fellowtuts.com/twitter-bootstrap/wordpress-pagination-bootstrap-4-style/)
for Bootstrap Pagination