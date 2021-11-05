@extends('master')
@section("content")

<?php
use App\Models\Product;
$allproducts = Product::paginate(8);

?>

<style>

  #link:hover, #link:active {
  text-decoration: none;

}
h4{
  color: #994d00;
  padding-left:15px;
}

a:hover {
  text-decoration: none;
}

div.gallery {
  margin: 10px;
  border: 2px solid #ccc;
  float: left;
  width: 250px;
}

div.gallery:hover {
  border: 2px solid orange;
  text-decoration:none;
}

div.gallery img {
  width: 100%;
  height: 300px;
}

div.desc {
  padding: 15px;
  text-align: center;
  color:black;
}
.pagination a {
  color: black;
  float: left;
  padding: 8px 16px;
  text-decoration: none;
  transition: background-color .3s;
  border: 1px solid #ddd;
}

.pagination a.active {
  background-color: #4CAF50;
  color: white;
  border: 1px solid #4CAF50;
}
.pagination a:hover:not(.active) {
  background-color:orange;
  color:white;

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
    <img class="slider-img" src="{{$item['photo']}}" >
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
<br><br>
 <!-- Products -->
 <div class="container">
 <div  style="margin-left:20px; border-color: #996666; border-radius: 15px 50px;" class="">

  @foreach($allproducts as $item)
  <div class="responsive">
  <div class="gallery">

  <a id ="link" href="{{ route('product.details', [$item->id]) }}">

      <img  src="{{$item['photo']}}"width="200" height="300" >
      <div class="">
      <div class="desc" >{{$item['name']}}</div>   
      <div class="desc" >{{$item['price']}} LE</div>

      </div>
      </a>
    </div>
    @endforeach
    </div>
</div>
</div>
</div>

<br>
<div class="pagination">
  <a href="{{url('/allproducts')}}"> Next ...</a>
  <br><br><br>

</div>
@endsection
