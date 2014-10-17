<?php /**
 * @file
 * Contains \Drupal\pants\Controller\DefaultController.
 */

namespace Drupal\pants\Controller;

use Drupal\Core\Access\AccessResult;
use Drupal\Core\Controller\ControllerBase;
use Drupal\user\UserInterface;

/**
 * Default controller for the pants module.
 */
class DefaultController extends ControllerBase {


  public function changeAccess() {
    return AccessResult::allowedIf(\Drupal::currentUser()->hasPermission('change pants status') || \Drupal::currentUser()->hasPermission('administer pants'));
  }

  public function change(UserInterface $user) {
    // $user->pants_status->value = !$user->pants_status->value;
    // $user->save();
    // return array(
    //   '#theme' => 'pants_status',
    //   '#pants_status' => $user->pants_status->value,
    // );

    return array(
      '#markup' => 'TODO: Ajax',
    );
  }
}
