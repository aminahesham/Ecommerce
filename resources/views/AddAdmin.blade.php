

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

body {
}
form{
    background-color:orange;
    border: 3px solid orange;
    border-radius: 10px;
    padding: 10px;
    margin: 10px;
    width: 350px;
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

#submit{
    width: 65px;
    height: 40px;
    margin-top: 10px;
    border-radius: 15px;
    color: black;
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



<div align="center" id="div">

<form id="form" method="POST" action="{{URL('addadmin')}}" enctype="multipart/form-data">
@csrf
<fieldset>
<h3 style="color:white; text-align: center;">Add New Admin</h3>
<br>

<div class="form-group">
  <label for="" style="color:black" ><b>Name</b></label><br>
  <input type="text" class=""  name="name" value="" maxlength="50" size="30" placeholder="Name">
</div>      

<br>

<div class="form-group">
  <label for="" style="color:black"><b>Email </b></label><br>
  <input type="email" id="email" name="email" value="" maxlength="50" size="30" placeholder="Email">
</div>

<br>
<div class="form-group">
  <label for="" style="color:black"><b>Password</b></label><br>
  <input type="password" id="category" name="password" value="" maxlength="50" size="30" placeholder="Password">
</div>

<br>

  <input type="submit" id="submit" value="save" formmethod="POST" formaction="{{url('insertadmin')}}"><br>


</fieldset>
</form>
</div>

    </body>
@endsection
