@extends('layouts.template')
@section('content')
<div class="hero-wrap hero-bread" style="background-image: url('https://sun9-14.userapi.com/c856124/v856124578/224708/wGhSrX_ZSYo.jpg');">
  <div class="container">
    <div class="row no-gutters slider-text align-items-center justify-content-center">
      <div class="col-md-9 ftco-animate text-center">
        <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Products</span></p>
        <h1 class="mb-0 bread">Products</h1>
      </div>
    </div>
  </div>
</div>


    <section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center">

          <div class="col-md-10 mb-5 text-center">
    				<ul class="product-category">
    					<li><a href='/shop'>All</a></li>
    					<li><a href={{ route('sort',['category' => 1] )}}>Vegetables</a></li>
    					<li><a href={{ route('sort',['category' => 2] )}}>Fruits</a></li>
    					<li><a href={{ route('sort',['category' => 3] )}}>Juice</a></li>
    					<li><a href={{ route('sort',['category' => 4] )}}>Dried</a></li>
    				</ul>
    			</div>
    		</div>


    		<div class="row">
            @foreach($products as $product)
    				<div class="product">
    					<img class="img-fluid" src={{$product->photo}} height = '100px' width = '80px'alt="Colorlib Template">
    						<div class="overlay"></div>
    					<div class="text py-3 pb-4 px-3 text-center">
    						<h3><a href="#">{{$product->name}}</a></h3>
    						<div class="d-flex">
    							<div class="pricing">
		    						<p class="price"><span class="price-sale">$ {{$product->price}}</span></p>
		    					</div>
	    					</div>
	    					<div class="bottom-area d-flex px-3">
	    						<div class="m-auto d-flex">
	    							<a href="{{route('add',['id'=>$product->id])}}" class="buy-now d-flex justify-content-center align-items-center mx-1">
	    								<span class="iconify" data-icon="ion-ios-cart" data-inline="false"></span>
	    							</a>
    							</div>
    						</div>
    				</div>
    			</div>
          @endforeach
      {{$products->links()}}
    		</div>

@endsection
