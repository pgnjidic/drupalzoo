<?php

/**
 * @file
 * Provides Drupal\drupalzoo\CatInterface
 */

namespace Drupal\drupalzoo;

use Drupal\Component\Plugin\PluginInspectionInterface;

/**
 * Defines an interface for Drupal Zoo cats plugins.
 */
interface CatInterface extends PluginInspectionInterface {

    /**
     * Return the name of the cat.
     *
     * @return string
     */
    public function getName();

    /**
     * Return the weight of the cat.
     *
     * @return float
     */
    public function getWeight();

    /**
     * Return the color of the cat.
     *
     * @return string
     */
    public function getColor();

}