<?php

class Contents{

    public function index(){
        
        require "src/models/content.php";

        $content = new Content;

        $hero = $content->getHeroContent();

        require "views/contents_index.php";
    }

}