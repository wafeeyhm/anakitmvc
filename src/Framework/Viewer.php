<?php

namespace Framework;

class Viewer
{
    public function render(string $template, array $data = [])
    {
        require "views/$template";
    }
}