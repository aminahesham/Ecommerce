<?php
use App\Http\Controllers\ProductController;

$total=0;
if(Session::has('user')){
  $total=ProductController::cartitem();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" style="color:orange;text-shadow: 2px 2px 4px #000000;" >E-Commerce</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="{{ url('home') }}">Home</a></li>
      <li><a href="{{ url('products') }}">Products</a></li>
      <li><a href="{{ url('myorders') }}">My Orders</a></li>
    </ul>
    <form class="navbar-form navbar-left" action="search">
    @csrf
      <div class="form-group">
        <input type="text" name='query' class="form-control" style="border-radius:25px;" placeholder="Search" name="search">
      </div>
      <button type="submit" class="btn btn-default" style="border-radius:25px;">Search</button>
    </form>
    <ul class="nav navbar-nav navbar-right">
    <li><a href="cartlist" style="color:white;">cart({{$total}})<img src="https://pngimg.com/uploads/shopping_cart/shopping_cart_PNG42.png" margin="2px" height="30px" width="40px"/></a>

      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown"  style="color:orange;">{{Session::get('user')['name']}}
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
        </ul>
      </li>
      <li><a href="{{ url('logout') }}" style="color:red;">LogOut</a></li>
    </ul>
  </div>
  </div>
</nav>

</div>

</body>
</html>
