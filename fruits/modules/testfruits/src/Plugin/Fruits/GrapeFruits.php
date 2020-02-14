<?php

namespace Drupal\testfruits\Plugin\Fruits;

use Drupal\fruits\Plugin\FruitsBase;

/**
 * Provides a 'Grape Fruits' data.
 *
 * @Fruits(
 *   id = "grape_fruits",
 *   label = @Translation("Grape"),
 *   family = @Translation("Vitaceae")
 * )
 */
class GrapeFruits extends FruitsBase {  
    
  /**
   * {@inheritdoc}
   */  
  public function vitamins(){        
      return ['B1','B2','B3','B5','B7']; 
  }
  
  /**
   * {@inheritdoc}
   */    
  public function minerals(){
     return ['potassium', 'sodium', 'zinc'];  
  }
}
