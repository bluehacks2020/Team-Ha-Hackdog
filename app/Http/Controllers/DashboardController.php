<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

use App\Product;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        return view('dashboard.index');
    }

    public function products()
    {
        $products = Auth::user()->asWhat->products();

        return view('dashboard.products', [
          'products' => $products
        ]);
    }

    public function addProduct()
    {
        return view('dashboard.add_product');
    }
    
    public function test()
    {
        abort('404');
    }

    /*
    * POST Requests
    */
    public function postSaveProduct(Request $request)
    {
        $id = $request->input('id', null);
        $name = $request->input('name');
        $description = $request->input('description');
        $unit_price = $request->input('unit_price');
        $in_stock = $request->input('in_stock');

        if($id !== null) {
            $product = Product::where('id', $id)->first();

            $actions = ['update', 'updated'];
        } else {
            $product = new Product;

            $actions = ['add', 'added'];
        }

        $product->seller_id = Auth::user()->asWhat->id;
        $product->name = $name;
        $product->description = $description;
        $product->unit_price = $unit_price;
        $product->in_stock = $in_stock;

        if($product->save()) {
            session()->flash('flash', [
                'status' => 'ok',
                'message' => 'Product has been successfully ' . $actions[1] . '.'
            ]);
        } else {
            session()->flash('flash', [
                'status' => 'fail',
                'message' => 'Failed to ' . $actions[0] . ' product.'
            ]);
        }

        return redirect()->back();
    }
}
