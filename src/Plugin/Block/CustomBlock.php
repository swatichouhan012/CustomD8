<?php
/**
 * @file
 * Contains \Drupal\article\Plugin\Block\CustomBlock.
 */
namespace Drupal\custom_block\Plugin\Block;
use Drupal\Core\Block\BlockBase;
/**
 * Provides a 'custom_block' block.
 *
 * @Block(
 *   id = "custom_block",
 *   admin_label = @Translation("Custom Block"),
 *   category = @Translation("Custom block example")
 * )
 */
class CustomBlock extends BlockBase {
  /**
   * {@inheritdoc}
   */
  public function build() {
    return array(
      '#type' => 'markup',
      '#markup' => 'This block list the examples.',
    );
  }
}
