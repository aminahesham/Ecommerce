

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
<head>
  <title>E-comm</title>
  <link rel="shortcut icon" type="image/x-icon" href="https://pngimage.net/wp-content/uploads/2018/06/logo-panier-png-5.png" />

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
</head>
    <body>

        <style>

body {
}
form{
    background-color:white;
    border: 3px solid white;
    border-radius: 10px;
    padding: 10px;
    margin: 10px;
    width: 300px;
}
fieldset {
 border-color: black;
}
#submit{
    width: 65px;
    height: 40px;
    margin-top: 10px;
    border-radius: 15px;
    color: black;
    font-weight:bold;
    background-color: #ff99bb;
    font-size: 14px;
    border: none;
}  
a{
    color: black;
    text-decoration:none;
    font-size:20px;
    padding: 15px 25px;
    display:inline;
    font-weight:bold;
}
a:hover {
  color: #ffffcc;
  background-color: transparent;
  text-decoration: none;
}
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color:  grey;
}
li {
  float: left;
}
li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}
li a:hover:not(.active) {
  background-color:#999966;
}
.active {
  background-color: #4CAF50;
}
#submit{
    width: 65px;
    height: 40px;
    margin-top: 10px;
    border-radius: 15px;
    color: black;
    font-weight:bold;
    background-color: #ff6600;
    font-size: 14px;
    border: none;
}
#submit:hover{ 
    font-size: 15px;
    border-radius: 15px;
    cursor: pointer;  
}
input[type="text"]{
    margin: 5px;
    padding: 5px;
}

</style> 

<nav class="navbar navbar-default">
  <div class="container-fluid">
    
    <ul class="nav navbar-nav">
      <li><a href="{{url('admin/showusers')}}">Users Table</a></li>
      <li><a href="{{url('admin/showorders')}}">Orders Table</a></li>
      <li><a href="{{url('admin/showproducts')}}">Products Table</a></li>
      <li><a href="{{url('admin/showadmins')}}">Admins Table</a></li>
      <li><a href="{{url('admin/dashboard')}}">Dashboard</a></li>
      <li><a href="{{url('admin/logout')}}"   style="color:orange; float:left;">Logout</a></li>

    </ul>
  </div>
</nav>

<div align="center">

<form id="form" method="POST" action="{{URL('admin/getproduct'. $products->id )}}" enctype="multipart/form-data">
@csrf
<fieldset>
<h1 style="color:orange; text-align: center;">Update Product</h1>


<div class="form-group">
  <label for="name_ar" style="color:black" ><b>Product Name</b></label><br>
  <input type="text" class="col-sm-2 col-form-label text-danger"  name="name" value="{{$products->name}}" maxlength="50" size="30" placeholder="Name"><br>
</div>      



<div class="form-group">
  <label for="price" style="color:black"><b>Product Price</b></label><br>
  <input type="text" id="price" name="price" value="{{$products->price}}" maxlength="50" size="30" placeholder="Price"><br>
</div>


<div class="form-group">
  <label for="details_en" style="color:black"><b>Description</b></label><br>
  <input type="text" id="description" name="description" value="{{$products->description}}" maxlength="50" size="30" placeholder="Description"><br>
</div>


<div class="form-group">
  <label for="photo" style="color:black" ><b>Add Photo</b></label><br>
  <input type="text" class="col-sm-2 col-form-label text-danger" id="gallery" name="gallery" value="{{$products->gallery}}" maxlength="50" size="30" multiple><br>
</div>

  <input type="submit" id="submit" value="save" formmethod="POST" formaction="{{URL('admin/updateproduct', $products->id )}}"><br>


</fieldset>
</form>
</div>

    </body>
</html>

