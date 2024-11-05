<?php

$path = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);

require "src/router.php";

$router = new Router;

$router->add("/home/index", ["controller" => "home","action" => "index"]);
$router->add("/contents/index", ["controller" => "contents","action" => "index"]);
$router->add("/", ["controller" => "home","action" => "index"]);

$params = $router->match($path);

$action = $params["action"];
$controller = $params["controller"];

require "src/controllers/$controller.php";

$controller_object = new $controller;

$controller_object->$action();