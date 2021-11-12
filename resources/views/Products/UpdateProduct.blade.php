

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
    border-radius:20px;

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

<form id="form" method="POST" action="{{URL('/getproduct'. $products->id )}}" enctype="multipart/form-data">
@csrf
<fieldset>
<h3 style="color:white; text-align: center;font-size:20px;">Update Product</h3><br>


<div class="form-group">
  <label for="name_ar" style="color:black" ><b>Product Name</b></label><br>
  <input type="text" class=""  name="name" value="{{$products->name}}" maxlength="50" size="30" placeholder="Name" style="border-radius:10px;"><br><br>
</div>      



<div class="form-group">
  <label for="price" style="color:black"><b>Product Price</b></label><br>
  <input type="text" id="price" name="price" value="{{$products->price}}" maxlength="50" size="30" placeholder="Price" style="border-radius:10px;"><br><br>
</div>


<div class="form-group">
  <label for="details_en" style="color:black"><b>Description</b></label><br>
  <input type="text" id="description" name="description" value="{{$products->description}}" maxlength="50" size="30" placeholder="Description" style="border-radius:10px;"><br><br>
</div>


<div class="form-group">
  <label for="photo" style="color:black" ><b>Add Photo</b></label><br>
  <input type="text" class="" id="gallery" name="gallery" value="{{$products->photo}}" maxlength="50" size="30" multiple style="border-radius:10px;"><br><br>
</div>

  <input type="submit" id="submit" value="save" formmethod="POST" formaction="{{URL('updateproduct', $products->id )}}"><br>


</fieldset>
</form>
</div>
</x-app-layout>
