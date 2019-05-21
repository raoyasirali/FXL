@include('b_master')
<body>
	<br/>
	<br/>
	 <a href="b_s_download_excel"><button class="btn btn-secondary">Download as Excel File</button></a>
	 <table border="1" width="90%" align="center" style="border-collapse: collapse" class="table">
	 	<thead class="thead-dark">
	 	<tr>
	 		<th>OrderID</th>
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