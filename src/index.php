<?php
session_start();


ini_set('display_errors', true);
error_reporting(E_ALL);

$routes = array(
  'home' => array(
    'controller' => 'Materials',
    'action' => 'index'
  ),
  'about' => array(
    'controller' => 'Materials',
    'action' => 'about'
  ),
  'kits' => array(
    'controller' => 'Materials',
    'action' => 'kits'
  ),
  'tutorial' => array(
    'controller' => 'Materials',
    'action' => 'tutorial'
  ),
  'form' => array(
    'controller' => 'Orders',
    'action' => 'form'
  )


);

if(empty($_GET['page'])) {
  $_GET['page'] = 'home';
}
if(empty($routes[$_GET['page']])) {
  header('Location: index.php');
  exit();
}

// basic .env file parsing
if (file_exists("../.env")) {
  $variables = parse_ini_file("../.env", true);
  foreach ($variables as $key => $value) {
    putenv("$key=$value");
  }
}

$route = $routes[$_GET['page']];
$controllerName = $route['controller'] . 'Controller';

require_once __DIR__ . '/controller/' . $controllerName . ".php";

$controllerObj = new $controllerName();
$controllerObj->route = $route;
$controllerObj->filter();
$controllerObj->render();
