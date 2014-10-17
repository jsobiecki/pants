<?php

/**
 * @file
 * Contains \Drupal\pants\PantsTypeManager.
 */

namespace Drupal\pants;

use Drupal\Core\Cache\CacheBackendInterface;
use Drupal\Core\Extension\ModuleHandlerInterface;
use Drupal\Core\Language\LanguageManager;
use Drupal\Core\Plugin\DefaultPluginManager;

/**
 * Manages pants type plugins.
 */
class PantsTypeManager extends DefaultPluginManager {

  /**
   * Constructs a new PantsTypeManager.
   *
   * @param \Traversable $namespaces
   *   An object that implements \Traversable which contains the root paths
   *   keyed by the corresponding namespace to look for plugin implementations.
   * @param \Drupal\Core\Cache\CacheBackendInterface $cache_backend
   *   Cache backend instance to use.
   * @param \Drupal\Core\Extension\ModuleHandlerInterface $module_handler
   *   The module handler.
   */
  public function __construct(\Traversable $namespaces, CacheBackendInterface $cache_backend, ModuleHandlerInterface $module_handler) {
    parent::__construct('Plugin/PantsType', $namespaces, $module_handler, 'Drupal\pants\PantsTypeInterface', 'Drupal\pants\Annotation\PantsType');
    $this->alterInfo('pants_type_info');
    $this->setCacheBackend($cache_backend, 'pants_type');
  }

}
