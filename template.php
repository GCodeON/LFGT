<?php

/**
 * @file
 * template.php
 */

drupal_add_js(drupal_get_path('theme', 'agents_of_change') . '/js/scripts.js', array('type' => 'file', 'scope' => 'footer'));


function agents_of_change_preprocess_page(&$vars, $hook) {
  if (isset($vars['node']->type)) {
    $vars['theme_hook_suggestions'][] = 'page__' . $vars['node']->type;
  }
}

function agents_of_change_preprocess_node (&$vars) {
  $vars['theme_hook_suggestions'][] = 'node__' . $vars['type'] . '__' . $vars['view_mode'];
}

function aoc_talk_isPanel($node) {
  return (is_array($node->field_is_panel["und"]) && isset($node->field_is_panel["und"][0]) && $node->field_is_panel["und"][0]["value"] == 1);
}

function aoc_get_videoID($videoURL) {
  return str_replace('https://www.youtube.com/embed/', '', $videoURL);
}

