@extends('master')
@section('content')
<form method="POST" action="{{ route('register.post') }}" class="form">
    @csrf
    <div class="form-group">
      <label>User</label>
      <input name="name" type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter username">
    </div>
    <div class="form-group">
      <label>Email</label>
      <input name="email" type="email" class="form-control" placeholder="Email">
    </div>
    <div class="form-group">
      <label>Password</label>
      <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection