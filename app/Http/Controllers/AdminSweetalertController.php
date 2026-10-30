<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminSweetalertController extends Controller
{
    public function index()
    {
        return view('admin.sweetalert');
    }
}
