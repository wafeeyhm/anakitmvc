<?php

namespace App\Controllers;

class Home{

    public function index(){

        $content = new \App\Models\Content;

        $hero = $content->getHeroContent();

        require "views/home_index.php";
    }

}