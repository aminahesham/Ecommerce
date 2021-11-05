

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
input{
    margin: 5px;
    padding: 5px;
}

</style> 



<div align="center">

<form id="form" method="POST" action="{{URL('admin/getuser'. $users->id )}}" enctype="multipart/form-data">
@csrf
<fieldset>
<h3 style="color:white; text-align: center;">Update User</h3>

<div class="form-group">
  <label for="id" style="color:black;font-size:20px" ><b> Id :</b></label><br>
  <input type="text" class=""  name="id" value="{{$users->id}}" maxlength="50" size="30" placeholder=""><br>
</div>


<div class="form-group">
  <label for="name" style="color:black;font-size:20px" ><b> Name :</b></label><br>
  <input type="text" class=""  name="name" value="{{$users->name}}" maxlength="50" size="30" placeholder=""><br>
</div>      

<br>

<div class="form-group">
  <label for="email" style="color:black;font-size:20px"><b> Email :</b></label><br>
  <input type="email" class="" name="email" value="{{$users->email}}" maxlength="50" size="30" placeholder=""><br><br>
</div>

<br>
<div class="">
<label for="role" style="color:black;font-size:20px"><b> Role :</b></label><br>




<label for="normal_user"  class="container">
<input type="checkbox" id="normal_user" name="roles[]" value="normal_user" {{$users->hasRole('normal_user')? 'checked' : ''}}>Normal User
</label><br>


<label for="seller_user" class="container">
<input type="checkbox" id="seller_user" name="roles[]" value="seller_user" {{$users->hasRole('seller_user')? 'checked' : ''}}>Seller User
</label><br>




</div>


  <input type="submit" id="submit" value="save" formmethod="POST" formaction="{{URL('admin/updateuser', $users->id )}}"><br>


</fieldset>
</form>
</div>

    </body>
@endsection
