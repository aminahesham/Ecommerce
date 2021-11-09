

<style>

body {
background-color:white;
}

table, td, th {  
  border: 1px solid #ddd;
  text-align: left;
  padding:5px;

}

table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  padding: 15px;
}
#fr th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}

a{
    color: black;
    text-decoration:none;
    font-size:15px;
    padding: 15px 25px;
    display:inline;
}
a:hover {
  color: blue;
  background-color: transparent;
  text-decoration: none;
}


#fr {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
  margin:4px;
  padding:8px;
}
#btn:link, #btn:visited {
  background-color:  #339966;
  color: black;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  width:100px;
}

#btn:hover, #btn:active {
  background-color: #339966;
  color: white;
}
#btn-red:link, #btn-red:visited {
  background-color: #ff4d4d;
  color: black;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  width:100px;
}

#btn-red:hover, #btn-red:active {
  background-color: red;
  color: white;
}

</style> 
<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Products List :') }}
        </h2>
        <a href="{{url('addproduct')}}" class="btn btn-info" role="button">Add New Product</a>

    </x-slot>

    <div class="py-12">


    <table style="width:99%;margin:5px;">


<tr id="fr">
  <th scope="col">ID</th>
  <th scope="col">Name</th>
  <th scope="col">Price</th>
  <th scope="col">Description</th>
  <th scope="col">Photo</th>
  <th scope="col">Created At</th>
  <th scope="col">Updated At</th>
  <th scope="col">Edit</th>

</tr>

  @foreach($products as $item)
  <tr>
  <th scope="row">{{$item->id}}</th>
    <td>{{$item -> name}}</td>
    <td>{{$item -> price}}</td>
    <td>{{$item -> description}}</td>
    <td><img class="slider-img" src="{{$item['photo']}}"style="width:150px;height:150px;" ></td>
    <td>{{$item -> created_at}}</td>
    <td>{{$item -> updated_at}}</td>


    <td>
    <a href="{{url('getproduct/'.$item->id)}}" id="btn" class="btn btn-success"  style="background-color: #79d2a6" >Update</a>
    <a href="{{url('deleteproduct/'.$item->id)}}" id="btn-red"class="btn btn-warning" style="background-color:orange">Delete</a>
    </td>
@endforeach
  </tr>
 
</table>

    </div>
</x-app-layout>
