@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1 style="text-align: center;">Orders</h1>

<table border="1" width="90%" align="center" style="border-collapse: collapse" class="table">
	 	<thead class="thead-dark">
	 	<tr>
	 		<th>OrderID</th>
	 		<th>Business Name</th>
	 		<th>Business Address</th>
	 		<th>Customer Name</th>
	 		<th>Email</th>
	 		<th>Contact No.</th>
	 		<th>Address</th>
	 		<th>Item Name</th>
	 		<th>Price</th>
	 		<th>Delivery Area</th>
	 		<th>Cancel Order</th>
	 		
	 	</tr>
	 </thead>
	 	 @foreach($sales as $s)

               <tr>
               	
                       <td>{{$s->oid}}</td>
                       <td>{{$s->b_name}}</td>
                       <td>{{$s->b_Address}}</td>
                       <td>{{$s->name}}</td>
                       <td>{{$s->email}}</td>
                       <td>{{$s->contact}}</td>
                       <td>{{$s->address}}</td>
                       <td>{{$s->p_Name}}</td>
                       <td>{{$s->p_Price}}</td>
                       <td>{{$s->c_area}}</td>
                      <td><a href="u_cancel/{{$s->oid}}"><button class="btn btn-danger">Cancel </button></a></td>
                       

               </tr>
      
	 	 @endforeach


	 </table>


</body>
</html>
@endsection