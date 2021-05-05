@extends('master')
@section('content')
@if(count($products) > 0)
<table class="table table-striped table-cart">
    <thead>
        <tr>
        <th scope="col"></th>
        <th scope="col"></th>
        <th scope="col">Product</th>
        <th scope="col">Price($)</th>
        </tr>
    </thead>
    <tbody>
        @foreach($products as $product )
        <tr class="cart-item">
            <th scope="row">
                <a href="{{ route('cart.destroy.get',['id' => $product->cart_id]) }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                    <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                    </svg>
                </a>
            </th>
            <td><img class="img-product-cart" 
                    src="{{ $product->gallery}}" >
            </td>
            <td><h6>{{ $product->name }}</h6></td>
            <td><span>{{ $product->price }}</span></td>
        </tr>
        @endforeach
    </tbody>
</table>
<a href="{{ route('cart.checkout.get') }}" class="btn btn-primary">Check out</a>
@else
<p>Your cart is empty</p>
@endif
@endsection