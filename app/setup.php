<?php

namespace App;

/**
 * Register the theme Assets
 *
 * @return void
 */
add_action('wp_enqueue_scripts', function () {
    /**
     * Add Bootstrap, Jquery and Popper js (Comun scripts)
     */
    wp_enqueue_script(
        'bootstrap',
        mix('public/js/bootstrap.js', 'public'),
        array(),
        false,
        true
    );

    /**
     * Manually enqueue Gutenberg styles tu ensure they are loaded before our own styles
     * so our css takes priority
     */
    wp_enqueue_style(
        'wp-block-library'
    );

    /**
     * Main Theme Styles (force reload of styles if it css has been updated)
     */
    wp_enqueue_style(
        'theme-styles',
        mix('public/css/style.css', 'public')
    );

    /**
     * Load Fonts
     */

    /* Example
    wp_enqueue_style(
    'font-awesome',
    'https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css'
    );
     */

    /**
     * Load Thread comments WordPress script.
     */
    if (is_singular() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}, 1);

/**
 * Register the initial theme setup
 */
add_action('after_setup_theme', function () {
    /**
     * Disable admin bar
     */
    show_admin_bar(false);

    /**
     * Add thumbnail, automatic feed links and title tag support
     */
    add_theme_support('post-thumbnails');
    add_theme_support('automatic-feed-links');
    add_theme_support('title-tag');

    /**
     * Registar Nav Menus
     */
    register_nav_menus([
        'top-bar' => __('top-bar', 'HW Blank Bootstrap'),
        'footer' => __('footer', 'HW Blank Bootstrap'),
    ]);

    /**
     * Use editor styles editor-style.css for tiny mce
     */
    add_editor_style();

    /**
     * Add custom buttons to the text editor
     */
    add_action('admin_print_footer_scripts', function () {
        if (wp_script_is('quicktags')) {
            ?>
      <script type="text/javascript">
        QTags.addButton( 'div_tag', 'div', '<div class="">', '</div>', '', 'Div tag', 1);
        QTags.addButton( 'span_tag', 'span', '<span class="">', '</span>', '', 'Span tag', 1);
      </script>
      <?php
}
    });

    /**
     * Register SideBar
     */
    add_action('widgets_init', function () {
        if (function_exists('register_sidebar')) {
            register_sidebar(array(
                'id' => 'sidebar-1',
                'before_widget' => '<div id="%1$s" class="widget %2$s">',
                'after_widget' => '</div>',
                'before_title' => '<h4>',
                'after_title' => '</h4>',
            ));
        }
    });
}, 20);

/*
 * Removing plugin controls from WordPress Admin
 */
add_filter('plugin_action_links', 'remove_plugin_controls', 10, 4);

function remove_plugin_controls($actions, $plugin_file, $plugin_data, $context)
{
    if (array_key_exists('edit', $actions)) {
        unset($actions['edit']);
    }
    if (array_key_exists('deactivate', $actions)) {
        unset($actions['deactivate']);
    }
    if (array_key_exists('activate', $actions)) {
        unset($actions['activate']);
    }
    if (array_key_exists('delete', $actions)) {
        unset($actions['delete']);
    }
    return $actions;
}

/*
 * Remove bulk action options for managing plugins
 */
add_filter('bulk_actions-plugins', 'disable_bulk_actions');

function disable_bulk_actions($actions)
{
    if (array_key_exists('deactivate-selected', $actions)) {
        unset($actions['deactivate-selected']);
    }
    if (array_key_exists('activate-selected', $actions)) {
        unset($actions['activate-selected']);
    }
    if (array_key_exists('delete-selected', $actions)) {
        unset($actions['delete-selected']);
    }
    if (array_key_exists('update-selected', $actions)) {
        unset($actions['update-selected']);
    }
}

