<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //Route Home
    public function index()
    {
        return view('home');
    }
}
