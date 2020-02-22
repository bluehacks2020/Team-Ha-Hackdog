<?php

namespace App\Http\Controllers;

use App\Seller;
use App\Product;

use Illuminate\Http\Request;

class SellersController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $search = null;

        $seller = Seller::find($id);
        $products = Product::where('seller_id', $id)->paginate(9);

        return view('sellers.show')
                ->with('seller', $seller)
                ->with('products', $products)
                ->with('search', $search);
    }
}
