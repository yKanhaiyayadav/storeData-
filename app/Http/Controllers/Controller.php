<?php

namespace App\Http\Controllers;

abstract class Controller
{
    public function create()
    {
        return "Hello Parent Controllers";
    }
}
