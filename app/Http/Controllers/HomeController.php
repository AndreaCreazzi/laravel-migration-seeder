<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //Route Home
    public function index()
    {
        $trains = Train::all();
        return view('home', compact('trains'));
    }
}
