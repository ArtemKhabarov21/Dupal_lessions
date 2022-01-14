<?php

namespace Drupal\all_nodes\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Returns responses for All nodes routes.
 */
class AllNodesController extends ControllerBase {

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
