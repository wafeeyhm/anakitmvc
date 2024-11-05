<?php

$path = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);

$segments = explode("/", $path);

print_r($segments);
exit;

$action = $_GET['action'];
$controller = $_GET['controller'];

require "src/controllers/$controller.php";

$controller_object = new $controller;

$controller_object->$action();