<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\ShopRepository;
use App\Models\product;

class SingleController extends Controller
{   
    /**
     * The Controller instance.
     *
     * @var \Illuminate\Database\Eloquent\Model
     */
    protected $repository;

    /**
     * Create a new controller instance.
     *o
     * @return void
     */
    public function __construct(ShopRepository $repository)
    //public function __construct()
    {
        //$this->middleware('auth');
        $this->repository = $repository;
    }
    
    public function single($id, Product $model_product)
    {
        //$product = $this->repository->funcSelectThis($id);
        $product = $model_product->find($id);
        return view('shop.single', compact('product'));
    }


}
