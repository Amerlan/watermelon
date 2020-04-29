<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use App\Cart;
use App\Products;
use Session;
use Illuminate\Http\Request;

class ShopController extends Controller
{

  public function index()
  {
    $products = Products::paginate(5);
    return view('shop', compact('products'));

  }

  public function show(Request $req, $category)
  {
      $products = Products::where('category',$category)->paginate(5);
      return view('shop', compact('products'));
  }

  public function getCart()
  {
      if (!Session::has('cart')){
        return view('cart', ['products'=>null]);
      }

      $oldcart = Session::get('cart');
      $cart = new cart($oldcart);
      return view('cart',['products' => $cart->items, 'totalprice' =>$cart->totalprice]);
  }
}
