@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
	

		<div style="width: 30%;height: 440px;margin-left: 35%;padding-top: 30px;padding-bottom: 80px;margin-top: 80px;border: solid thin gray;border-radius: 10px;" class="container">
			<div class="form-group">
			<h3 style="text-align: center;"><b>Add Your Review Here!</b></h3>
			</div>
			<?php
             $value = session('proID');


			?>
	<form action="{{URL::to('addReview')}}" method="post" enctype="multipart/form-data">
		<div style="margin-left: 30px;margin-right: 30px">
			<div class="form-group">
			<label><b>Enter Name </b></label><br>
			<?php
			use App\User;
			$userId = Auth::id();
			$user = User::find($userId);
			echo "<input type='text' placeholder='Name' value=$user->name  class='form-control' name='name' /> <br> "?>
			</div>

			<div class="form-group">
			<label><b> Enter Review </b></label>
			<textarea rows="4" cols="40" placeholder="Write your review here!"  class="form-control"  name="message"></textarea>
			</div><br>
			<!-- <input type="textarea" name="message" /><br> -->
			<div class="form-group">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<input type="hidden" name="pro_ID" value="<?=$value?>">
			</div>
			<span style="margin-left: 38%">
				<input type="submit" name="send" class="btn btn-warning"></span>

			</div>
		
	</form>
	@if($message = Session::get('success'))
     <div style="margin-left: 30px;color: red">
     	
     	<b>{{$message}}</b>
     </div>

	@endif
</div>
</body>
</html>
@endsection