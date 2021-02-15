<?php

if (!defined('WP_DEBUG')) {
   die('Direct access forbidden.');
}

if (!function_exists('pxr_theme_enqueue_styles')) {
   function pxr_theme_enqueue_styles()
   {
      wp_enqueue_style('pxrcode-style',  get_stylesheet_uri());
   }
}

add_action('wp_enqueue_scripts', 'pxr_theme_enqueue_styles');

if (!defined('PXRTHEME_PATH')) {
   define('PXRTHEME_PATH', get_theme_file_path() . '/pxrtheme');
}

require_once PXRTHEME_PATH . '/init.php';
