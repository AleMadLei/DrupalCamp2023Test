<?php

namespace Drupal\drupalcamp_2023_test\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Returns responses for drupalcamp_2023_test routes.
 */
class Drupalcamp2023TestController extends ControllerBase {

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
