<?php
namespace Drupal\NProgress\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Configure nprogress settings for this site.
 */
class NProgressSettingsForm extends ConfigFormBase {

  /**
   * Config settings.
   *
   * @var string
   */
  const SETTINGS = 'nprogress.settings';

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'nprogress_admin_settings';
  }

  /**
   * {@inheritdoc}
   */
  protected function getEditableConfigNames() {
    return [
      static::SETTINGS,
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $config = $this->config(static::SETTINGS);

    $form['status'] = [
      '#type' => 'radios',
      '#title' => 'Module status',
      '#description' => 'Select ON to enable NProgress on this website',
      '#options' => [
        1 => t('On'),
        0 => t('Off'),
      ],
      '#default_value' => $config->get('status'),
    ];
    return parent::buildForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    // Retrieve the configuration.
    $this->configFactory->getEditable(static::SETTINGS)
      ->set('status', $form_state->getValue('status'))
      ->save();
    parent::submitForm($form, $form_state);
  }
}
