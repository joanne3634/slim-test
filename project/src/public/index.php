<?php
// use \Psr\Http\Message\ServerRequestInterface as Request;
// use \Psr\Http\Message\ResponseInterface as Response;

require __DIR__ . '/../vendor/autoload.php';
spl_autoload_register(function ($classname) {
    require ("../classes/" . $classname . ".php");
});
session_start();

// Instantiate the app
$settings = require __DIR__ . '/../function/settings.php';

$app = new \Slim\App($settings);

// Set up dependencies
require __DIR__ . '/../function/dependencies.php';

// Register middleware
require __DIR__ . '/../function/middleware.php';

// Register routes
require __DIR__ . '/../function/routes.php';


$app->run();
