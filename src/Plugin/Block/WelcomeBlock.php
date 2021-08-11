<?php

/**
 * @file
 */
namespace Drupal\welcome\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Creates a 'Welcome' Block
 * @Block(
 * id = "block_welcome",
 * admin_label = @Translation("Welcome"),
 * )
 */
class WelcomeBlock extends BlockBase {

    /**
     * {@inheritdoc}
     */
    public function build() {
        return array (
            '#theme' => 'welcome_template',
        );
    }

}