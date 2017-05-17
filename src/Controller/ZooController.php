<?php

namespace Drupal\drupalzoo\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\Controller\ControllerInterface;
use Drupal\Core\DependencyInjection\ContainerInjectionInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

class ZooController extends ControllerBase implements ContainerInjectionInterface {

    public static function create(ContainerInterface $container) {
        return new static($container->get('module_handler'));
    }

    public function zoo() {
        $build = array(
            '#type' => 'markup',
        );

        $manager = \Drupal::service('plugin.manager.drupalzoo');
        $plugins = $manager->getDefinitions();

        foreach ($plugins as $cat) {
            $instance = $manager->createInstance($cat['id']);
            $build[] = array(
                '#type' => 'markup',
                '#markup' => t('<p>Cat @name is @color color, weight @weight pounds.</p>', array('@name' => $instance->getName(), '@color' => $instance->getColor(), '@weight' => $instance->getWeight())),
            );
        }

        return $build;
    }
}