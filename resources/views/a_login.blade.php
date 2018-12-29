<!-- client_business_login.php -->
@include('master')
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Admin Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">				
</head>
<body>
	



<div style="width: 1200px;height: 620px;padding-top:40px ">
<form action="{{URL::to('a_chklogin')}}" method="get" enctype="multipart/form-data">
	<span style="margin-left: 45%;font-size: 30px;color: Black"><b>  Admin Login</b></span><br/><br/><br/>
		<div id="err" style="color: red"></div>	
	
	<div style="width: 370px;height: 240px;margin-left: 45%;padding-top: 30px;padding-bottom: 80px;background-color: white;border: solid thick black">
	<span style="margin-left: 10%"><label><b> Email: </b></label></span>&nbsp &nbsp &nbsp &nbsp
	<input type="email" name="a_email" id="a_email" required="" /> <br/><br/>
	<input type="hidden" name="_token" value="{{csrf_token()}}">
	<span style="margin-left: 10%"><label><b> Password: </b></label></span>&nbsp
	<input type="password" name="a_password" id="a_password" required="" /> <br/>
    <!-- <span style="margin-left: 45%"><b><a href="b_signup">Dont have account?</a></b></span>	<br/><br/> -->

	<span style="margin-left: 38%">
	<input type="submit" value="Login" class="btn btn-secondary"/></span><br/><br/><br/>
	<span style="color: red; margin-left: 150px"> </span>
    </div>
</form>
</div>
</body>
</html>