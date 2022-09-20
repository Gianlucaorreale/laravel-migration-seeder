<?php

namespace App\Http\Controllers;

use App\Models\Train;

class PageController extends Controller
{
    public function index()
    {
        return view('home');
    }
}
