<?php
include("core/function.php");


include("project/project_maker/controller.php");



$dotRouter = new uegok\router\DotRouter();

$map = [
    '/' => [
        'controller' => 'IndexController',
        'method' => 'indexMethod',
    ],
    '/animal/page/:id' => [
        'controller' => 'CatController',
        'method' => 'foodMethod',
    ],
];


$namespace = 'uegok\app\controllers\\';

$dotRouter->push($map, $namespace);
$dotRouter->run();
