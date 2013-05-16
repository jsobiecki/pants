<?php

/**
 * @file
 * Pants administration UI.
 */

/**
 * Form builder; The pants settings form.
 */
function pants_settings() {
  $form['pants_type'] = array(
    '#type' => 'radios',
    '#title' => t('Pants type'),
    '#options' => array(
      '' => t('None (just show on/off status)'),
      'bellbottoms' => t('Bellbottoms'),
      'mchammer' => t('MC Hammer'),
    ),
    '#default_value' => variable_get('pants_type', ''),
    '#description' => t('Choose pants type to show on the user profile.'),
  );

  return system_settings_form($form);
}
