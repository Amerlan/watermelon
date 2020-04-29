<?php

namespace App\Http\Controllers;
use App\Cart;
use App\Products;
use Session;
use App\User;
use App\Promos;
use App\Orders;
use Illuminate\Support\Facades\Auth;
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
        return redirect('/shop');
      }

      $oldcart = Session::get('cart');
      $cart = new cart($oldcart);

      if (Promos::where(['promo' =>$request->code, 'status' => 1])->exists()){
        $disc = Promos::where('promo',$request->code)->first('discount');

        return view('/checkout', ['products'=>$cart->items, 'totalprice' => $cart->totalprice, 'disc'=>$disc->discount, 'promo' => $request->code]);
      }


      if ((Auth::user()->personal_promo != $request->code) && (User::where(['personal_promo' =>$request->code])->exists())) {

        $disc = 0.05;
        User::where('personal_promo', $request->code)->increment('cust_invited');
        return view('/checkout', ['products'=>$cart->items, 'totalprice' => $cart->totalprice, 'disc'=>$disc, 'promo' => '']);
      }

      $disc = User::where('id', Auth::user()->id)->get('cust_invited')[0]->cust_invited/100;
      User::where('id', Auth::user()->id)->update(['discount' => $disc]);

      return view('/checkout', ['products'=>$cart->items, 'totalprice' => $cart->totalprice, 'disc'=>$disc, 'promo' => '']);
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

        $oldcart = Session::get('cart');
        $cart = new cart($oldcart);

        $disc = User::where('id', Auth::user()->id)->get('cust_invited')[0]->cust_invited/100;
        User::where('id', Auth::user()->id)->update(['discount' => $disc]);

        return view('/checkout',['products'=>$cart->items,'totalprice' =>$cart->totalprice, 'disc' =>$disc, 'promo' => '']);
      }

      public function to_order(Request $request)
      {

        $table = new Orders;
        try {
          $table->name = $request->first;
          $table->lastname = $request->last;
          $table->address = $request->address;
          $table->email = $request->email;
          $table->bill = $request->bill;
          $table->save();
        } catch (\Exception $e) {
          return redirect('/cart');
        }

        Promos::where('promo', $request->promo)->update(['status' => 0]);
        Session::forget('cart');
        return redirect('home');

      }

}
