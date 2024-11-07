<?php

namespace App\Controllers;

use App\Models\Content;
use Framework\Viewer;

class Contents{

    public function index(){

        $content = new Content;

        $hero = $content->getHeroContent();

        $viewer = new Viewer;

        echo $viewer->render("contents_index.php", [
            "hero" => $hero
        ]);

    }

    public function show(){

        require "views/contents_show.php";

    }

}