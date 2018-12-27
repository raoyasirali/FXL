@include('master')
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Business Password Reset</title>
	<link rel="stylesheet" type="text/css" href="style.css">				
</head>
<body background="bg.jpg">
	<div>
	

<?php
$msg="";
if( !empty($_GET['msg']))
	$msg = $_GET['msg'];

?>


<div style="width: 1200px;height: 620px;padding-top:40px ">
<form action="server_business_reset.php" method="get">
	<span style="margin-left: 45%;font-size: 30px;color: Black"><b> Business Reset Password </b></span><br/><br/><br/>
		<div id="err" style="color: red"></div>	
	
	<div style="width: 370px;height: 320px;margin-left: 45%;padding-top: 30px;padding-bottom: 80px;background-color: white;border: solid thick black">
	<span style="margin-left: 10%"><label><b> Email: </b></label></span>&nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp
	<input type="email" name="b_email" id="b_email" required="" /> <br/><br/>
	
	<span style="margin-left: 10%"><label><b> Phone: </b></label></span>  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
	<input type="text" name="b_phone" id="b_phone" required="" /> <br/><br/>
	

	<span style="margin-left: 10%"><label><b>New Password: </b></label></span>&nbsp
	<input type="password" name="b_password" id="b_password" required="" /> <br/><br/>
   
	<span style="margin-left: 57%"><input type="submit" value="Reset Password" class="btn btn-secondary" /><br/><br/><br/>
	<span style="color: red; margin-left: 150px"><b><?php echo $msg; ?></b> </span>
	</span>
    </div>
</form>
</div>

</body>
</html>