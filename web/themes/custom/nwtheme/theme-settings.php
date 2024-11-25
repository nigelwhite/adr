<?php

declare(strict_types=1);

/**
 * @file
 * Theme settings form for nwtheme theme.
 */

use Drupal\Core\Form\FormState;

/**
 * Implements hook_form_system_theme_settings_alter().
 */
function nwtheme_form_system_theme_settings_alter(array &$form, FormState $form_state): void {

  $form['nwtheme'] = [
    '#type' => 'details',
    '#title' => t('nwtheme'),
    '#open' => TRUE,
  ];

  $form['nwtheme']['example'] = [
    '#type' => 'textfield',
    '#title' => t('Example'),
    '#default_value' => theme_get_setting('example'),
  ];

}
