@extends('master')
@section('content')
<ul id="product-page" class="row">
    @foreach( $data as $product )
        <li class="col-12 col-md-4 col-lg-3">
            <a href="{{ route('product.show.get',['id' => $product['id']]) }}" class="">
                <img src="{{ $product['gallery'] }}" class="img-fluid">
                <p class="text-center text-secondary">{{ $product['name'] }}</p>
                <p class="text-center text-secondary">{{ $product['price'] }}</p>
            </a>
        </li>
    @endforeach
</ul>
@endsection

