<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use Storage;

use App\Order;
use App\Product;
use App\Seller;

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
        $products = Product::where('seller_id', Auth::user()->asWhat->id)->get();

        return view('dashboard.products', [
          'products' => $products
        ]);
    }

    public function addProduct()
    {
        return view('dashboard.add_product');
    }

    public function orders()
    {
        $orders = Order::where('logistic_id', Auth::user()->asWhat->id)->get();

        return view('dashboard.orders', [
          'orders' => $orders
        ]);
    }

    public function sellers()
    {
        $sellers = Seller::where('logistic_id', Auth::user()->asWhat->id)->get();

        return view('dashboard.sellers', [
          'sellers' => $sellers
        ]);
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
        $category = $request->input('category', '');
        $in_stock = $request->input('in_stock');

        $uploaded_image = Storage::disk('public')->putFile('products', $request->file('image'));

        if($uploaded_image !== false) {
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
          $product->category = $category;
          $product->cover_image = basename($uploaded_image);

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
        } else {
            session()->flash('flash', [
                'status' => 'fail',
                'message' => 'Failed to upload product cover image.'
            ]);
        }

        return redirect()->back();
    }

    public function postDeleteProduct(Request $request)
    {
        $id = $request->input('id');

        $product = Product::where('id', $id)->delete();

        if($product !== null) {
            session()->flash('flash', [
                'status' => 'ok',
                'message' => 'Product has been successfully deleted.'
            ]);
        } else {
            session()->flash('flash', [
                'status' => 'fail',
                'message' => 'Failed to delete product.'
            ]);
        }

        return redirect()->back();
    }

    public function postUpdateOrderStatus(Request $request)
    {
        $id = $request->input('id');
        $status = $request->input('status');

        $product = Product::where('id', $id)->first();

        $product->delivery_status = $status;

        if($product->save()) {
            session()->flash('flash', [
                'status' => 'ok',
                'message' => 'Delivery status has been successfully updated.'
            ]);
        } else {
            session()->flash('flash', [
                'status' => 'fail',
                'message' => 'Failed to update delivery status.'
            ]);
        }

        return redirect()->back();
    }
}
