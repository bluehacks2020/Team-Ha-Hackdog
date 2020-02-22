<?php

use App\Product;

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new Product;
        $product->seller_id = 1;
        $product->name = 'Handmade Necklace';
        $product->description = 'Lorem ipsum 1';
        $product->unit_price = 300.00;
        $product->in_stock = 13;
        $product->cover_image = 'handmade-necklace.jpg';
        $product->save();

        $product = new Product;
        $product->seller_id = 1;
        $product->name = 'Handmade Bag';
        $product->description = 'Lorem ipsum 2';
        $product->unit_price = 350.00;
        $product->in_stock = 23;
        $product->cover_image = 'handmade-bag.jpg';
        $product->save();

        $product = new Product;
        $product->seller_id = 1;
        $product->name = 'Bracelet';
        $product->description = 'Lorem ipsum 3';
        $product->unit_price = 330.00;
        $product->in_stock = 33;
        $product->cover_image = 'bracelet.jpg';
        $product->save();
    }
}
