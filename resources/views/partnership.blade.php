@extends('layouts.template')
@section('content')
<section class="ftco-section ftco-no-pb ftco-no-pt bg-light">
  <div class="container">
    <div class="row">
      <div class="col-md-5 p-md-5 img img-2 d-flex justify-content-center align-items-center" style="background-image: url('https://sun9-69.userapi.com/c857124/v857124799/168070/nDxIjSStZ4E.jpg');">
      </div>
      <div class="col-md-7 py-5 wrap-about pb-md-5">
        <div class="heading-section-bold mb-4 mt-md-5">
          <div class="ml-md-0">
            <h2 class="mb-4">Welcome {{Auth::user()->name}}</h2>
          </div>
        </div>
        <div class="pb-md-5">
          <p>We are happy you to be a part of our Galaxy! Enjoy for free and get extra bonuses for attracting new customers</p>
          <p>You have invited {{Auth::user()->cust_invited}} people</p>
          <h4>Your discount is {{Auth::user()->discount}}</h4>
          <h3>Share your promocode with others! <br>{{Auth::user()->personal_promo}}</h3>
          <p>NOTICE. This promocode is not for YOU.</p>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
