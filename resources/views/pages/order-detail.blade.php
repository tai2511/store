@extends('master')
@section("content")
@if(count($orders) > 0)
<table class="table table-striped table-cart">
  <thead>
      <tr>
      <th scope="col"></th>
      <th scope="col">Product</th>
      <th scope="col">Status</th>
      <th scope="col">Address</th>
      <th scope="col">Payment Method</th>
      </tr>
  </thead>
  <tbody>
      @foreach($orders as $item )
      <tr>
          <th scope="row">
            <img class="img-product-cart" src="{{$item->gallery}}" >
          </th>
          <td><p>{{$item->name}}</p></td>
          <td><p>{{$item->status}}</p></td>
          <td><p>{{$item->address}}</p></td>
          <td><p>{{$item->payment_method}}</p></td>
      </tr>
      @endforeach
  </tbody>
</table>
@else 
  <p>You have no orders</p>
@endif
@endsection 