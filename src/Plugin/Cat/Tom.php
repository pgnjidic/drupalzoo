<?php

/**
 * @file
 * Contains \Drupal\drupalzoo\Plugin\Cat\Hoze.
 */

namespace Drupal\drupalzoo\Plugin\Cat;

use Drupal\drupalzoo\CatBase;

/**
 * Provides a 'Tom' cat.
 *
 * @Cat(
 *   id = "tom",
 *   name = "Tom",
 *   weight = 4.02,
 *   color = @Translation("Blue")
 * )
 */
class Tom extends CatBase {}