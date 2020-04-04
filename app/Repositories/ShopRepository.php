<?php

namespace App\Repositories;

use App\Models\ {
    Product,
    Cart,
    Message
};

class ShopRepository
{
    /**
     * The Model instance.
     *
     * @var \Illuminate\Database\Eloquent\Model
     */
    protected $model_product;
    protected $model_cart;
    protected $model_message;


    /**
     * Create a new ShopRepository instance.
     *
     * @param  \App\Models\Product $product
     */
    public function __construct(Product $product, Cart $cart, Message $message)
    {
        $this->model_product = $product;
        $this->model_cart = $cart;
        $this->model_message = $message;
    }

    /**
     * Create a query for Product.
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function funcSelect($request)
    {
        $query = $this->model_product
            ->select('id', 'name', 'price', 'image')
            //->where('top6', 1);
            ->orderBy('price', 'asc');

        if (isset($request->top6)) {
            $query->where('top6', $request->top6)
            ->where('name', 'like', '%' . $request->search . '%');
        } else {
            $query->where('top6', 1);
        }

        return $query->get();
    }

        public function funcSelectThis($id)
    {
        $query = $this->model_product
            ->select('id', 'name', 'price', 'image')
            ->where('id', $id);
        return $query->get();
    }

    public function funcSelectWomen($request)
    {
        $query = $this->model_product
            ->select('id', 'name', 'price', 'image')
            ->where('top6', 2);
        return $query->get();
    }


    public function funcSelectMen($request)
    {
        $query = $this->model_product
            ->select('id', 'name', 'price', 'image')
            ->where('top6', 3);
        return $query->get();
    }
    
    // tocart
        public function store($request)
    {
       // Cart::create($request->all());
       $this->model_cart->name = $request->name; //$_POST['name']
       $this->model_cart->price = $request->price;
       $this->model_cart->image = $request->image;
       $this->model_cart->save();
    }


            public function fromCart()
    {
        $query = $this->model_cart
            ->select('id', 'name', 'price', 'image');

        return $query->get();
    }

     /**
     * Remove all cart.
     *
     * @return void
     */
        public function clearall()
    {
        $this->model_cart->truncate();

    }

    /**
     * Remove one cart.
     *
     * @return void
     */
        public function clearone($request)
    {
        $cart = $this->model_cart->find($request->id);
        $cart->delete();
    }

       /**
     * Mailer for sending massage and contact.
     *
     * @return void
     */
        public function mailer($request)
    {
        //Message::create($request->all());
        $this->model_message->message = $request->message;
        $this->model_message->contact = $request->contact;
        $this->model_message->save();


        $title = 'Message from site - ' . date('d-m-Y H:i:s');
        $message = 'Message: <b>' . $request->message . '</b><br>';
        $message .= 'Contact: <b>' . $request->contact . '</b><br>';
        $client = new \GuzzleHttp\Client([
           'headers' => [
               //'Authorization' => '9267585bb333341dc049321d4e74398f',
               //'Content-Type' => 'application/json',
            ]
        ]);
        $response = $client->request('GET', 'http://api.25one.com.ua/api_mail.php?email_to=' . config('app.adminemail') . '&title=' . $title . '&message=' . $message,
         [
            //...
         ]);    
        //return json_decode($response->getBody()->getContents());  
        return response()->json([
                'answer' => $response->getBody()->getContents(),
            ]);
    }

}
