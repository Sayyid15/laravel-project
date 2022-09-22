<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CultureController extends Controller
{
    public function show()
    {
        $title = "Welkom op de page";
        $text = "nieuw onderdeel";

        return view('culture', compact(var_name: 'title',var_names: 'text'));
    }
}
