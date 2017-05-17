<?php

/**
 * @file
 * Contains \Drupal\drupalzoo\Annotation\Cat.
 */

namespace Drupal\drupalzoo\Annotation;

use Drupal\Component\Annotation\Plugin;

/**
 * Defines a cat item annotation object.
 *
 * Plugin Namespace: Plugin\drupalzoo\Cat
 *
 * @see \Drupal\drupalzoo\Plugin\DrupalZooManager
 * @see plugin_api
 *
 * @Annotation
 */
class Cat extends Plugin {

    /**
     * The plugin ID.
     *
     * @var string
     */
    public $id;

    /**
     * The name of the cat.
     *
     * @var \Drupal\Core\Annotation\Translation
     *
     * @ingroup plugin_translatable
     */
    public $name;

    /**
     * The weight of the cat.
     *
     * @var float
     */
    public $weight;

    /**
     * The color of the cat.
     *
     * @var string
     */
    public $color;

}