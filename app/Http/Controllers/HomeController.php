<?php

namespace App\Http\Controllers;
use App\Products;
use Illuminate\Http\Request;

class HomeController extends Controller
{
  public function index()
  { $products = Products::all()->take(5);
    return view('home', compact('products'));
  }
}
