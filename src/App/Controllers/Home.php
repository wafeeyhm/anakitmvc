<?php

namespace App\Controllers;

use App\Models\Content;

class Home{

    public function index(){

        $content = new Content;

        $hero = $content->getHeroContent();

        require "views/home_index.php";
    }

}