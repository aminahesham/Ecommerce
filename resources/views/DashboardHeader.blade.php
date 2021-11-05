

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
      <a class="navbar-brand" href="{{url('dashboard')}}" style="color:orange;text-shadow: 2px 2px 4px ;">E-comm</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="{{url('showusers')}}">Users Table</a></li>
      <li><a href="{{url('showorders')}}">Orders Table</a></li>
      <li><a href="{{url('showproducts')}}">Products Table</a></li>
      <li><a href="{{url('showadmins')}}">Admins Table</a></li>
      <li><a href="{{url('logout')}}"   style="color:orange; float:left;">Logout</a></li>

    </ul>
  </div>
</nav>

</body>
</html>
