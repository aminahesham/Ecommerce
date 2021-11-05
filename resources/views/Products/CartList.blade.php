@extends('master')
@section("content")

<div class="custom-product">
<div class="col-sm-10">

<div class="trending-wrapper">

<h3 style="color:orange;">Products You Have Been Chosen :</h3>

  @foreach($products as $item)
  <div class="row searched-item cart-list-diveder">

  <div class="col-sm-4">
      <img class="trending-img" src="{{$item->photo}}" > 
    
      </a>
  </div>
  <div class="col-sm-3">
  
  <div class="">
  <h4 style='color:black'>{{$item->name}}</h4>
  <h4 style='color:black'>{{$item->price}}LE</h4>

</div>
</div>


  <div class="col-sm-3">
  <a href= "cartdelete/{{$item->cart_id}}" class="btn btn-warning">Delete</a>
  </div>
  
  </div>

 
    
    @endforeach
    <a href="confirmorder" class="btn btn-success">Confirm Order</a>

    </div>
    </div>
    </div>

@endsection