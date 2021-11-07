
@extends('master')
@section("content")
<div class="custom-product">
<div class="col-sm-4">

</div>
<div class="col-sm-4">
<div class="trending-wrapper">
<h3 style="color:orange;">Search Result</h3>
  @foreach($products as $item)
  <div class="searched-item">
  <a href="details/{{$item['id']}}" style="text-decoration:none;">

      <img class="trending-img" src="{{$item['photo']}}" style="width:300px;height:300px;">
      <div class="">
      <h4 style='color:black'>- {{$item['name']}}</h4>
      <h4 style='color:black'>- {{$item['price']}} LE</h4>

      </div>
      </a>
    </div>
    @endforeach
    </div>

</div>
</div>
@endsection