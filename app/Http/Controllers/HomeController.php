<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('homepage.content');
    }
    public function datadiri()
    {
        return view('create.datadiri');
    }
    public function pengalaman()
    {
        return view('create.pengalaman');
    }
    public function checkout()
    {
        return view('create.checkout');
    }
}
