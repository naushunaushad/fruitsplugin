<?php

namespace Drupal\testfruits\Plugin\Fruits;

use Drupal\fruits\Plugin\FruitsBase;

/**
 * Provides an 'Apple Fruits' data.
 *
 * @Fruits(
 *   id = "apple_fruits",
 *   label = @Translation("Apple"),
 *   family = @Translation("Rosaceae")
 * )
 */
class AppleFruits extends FruitsBase {  
   
  /**
   * {@inheritdoc}
   */  
  public function vitamins(){        
      return ['A','B','C']; 
  }
  
  /**
   * {@inheritdoc}
   */  
  public function minerals(){
     return ['calcium'];  
  }
}
