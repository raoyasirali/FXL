<!-- client_business_login.php -->
@include('master')
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Admin Login</title>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="style.css">				
</head>
<body  style="max-width: 100%;height: auto;">
	



<div  style="width: 38%;height: 355px;background-color: white;border: solid thin gray;border-radius: 10px;margin-top: 100px" class="container">

<form action="{{URL::to('a_chklogin')}}" method="post" enctype="multipart/form-data">
	<div class="form-group">
		<br/>
	<h3 style="text-align: center;"> <b>  Admin Login</b></h3><br/>
    
	
		<div id="err" style="color: red"></div>
    </div>
	
	
	<div class="form-group">
	<label><b> Email: </b></label>
	<!-- <div style="width: 370px;height: 240px;margin-left: 45%;padding-top: 30px;padding-bottom: 80px;background-color: white;border: solid thick black"> -->
	
	<input type="email" class="form-control" placeholder="Email" name="a_email" id="a_email" required="" />
	</div>

	<div class="form-group">
	<label><b> Password: </b></label>
	<input type="hidden" name="_token" value="{{csrf_token()}}">
	<input type="password" class="form-control" placeholder="Password" name="a_password" id="a_password" required="" /> 
	</div>
    <!-- <span style="margin-left: 45%"><b><a href="b_signup">Dont have account?</a></b></span>	<br/><br/> -->

    <div class="form-group">
	<input type="submit" style="margin-left: 88%" value="Login" class="btn btn-warning"/><br/><br/>
	<span style="color: red; margin-left: 150px"> </span>
    </div>
</form>
</div>
</body>
</html>