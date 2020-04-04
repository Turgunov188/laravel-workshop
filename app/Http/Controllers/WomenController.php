<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ {
   Repositories\ShopRepository
};

class WomenController extends Controller
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

    public function women(Request $request)
    {
        $products = $this->repository->funcSelectWomen($request);
        return view('shop.women', compact('products'));
    }

}
