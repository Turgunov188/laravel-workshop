<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use 

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
        // $users = DB::select('select * from users where active = ?', [1]);
        $products = DB::select('select name from products');
        return view('home', compact('products'));
    }
}
