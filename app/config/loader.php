<?php

use Phalcon\Loader;

$loader = new Loader();

/**
 * Register Namespaces
 */
$loader->registerNamespaces([
    'Foundation\Models' => APP_PATH . '/common/models/',
    'Foundation'        => APP_PATH . '/common/library/',
]);

/**
 * Register module classes
 */
$loader->registerClasses([
    'Foundation\Frontend\Module' => APP_PATH . '/modules/frontend/Module.php',
    'Foundation\Api\Module' => APP_PATH . '/modules/api/Module.php',
    'Foundation\Cli\Module'      => APP_PATH . '/modules/cli/Module.php'
]);

$loader->register();
