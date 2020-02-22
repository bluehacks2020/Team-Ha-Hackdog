<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;

class PagesController extends Controller
{
    public function index()
    {
        if( request()->has('search')) {
            $search = request('search');
            return redirect('/products?' . 'search=' . $search);
        }

        return view('index');
    }

    public function partner()
    {
        return view('pages.partner');
    }

    public function help()
    {
        return view('pages.help');
    }

    public function checkout()
    {
        // session()->forget('cart');
        $cart = session()->get('cart', []);
        $data = [];

        if(count($cart) > 0) {
            foreach($cart as $cart_item) {
                $product = Product::where('id', $cart_item['product_id'])->first();

                if($product !== null) {
                    $product->added_quantity_to_cart = $cart_item['quantity'];
                }

                $data[] = $product;
            }
        }

        return view('products.checkout', [
            'cart' => collect($data)
        ]);
    }

    /*
    * POST Request
    */
    public function postAddToCart(Request $request)
    {
        $product_id = $request->input('product_id');

        $is_found = false;
        $is_added = false;

        $cart = session()->get('cart', []);

        if(count($cart) > 0) {
            foreach($cart as $index => $cart_item) {
                if($cart[$index]['product_id'] === $product_id) {
                    $cart[$index]['quantity'] += 1;
                    $is_added = true;
                    $is_found = true;

                    break;
                }
            }
        }

        if(!$is_found) {
            $cart[] = [
                'product_id' => (int) $product_id,
                'quantity' => 1
            ];

            $is_added = true;
        }

        session()->put('cart', $cart);

        if($is_added) {
            return response()->json([
                'status' => 'ok',
                'message' => 'Product has been added to cart.'
            ]);
        } else {
            return response()->json([
                'status' => 'fail',
                'message' => 'Failed to add product to cart.'
            ]);
        }
    }

    public function postUpdateCart(Request $request)
    {
        $product_id = $request->input('product_id');
        $quantity = $request->input('quantity');

        $is_updated = false;

        $cart = session()->get('cart', []);

        if(count($cart) > 0) {
            foreach($cart as $index => $cart_item) {
                if($cart[$index]['product_id'] === (int) $product_id) {
                    $cart[$index]['quantity'] = (int) $quantity;
                    $is_updated = true;

                    break;
                }
            }
        }

        session()->put('cart', $cart);

        if($is_updated) {
            return response()->json([
                'status' => 'ok',
                'message' => 'Cart has been updated.'
            ]);
        } else {
            return response()->json([
                'status' => 'fail',
                'message' => 'Failed to update cart.'
            ]);
        }
    }

    public function postComputePayment()
    {
    }
}
