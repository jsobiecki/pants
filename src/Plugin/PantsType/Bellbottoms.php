<?php

/**
 * @file
 * Contains \Drupal\pants\Plugin\PantsType\Bellbottoms.
 */

namespace Drupal\pants\Plugin\PantsType;

use Drupal\pants\PantsTypeInterface;

/**
 * Displays bellbottom pants.
 *
 * @PantsType(
 *   id = "bellbottoms",
 *   label = @Translation("Bellbottoms")
 * )
 */
class Bellbottoms implements PantsTypeInterface {

  /**
   * {@inheritdoc}
   */
  function viewPantsOn() {
    return array(
      '#theme' => 'image',
      '#uri' => 'http://ecx.images-amazon.com/images/I/41xXmNdZn8L._SY200_.jpg',
    );
  }

  /**
   * {@inheritdoc}
   */
  function viewPantsOff() {
    return array(
      '#markup' => t('Off'),
    );
  }

}
