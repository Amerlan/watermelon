@extends('layouts.template')
@section('content')
<div class="hero-wrap hero-bread" style="background-image: url('https://sun9-33.userapi.com/c857220/v857220297/17a4f8/vqudeXC93Ps.jpg');">
</div>

<section class="ftco-section">
  <div class="container">
    <div class="row justify-content-center">
      <div>

        <form action="{{URL::to('ordered')}}" class="billing-form" method = 'post'>
          @csrf
          <h3 class="mb-4 billing-heading">Billing Details</h3>
          <div class="row align-items-end">
            <div class="col-md-6">
              <div class="form-group">
                <label for="firstname">Firt Name</label>
                <input type="text" class="form-control" placeholder="{{Auth::user()->name}}" name = 'first'>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="lastname">Last Name</label>
                <input type="text" class="form-control" placeholder="" name = 'last'>
              </div>
            </div>
            <div class="w-100"></div>
            <div class="w-100"></div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="streetaddress">Street Address</label>
                <input name = 'address' type="text" class="form-control" placeholder="House number and street name">
              </div>
            </div>
            <div class="w-100"></div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="emailaddress">Email Address</label>
                <input name = 'email' type="text" class="form-control" placeholder="{{Auth::user()->email}}">
              </div>
            </div>
          </div>
        <!-- END -->
      </div>
      <div class="col-xl-5">
        <div class="row mt-5 pt-3">
          <div class="col-md-12 d-flex mb-5">
            <div class="cart-detail cart-total p-3 p-md-4">
              <h3 class="billing-heading mb-4">Cart Total</h3>
              <p class="d-flex">
                <span>Subtotal</span>
                <span>${{$totalprice}}</span>
              </p>
              <p class="d-flex">
                <span>Delivery</span>
                <span>${{count($products)*2}}</span>
              </p>
              <p class="d-flex">
                <span>Discount</span>
                <span>${{$totalprice*$disc}}</span>
              </p>
              <hr>
              <p class="d-flex total-price">
                <span>Total</span>
                <span>${{$totalprice*(1-$disc)}}</span>
                <input type = "hidden" name = "bill" value = {{$totalprice*(1-$disc)}} />
              </p>
            </div>
          </div>
          <div class="col-md-12">
            <div class="cart-detail p-3 p-md-4">
              <button class="btn btn-primary py-3 px-4"type = 'submit'>Place an order</button>
            </div>
          </div>
          </form>
        </div>
      </div> <!-- .col-md-8 -->
    </div>
  </div>
</section>
@endsection
