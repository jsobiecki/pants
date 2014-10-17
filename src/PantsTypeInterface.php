<?php

/**
 * @file
 * Contains \Drupal\pants\PantsTypeInterface.
 */

namespace Drupal\pants;

/**
 * Defines the interface for pants types.
 */
interface PantsTypeInterface {

  /**
   * Returns a render array to display when the pants are on.
   *
   * @return array
   *   A render array.
   */
  public function viewPantsOn();

  /**
   * Returns a render array to display when the pants are off.
   *
   * @return array
   *   A render array.
   */
  public function viewPantsOff();

}
