<?php

/**
 * @file
 * Contains \Drupal\pants\Plugin\Block\ChangePants.
 */

namespace Drupal\pants\Plugin\Block;

use Drupal\Component\Utility\NestedArray;
use Drupal\Core\Block\BlockBase;

/**
 * Provides the ChangePants block.
 *
 * @Block(
 *   id = "change_pants",
 *   admin_label = @Translation("Change pants")
 * )
 */
class ChangePants extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $account = \Drupal::currentUser();
    $user = \Drupal::entityManager()->getStorage('user')->load($account->id());

    $element = array(
      '#markup' => 'TODO!',
       'status' => array(
         '#markup' => 'Ojoj',
       //  '#theme' => 'pants_status',
       //  '#pants_status' => $user->pants_status->value,
         '#prefix' => '<div id="pants-change-pants-status">',
         '#suffix' => '</div>',
       ),
      'change_link' => array(
        '#type' => 'link',
        '#title' => t('Change'),
        '#href' => "pants/change/{$user->id()}",
        '#ajax' => array(
          'wrapper' => 'pants-change-pants-status',
          'method' => 'html',
          'effect' => 'fade',
        ),
      ),
    );


    return $element;
  }

  /**
   * {@inheritdoc}
   */
  protected function getRequiredCacheContexts() {
    return array('cache_context.user');
  }

  /**
   * {@inheritdoc}
   */
  public function getCacheTags() {
    $cache_tags = parent::getCacheTags();
    $cache_tags[] = 'user:' . \Drupal::currentUser()->id();
    return $cache_tags;
  }

}
