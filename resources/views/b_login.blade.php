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
<form action="server_business_login.php" method="get">
	<span style="margin-left: 45%;font-size: 30px;color: Black"><b> Business Admin Login</b></span><br/><br/><br/>
		<div id="err" style="color: red"></div>	
	
	<div style="width: 370px;height: 240px;margin-left: 45%;padding-top: 30px;padding-bottom: 80px;background-color: white;border: solid thick black">
	<span style="margin-left: 10%"><label><b> Email: </b></label></span>&nbsp &nbsp &nbsp &nbsp
	<input type="email" name="b_email" id="b_email" required="" /> <br/><br/>
	
	<span style="margin-left: 10%"><label><b> Password: </b></label></span>&nbsp
	<input type="password" name="b_password" id="b_password" required="" /> <br/>
    <span style="margin-left: 45%"><b><a href="b_signup">Dont have account?</a></b></span>	<br/><br/>

	<span style="margin-left: 38%"><a href="client_business_reset.php"> <a href="b_resetpwd"><input type="button" name="reset" value="Forget Password" class="btn btn-secondary"></a>&nbsp</a><input type="submit" value="Login" class="btn btn-secondary"/></span><br/><br/><br/>
	<span style="color: red; margin-left: 150px"> </span>
    </div>
</form>
</div>
<footer id="footer">
	&copy; FoodXpress 2018. All Rights Reserved
</footer>
</body>
</html>