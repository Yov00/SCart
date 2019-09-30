<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Cart;
use Session;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('shop.index')->with(['products' => $products]);
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
      if(!Session::has('cart'))
      {
          return view('shop.shopping-cart',compact(['products' => null]));
      }
      $oldCart = Session::get('cart');
      $cart = new Cart($oldCart);
      return view('shop.shopping-cart',['products'=>$cart->items,'totalPrice'=>$cart->totalPrice]);

    }

    public function getCheckout()
    {
        if(!Session::has('cart'))
        {
            return view('shop.shopping-cart',compact(['products' => null]));
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
            'product'=>$product
        ]);
    }
}
