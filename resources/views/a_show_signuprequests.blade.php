@include('a_master')
<body>
	<!--  <a href="b_download_pdf"><button class="btn btn-secondary">Download PDF</button></a> --><br/><br/>
	 <table border="1" width="90%" align="center" style="border-collapse: collapse" class="table">
	 	
	 	<thead class="thead-dark">
	 	<tr>
	 		
	 		<th>ID</th>
	 		<th>Name</th>
	 		<th>Address</th>
	 		<th>Fisrt Name</th>
	 		<th>Last Name</th>
	 		<th>Phone</th>
	 		<th>Email</th>
	 		<th> Approve</th>
	 		<th> Disapprove</th>

	 	</tr>
	 </thead>
	 	 @foreach($businesses as $b)

               <tr>
               	
                       <td>{{$b->id}}</td>
                       <td>{{$b->b_Name}}</td>
                       <td>{{$b->b_Address}}</td>
                       <td>{{$b->b_Fname}}</td>
                       <td>{{$b->b_Lname}}</td>
                       <td>{{$b->b_Phone}}</td>
                       <td>{{$b->b_Email}}</td>

                       <td><a href="b_approve/{{$b->id}}"><button class="btn btn-secondary">Approve </button></a></td>

                       <td><a href="b_disapprove/{{$b->id}}"><button class="btn btn-secondary">Disapprove Business</button></a></td>
                       

               </tr>
      
	 	 @endforeach


	 </table>




</body>