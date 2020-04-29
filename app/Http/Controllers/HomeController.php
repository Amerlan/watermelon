<?php

namespace App\Http\Controllers;
use App\Products;
use App\Promos;
use App\Subs;
use App\User;
use App\Mail\confirmation;
use Mail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
  public function index()
  { $products = Products::all()->take(5);
    return view('home', compact('products'));
  }

  private function genpromo()
  {
    $chars = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $res = "";
    for ($i = 0; $i < 7; $i++) {
        $res .= $chars[mt_rand(0, strlen($chars)-1)];
    }
    return $res;
  }

  public function subs(Request $req)
  {
    $code = $this->genpromo();

    $promo = new Promos;
    $promo->promo = $code;
    $promo->discount = rand(5, 35)/100;
    $promo->save();

    try {
      $subs = new Subs;
      $subs->email = $req->email;
      $subs->save();
      Mail::to($req->email)->send(new confirmation($code));
    } catch (\Exception $e) {
        return redirect()->back();
    }
    return redirect()->back();
  }

  public function partner()
  {
    if (strlen(Auth::user()->personal_promo)<1){
      User::where('id', Auth::user()->id)->update(['personal_promo' => $this->genpromo()]);
    }
    $disc = User::where('id', Auth::user()->id)->get('cust_invited')[0]->cust_invited/100;
    User::where('id', Auth::user()->id)->update(['discount' => $disc]);
    return view('/partnership');
  }
}
