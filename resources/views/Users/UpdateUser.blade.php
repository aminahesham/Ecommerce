<?php
use Database\Seeders\Permissions_Seeder;
use Illuminate\Database\Seeder;
use  App\Models\Permission;
$permissions=Permission::all();


?>

<style>

body {
background-color:white;
}

#submit{
    width: 65px;
    height: 40px;
    margin-top: 10px;
    border-radius: 15px;
    color: white;
    font-weight:bold;
    background-color: orange;
    font-size: 14px;
    border: none;
}  

#submit:hover{ 
    font-size: 15px;
    border-radius: 15px;
    cursor: pointer;  
}

#form{
    border: 1px solid black;
    width:400px;
    background-color: #04AA6D;
    border-radius: 15px;


}

</style> 
<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add User :') }}
        </h2>

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

            

    <div class="py-12">

    <div align="center">

<form id="form" method="POST" action="{{URL('getuser'. $users->id )}}" enctype="multipart/form-data">
@csrf
<fieldset>
<h3 style="color:white; text-align: center;font-size:20px;">Update User</h3>

<div class="form-group">
  <label for="id" style="color:black;font-size:20px" ><b> Id :</b></label><br>
  <input type="text" class=""  name="id" value="{{$users->id}}" maxlength="50" size="30" placeholder=""style="border-radius:10px;"><br><br>
</div>


<div class="form-group">
  <label for="name" style="color:black;font-size:20px" ><b> Name :</b></label><br>
  <input type="text" class=""  name="name" value="{{$users->name}}" maxlength="50" size="30" placeholder=""style="border-radius:10px;"><br><br>
</div>      

<br>

<div class="form-group">
  <label for="email" style="color:black;font-size:20px"><b> Email :</b></label><br>
  <input type="email" class="" name="email" value="{{$users->email}}" maxlength="50" size="30" placeholder="" style="border-radius:10px;"><br><br>
</div>
<div class="container">
<label for="role" style="color:black;font-size:20px"><b> Role :</b></label><br><br>

<select name="roles[]" id="roles" style="background-color:#ff9900;color:white;border-radius: 15px;">
    <option value="admin" {{$users->hasRole('admin')? 'selected' : ''}}>Admin</option>
    <option value="seller_user" {{$users->hasRole('seller_user')? 'selected' : ''}}>Seller User</option>
    <option value="normal_user" {{$users->hasRole('normal_user')? 'selected' : ''}}>Normal User</option>
    </select><br><br>
</div>

<div class="container">

<label  style="color:black;font-size:20px"><b> Permissions :</b></label><br><br>

<label><input type="checkbox"   name="permissions[]" value="{{'add-product'}}"{!! $users->assigned ? 'checked' : '' !!} > add product</label><br>



<label><input type="checkbox"   name="permissions[]" value="{{'update-products'}}" {!! $users->assigned ? 'checked' : '' !!}> update products</label><br>



<label><input type="checkbox"  name="permissions[]" value="{{'add-user'}}"  {!! $users->assigned ? 'checked' : '' !!}> add user</label><br>



<label><input type="checkbox"   name="permissions[]" value="{{'update-user'}}" {!! $users->assigned ? 'checked' : '' !!}> update user</label><br>



<label><input type="checkbox"  name="permissions[]" value="{{'manage-users'}}" {!! $users->assigned ? 'checked' : '' !!}> manage users</label><br>
</div>

<input type="submit" id="submit" value="save" formmethod="POST" formaction="{{URL('updateuser', $users->id )}}"><br>


</fieldset>
</form>
</div>
</x-app-layout>
