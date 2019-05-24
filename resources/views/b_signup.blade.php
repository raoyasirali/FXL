<!-- client_business_signup.php -->
@include('master')
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Business Admin Sign Up </title>
	<link rel="stylesheet" type="text/css" href="style.css">

				
</head>
<body  style="max-width: 100%;height: auto;">



<div class="container" style="border: solid thin black;height: 900px;width: 600px;margin-top: 60px;margin-bottom: 60px">
<form action="{{URL::to('b_register')}}" method="post" enctype="multipart/form-data" style="width:500px; margin: auto; height: 900px">
  <div class="form-group">
    <h3> <b>&nbsp &nbsp &nbsp &nbsp Business Admin Signup form</b></h3>

   </div> 

   <div class="form-group">
    <label>First Name:</label>
    <input type="text"  class="form-control " name="b_first_name" id="b_first_name" required="">
   </div>   
    
   <div class="form-group">
    <label>Last Name:</label>
    <input type="text"  class="form-control " name="b_last_name" id="b_last_name" required="">
   </div>
   <div class="form-group">
    <label>Resturant Name:</label>
    <input type="text"  class="form-control" name="b_name" id="b_name" required="">
   </div>
   <div class="form-group">
    <label>Resturant Category:</label>
    
    <select id="b_category" name="b_category" class="form-control">
    	<option value="1">Fast Food</option>
		<option value="2">Chinese</option>
		<option value="3">Itaian</option>
		<option value="4">Desi</option>

    </select>
   </div>

   <div class="form-group">
    <label>Address:</label>
    <input type="text" name="b_address" id="b_address" class="form-control"  id="u_phone" required="">
   </div>

   <div class="form-group">
    <label>Phone:</label>
    <input type="text"  class="form-control" name="b_phone" id="u_phone" required="">
   </div>
   <div class="form-group">
    <label>Email:</label>
    <input type="text"  class="form-control" name="b_email" id="b_email" required="">
   </div>

   <div class="form-group">
    <label>Password:</label>
    <input type="password"  class="form-control" name="b_password" id="b_password" required="">
   </div>
    <input type="hidden" name="b_status" value="0">
    <input type="hidden" name="_token" value="{{csrf_token()}}">

    <input type="submit" value="Register" class="btn btn-primary" />
</form>
</div>
</body>
</html>