<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function show()
    {
        $title = "Welkom op de page";

                return view('home', compact(var_name: 'title'));
    }
}


