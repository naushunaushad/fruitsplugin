<?php

namespace Drupal\testfruits\Plugin\Fruits;

use Drupal\fruits\Plugin\FruitsBase;

/**
 * Provides an 'Orange Fruits' data.
 *
 * @Fruits(
 *   id = "orange_fruits",
 *   label = @Translation("Orange"),
 *   family = @Translation("Rutaceae")
 * )
 */
class OrangeFruits extends FruitsBase {
    
  /**
   * {@inheritdoc}
   */  
  public function vitamins(){        
      return ['A','B','C','B1','B2','B3','B5','B7']; 
  }
  
  /**
   * {@inheritdoc}
   */  
  public function minerals(){
     return ['calcium', 'chloride', 'magnesium', 'phosphorus', 'potassium', 'sodium', 'zinc'];  
  }
}
