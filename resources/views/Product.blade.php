@extends('master')
@section("content")

<style>
  #link:hover, #link:active {
  text-decoration: none;

}
h4{
  color: #994d00;
  padding-left:15px;
}
</style>
<h2 style="text-align:center;color:orange;text-shadow: 2px 2px 4px #000000;padding-bottom:20px;">products </h2>


<div class="custom-product">
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
  
  @foreach($products as $item)
    <div class="item {{$item['id']==1?'active':''}}">
    <a href="details/{{$item['id']}}">
    <img class="slider-img" src="{{$item['gallery']}}" >
      <div class="carousel-caption slider-text">
      <h3 style='color:black'>{{$item['name']}}</h3>
      <p style='color:black'>{{$item['description']}}</p>
      <h4 style='color:black'>{{$item['price']}}LE</h4>
      </div>
    </a>
    </div>
   @endforeach
</div>
  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

 <!-- Products -->
<div class="trending-wrapper">

  @foreach($products as $item)
  <div class="trending-items">
  <a id ="link" href="{{ route('product.details', [$item->id]) }}">

      <img class="trending-img" src="{{$item['gallery']}}" >
      <div class="">
      <h4 >{{$item['name']}}</h4><br>
      <h4 >{{$item['price']}} LE</h4><br>

      </div>
      </a>
    </div>
    @endforeach
    </div>
</div>
@endsection
