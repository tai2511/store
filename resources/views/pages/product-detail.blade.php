@extends('master')
@section('content')
    @foreach($product_detail as $product)

    @endforeach
    <section class="mb-5 product-id">
        <div class="row">
          <div class="col-md-6 mb-4 mb-md-0">
              <div class="row product-gallery mx-1">
                  <div class="col-12 mb-0">
                      <figure class="view overlay rounded z-depth-1 main-img">
                          <a href="{{$product_detail['gallery'] }}"
                          data-size="710x823">
                          <img src="{{$product_detail['gallery'] }}"
                              class="img-fluid z-depth-1">
                          </a>
                      </figure>
                  </div>
              </div>
          </div>
          <div class="col-md-6">
            <h5>{{$product_detail['name']}}</h5>
            <p><span class="mr-1"><strong>${{$product_detail['price']}}</strong></span></p>
            <p class="pt-1">{{$product_detail['description']}}</p>
            <p class="pt-1">Category: {{$product_detail['category']}}</p>
            <hr>
            <form method="POST" action="{{ route('product.addToCart.post') }}">
                @csrf
                <input type="hidden" name="product_id" value={{ $product_detail['id'] }}>
                <button type="submit" class="btn btn-primary btn-md mr-1 mb-2 add-to-cart">Add to cart</button>
            </form>
          </div>
        </div>
      
      </section>
@endsection