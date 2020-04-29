@extends('layouts.template')
@section('content')
<div class="hero-wrap hero-bread" style="background-image: url('https://sun9-33.userapi.com/c857220/v857220297/17a4f8/vqudeXC93Ps.jpg');">
</div>

<section class="ftco-section">
  <div class="container">
    <div class="row justify-content-center">
      <div>

        <form action="{{URL::to('prodins')}}" class="billing-form" method = 'post'>
          @csrf
          <h3 class="mb-4 billing-heading">Product Details</h3>
          <div class="row align-items-end">
            <div class="col-md-6">
              <div class="form-group">
                <label for="firstname">Product name</label>
                <input type="text" class="form-control" placeholder="Apple" name = 'name'>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="lastname">Category</label>
                <input type="text" class="form-control" placeholder="" name = 'categ'>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="streetaddress">Price</label>
                <input name = 'price' type="text" class="form-control" placeholder="price in $">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="emailaddress">Product photo url</label>
                <input name = 'url' type="text" class="form-control" placeholder="http:\\...">
              </div>
            </div>
            <button class="btn btn-primary py-3 px-4"type = 'submit'>ADD</button>
          </div>
          </form>
        <!-- END -->
      </div>
    </div>
  </div>
</section>
@endsection
