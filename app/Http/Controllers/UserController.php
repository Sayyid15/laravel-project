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
        $users = User::all();

        return view('users.index', [
            'users' => $users

        ]);
    }
    public function show($id)
    {


        $user = User::find($id);

        if ($user->id !== Auth::user()->id && Auth::user()->role !== 'admin') {
            return view('users.index', compact());
        }

        return view('users.show', [
            'culture' => $user
        ]);
    }





}
