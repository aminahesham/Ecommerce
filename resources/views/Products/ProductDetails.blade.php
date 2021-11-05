@extends('master')
@section("content")

<div class="container">
    <div class="row">
    <div class="col-sm-6">
    <br>
    <img class="detail-img" src="{{$products->photo}}">
    </div>
    <div class="col-sm-6">
    <br>
      <h2 style='color:black'>{{$products->name}}</h2>
      <h4 style='color:black'>Description : {{$products->description}}</h4>
      <h4 style='color:black'>Price : {{$products->price}}LE</h4>
      <br><br>
      <form method="POST" action="{{ url('addtocart') }}">
      @csrf
      <input type="hidden" name='product_id' value="{{$products->id}}">
      <button  class="btn btn-primary">Add To Cart</button>    
      </form>
      <br><br>
      </div>
      </div>
    </div>

@endsection