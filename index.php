<?php
if (isset ($_GET['path'])&& !empty($_GET['path'])){
    $path=$_GET['path'];
}
else {
    $path = 'dashbord';
}
include __DIR__.'/Route.php';
$route=new Route();
$route->addRoute('dashbord','Tasks','index');
$route->addRoute('Tasks/delete','Tasks','delete');
$route->addRoute('Tasks/add','Tasks','add');
$route->addRoute('signup','Authentication','doregister');
$route->addRoute('login/dologin','Authentication','dologin');
$route->addRoute('logout','Authentication','logout');
$route->addRoute('login','Authentication','login');
// var_dump($route->getRoute($path));
// die();
session_start();
include __DIR__.'/app/database/connection.php';
$route->run($path);
