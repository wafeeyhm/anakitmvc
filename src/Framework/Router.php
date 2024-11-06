<?php

namespace Framework;

class Router{

    private array $routes = [];

    public function add(string $path, array $params): void
    {
        $this->routes[] = [
            "path" => $path,
            "params" => $params
        ];
    }

    public function match(string $path): array|bool
    {

        $pattern = "#^/[a-z]+/[a-z]+$#";

        if (preg_match($pattern, $path)){

            exit("Match");

        }

        foreach ($this->routes as $route) {
            # code...
            if ($route["path"] === $path) {
                # code...
                return $route["params"];
            }
        }

        return false;
    }

}