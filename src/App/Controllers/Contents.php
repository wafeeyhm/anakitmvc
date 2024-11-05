<?php

namespace App\Controllers;

class Contents{

    public function index(){

        $content = new \App\Models\Content;

        $hero = $content->getHeroContent();

        require "views/contents_index.php";
    }

    public function show(){

        require "views/contents_show.php";

    }

}