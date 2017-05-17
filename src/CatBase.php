<?php
/**
 * @file
 * Provides Drupal\drupalzoo\CatBase.
 */

namespace Drupal\drupalzoo;

use Drupal\Component\Plugin\PluginBase;

class CatBase extends PluginBase implements CatInterface {

    public function getName() {
        return $this->pluginDefinition['name'];
    }

    public function getWeight() {
        return $this->pluginDefinition['weight'];
    }

    public function getColor() {
        return $this->pluginDefinition['color'];
    }
}