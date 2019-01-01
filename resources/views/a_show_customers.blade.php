@include('a_master')
<body>
	 <a href="c_download_pdf"><button class="btn btn-secondary">Download PDF</button></a><br/><br/>
	 <table border="1" width="90%" align="center" style="border-collapse: collapse">
	 	<tr>
	 		
	 		<th>ID</th>
	 		<th>Name</th>
	 		<th>Email</th>
	 		<th>Contact Number</th>
	 		

	 	</tr>
	 	 @foreach($customers as $c)

               <tr>
               	
                       <td>{{$c->id}}</td>
                       <td>{{$c->name}}</td>
                       <td>{{$c->email}}</td>
                       <td>{{$c->mobile}}</td>
                       
                       
                       

               </tr>
      
	 	 @endforeach


	 </table>




</body>