<?php

namespace Drupal\fruits\Plugin;

use Drupal\Component\Plugin\PluginInspectionInterface;

/*
 * Provides FruitsInterface
 */

interface FruitsInterface extends PluginInspectionInterface {
    public function vitamins();
    public function minerals();    
}
