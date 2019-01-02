
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
	

		<div style="width: 370px;height: 440px;margin-left: 40%;padding-top: 30px;padding-bottom: 80px;margin-top: 80px;background-color: white;border: solid thick black">
			<h3>Add Your Review Here!!</h3>

			<?php
             $value = session('proID');


			?>
	<form action="{{URL::to('addReview')}}" method="post" enctype="multipart/form-data">
		<div style="margin-left: 30px">
			
			<label><b>Enter Name </b></label><br>
			<input type="text" name="name" /> <br>
			<label><b> Enter Review </b></label>
			<textarea rows="4" cols="40" name="message"></textarea><br>
			<!-- <input type="textarea" name="message" /><br> -->
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<input type="hidden" name="pro_ID" value="<?=$value?>">
			</div>
			<span style="margin-left: 38%">
				<input type="submit" name="send" class="btn btn-secondary"></span>


		
	</form>
	@if($message = Session::get('success'))
     <div style="margin-left: 30px;color: red">
     	
     	<b>{{$message}}</b>
     </div>

	@endif
</div>
</body>
</html>