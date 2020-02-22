<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('dashboard.products');
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
            $product = Products::where('id', $id)->first();

            $actions = ['update', 'updated'];
        } else {
            $product = new Products;

            $actions = ['add', 'added'];
        }

        if($product->save()) {
            session()->flash('flash', [
                'status' => 'ok',
                'message' => 'Product has been successfully ' . $action[1] . '.'
            ]);
        } else {
            session()->flash('flash', [
                'status' => 'fail',
                'message' => 'Failed to ' . $action[0] . ' product.'
            ]);
        }

        return redirect()->back();
    }
}
