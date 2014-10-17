<?php

/**
 * @file
 * Contains \Drupal\pants\Plugin\PantsType\McHammer.
 */

namespace Drupal\pants\Plugin\PantsType;

use Drupal\pants\PantsTypeInterface;

/**
 * Displays MC Hammer pants.
 *
 * @PantsType(
 *   id = "mchammer",
 *   label = @Translation("MC Hammer")
 * )
 */
class McHammer implements PantsTypeInterface {

  /**
   * {@inheritdoc}
   */
  function viewPantsOn() {
    return array(
      '#theme' => 'image',
      '#uri' => 'http://nickyscostumes.com.au/images/uploads/hammerpants.jpg',
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
