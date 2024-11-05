<?php

$path = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);
exit($path);

$action = $_GET['action'];
$controller = $_GET['controller'];

require "src/controllers/$controller.php";

$controller_object = new $controller;

$controller_object->$action();