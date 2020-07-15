<?php

namespace App\Http\Controllers;

class WelcomeController extends Controller
{
    public function welcome()
    {
        return view('welcome');
    }
}
