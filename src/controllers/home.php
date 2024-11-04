<?php

class Home{

    public function index(){

        require "src/models/content.php";

        $content = new Content;

        $hero = $content->getHeroContent();

        require "views/home_index.php";
    }

}