<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ {
   Repositories\ShopRepository,
   Http\Requests\CartRequest,
   Models\Product,
   Models\Cart,
   Http\Requests\MailerRequest
};

class ShopController extends Controller
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
    
    public function index(Request $request)
    {
    	$products = $this->repository->funcSelect($request);
                // Ajax response
        if ($request->ajax()) {
            return response()->json([
                'table' => view("shop.brick-standard", ['products' => $products])->render(),
            ]);
        }
        // Submit response
        return view('shop.index', ['products' => $products]);
    }

   /**
     * Mailer for sending massage and contact.
     *
     * @return void
     */
        public function mailer(MailerRequest $request)
    {
        if(isset($request->validator) && $request->validator->fails()) //if you need validator->errors() in Controller
        {
            return json_encode($request->validator->errors());
        }

        return $this->repository->mailer($request);
    }

}
