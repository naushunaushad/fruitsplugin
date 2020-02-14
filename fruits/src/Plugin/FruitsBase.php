<?php

namespace Drupal\fruits\Plugin;

use Drupal\Component\Plugin\Exception\PluginException;
use Drupal\Component\Plugin\PluginBase;
use Drupal\Core\Plugin\ContainerFactoryPluginInterface;
use Drupal\fruits\Plugin\FruitsInterface as FruitsPluginInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

abstract class FruitsBase extends PluginBase implements FruitsPluginInterface, ContainerFactoryPluginInterface {
    /*
     * @param $configuration used for handling plugin configuration
     * @param $plugin_id ID of plugin
     * @param $plugin_definition Defenition of plugin
     */
    public function __construct(array $configuration, $plugin_id, $plugin_definition) {
        parent::__construct($configuration, $plugin_id, $plugin_definition);   
    }
    
    /*
     * {@inheritdoc}
     */    
    public static function create(ContainerInterface $container, array $configuration, $plugin_id, $plugin_definition) {
        return new static( $configuration, $plugin_id, $plugin_definition);
    }
    
    /*
     * plugin methods
     * get vitamins info
     */
    public function vitamins(){        
       return ['A','B','C','D','E','K','G','B1','B2','B3','B5','B7']; 
    }
    
    /*
     * plugin methods
     * get minerals info
     */
    public function minerals(){
       return ['calcium', 'chloride', 'magnesium', 'phosphorus', 'potassium', 'sodium', 'zinc'];  
    }
    

}
