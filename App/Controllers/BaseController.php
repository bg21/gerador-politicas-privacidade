<?php

namespace App\Controllers;

class BaseController
{
    protected function render($view, $data = [])
    {
        extract($data);
        $viewsPath = \Flight::get('flight.views.path');
        require_once "{$viewsPath}/{$view}.php";
    }
}
