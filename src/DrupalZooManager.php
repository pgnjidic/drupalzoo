<?php
/**
 * @file
 * Contains DrupalZooManager.
 */

namespace Drupal\drupalzoo;

use Drupal\Core\Plugin\DefaultPluginManager;
use Drupal\Core\Cache\CacheBackendInterface;
use Drupal\Core\Extension\ModuleHandlerInterface;

/**
 * Icecream plugin manager.
 */
class DrupalZooManager extends DefaultPluginManager {

    /**
     * Constructs an DrupalZooManager object.
     *
     * @param \Traversable $namespaces
     *   An object that implements \Traversable which contains the root paths
     *   keyed by the corresponding namespace to look for plugin implementations,
     * @param \Drupal\Core\Cache\CacheBackendInterface $cache_backend
     *   Cache backend instance to use.
     * @param \Drupal\Core\Extension\ModuleHandlerInterface $module_handler
     *   The module handler to invoke the alter hook with.
     */
    public function __construct(\Traversable $namespaces, CacheBackendInterface $cache_backend, ModuleHandlerInterface $module_handler) {
        parent::__construct('Plugin/Cat', $namespaces, $module_handler, 'Drupal\drupalzoo\CatInterface', 'Drupal\drupalzoo\Annotation\Cat');

        $this->alterInfo('drupalzoo_cats_info');
        $this->setCacheBackend($cache_backend, 'drupalzoo_cats');
    }
}