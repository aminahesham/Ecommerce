@extends('master')
@section("content")
@include('messages')


<div class="custom-product">
<div class="col-sm-10">
<table class="table table-striped">
  
    <tbody>
      <tr>
        <td>Amount</td>
        <td>$ {{$total}}</td>
      </tr>
      <tr>
        <td>Tax</td>
        <td>$ 0</td>
      </tr>
      <tr>
        <td>Delivery</td>
        <td>$ 10</td>
      </tr>
      <tr>
        <td>Total Amount</td>
        <td>$ {{$total+10}}</td>
      </tr>
    </tbody>
  </table>
<br><br>
<div class="">
  <form action="saveorder" method="POST">
  @csrf
    <div class="form-group">
      <input name="address" class="form-control"  placeholder="Enter Your Address" ><br><br>
      <input name="phone"   class="form-control"  placeholder="Enter Your Phone Number" ><br><br>

    </div>
    <div class="form-group">
      <label for="pwd">Payment Method :</label><br><br>
      <input type="radio" value="visa" name="payment"><span>Visa</span><br><br>
      <input type="radio" value="cash" name="payment"><span>Cash</span><br><br>
    </div>
   
    <button type="submit" class="btn btn-warning">Confirm</button>
  </form>
 
</div>
    </div>
    </div>

@endsection