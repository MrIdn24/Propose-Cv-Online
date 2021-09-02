<?php

namespace App\Http\Controllers;

use App\Models\Checkout;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $db = Checkout::all()->count('id');
        return view('homepage.content', compact('db'));
    }
    public function about()
    {
        return view('homepage.about');
        // return view('create.checkout');
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
        return view('create.chtemplate');
    }
    public function chose_template()
    {
        return view('create.chose-template');
    }
}
