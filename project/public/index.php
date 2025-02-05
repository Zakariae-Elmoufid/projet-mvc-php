<?php

require('../vendor/autoload.php');
use App\core\Router;

$router = new Router();

require_once __DIR__ . '/../app/config/routes.php';



$router->dispatch();

