<!-- client_business_signup.php -->
@include('master')
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Business Admin Sign Up </title>
	<link rel="stylesheet" type="text/css" href="style.css">				
</head>
<body background="bg.jpg">


<!-- <?php
//$msg="abc";
//if( !empty($_GET['msg']))
//	$msg = $_GET['msg'];

?> -->


<div style="width: 100%;height: 840px;padding-top:10px ">
<form action="{{URL::to('b_register')}}" method="post" enctype="multipart/form-data">
	<span style="margin-left: 47%;font-size: 30px;color: Black"><b> Business Admin Sign Up</b></span><br/><br/><br/>
		<div id="err" style="color: red"></div>	
	
	<div style="width: 25%;height: 100%;margin-left: 45%;padding-top: 30px;padding-bottom: 20px;background-color: white;border: solid thick black">

	<span style="margin-left: 10%"><label><b> Restaurant Name: </b></label></span>&nbsp &nbsp
	<input type="text" name="b_name" id="b_name" required="" /> <br/><br/>

	<span style="margin-left: 10%"><label><b> Address: </b></label></span> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
	<input type="text" name="b_address" id="b_address" required="" /> <br/><br/>

	<span style="margin-left: 10%"><label><b> First Name: </b></label></span> &nbsp &nbsp
	<input type="text" name="b_first_name" id="b_first_name" required="" /> <br/><br/>
	

	<span style="margin-left: 10%"><label><b> Last Name: </b></label></span> &nbsp &nbsp
	<input type="text" name="b_last_name" id="b_last_name" required="" /> <br/><br/>

	
	<span style="margin-left: 10%"><label><b> Phone Number: </b></label></span>  &nbsp &nbsp &nbsp
	<input type="text" name="b_phone" id="u_phone" required="" /> <br/><br/>
    
	<span style="margin-left: 10%"><label><b> Email: </b></label></span> &nbsp &nbsp
	<input type="email" name="b_email" id="b_email" required="" /> <br/><br/>
    <input type="hidden" name="_token" value="{{csrf_token()}}">
	<span style="margin-left: 10%"><label><b> Category: </b></label></span> &nbsp &nbsp
	<select id="b_category" name="b_category">
						<option value="1">Fast Food</option>
						<option value="2">Chinese</option>
						<option value="3">Itaian</option>
						<option value="4">Desi</option>
					</select></span> <br/>
	<span style="margin-left: 10%"><label><b> Password: </b></label></span> &nbsp &nbsp
	<input type="password" name="b_password" id="b_password" required="" /> <br/><br/>


	<span style="margin-left: 70%"><input type="submit" value="Register" /></span>
    </div>
</form>
</div>
</body>
</html>