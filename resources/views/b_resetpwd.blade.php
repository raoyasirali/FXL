@include('master')
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Business Password Reset</title>

	<link rel="stylesheet" type="text/css" href="style.css">

	 <style>
          label{
            color: white;
          }    
          h3{
          color: white;
          }
        </style>	


</head>
<body style="max-width: 100%;height: auto;background-image:url(b14.jpg);">
	<div>
	

<?php
$msg="";
if( !empty($_GET['msg']))
	$msg = $_GET['msg'];

?>


<div   class="container" style="border: solid thin gray;border-radius: 10px;height: 440px;width: 40%;margin-top: 60px;margin-bottom: 60px">
<form action="{{URL::to('b_resest_pwd')}}" method="get" enctype="multipart/form-data">
	<br/>
	<h3 style="text-align: center;"> Business Reset Password </h3><br/>
		<div id="err" style="color: red"></div>	
	
	<!-- <div style="width: 370px;height: 320px;margin-left: 45%;padding-top: 30px;padding-bottom: 80px;background-color: white;border: solid thick black"> -->
	<!-- <span style="margin-left: 10%"> -->
<div class="form-group">
		<label><b> Email: </b></label>
	<!-- </span>&nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp -->
	<input type="email"  class="form-control name="b_email" id="b_email" required="" /> 
</div>
<div class="form-group">
	<!-- <span style="margin-left: 10%"> -->
		<label><b> Phone: </b></label>
	<!-- </span>  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp -->
	<input type="text"  class="form-control  name="b_phone" id="b_phone" required="" /> 
	<input type="hidden" name="_token" value="{{csrf_token()}}">
</div>
<div class="form-group">
	<!-- <span style="margin-left: 10%"> -->
		<label><b>New Password: </b></label>
	<!-- </span>&nbsp -->
	<input type="password" class="form-control  name="b_password" id="b_password" required="" /> 
   </div>
   <div class="form-group">
	<span style="margin-left: 77%">
		<input type="submit" value="Reset Password" class="btn btn-warning" /><br/><br/><br/>
	<span style="color: red; margin-left: 150px"><b><?php echo $msg; ?></b> </span>
	</span>
</div>
    <!-- </div> -->
</form>
</div>

</body>
</html>