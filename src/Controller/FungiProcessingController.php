<?php

namespace Drupal\farm_shane_fungi\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Provides route responses for the Example module.
 */
class FungiProcessingController extends ControllerBase {

  public function processingPage(): array {
    return [
      '#markup' => 'Hello, Processing',
    ];
  }

}
