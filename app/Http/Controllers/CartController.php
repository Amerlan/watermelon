<?php

namespace App\Http\Controllers;
use App\Cart;
use App\Products;
use Session;
use App\Promos;
use App\Orders;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth');
    }

    public function index()
    {
      if (!Session::has('cart')){
      return view('/cart', ['products'=>null]);
      }

      $oldcart = Session::get('cart');
      $cart = new cart($oldcart);

      return view('/cart',['products' => $cart->items, 'totalprice' =>$cart->totalprice]);
    }

    public function promo(Request $request)
    {
      if (!Session::has('cart')){
      return view('/cart', ['products'=>null]);
      }

      $oldcart = Session::get('cart');
      $cart = new cart($oldcart);

      if (Promos::where('promo',$request->code)->exists()){
        $disc = Promos::where('promo',$request->code)->first('discount');
        return view('/checkout', ['products'=>$cart->items, 'totalprice' => $cart->totalprice, 'disc'=>$disc->discount]);
      }
      return view('/checkout', ['products'=>$cart->items, 'totalprice' => $cart->totalprice, 'disc'=>0]);
    }


      public function add(Request $request, $id)
      {
        $item = Products::find($id);
        $oldcart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new cart($oldcart);
        $cart->add($item, $item->id);
        $request->session()->put('cart',$cart);

        return redirect()->back();
      }

      public function remove(Request $request, $id)
      {
        $item = Products::find($id);
        $oldcart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new cart($oldcart);
        $cart->delete($item, $item->id);

        $request->session()->put('cart',$cart);
        return redirect()->back();
      }

      public function checkout()
      {
        if (!Session::has('cart')){
          return view('cart', ['products'=>null]);
        }

        $oldcart = Session::get('cart');
        $cart = new cart($oldcart);

        return view('/checkout',['products' => $cart->items, 'totalprice' =>$cart->totalprice, 'disc' =>0]);
      }

      public function to_order(Request $request)
      {
        if (!Session::has('cart')){
          return view('cart', ['products'=>null]);
        }

        $oldcart = Session::get('cart');
        $cart = new cart($oldcart);

        $table = new Orders;
        $table->name = $request->first;
        $table->lastname = $request->last;
        $table->address = $request->address;
        $table->email = $request->email;
        $table->bill = $request->bill;
        $table->save();
        Session::forget('cart');
        return redirect('home');

      }
}
