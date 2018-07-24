<?php
ini_set('display_errors', true);
error_reporting(E_ALL);
session_start();

define('DS', DIRECTORY_SEPARATOR);
define('WWW_ROOT', __DIR__ . DS);

$routes = array(
  'home' => array(
    'controller' => 'Pages',
    'action' => 'index'
  ),
  'about' => array(
    'controller' => 'Pages',
    'action' => 'about'
  ),
  'detail' => array(
    'controller' => 'Projects',
    'action' => 'detail'
  ),
  'overview' => array(
    'controller' => 'Projects',
    'action' => 'overview'
  ),
  'error' => array(
    'controller' => 'Projects',
    'action' => 'error'
  )
);

if(empty($_GET['page'])) {
  $_GET['page'] = 'home';
}
if(empty($routes[$_GET['page']])) {
  header('Location: index.php?page=error');
  exit();
}

$route = $routes[$_GET['page']];
$controllerName = $route['controller'] . 'Controller';

require_once WWW_ROOT . 'controller' . DS . $controllerName . ".php";

$controllerObj = new $controllerName();
$controllerObj->route = $route;
$controllerObj->filter();
$controllerObj->render();
