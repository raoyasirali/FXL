@include('a_master1')

<body>
	 <a href="c_download_pdf"><button class="btn btn-secondary">Download PDF</button></a><br/><br/>
	 <table border="1" width="90%" align="center" style="border-collapse: collapse" class="table">
	 	 <thead class="thead-dark">
	 	<tr>
	 		
	 		<th>ID</th>
	 		<th>Name</th>
	 		<th>Email</th>
	 		<th>Contact Number</th>
	 		<th> </th>

	 	</tr>
	 </thead>
	 	 @foreach($customers as $c)

               <tr>
               	
                       <td>{{$c->id}}</td>
                       <td>{{$c->name}}</td>
                       <td>{{$c->email}}</td>
                       <td>{{$c->mobile}}</td>
                       <td><a href="c_delete/{{$c->id}}"><button class="btn btn-secondary">Delete Customer</button></a></td>
                       
                       

               </tr>
      
	 	 @endforeach


	 </table>




</body>