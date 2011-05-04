<?php

/**
 * @file
 * Process and preprocess helpers for the Compass theme
 */

/**
 * Implements hook_preprocess_html().
 */
function compass_theme_preprocess_html(&$variables) {
  $path = drupal_get_path('theme', 'compass_theme');
  drupal_add_css($path . '/css/screen.css', array(
    'group' => CSS_THEME,
    'every_page' => TRUE,
    'media' => 'screen')
  );
  drupal_add_css($path . '/css/print.css',
    array(
      'group' => CSS_THEME,
      'every_page' => TRUE,
      'media' => 'print')
  );
  drupal_add_css($path . '/css/ie.css', array(
    'group' => CSS_THEME,
    'every_page' => TRUE,
    'media' => 'screen, projection',
    'browsers' =>  array('!IE' => FALSE))
  );
}