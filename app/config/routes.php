<?php

$router = $di->get("router");
// var_dump($application->getModules());
// echo "<br>";
foreach ($application->getModules() as $key => $module) {
    // echo $module["className"] . " ";
    // echo "<br>";
    $namespace = str_replace('Module','Controllers', $module["className"]);
    // echo $key . " " . $namespace . " ";
    // echo "<br>";
    // echo $key;
    $router->add('/'.$key.'/:params', [
        'namespace' => $namespace,
        'module' => $key,
        'controller' => 'index',
        'action' => 'index',
        'params' => 1
    ])->setName($key);
    $router->add('/'.$key.'/:controller/:params', [
        'namespace' => $namespace,
        'module' => $key,
        'controller' => 1,
        'action' => 'index',
        'params' => 2
    ]);
    $router->add('/'.$key.'/:controller/:action/:params', [
        'namespace' => $namespace,
        'module' => $key,
        'controller' => 1,
        'action' => 2,
        'params' => 3
    ]);
}
// die;

$di->set("router", $router);
