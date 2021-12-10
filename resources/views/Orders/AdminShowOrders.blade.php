

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
  color: black;
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
  background-color:  #66d9ff;
  color: black;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  width:100px;
}

#btn:hover, #btn:active {
  background-color: #0099e6;
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
            {{ __('Orders List :') }}
        </h2>

    </x-slot>

    <div class="py-12">
    <table style="width:99%;margin:5px;">


<tr id="fr">
  <th scope="col">ID</th>
  <th scope="col">Product Name</th>
  <th scope="col">User Name</th>
  <th scope="col">Payment Method</th>
  <th scope="col">Address</th>
  <th scope="col">Phone</th>
  <th scope="col">Created at</th>
  <th scope="col">Updated at</th>
  <th scope="col">Edit</th>



</tr>

  @foreach($orders as $item)
  <tr>
  <th scope="row">{{$item->id}}</th>
    <td>{{$item -> product_id}}</td>
    <td>{{$item -> user_id}}</td>
    <td>{{$item -> payment_method}}</td>
    <td>{{$item -> address}}</td>
    <td>{{$item -> phone}}</td>
    <td>{{$item -> created_at}}</td>
    <td>{{$item -> updated_at}}</td>



    <td>
    <a href="{{url('deleteorder/'.$item->id)}}" id="btn"class="btn btn-warning" style="background-color:orange">Delete</a>
    
    
    </td>

@endforeach
  </tr>
 
</table>

    </div>
</x-app-layout>
