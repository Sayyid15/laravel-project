<?php

namespace App\Http\Controllers;

use App\Models\Culture;
use App\Models\User;
use Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $cultures = Culture::where('user_id', '=',   Auth::id())->get();

        return view('users.home', [
            'cultures' => $cultures

        ]);
    }



}
