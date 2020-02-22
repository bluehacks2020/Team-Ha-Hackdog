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
        $product->category = '';
        $product->save();

        $product = new Product;
        $product->seller_id = 1;
        $product->name = 'Handmade Bag';
        $product->description = 'Lorem ipsum 2';
        $product->unit_price = 350.00;
        $product->in_stock = 23;
        $product->cover_image = 'handmade-bag.jpg';
        $product->category = '';
        $product->save();

        $product = new Product;
        $product->seller_id = 1;
        $product->name = 'Bracelet';
        $product->description = 'Lorem ipsum 3';
        $product->unit_price = 330.00;
        $product->in_stock = 33;
        $product->cover_image = 'bracelet.jpg';
        $product->category = '';
        $product->save();

        $product = new Product;
        $product->seller_id = 1;
        $product->name = 'Bag';
        $product->description = 'lorem impsum 5';
        $product->unit_price = 150.00;
        $product->in_stock = 25;
        $product->cover_image = 'bag.jpg';
        $product->category = '';
        $product->save();

        $product = new Product;
        $product->seller_id = 1;
        $product->name = 'Fan';
        $product->description = 'lorem impsum 15';
        $product->unit_price = 50.00;
        $product->in_stock = 125;
        $product->cover_image = 'fan.jpg';
        $product->category = '';
        $product->save();

        $product = new Product;
        $product->seller_id = 1;
        $product->name = 'Handicraft';
        $product->description = 'lorem impsum 10';
        $product->unit_price = 50.00;
        $product->in_stock = 125;
        $product->cover_image = 'handicraft.jpg';
        $product->category = '';
        $product->save();

        $product = new Product;
        $product->seller_id = 1;
        $product->name = 'Chocolate';
        $product->description = 'lorem impsum 10';
        $product->unit_price = 50.00;
        $product->in_stock = 125;
        $product->cover_image = 'chocolates.jpg';
        $product->category = '';
        $product->save();

        $product = new Product;
        $product->seller_id = 1;
        $product->name = 'Coffee';
        $product->description = 'lorem impsum 10';
        $product->unit_price = 50.00;
        $product->in_stock = 125;
        $product->cover_image = 'coffee.jpg';
        $product->category = '';
        $product->save();

        $product = new Product;
        $product->seller_id = 1;
        $product->name = 'Cashew butter';
        $product->description = 'lorem impsum 10';
        $product->unit_price = 50.00;
        $product->in_stock = 125;
        $product->cover_image = 'cashew-butter.jpg';
        $product->category = '';
        $product->save();

        $product = new Product;
        $product->seller_id = 1;
        $product->name = 'Hand Woven Fabric';
        $product->description = 'lorem impsum 10';
        $product->unit_price = 50.00;
        $product->in_stock = 125;
        $product->cover_image = 'handwoven-fabric.jpg';
        $product->category = '';
        $product->save();

        $product = new Product;
        $product->seller_id = 1;
        $product->name = 'Picnic Basket';
        $product->description = 'lorem impsum 10';
        $product->unit_price = 500.00;
        $product->in_stock = 20;
        $product->cover_image = 'picnic basket.jpg';
        $product->category = '';
        $product->save();

        $product = new Product;
        $product->seller_id = 1;
        $product->name = 'Pouch';
        $product->description = 'lorem impsum 10';
        $product->unit_price = 30.00;
        $product->in_stock = 155;
        $product->cover_image = 'pouch.jpg';
        $product->category = '';
        $product->save();

        $product = new Product;
        $product->seller_id = 1;
        $product->name = 'School Bag';
        $product->description = 'lorem impsum 17';
        $product->unit_price = 250.00;
        $product->in_stock = 45;
        $product->cover_image = 'school-bag.jpg';
        $product->category = '';
        $product->save();

        $product = new Product;
        $product->seller_id = 1;
        $product->name = 'Slippers';
        $product->description = 'lorem impsum 8';
        $product->unit_price = 50.00;
        $product->in_stock = 133;
        $product->cover_image = 'slippers.jpg';
        $product->category = '';
        $product->save();

        $product = new Product;
        $product->seller_id = 1;
        $product->name = 'hat';
        $product->description = 'lorem impsum 23';
        $product->unit_price = 55.00;
        $product->in_stock = 25;
        $product->cover_image = 'hat.jpg';
        $product->category = '';
        $product->save();
    }
}
