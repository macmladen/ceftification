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
  dpm($variables);
}
function dgd7_preprocess_node(&$variables) {
  // Changes go here.
  //  xdebug_break();
  $variables['title'] .= '— gotcha!';
}
function dgd7_preprocess_image(&$variables) {
  $variables['alt'] = 'MacMladen was here too!';
  $variables['width'] = 768;
  $variables['height'] = 90;
  $variables['path'] = 'http://lorempixel.com/' . $variables['width'] . '/' . $variables['height'];
}

/**
 * Implements hook_page_alter().
 */
function dgd7_page_alter(&$page) {
  $page['highlighted']['new_stuff'] = array(
    '#type' => 'container',
    '#attributes' => array('class' => 'my-container'),
  );
  $page['highlighted']['new_stuff']['heading'] = array(
    '#type' => 'html_tag',
    '#tag' => 'h2',
    '#value' => t('Adding to highlights'),
    '#attributes' => array('id' => 'my-heading'),
  );
  $page['highlighted']['new_stuff']['list'] = array(
    '#theme' => 'item_list',
    '#items' => array(
      'First item',
      'Second item',
      'Third item',
    ),
  );

/**
}
 * Implements hook_page_alter().
function dgd7_page_alter(&$page) {
 */
  // Check that you are viewing a full page node.
  if (node_is_page(menu_get_object())) {
    // Assign the contents of sidebar_first to sidebar_second.
    $page['sidebar_second'] = $page['sidebar_first'];
    // Unset sidebar_first.
    unset($page['sidebar_first']);
  }

  // Add the breadcrumbs to the bottom of the footer region.
  $page['footer']['breadcrumbs'] = array(
    '#type' => 'container',
    '#attributes' => array('class' => array('breadcrumb-wrapper', 'clearfix')), '#weight' => 10,
  );
  $page['footer']['breadcrumbs']['breadcrumb'] = array(
    '#theme' => 'breadcrumb',
    '#breadcrumb' => drupal_get_breadcrumb(),
  );

  // Trigger the contents of the region to be re-sorted.
  $page['footer']['#sorted'] = FALSE;
}

/**
 * Implements hook_menu_local_tasks_alter().
 */
function dgd7_menu_local_tasks_alter(&$data, $router_item, $root_path) {
  if ($root_path == 'user/%') {
    // Change the first tab title from 'View' to 'Profile'.
    if ($data['tabs'][0]['output'][0]['#link']['title'] == t('View')) {
      $data['tabs'][0]['output'][0]['#link']['title'] = t('Profile');
    }
    // Change the second tab title from 'Edit' to 'Edit profile'.
    if ($data['tabs'][0]['output'][1]['#link']['title'] == t('Edit')) {
      $data['tabs'][0]['output'][1]['#link']['title'] = t('Edit profile');
    }
  }
  if ($root_path == 'node/%') {
    // Change the second tab title from 'Edit' to 'Edit profile'.
    if ($data['tabs'][0]['output'][1]['#link']['title'] == t('Edit')) {
      $data['tabs'][0]['output'][1]['#link']['title'] = t('Edit node');
    }
  }
}

