<?php

namespace App\Http\Controllers;

use App\Models\Checkout;
use App\Models\Template;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $db1 = Checkout::all()->count('id');
        $db2 = Template::select('nama_template');
        return view('homepage.content', compact('db1','db2'));
    }
}
