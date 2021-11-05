
<?php
use App\Http\Controllers\UserController;
use App\Models\Role; 

$roles=Role::all();

?>
@extends('dashboardmaster')
@section("content")
    <head>
        <meta charset="UTF-8">
        <title>E-comm</title>
        <link rel="shortcut icon" type="image/x-icon" href="https://pngimage.net/wp-content/uploads/2018/06/logo-panier-png-5.png" />

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    </head>

    <body>

  <style>
     #fr {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 99%;
  margin:4px;
  padding:8px;
}

#fr tr:nth-child(even){background-color: #f2f2f2;}

#fr tr:hover {background-color: #ddd;}

#fr th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
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
table, td, th {  
  border: 1px solid #ddd;
  text-align: left;
  padding:5px;
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

<h3 style="color:orange; font-family: Arial; margin:2px; padding:4px;"> Users Table :</h3> 


<br>

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


<table style="width:99%;margin:5px;">


<tr id="fr">
  <th scope="col">ID</th>
  <th scope="col">Name</th>
  <th scope="col">E-mail</th>
  <th scope="col">Roles</th>
  <th scope="col">Edit</th>
</tr>

  @foreach($users as $index=>$user)
  <tr>
  <th scope="row">{{$user->id}}</th>
    <td>{{$user -> name}}</td>
    <td>{{$user -> email}}</td>
    <td>
      @foreach($user->roles as $role)
      {{ $role ->display_name }}
     @endforeach
    </td>

    

    <td>

    <a href="{{url('getuser/'.$user->id)}}" class="btn btn-warning" style="background-color: #00e64d">Update</a>


    <a href="{{url('deleteuser/'.$user->id)}}" class="btn btn-warning" style="background-color:orange">Delete</a>


    </td>
  @endforeach
  </tr>
 
</table>

    </body>
@endsection