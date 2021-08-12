

<!DOCTYPE html>
<html lang="en">
<head>
  <title>E-comm</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="" style="color:orange;">E-comm</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="{{url('admin/showusers')}}">Users Table</a></li>
      <li><a href="{{url('admin/showorders')}}">Orders Table</a></li>
      <li><a href="{{url('admin/showproducts')}}">Products Table</a></li>
      <li><a href="{{url('admin/showadmins')}}">Admins Table</a></li>
      <li><a href="{{url('admin/logout')}}" style="color:red;">Logout</a></li>

    </ul>
  </div>
</nav>
  
<div class="container">
  <h3>Welcome To Admin Dashboard !</h3>
  <img class="center"  src="https://ziaqamer.com/wp-content/uploads/2021/07/c20gqydyxbbt0jo0_1593062345.jpeg" >

</div>

</body>
</html>

