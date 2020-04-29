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


  public function populate(Request $req)
  {
    $table = new Products;
    $table->name = $req->name;
    $table->category = $req->categ;
    $table->price = $req->price;
    $table->photo= $req->url;
    $table->save();
    return redirect()->back();
  }

  public function showform()
  {
    return view('productinsert');
  }
}
