@include('b_master')
<head>
	<title>Orders</title>
</head>
<body>
	<!--  <a href="b_download_pdf"><button class="btn btn-secondary">Download PDF</button></a> --><br/><br/>
	 <table border="1" width="90%" align="center" style="border-collapse: collapse" class="table">
	 	
	 	<thead class="thead-dark">
	 	<tr>
	 		
	 		<th>ID</th>
	 		<th>Order ID</th>
	 		<th>User ID</th>
	 		<th>User Name</th>
	 		<th>Product ID</th>
	 		<th>Product Name</th>
	 		<th>Product Description</th>
	 		<th>Product Price</th>
	 		<!-- <th>Description</th> -->
	 		<th>Bill</th>
	 		<th>Address</th>
	 		<th>Contact</th>
	 		<th>Accept</th>
	 		<th>Reject</th>

	 	</tr>
	 </thead>
	 	 @foreach($checkouts as $o)

               <tr>
               	
                       <td>{{$o->id}}</td>
                       <td>{{$o->oid}}</td>
                       <td>{{$o->u_id}}</td>
                       <td>{{$o->name}}</td>
                       <td>{{$o->p_id}}</td>
                       <td>{{$o->p_Name}}</td>
                       <td>{{$o->p_Desc}}</td>
                       <td>{{$o->p_Price}}</td>
                       <td>{{$o->bill}}</td>
                       <td>{{$o->address}}</td>
                       <td>{{$o->contact}}</td>
    
                       <td><a href="o_approve/{{$o->id}}"><button class="btn btn-secondary">Accept </button></a></td>

                       <td><a href="o_disapprove/{{$o->id}}"><button class="btn btn-secondary">Reject Order</button></a></td>
                       

               </tr>
      
	 	 @endforeach


	 </table>




</body>