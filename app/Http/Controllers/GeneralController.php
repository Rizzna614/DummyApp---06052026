<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GeneralController extends Controller
{
    public function sayHello (Request $request)
    {
        $name = $request->name;

        return "Hello ". $name. "!";
    }
}
