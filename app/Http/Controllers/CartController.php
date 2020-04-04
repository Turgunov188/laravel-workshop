<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ {
   Repositories\ShopRepository,
   Http\Requests\CartRequest,
   Models\Product,
   Models\Cart,
   Http\Requests\MailnerRequest
};


class CartController extends Controller
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

        public function cart(Request $request)
    {
        $carts = $this->repository->fromCart();

                // Ajax response
        if ($request->ajax()) {
            return response()->json([
                'table' => view("shop.cart-standard", ['carts' => $carts])->render(),
            ]);
        }

        return view('shop.cart', compact('carts'));
    }


        // tocart
        public function tocart(CartRequest $request)
    {
        $this->repository->store($request);

        return redirect(route('cart')); //(url('/cart'))

    }

    /**
     * Remove all cart.
     *
     * @return void
     */
        public function clearall(Request $request, Cart $model_cart)
    {
        //$this->repository->clearall();
        $model_cart->truncate();

        // Ajax response
        if ($request->ajax()) {
            return response()->json();
        }

        return redirect(route('cart')); //(url('/cart')) //submit
    }

     /**
     * Remove one cart.
     *
     * @return void
     */
        public function clearone(Request $request)
    {
        $this->repository->clearone($request); //$request->id
    }
}
