@include('a_master1')
<body>
	 <a href="s_download_excel"><button class="btn btn-secondary">Download Excel File</button></a> <a href="sales_chart"><button class="btn btn-secondary">Products sales in Pie Chart</button></a><br/><br/>
	 <table border="1" width="90%" align="center" style="border-collapse: collapse" class="table">
	 	<thead class="thead-dark">
	 	<tr>
	 		<th>OrderID</th>
	 		<th>Business Name</th>
	 		<th>Business Address</th>
	 		<th>Owner Name</th>
	 		<th>Contact No.</th>

	 		<th>Customer Name</th>
	 		<th>Email</th>
	 		<th>Contact No.</th>
	 		<th>Address</th>
	 		<th>Item Name</th>
	 		<th>Price</th>
	 		<th>Date & Time</th>
	 		
	 	</tr>
	 </thead>
	 	 @foreach($sales as $s)

               <tr>
               	
                       <td>{{$s->oid}}</td>
                       <td>{{$s->b_name}}</td>
                       <td>{{$s->b_Address}}</td>
                       <td>{{$s->b_Fname}}</td>
                       <td>{{$s->b_Phone}}</td>
                       <td>{{$s->name}}</td>
                       <td>{{$s->email}}</td>
                       <td>{{$s->contact}}</td>
                       <td>{{$s->address}}</td>
                       <td>{{$s->p_Name}}</td>
                       <td>{{$s->p_Price}}</td>
                       <td>{{$s->updated_at}}</td>
                      
                       

               </tr>
      
	 	 @endforeach


	 </table>




</body>