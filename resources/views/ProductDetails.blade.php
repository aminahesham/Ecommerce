@extends('master')
@section("content")

<div class="container">
  
    <div class="row">
    <div class="col-sm-6">
    <br>
    <img class="detail-img" src="{{$product->gallery}}">
    </div>
    <div class="col-sm-6">
    <br>
      <h2 style='color:black'>{{$product->name}}</h2>
      <h4 style='color:black'>Description : {{$product->description}}</h4>
      <h4 style='color:black'>Price : {{$product->price}}LE</h4>
      <br><br>
      <form method="POST" action="{{ url('addtocart') }}">
      @csrf
      <input type="hidden" name='product_id' value="{{$product->id}}">
      <button  class="btn btn-primary">Add To Cart</button>    
      </form>
      <br><br>
      </div>
      </div>
    </div>

@endsection