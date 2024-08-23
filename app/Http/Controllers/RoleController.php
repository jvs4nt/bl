<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index()
    {

        $teste = 'Hello Index';
        return view('roles.index', compact('teste'));
    }

    public function create()
    {
        $teste = 'Hello Create';
        return view('roles.create', compact('teste'));
    }

}
