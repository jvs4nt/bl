<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $teste = 'Hello Index';
        return view('users.index', compact('teste'));
    }

    public function create()
    {
        $teste = 'Hello Create';
        return view('users.create', compact('teste'));
    }
}
