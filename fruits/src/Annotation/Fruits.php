<?php

namespace Drupal\fruits\Annotation;

use Drupal\Component\Annotation\Plugin;

/**
 * Defines a fruits annotation object.
 *
 * @Annotation
 */

class Fruits extends Plugin {
    
   /*
    *  The plugin ID
    *  @var string
    */
    
    public $id;
    
    /*
    *  The Label
    *  @var string
    */
   
    public $label;
    
    /*
    *  Fruits Familiy
    *  @var string
    */
    
    public $family; 

}
