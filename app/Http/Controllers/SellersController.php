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

        if( request()->has('search')) {
            $search = request('search');
            $products = Product::join('sellers', 'sellers.id', '=', 'products.seller_id')
                ->where('sellers.name', $seller->name)
                ->where(function($q) use ($search) {
                    $q->where('products.name', 'like', '%'.$search.'%')
                    ->orWhere('products.description', 'like', '%'.$search.'%')
                    ->orWhere('products.category', 'like', '%'.$search.'%');
                })
                ->paginate(9, array('products.id', 'products.name', 'products.cover_image', 'products.description', 'products.unit_price', 'products.category'));
            $products->appends(['search' => $search]);
        } else {
            $products = Product::where('seller_id', $id)->paginate(9);
        }

        return view('sellers.show')
                ->with('seller', $seller)
                ->with('products', $products)
                ->with('search', $search);
    }
}
