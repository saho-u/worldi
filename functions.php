<?php
  add_action( 'after_setup_theme', 'register_menu' );
  function register_menu() {
    register_nav_menu( 'primary', __( 'Primary Menu', 'theme-slug' ) );
  }
  /**
   * WP-SCSS：ページをロードするたびにscssファイルを強制的にコンパイル.
   */
  define( 'WP_SCSS_ALWAYS_RECOMPILE', true );
  /* ================================================================================ */

  /**
   * htmlにつくマージンを削除
   */
  add_filter('show_admin_bar', '__return_false');
?>
