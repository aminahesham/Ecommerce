@extends('master')
@section("content")
<style>

  body{
    background-image:url('https://motionarray.imgix.net/preview-208597-kJX6zt3gCb-high_0002.jpg');
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;
    background-size: 100% 100%;

  }
  div.transbox {
  margin: 30px;
  background-color: white;
  color:black;
  width:380px;
  height:300px;
  
}

div.transbox p {
  margin: 5%;
  font-weight: bold;
  color: black;
}
#h2{
  background-color:white;
  width:500px;
}

</style>
<div class="container" id="h2">
<h2 style="text-align:center; color:orange;text-shadow: 2px 2px 4px ;">welcome to E-comm website</h2>
    <br>
    </div>
    <div class="transbox" >

<h4 style="margin:8px;font-size:20px;color:orange;text-shadow: 2px 2px 4px ;">About Us</h4>
<br>
<p style="margin:8px;width:300px;">
  in our site you will find anything you want ,<br> From each product there are many different types and international brands that suit your taste, 
  which will make your experience better and you will enjoy staying on the site more.

</p>

</div>


<br><br><br><br><br><br>
<br><br><br><br><br><br>



@endsection