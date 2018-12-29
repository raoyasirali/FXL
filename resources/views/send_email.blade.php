<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
	

	@if($message = Session::get('success'))
     <div>
     	
     	{{$message}}
     </div>

	@endif
	<form action="{{URL::to('sendEmail')}}" method="post" enctype="multipart/form-data">
		
			<label>ENter Name </label>
			<input type="text" name="name" /> <br>
			<label>ENter email </label>
			<input type="text" name="email" /><br>
			<label>ENter message </label>
			<input type="text" name="message" /><br>
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<input type="submit" name="send" >


		
	</form>

</body>
</html>