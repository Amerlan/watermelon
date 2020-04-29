<div class="py-1 bg-primary">
  <div class="container">
    <div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
      <div class="col-lg-12 d-block">
        <div class="row d-flex">
          <div class="col-md pr-4 d-flex topper align-items-center">
            <div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
            @guest
            <ul>
                <span><a class="text" href="{{ route('login') }}">{{ __('Login') }}</a></span>
              </ul>
                @if (Route::has('register'))
                  <ul>    <span>   <a class="text" href="{{ route('register') }}">{{ __('Register') }}</a></span></ul>
                @endif
            @else
            <ul>
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                      {{ Auth::user()->name }}
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                  </ul>
            @endguest
          </div>
          <div class="col-md pr-4 d-flex topper align-items-center">
            <div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
            <a href = 'mailto:kazmelon@gmail.com'><span class="text">kazmelon@gmail.com</span> </a>
          </div>
          <div class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right">
            <span class="text">3-5 Business days delivery &amp; Free Returns</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
  <div class="container">
    <a class="navbar-brand" href="/">Watermelon</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="oi oi-menu"></span> Menu
    </button>

    <div class="collapse navbar-collapse" id="ftco-nav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item"><a href="/" class="nav-link">Home</a></li>
        <li class="nav-item"><a href="/shop" class="nav-link">Shop</a></li>
        <li class="nav-item"><a href="/cart" class="nav-link">Cart</a></li>
        <li class="nav-item"><a href="/checkout" class="nav-link">Checkout</a></li>
        <li class="nav-item cta cta-colored">
          <a href="cart">
            <span class="glyphicon glyphicon-shopping-cart"></span>[ {{ Session::has('cart') ? Session::get('cart')->totalqty : '0'}} ]
          </a>
        </li>

      </ul>
    </div>
  </div>
</nav>
