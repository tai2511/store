@extends('master')
@section("content")
<div class="custom-product">
     <div class="col-sm-10">
        <table class="table">
            <tbody>
              <tr>
                <td>Amount</td>
              <td>$ {{$total}}</td>
              </tr>
              <tr>
                <td>Tax</td>
                <td>$ 0</td>
              </tr>
              <tr>
                <td>Delivery </td>
                <td>$ 10</td>
              </tr>
              <tr>
                <td>Total Amount</td>
              <td>$ {{$total+10}}</td>
              </tr>
            </tbody>
          </table>
          <div>
            <form action="{{ route('cart.order.post') }}" method="POST" >
              @csrf
                <div class="form-group">
                  <textarea name="address" placeholder="Your address ..." class="form-control address" ></textarea>
                </div>
                <div class="form-group">
                  <label for="pwd">Payment Method</label> <br> 
                  <input type="radio" value="COD" name="payment" checked> <span>Cash on delivery</span> <br> <br>
                </div>
                <button type="submit" class="btn btn-primary order">Order Now</button>
              </form>
          </div>
     </div>
</div>
@endsection 