<?php

namespace App\Http\Controllers;
use App\ {
   Repositories\ShopRepository
};

use Illuminate\Http\Request;

class MenController extends Controller
{
	/**
     * The ShopRepository instance.
     *
     * @var \App\Repositories\ShopRepository
     */
    protected $repository;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(ShopRepository $repository)
    {
        // $this->middleware('auth');
        $this->repository = $repository;
    }

    
    public function men(Request $request)
    {
    	$products = $this->repository->funcSelectMen($request);
        return view('shop.men', compact('products'));
    }
}
