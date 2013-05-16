<?php

/**
 * @file
 * Page callbacks for changing pants status.
 */

/**
 * Page callback for pants/change/%user.
 *
 * @param stdClass $user
 *   A user object.
 */
function pants_change($account) {
  $uid = $account->uid;
  $status = 1 - pants_get($uid);
  pants_set($uid, $status);
  return array(
    '#theme' => 'pants_status',
    '#account' => $account,
  );
}
