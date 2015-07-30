<?php

/**
 * @file
 * Template overrides as well as (pre-)process and alter hooks for the
 * dgd7 theme.
 */

/**
 * Overrides:
 * Returns HTML for a "more" link, like those used in blocks.
 *
 * @param $variables
 * An associative array containing:
 * - url: The url of the main page.
 * - title: A descriptive verb for the link, like 'Read more'.
 */
function dgd7_more_link($variables) {
  return '<div class="more">' . l(t('Much More'), $variables['url'], array('attributes' => array('title' => $variables['title']))) . '</div>';
}

/**
 * Implements template_process_node().
 */
function dgd7_preprocess_page(&$variables) {
  // Changes go here.
  //  xdebug_break();
  dpm($variables);
  $variables['title'] .= 'MAIN Drupal page!';
}
