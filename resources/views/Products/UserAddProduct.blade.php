
@extends('master')
@section("content")


        <style>
body{
  background-color:#e68a00;
}

#form{
    background-color:white;
    border: 3px solid white;
    border-radius: 10px;
    padding: 10px;
    margin: 10px;
    width: 400px;
    height: 600px;
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
    font-size:15px;
    padding: 15px 25px;
    display:inline;
}
a:hover {
  color: #ffffcc;
  background-color: transparent;
  text-decoration: none;
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



<div align="center">

<form id="form" method="POST" action="{{URL('admin/addproduct')}}" enctype="multipart/form-data">
@csrf
<fieldset id="fieldset">
<h1 style="color:orange; text-align: center;">Add Product</h1>


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
  <input type="text"  id="photo" name="photo" maxlength="300" size="30" multiple><br>
</div>

  <input type="submit" id="submit" value="save" formmethod="POST" formaction="{{url('Uinsertproduct')}}"><br>


</fieldset>
</form>
</div>


@endsection