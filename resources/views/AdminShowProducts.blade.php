
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>E-comm</title>
        
  <title>E-comm</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    </head>

    <body>

  <style>

body {
background-color:white;
}
form{
    background-color:white;
    border: 3px solid white;
    border-radius: 10px;
    padding: 8px;
    margin: 8px;
    width: 300px;
}
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
  padding: 5px;
  margin-top:5px;
}
#fr{
    color:orange;
    font-size:20px;
    font-weight:bold;
    background-color:white;
}
a{
    color: black;
    text-decoration:none;
    font-size:15px;
    padding: 15px 25px;
    display:inline;
    font-weight:bold;
}
a:hover {
  color: #ffffcc;
  background-color: transparent;
  text-decoration: none;
}

.active {
  background-color: #4CAF50;
}
a.button{
   cursor:pointer; 
   background-color:green;
   margin:10px;
   padding:10px;
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

<h2 style="color:orange;">Products Table :</h2> 

<br>
<a href="{{url('admin/addproduct')}}"  class="btn btn-success" style="background-color:grey;">Add Product</a>
<br><br>

@if(Session::has('productdeleted'))
            <div align="center" class="alert alert-success" role="alert" style="color:white; font-size:30px">
                {{ Session::get('productdeleted') }}
            </div>
@endif


@if(Session::has('notfound'))
            <div align="center" class="alert alert-success" role="alert" style="color:yellow; font-size:30px" >
                {{ Session::get('notfound') }}
            </div>
@endif


<table style="width:100%" padding="5px">


<tr id="fr">
  <th scope="col">ID</th>
  <th scope="col">Name</th>
  <th scope="col">Price</th>
  <th scope="col">category</th>
  <th scope="col">Description</th>
  <th scope="col">Photo</th>
  <th scope="col">Created At</th>
  <th scope="col">Updated At</th>
  <th scope="col">Edit</th>

</tr>

  @foreach($products as $item)
  <tr>
  <th scope="row">{{$item->id}}</th>
    <td>{{$item -> name}}</td>
    <td>{{$item -> price}}</td>
    <td>{{$item -> category}}</td>
    <td>{{$item -> description}}</td>
    <td><img class="slider-img" src="{{$item['gallery']}}"style="width:150px;height:150px;" ></td>
    <td>{{$item -> created_at}}</td>
    <td>{{$item -> updated_at}}</td>


    <td>
    <a href="{{url('update/'.$item->id)}}"  class="btn btn-success">Update</a>
    <a href="{{url('admin/deleteproduct/'.$item->id)}}" class="btn btn-warning" style="background-color:#cc0000">Delete</a>
    </td>
@endforeach
  </tr>
 
</table>

    </body>
</html>