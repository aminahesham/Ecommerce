

@extends('master')
@section("content")
<style>

    
div.gallery {
  margin: 10px;
  border: 2px solid #ccc;
  float: left;
  width: 250px;
}

div.gallery:hover {
  border: 2px solid orange;
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

</style>

<div  style="margin:10px; border-color: #996666; border-radius: 15px 50px;" class="">

  @foreach($products as $item)
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
@endsection