<!-- client_business_login.php -->
@include('master')
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Business Admin Login</title>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="style.css">				
</head>
<body  style="max-width: 100%;height: auto;">
	



<div style="width: 570px;height: 310px;background-color: white;border: solid thin black;margin-top: 100px" class="container">
<form action="{{URL::to('b_chklogin')}}" method="get" enctype="multipart/form-data">
	<div class="form-group">
    <h3> <b style="padding-left: 145px"> Business Admin Login</b></h3>
<br>
     <div style="color: red; margin-left: 50px">
	    @if($message = Session::get('success'))
     <div>
     	
     	{{$message}}
     </div>

	@endif</div><br/>
	
	<div class="form-group">
   
    <input type="email"  class="form-control" name="b_email" id="b_email" required="" placeholder="Email">
   </div>   
    <br>
   <div class="form-group">
    
    <input type="password" name="b_password" id="b_password" class="form-control"  required="" placeholder="Password">
   </div>
   
    <input type="hidden" name="_token" value="{{csrf_token()}}">


    <div class="form-group" style="margin-top: 12px;float: left">
      <b><a href="b_signup" >Dont have account?</a></b>
    </div>
    <div class="form-group" style="margin-top: 12px;float: right">
    <a href="b_resetpwd"><input type="button" name="reset" value="Forget Password" class="btn btn-primary"></a>
    <input type="submit" value="Login" class="btn btn-primary" />
    </div>

    </div>
</form>
</div>
</body>
</html>