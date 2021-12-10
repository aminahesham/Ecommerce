

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
  color: green;
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
  background-color: #339966;
  color: white;
}

</style> 
<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Users List :') }}
        </h2>

    </x-slot>

   

    <div class="py-12">

    <table style="width:99%;margin:5px;">


<tr id="fr">
  <th scope="col">ID</th>
  <th scope="col">Name</th>
  <th scope="col">E-mail</th>
  <th scope="col">Roles</th>
  <th scope="col">Role Description</th>
  <th scope="col">Permissions</th>
  <th scope="col">Edit</th>
</tr>

  @foreach($users as $index=>$user)
  <tr>
  <th scope="row">{{$user->id}}</th>
    <td>{{$user -> name}}</td>
    <td>{{$user -> email}}</td>
    <td style="color:blue;">
      @foreach($user->roles as $role)
      {{ $role ->display_name }} -
     @endforeach
    </td>
    <td style="width:250px;">
      @foreach($user->roles as $role)
      {{ $role ->description }} 
     @endforeach
    </td>
    <td style="width:280px;color:blue;">
      @foreach($user->permissions as $permission)
      {{ $permission ->display_name }} /
     @endforeach
    </td>

    <td>
    @if(Auth::user()->hasPermission('update-user'))
    <a href="{{url('getuser/'.$user->id)}}" class="btn btn-warning" id="btn" style="background-color: #79d2a6">Update</a>
    @endif

    <a href="{{url('deleteuser/'.$user->id)}}" class="btn btn-warning" id="btn-red" style="background-color:orange">Delete</a>


    </td>
  @endforeach
  </tr>
 
</table>

    </div>
</x-app-layout>
