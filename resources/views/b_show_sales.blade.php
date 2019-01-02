@include('b_master')
<body>
	<br/>
	<br/>
	 <a href="b_s_download_excel"><button class="btn btn-secondary">Download as Excel File</button></a>
	 <table border="1" width="90%" align="center" style="border-collapse: collapse" class="table">
	 	<thead class="thead-dark">
	 	<tr>
	 		<th>ID</th>
	 		<th>Date</th>
	 		<th>Customer Name</th>
	 		<th>Product</th>
	 		<th>Quantity</th>
	 		<th>Price</th>
	 		
	 		

	 	</tr>
	 </thead>
	 	 @foreach($sales as $s)

               <tr>
               	
                       <td>{{$s->id}}</td>
                       <td>{{$s->Date}}</td>
                       <td>{{$s->Customer_Name}}</td>
                       <td>{{$s->Product}}</td>
                       <td>{{$s->Quantity}}</td>
                       <td>{{$s->Price}}</td>
                      
                      
                       

               </tr>
      
	 	 @endforeach


	 </table>




</body>