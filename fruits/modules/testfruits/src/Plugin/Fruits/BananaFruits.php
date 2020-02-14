<?php

namespace Drupal\testfruits\Plugin\Fruits;

use Drupal\fruits\Plugin\FruitsBase;

/**
 * Provides a 'Banana Fruits' data.
 *
 * @Fruits(
 *   id = "banana_fruits",
 *   label = @Translation("Banana"),
 *   family = @Translation("Musaceae")
 * )
 */
class BananaFruits extends FruitsBase {  
  
  /**
   * {@inheritdoc}
   */  
  public function vitamins(){        
      return ['A','B1','B2']; 
  }
  
 /**
   * {@inheritdoc}
   */ 
  public function minerals(){
     return [ 'chloride', 'potassium', 'sodium', 'zinc'];  
  }
}
