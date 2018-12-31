<!-- client_business_login.php -->
@include('master')
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Business Admin Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">				
</head>
<body background="bg.jpg">
	



<div style="width: 1200px;height: 620px;padding-top:40px ">
<form action="{{URL::to('b_chklogin')}}" method="get" enctype="multipart/form-data">
	<span style="margin-left: 45%;font-size: 30px;color: Black"><b> Business Admin Login</b></span><br/><br/><br/>

	
	<div style="width: 370px;height: 265px;margin-left: 45%;padding-top: 30px;padding-bottom: 80px;background-color: white;border: solid thick black">
				<div style="color: red; margin-left: 50px">
	@if($message = Session::get('success'))
     <div>
     	
     	{{$message}}
     </div>

	@endif</div><br/>
	<span style="margin-left: 10%"><label><b> Email: </b></label></span>&nbsp &nbsp &nbsp &nbsp
	<input type="email" name="b_email" id="b_email" required="" /> <br/><br/>
	<input type="hidden" name="_token" value="{{csrf_token()}}">
	<span style="margin-left: 10%"><label><b> Password: </b></label></span>&nbsp
	<input type="password" name="b_password" id="b_password" required="" /> <br/>
    <span style="margin-left: 45%"><b><a href="b_signup">Dont have account?</a></b></span>	<br/><br/>

	<span style="margin-left: 38%"> <a href="b_resetpwd"><input type="button" name="reset" value="Forget Password" class="btn btn-secondary"></a>&nbsp<input type="submit" value="Login" class="btn btn-secondary"/></span><br/><br/><br/>
	<span style="color: red; margin-left: 150px">
	 </span>



    </div>
</form>
</div>
</body>
</html>