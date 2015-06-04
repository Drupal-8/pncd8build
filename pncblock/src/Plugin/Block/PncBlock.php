<?php
/**
 * @file
 * Contains \Drupal\pncBlock\Plugin\Block\PncBlock.
 */
namespace Drupal\pncBlock\Plugin\Block;
use Drupal\Core\Block\BlockBase;

/**
 * Provides my custom block.
 *
 * @Block(
 *   id = "pnc_generic_block",
 *   admin_label = @Translation("Pnc Generic Block"),
 *   category = @Translation("Blocks")
 * )
 */
class PncBlock extends BlockBase {
	
  /**
   * Testing Generic block is working in build
   * 
   * @return string
   */	
  private function  getGenericBlockInfo() {
    return "Generic block";
  }
  
  /**
   * {@inheritdoc}
   */
  public function build() {
    //return ['#markup' => $this->getGenericBlockInfo()];
    //return array("This is my test");	  
  }
}