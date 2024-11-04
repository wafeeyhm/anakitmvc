<?php

require "src/controllers/contents.php";

$controller = new Contents;

$action = $_GET['action'];

if ($action === "index") {
  
  # code...
  $controller->index();

} elseif ($action === "show") {
  
  # code...
  $controller->show();

}
else{
  $controller->index();
}

