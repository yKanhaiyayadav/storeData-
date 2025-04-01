<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{
    public function register(Request $requset)
    {
        $requset->validate([
            'name' => 'required|string',
            'mobile' => 'required|number',
            'age' => 'required|string',
            'gender' => 'required|string',
            ''

        ]);
    }
}
