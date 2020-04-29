@extends('layouts.template')
@section('content')
<div class="hero-wrap hero-bread" style="background-image: url('https://sun9-55.userapi.com/c857224/v857224704/17ef53/WPhss7IvafE.jpg');">

</div>

  <div>
    <div>
      <div>
        <div class="cart-list">
          <table class="table">
            <thead class="thead-primary">
              <tr class="text-center">
                <th>&nbsp;</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
                <th>Product name</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Total</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($products as $product)
              <tr class="text-center">
                <td><a href="{{route('remove', ['id'=> $product['item']->id])}}"><span class="iconify" data-icon="ion-ios-close-circle-outline" data-inline="false" data-width="32" data-height="32"></span></a></td>
                <td><a href="{{route('add', ['id'=> $product['item']->id])}}"><span class="iconify" data-icon="ant-design:plus-circle-filled" data-inline="false" data-width="32" data-height="32"></span></a></td>

                <td class="image-prod"><div class="img" style="background-image:url({{$product['item']->photo}});"></div></td>

                <td class="product-name">
                  <h3>{{$product['item']->name}}</h3>
                </td>

                <td class="price">${{$product['item']->price}}</td>
                <td class="quantity">{{$product['qty']}}</td>

                <td class="total">${{$product['item']->price * $product['qty']}}</td>
              </tr><!-- END TR-->
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <div >
      <div>
        <div class="cart-total mb-3">
          <h3>Coupon Code</h3>
          <p>Enter your coupon code if you have one</p>
          <form action="{{URL::to('promo')}}" class="info" method="post">
            @csrf
            <div class="form-group">
              <label for="">Coupon code</label>
              <input type="text" class="form-control text-left px-3" placeholder="" name = 'code'>
              <button class="btn btn-primary py-3 px-4" type = 'submit'>Apply Coupon</button>
            </div>
          </form>
        </div>

      </div>
      <div>
        <div class="cart-total mb-3">
          <h3>Cart Totals</h3>
          <p class="d-flex">
            <span>Subtotal</span>
            <span>${{$totalprice}}</span>
          </p>
          <p class="d-flex">
            <span>Delivery</span>
            <span>${{count($products)*2}}</span>
          </p>
          <hr>
          <p class="d-flex total-price">
            <span>Total</span>
            <span>${{$totalprice + count($products)*2}}</span>
          </p>
        </div>
        <p><a href="checkout" class="btn btn-primary py-3 px-4">Proceed to Checkout</a></p>
      </div>
    </div>
  </div>
@endsection
