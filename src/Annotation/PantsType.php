<?php

/**
 * @file
 * Contains \Drupal\pants\Annotation\PantsType.
 */

namespace Drupal\pants\Annotation;

use Drupal\Component\Annotation\Plugin;

/**
 * Defines a pants type annotation object.
 *
 * @Annotation
 */
class PantsType extends Plugin {

  /**
   * The plugin ID.
   *
   * @var string
   */
  public $id;

  /**
   * The human-readable name of the pants type.
   *
   * @ingroup plugin_translatable
   *
   * @var \Drupal\Core\Annotation\Translation
   */
  public $label;

}
