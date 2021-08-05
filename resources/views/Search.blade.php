@extends('master')
@section("content")
<div class="custom-product">
<div class="col-sm-4">
<a href="#">Filter</a>

</div>
<div class="col-sm-4">
<div class="trending-wrapper">
<h3>Search Result</h3>
  @foreach($product as $item)
  <div class="searched-item">
  <a href="details/{{$item['id']}}">

      <img class="trending-img" src="{{$item['gallery']}}" >
      <div class="">
      <h4 style='color:black'>{{$item['name']}}</h4>
      <h4 style='color:black'>{{$item['price']}}LE</h4>

      </div>
      </a>
    </div>
    @endforeach
    </div>

</div>
</div>
@endsection