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
        $tp1 = Template::where('nama_template','template-baru')->count();
        $tp2 = Template::where('nama_template','template-baru')->count();
        $tp3 = Template::where('nama_template','template-baru')->count();
        return view('homepage.content', compact('db1','tp1','tp2', 'tp3'));
    }
}
