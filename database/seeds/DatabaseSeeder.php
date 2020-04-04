<?php

use Illuminate\Database\Seeder;
use App\Models\Product;
//use App\Models\Cart;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Product::create(
            [
                'name' => 'BELLE B&W',
                'price' => '187.95',
                'image' => 'bs1.jpg',
                'top6' => 1,
            ]
        ); 
        Product::create(
            [
                'name' => 'CLUBYORK',
                'price' => '145.95',
                'image' => 'bs2.jpg',
                'top6' => 1,
            ]
        );  
        Product::create(
            [
                'name' => 'ROADSTER',
                'price' => '220.95',
                'image' => 'bs3.jpg',
                'top6' => 1,
            ]
        );
        Product::create(
            [
                'name' => 'BLACKFLPS',
                'price' => '150.95',
                'image' => 'bs4.jpg',
                'top6' => 1,
            ]
        ); 
        Product::create(
            [
                'name' => 'RED CHECKS',
                'price' => '140.95',
                'image' => 'bs5.jpg',
                'top6' => 1,
            ]
        ); 
        Product::create(
            [
                'name' => 'NEW LOOK',
                'price' => '100.00',
                'image' => 'bs6.jpg',
                'top6' => 1,
            ]
        );  
        Product::create(
            [
                'name' => 'BELLE B&W',
                'price' => '187.95',
                'image' => 'bs1.jpg',
                'top6' => 0,
            ]
        ); 
        Product::create(
            [
                'name' => 'CLUBYORK',
                'price' => '145.95',
                'image' => 'bs2.jpg',
                'top6' => 0,
            ]
        );  
        Product::create(
            [
                'name' => 'ROADSTER',
                'price' => '220.95',
                'image' => 'bs3.jpg',
                'top6' => 0,
            ]
        );
        Product::create(
            [
                'name' => 'BLACKFLPS',
                'price' => '150.95',
                'image' => 'bs4.jpg',
                'top6' => 0,
            ]
        ); 
        Product::create(
            [
                'name' => 'RED CHECKS',
                'price' => '140.95',
                'image' => 'bs5.jpg',
                'top6' => 0,
            ]
        ); 
        Product::create(
            [
                'name' => 'NEW LOOK',
                'price' => '100.00',
                'image' => 'bs6.jpg',
                'top6' => 0,
            ]
        );
        //women products
         Product::create(
            [
                'name' => 'BELLE B&W',
                'price' => '187.95',
                'image' => 'c1.jpg',
                'top6' => 2,
            ]
        ); 
        Product::create(
            [
                'name' => 'CLUBYORK',
                'price' => '145.95',
                'image' => 'c2.jpg',
                'top6' => 2,
            ]
        );  
        Product::create(
            [
                'name' => 'ROADSTER',
                'price' => '220.95',
                'image' => 'c3.jpg',
                'top6' => 2,
            ]
        );
        Product::create(
            [
                'name' => 'BLACKFLPS',
                'price' => '150.95',
                'image' => 'c4.jpg',
                'top6' => 2,
            ]
        ); 
        Product::create(
            [
                'name' => 'RED CHECKS',
                'price' => '140.95',
                'image' => 'c5.jpg',
                'top6' => 2,
            ]
        ); 
        Product::create(
            [
                'name' => 'NEW LOOK',
                'price' => '100.00',
                'image' => 'c6.jpg',
                'top6' => 2,
            ]
        ); 
        //women products end 

        //men products
         Product::create(
            [
                'name' => 'BELLE B&W',
                'price' => '187.95',
                'image' => 'm1.jpg',
                'top6' => 3,
            ]
        ); 
        Product::create(
            [
                'name' => 'CLUBYORK',
                'price' => '145.95',
                'image' => 'm2.jpg',
                'top6' => 3,
            ]
        );  
        Product::create(
            [
                'name' => 'ROADSTER',
                'price' => '220.95',
                'image' => 'm3.jpg',
                'top6' => 3,
            ]
        );
        Product::create(
            [
                'name' => 'BLACKFLPS',
                'price' => '150.95',
                'image' => 'm4.jpg',
                'top6' => 3,
            ]
        ); 
        Product::create(
            [
                'name' => 'RED CHECKS',
                'price' => '140.95',
                'image' => 'm5.jpg',
                'top6' => 3,
            ]
        ); 
        Product::create(
            [
                'name' => 'NEW LOOK',
                'price' => '100.00',
                'image' => 'm6.jpg',
                'top6' => 3,
            ]
        );
        //men products end                     
    }
}
