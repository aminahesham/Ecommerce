

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
 border-color: orange;
 border-radius: 15px 50px; 

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
input{
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

<form id="form" method="POST" action="{{URL('admin/getuser'. $users->id )}}" enctype="multipart/form-data">
@csrf
<fieldset>
<h1 style="color:orange; text-align: center;">Update User</h1>

<div class="form-group">
  <label for="id" style="color:black;font-size:20px" ><b> Id :</b></label><br><br>
  <input type="text" class="col-sm-2 col-form-label text-danger"  name="id" value="{{$users->id}}" maxlength="50" size="30" placeholder=""><br>
</div>


<div class="form-group">
  <label for="name" style="color:black;font-size:20px" ><b> Name :</b></label><br><br>
  <input type="text" class="col-sm-2 col-form-label text-danger"  name="name" value="{{$users->name}}" maxlength="50" size="30" placeholder=""><br>
</div>      

<br>

<div class="form-group">
  <label for="email" style="color:black;font-size:20px"><b> Email :</b></label><br><br>
  <input type="email" class="col-sm-2 col-form-label text-danger" name="email" value="{{$users->email}}" maxlength="50" size="30" placeholder=""><br><br>
</div>

<br>
<div class="form-group">
<label for="role" style="color:black;font-size:20px"><b> Role :</b></label><br><br>

<div class="checkbox">
    <label>
        <input type="checkbox" name="roles[]" value="seller_user" {{$users->hasRole('seller_user')? 'checked' : ''}}>Seller User
    </label><br>
</div>

<div class="checkbox">
    <label>
        <input type="checkbox" name="roles[]" value="normal_user" {{$users->hasRole('normal_user')? 'checked' : ''}}>Normal User
    </label><br>
</div>

<div class="checkbox">
    <label>
        <input type="checkbox" name="roles[]" value="super_admin" {{$users->hasRole('super_admin')? 'checked' : ''}}>Super Admin
    </label><br>
</div>

</div>


  <input type="submit" id="submit" value="save" formmethod="POST" formaction="{{URL('admin/updateuser', $users->id )}}"><br>


</fieldset>
</form>
</div>

    </body>
</html>

