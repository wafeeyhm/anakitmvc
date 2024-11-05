<?php

namespace App\Controllers;

use App\Models\Content;

class Contents{

    public function index(){

        $content = new Content;

        $hero = $content->getHeroContent();

        require "views/contents_index.php";
    }

    public function show(){

        require "views/contents_show.php";

    }

}