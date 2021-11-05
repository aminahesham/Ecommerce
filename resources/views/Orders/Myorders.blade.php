@extends('master')
@section("content")

<div class="custom-product">
<div class="col-sm-10">

<div class="trending-wrapper">

<h3 style="color:orange;">Orders You Have Been Maked :</h3>

  @foreach($orders as $item)
  <div class="row searched-item cart-list-diveder">

  <div class="col-sm-4">
      <img class="trending-img" src="{{$item->photo}}" > 
    
      </a>
  </div>
  <div class="col-sm-3">
  
  <div class="">
  <h3 style='color:black'>Name : {{$item->name}}</h4>
  <h5 style='color:black'>Price : {{$item->price}}LE</h4>
  <h5 style='color:black'>Payment Method : {{$item->payment_method}}</h4>
  <h5 style='color:black'>Address : {{$item->address}}</h4>
  <h5 style='color:black'>Phone : {{$item->phone}}</h4>


</div>
</div>

  
  
  
  </div>

 
    
    @endforeach

    </div>
    </div>
    </div>

@endsection