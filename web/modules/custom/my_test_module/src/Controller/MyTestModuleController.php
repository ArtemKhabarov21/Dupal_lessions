<?php

namespace Drupal\my_test_module\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Returns responses for My test module routes.
 */
class MyTestModuleController extends ControllerBase {

  /**
   * Builds the response.
   */
  public function build() {

    $build['content'] = [
      '#type' => 'item',
      '#markup' => $this->t('It works!'),
    ];

    return $build;
  }

}
