@include('a_master')
<body>
	 <a href="s_download_excel"><button class="btn btn-secondary">Download Excel File</button></a><br/><br/>
	 <table border="1" width="90%" align="center" style="border-collapse: collapse">
	 	<tr>
	 		<th>ID</th>
	 		<th>Date</th>
	 		<th>Customer Name</th>
	 		<th>Product</th>
	 		<th>Quantity</th>
	 		<th>Price</th>
	 		<th>B-ID</th>
	 		

	 	</tr>
	 	 @foreach($sales as $s)

               <tr>
               	
                       <td>{{$s->id}}</td>
                       <td>{{$s->Date}}</td>
                       <td>{{$s->Customer_Name}}</td>
                       <td>{{$s->Product}}</td>
                       <td>{{$s->Quantity}}</td>
                       <td>{{$s->Price}}</td>
                       <td>{{$s->b_id}}</td>
                      
                       

               </tr>
      
	 	 @endforeach


	 </table>




</body>