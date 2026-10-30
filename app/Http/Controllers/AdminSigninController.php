<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminSigninController extends Controller
{
    public function index()
    {
        return view('admin.signin');
    }
}
