<?php

class Controller{

    public function index(){
        
        require "model.php";

        $model = new Model;

        $hero = $model->getHeroContent();

        require "view.php";
    }

}