<body>
	 <table border="1" width="90%" align="center" style="border-collapse: collapse">
	 	<tr>
	 		
	 		<th>ID</th>
	 		<th>Name</th>
	 		<th>Address</th>
	 		<th>Fisrt Name</th>
	 		<th>Last Name</th>
	 		<th>Phone</th>
	 		<th>Email</th>

	 	</tr>
	 	 @foreach($businesses as $b)

               <tr>
               	
                       <td>{{$b->b_id}}</td>
                       <td>{{$b->b_Name}}</td>
                       <td>{{$b->b_Address}}</td>
                       <td>{{$b->b_Fname}}</td>
                       <td>{{$b->b_Lname}}</td>
                       <td>{{$b->b_Phone}}</td>
                       <td>{{$b->b_Email}}</td>
                       

               </tr>
      
	 	 @endforeach


	 </table>




</body>