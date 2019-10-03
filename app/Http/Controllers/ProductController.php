<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Cart;
use App\Category;
use Session;
use Stripe\Stripe;
use Stripe\Charge;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        $categories = Category::all();
        return view('shop.index')->with([
            'products' => $products,
            'categories'=> $categories,
            ]);

    }

    public function getAddToCart(Request $request, $id)
    {
        $product = Product::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($product, $product->id);
        $request->session()->put('cart', $cart);
        return back();
    }


    public function getCart()
    {
        if (!Session::has('cart')) {
            return view('shop.shopping-cart', compact(['products' => null]));
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        return view('shop.shopping-cart', ['products' => $cart->items, 'totalPrice' => $cart->totalPrice]);
    }

    public function getCheckout()
    {
        if (!Session::has('cart')) {
            return view('shop.shopping-cart', compact(['products' => null]));
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);

        $total = $cart->totalPrice;
        return view('shop.checkout')->with([
            'total' => $total,
        ]);
    }

    public function productShow($id)
    {
        $product = Product::find($id);

        return view('shop.show-product')->with([
            'product' => $product
        ]);
    }



    public function postCheckout(Request $request)
    {
     
        if (!Session::has('cart')) {
            return redirect()->route('shop.shopping-cart');
        }

        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);

        Stripe::setApiKey('sk_test_Uxf8DJYYOgCMIazGMX1dtHAU00M9jKzcxg');

        try {
            Charge::create(array(
                "amount" => $cart->totalPrice * 100, //stripe uses cents as default that's why we multiply by 100
                "currency" => "usd",
                "source" => $request->input('stripeToken'),
                "description" => "Test Charge"
            ));
        }catch (\Exception $e) {
            return redirect()->route('checkout')->with('error', $e->getMessage());
        }
        Session::forget('cart');
        return redirect()->route('shop.index')->with('success', 'Successfully purcased products!');
    }
}
