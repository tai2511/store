<?php
  use App\Http\Controllers\ProductController;
  // use Session;
  $cart_item = ProductController::cartItem();
?>

<nav class="navbar navbar-expand-lg navbar-light bg-light mb-5">
  <a class="navbar-brand" href="{{route('home.get') }}">Demo</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto ml-auto">
      <li class="nav-item ">
        <a class="nav-link" href="{{route('product.index.get') }}">Shop </a>
      </li>
    @if(!Session::has('user'))
      <li class="nav-item ">
        <a class="nav-link" href="{{route('register.get') }}">Register </a>
      </li>
    @else
      <li class="nav-item ">
        <a class="nav-link" href="{{route('cart.checkout.get') }}">Check out </a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="{{route('cart.order_detail.get') }}">Order detail </a>
      </li>
    @endif
    </ul>
    
    <a class="d-flex cart mr-4 " href="{{route('cart.index.get') }}">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart3" viewBox="0 0 16 16">
        <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
      </svg>
      <span class="cart-total">{{ $cart_item }}</span>
    </a>
    @if(Session::has('user'))
    <div class="dropdown mr-5">
      <a class="dropdown-toggle" data-toggle="dropdown" href="#">{{Session::get('user')['name']}}
      <span class="caret"></span></a>
      <ul class="dropdown-menu">
        <li style="display:flex"><a style="margin: 0 auto" href="{{route('logout.get')}}">Logout</a></li>
      </ul>
    </div>
    @else
    <div><a href="{{route('login.get')}}">Login</a></div>
    @endif
  </div>
</nav>