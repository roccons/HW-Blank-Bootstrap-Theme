<?php

namespace App\View\Admin;

class ThemeOptions {
  /**
   * List of social fields
   *
   * @var array
   */
  private $socialFields = array(
    array(
      'label'       => 'Facebook',
      'name'        => 'facebook_link',
      'placeholder' => 'Facebook Link - Example: http://facebook.com/username'
    ),
    array(
      'label'       => 'Twitter',
      'name'        => 'twitter_link',
      'placeholder' => 'Twitter Link - Example: http://twitter.com/username'
    ),
    array(
      'label'       => 'Youtube',
      'name'        => 'youtube_link',
      'placeholder' => 'Youtube Link - Example: https://www.youtube.com/channel/channel_id'
    ),
    array(
      'label'       => 'Instagram',
      'name'        => 'instagram_link',
      'placeholder' => 'Instagram Link - Example: http://instagram.com/username'
    ),
  );

  /**
   * Register actions in admin page
   *
   * custom theme options for user in Dashboard - Appearance > Theme Options
   */
  public function __construct()
  {
    add_action( 'admin_menu', array( $this, 'addMenuItem' ) );
    add_action( 'admin_init', array( $this, 'registerSettings' ) );
    add_action( 'admin_head', array( $this, 'displayStyles' ) );
  }

  /**
   * Add menu item in admin settings
   */
  public function addMenuItem()
  {
    add_theme_page(
      'Theme Option',
      'Theme Options',
      'manage_options',
      'hw_theme_options_page',
      array( $this, 'renderPage' )
    );
  }

  /**
   * Render theme options page
   */
  public function renderPage()
  {
    ?>
      <div class="section panel">
        <h1>Custom Theme Options</h1>
        <form method="post" enctype="multipart/form-data" action="options.php">
        <hr>
        <?php
          settings_fields( 'hw_theme_options' );

          do_settings_sections( 'hw_theme_options_page' );
        ?>
          <p class="submit">
            <input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>" />
          </p>
        </form>
      </div>
    <?php
  }

  /**
   * Register theme options settings
   */
  public function registerSettings()
  {
    // Register the settings with Validation callback
    register_setting( 'hw_theme_options', 'hw_theme_options' );

    // Add settings section
    add_settings_section(
      'hw_text_section',
      'Social Links',
      array( $this, 'renderSettingSection' ),
      'hw_theme_options_page'
    );

    foreach( $this->socialFields as $field ) {
      $this->addSocialSettingItem(
        $field['label'],
        $field['name'],
        $field['placeholder']
      );
    }
  }

  /**
   * Add social setting item
   *
   * @param string $label
   * @param string $name
   * @param string $placeholder
   */
  public function addSocialSettingItem( String $label, String $name, String $placeholder )
  {
    $args = array(
      'type'      => 'text',
      'id'        => $name,
      'name'      => $name,
      'desc'      => $placeholder,
      'std'       => '',
      'label_for' => $name,
      'class'     => 'css_class'
    );

    add_settings_field(
      $name,
      $label,
      array( $this, 'renderSettingItem' ),
      'hw_theme_options_page',
      'hw_text_section',
      $args
    );
  }

  /**
   * Render setting item field
   *
   * @param array $args
   */
  public function renderSettingItem(Array $args )
  {
    extract( $args );
    $optionName = 'hw_theme_options';
    $options = get_option( $optionName );

    $options[$id] = stripslashes($options[$id]);
    $options[$id] = esc_attr( $options[$id]);
    echo "<input class='regular-text$class' type='text' id='$id' name='" . $optionName . "[$id]' value='$options[$id]' />";
    echo ($desc != '') ? "<br /><span class='description'>$desc</span>" : "";
  }

  /**
   * Display theme options page styles
   */
  public function displayStyles () {
    echo '
      <style>
        .appearance_page_pu_theme_options .wp-editor-wrap {
          width: 75%;
        }
        .regular-textcss_class {
          width: 50%;
        }
        .appearance_page_pu_theme_options h3 {
          font-size: 2em;
          padding-top: 40px;
        }
      </style>'
    ;
  }

  /**
   * Helper to render social links
   *
   * @param string $name
   */
  public static function socialLink ( String $name )
  {
    $socialLinks = get_option( 'hw_theme_options' );
    $imgPath = IMG_PATH . '/icons/' . $name . '.svg';
    $fieldName = $name . '_link';

    if( $socialLinks[$name] ) {
      echo("
        <a href='{$socialLinks[$fieldName]}' target='_blank'>
          <img src='{$imgPath}>'
        </a>
      ");
    }
  }

  /**
   * Render Setting Section
   *
   * No reason to live, apparently
   */
  public function renderSettingSection()
  {
    // Silence is golden
  }
}
