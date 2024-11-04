<?php

require "model.php";

$model = new Model;

$hero = $model->getHeroContent();

require "view.php";

?>