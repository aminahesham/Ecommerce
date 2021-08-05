<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-comm Project</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="a nonymous"></script>
</head>
<body>
    {{View::make('header')}}

    @yield('content')
    
   
</body>
<style>
img.slider-img{
    height:400px !important
}
.custom-product{
    height:600px;
}
.slider-text{
    background: #D3D3D3 (20%);
  
}
.trending-img{
    height:100px;
    margin:20px;
}
.trending-items{
    float:left;
    position: relative;
    width: 20%;
    
}
.trending-wrapper{
    margin:30px;
}
.footer-cl{
  width: 100%;
  margin: 8px 0;
  box-sizing: border-box;
  
}
.detail-img{
    height:300px;
}
.search-box{
    width:500px:
}
.lo{
  color:black;
  background-color: #e65c00;
  padding: 14px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}
.lo:visited{
    color:black;
    text-decoration: none;

}
.cart-list-diveder{
    border-bottom: 1px solid #ccc;
    margin-bottom:20px;
    padding-bottom:20px;
}
.center{
    display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;
}



</style>
</html>