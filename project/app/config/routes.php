<?php
require_once __DIR__ . '/../../vendor/autoload.php';
use App\core\Router;

$router->add('GET', '/', 'HomeController@index');
$router->add('GET', 'article', 'ArticleController@show');
$router->add('GET', 'admin/dashboard', 'DashboardController@index');
$router->add('GET', 'admin/users', 'UserController@listUsers');
