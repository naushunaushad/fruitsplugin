<?php

namespace Drupal\fruits\Plugin;

use Drupal\Core\Plugin\DefaultPluginManager;
use Drupal\Core\Cache\CacheBackendInterface;
use Drupal\Core\Extension\ModuleHandlerInterface;

/*
 * Provides FruitsPluginManager
 */

class FruitsPluginManager extends DefaultPluginManager {
    
    /*
     * @param $namespaces used for checking plugin implemenations
     * @param $cache_backend used for caching the plugin defenition
     * @param $module_hanlder used to invoke alter hooks
     */

    public function __construct(\Traversable $namespaces, CacheBackendInterface $cache_backend, ModuleHandlerInterface $module_handler) {
        parent::__construct('Plugin/Fruits', $namespaces, $module_handler, 'Drupal\fruits\Plugin\FruitsInterface', 'Drupal\fruits\Annotation\Fruits');
        //hook_fruits_fruits_info_later
        $this->alterInfo('fruits_fruits_info');
        $this->setCacheBackend($cache_backend, 'fruits_fruits_plugins');
    }    

}
