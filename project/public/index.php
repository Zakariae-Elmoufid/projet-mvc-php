<?php

require('../vendor/autoload.php');
use App\core\Router;

// Initialiser le Router
$router = new Router();

// Charger les routes
require_once __DIR__ . '/../app/config/routes.php';

// Exécuter le Router
$router->dispatch();
