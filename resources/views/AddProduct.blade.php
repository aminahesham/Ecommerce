@extends('dashboardmaster')
@section("content")
<head>
  <title>E-comm</title>
  <link rel="shortcut icon" type="image/x-icon" href="https://pngimage.net/wp-content/uploads/2018/06/logo-panier-png-5.png" />
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
</head>
    <body>

        <style>
#form{
    background-color:orange;
    border: 3px solid white;
    border-radius: 10px;
    padding: 10px;
    margin: 10px;
    width: 350px;
}
fieldset {
 border-color: orange;
 border-radius: 15px 50px; 

}
#submit{
    width: 65px;
    height: 40px;
    margin-top: 10px;
    border-radius: 15px;
    color: white;
    font-weight:bold;
    background-color: #04AA6D;
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


<div align="center">

<form id="form" method="POST" action="{{URL('addproduct')}}" enctype="multipart/form-data">
@csrf
<fieldset id="fieldset">
<h1 style="color:white; text-align: center;">Add Product</h1>


<div class="form-group">
  <label for="name_ar" style="color:black" ><b>Product Name</b></label><br>
  <input type="text"  name="name" value="" maxlength="50" size="30" placeholder="Name"><br>
</div>      



<div class="form-group">
  <label for="price" style="color:black"><b>Product Price</b></label><br>
  <input type="text" id="price" name="price" value="" maxlength="50" size="30" placeholder="Price"><br>
</div>


<div class="form-group">
  <label for="details_en" style="color:black"><b>Description</b></label><br>
  <input type="text" id="description" name="description" value="" maxlength="50" size="30" placeholder="Description"><br>
</div>


<div class="form-group">
  <label for="photo" style="color:black" ><b>Add Photo</b></label><br>
  <input type="text"  id="gallery" name="gallery" maxlength="50" size="30" multiple><br>
</div>

  <input type="submit" id="submit" value="save" formmethod="POST" formaction="{{url('insertproduct')}}"><br>


</fieldset>
</form>
</div>

    </body>
</html>

@endsection