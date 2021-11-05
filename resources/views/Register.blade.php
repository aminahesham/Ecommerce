<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>E-comm</title>
<link rel="shortcut icon" type="image/x-icon" href="https://pngimage.net/wp-content/uploads/2018/06/logo-panier-png-5.png" />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>

body{
        background-image: url('https://motionarray.imgix.net/preview-208597-kJX6zt3gCb-high_0002.jpg');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
        background-size: 100% 100%;
    }
.login-form {
    width: 340px;
    margin: 50px auto;
  	font-size: 15px;
    border-radius:15px 50px 30px 5px;
    float:left;
    margin-left:65px;
}
.login-form form {
    margin-bottom: 15px;
    background: #f7f7f7;
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    padding: 30px;
    border-radius:15px 50px 30px 5px;

}
.login-form h2 {
    margin: 0 0 15px;
}
.form-control, .btn {
    min-height: 38px;
    border-radius: 2px;
}
.btn {        
    font-size: 15px;
    font-weight: bold;
    background-color:orange;
}
a:hover{
    text-decoration: none;
    color:orange;
}
</style>
</head>
<body>
<div class="login-form">
    <form action="register" method="post">
    	{!! csrf_field() !!}
        <center><img src="https://cdn-icons-png.flaticon.com/512/1828/1828506.png"style="width:60px;height:60px;" alt=""></center>
<br>
        <h4 class="text-center" style="color:orange;text-shadow: 2px 2px 4px yellow;">Register</h4><br>
        @if(\Session::get('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ \Session::get('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
            </button>
        </div>
        @endif
        {{ \Session::forget('success') }}
        @if(\Session::get('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ \Session::get('error') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
            </button>
        </div>
        @endif   
        <div class="form-group">
            <input type="text" class="form-control" name="name" placeholder="Name" required="required">
            @if ($errors->has('name'))
            <span class="help-block font-red-mint">
                <strong>{{ $errors->first('name') }}</strong>
            </span>
            @endif
        </div>

        <div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="Password" required="required">
            @if ($errors->has('password'))
            <span class="help-block font-red-mint">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
            @endif
        </div>

        <div class="form-group">
            <input type="email" class="form-control" name="email" placeholder="Email" required="required">
            @if ($errors->has('email'))
            <span class="help-block font-red-mint">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
            @endif
      <br><br>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block">Submit</button>
        </div>  
        <br>
        <p>already have account ?</p>
        <a href="{{ url('login') }}" style="color:black;">Login !!</a><br>    

        <br>
            <a href="{{ url('admin/login') }}" style="color:black;">Admin ?</a><br>    
    </form>
    
</div>
</body>
</html>