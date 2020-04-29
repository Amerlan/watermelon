<?php

namespace App\Http\Controllers;
use App\Products;
use App\Promos;
use App\Subs;
use App\Mail\confirmation;
use Mail;
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
    $promo->discount = rand(5, 55)/100;
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
}
