@extends('layouts.template')
@section('content')

<div style = 'text-align: center;'>
  <span>Taste Our NEW Products</span>
  <h2 >Our Products</h2>
  <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
</div>
@foreach($products as $product)
<div class="product">
  <img class="img-fluid" src="{{$product->photo}}" height = '200px' width = '180px'alt="Colorlib Template">
    <div class="overlay"></div>
  <div class="text py-3 pb-4 px-3 text-center">
    <h3>{{$product->name}}</h3>
    <div class="d-flex">
      <div class="pricing">
        <p class="price"><span class="price-sale">$ {{$product->price}}</span></p>
      </div>
    </div>
    <div class="bottom-area d-flex px-3">
      <div class="m-auto d-flex">
        <a href="{{ route('add',['id' => $product->id] )}}" class="buy-now d-flex justify-content-center align-items-center mx-1">
          <span class="iconify" data-icon="ion-ios-cart" data-inline="false"></span>
        </a>
      </div>
    </div>
</div>
</div>
@endforeach
@endsection
