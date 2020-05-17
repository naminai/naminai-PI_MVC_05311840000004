<?php
 
use \App\Core\Router;
 
require_once '../app/Bootstrap.php';
require_once '../vendor/autoload.php';
require_once '../app/core/Constants.php';
 
// Instansiasi objek $router
$router = new Router();

if(isset($_GET['url'])) {
    $url = $_GET['url'];
} else {
    $url = '/';
}
 
$router->dispatch($url);