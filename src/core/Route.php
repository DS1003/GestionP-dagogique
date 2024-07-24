<?php

namespace Core;

class Route {
    public function handleRequest() {
        $controller = new \App\Controllers\HomeController();
        $controller->index();
    }
}
