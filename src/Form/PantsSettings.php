<?php

/**
 * @file
 * Contains \Drupal\pants\Form\PantsSettings.
 */

namespace Drupal\pants\Form;

// use Drupal\Core\Cache\Cache;
use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Render\Element;

class PantsSettings extends ConfigFormBase {

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'pants_settings';
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    $config = $this->config('pants.settings');

    foreach (Element::children($form) as $variable) {
      $config->set($variable, $form_state->getValue($form[$variable]['#parents']));
    }
    $config->save();

    //if (method_exists($this, '_submitForm')) {
    //  $this->_submitForm($form, $form_state);
    //}

    parent::submitForm($form, $form_state);

    // @todo Decouple from form: http://drupal.org/node/2040135.
    // Cache::invalidateTags(array('config:pants.settings'));
  }

  public function buildForm(array $form, FormStateInterface $form_state) {
    $form['pants_type'] = array(
      '#type' => 'radios',
      '#title' => t('Pants type'),
      '#options' => array(
        '' => t('None (just show on/off status)'),
      ),
      '#default_value' => \Drupal::config('pants.settings')->get('pants_type'),
      '#description' => t('Choose pants type to show on the user profile.'),
    );

    foreach(\Drupal::service('plugin.manager.pants.pants_type')->getDefinitions() as $pants_type_id => $pants_type_info) {
      $form['pants_type']['#options'][$pants_type_id] = $pants_type_info['label'];
     }

    return parent::buildForm($form, $form_state);
  }
}
