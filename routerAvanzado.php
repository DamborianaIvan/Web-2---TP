<?php

require_once "Controllers\HomeController.php";
require_once "Controllers\ProductosPageController.php";
require_once "Controllers\LoginController.php";
require_once "RouterClass.php";

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']));
define('LOGIN', "Location: http://".$_SERVER["SERVER_NAME"].dirname($_SERVER["PHP_SELF"])."/login");
define('PRODUCTOSADMIN', "Location: http://".$_SERVER["SERVER_NAME"].dirname($_SERVER["PHP_SELF"])."/productosAdmin");
define('LOGOUT', "Location: http://".$_SERVER["SERVER_NAME"].dirname($_SERVER["PHP_SELF"])."/logout");



$r = new Router();


$r->addRoute("home", "GET", "ProductosPageController", "home");