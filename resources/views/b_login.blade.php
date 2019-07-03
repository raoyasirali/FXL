<!-- client_business_login.php -->
@include('master')
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Business Admin Login</title>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
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
<body style="max-width: 100%;height: auto;background-image:url(b8.jpg);">
	



<div style="width: 38%;height: 370px;border: solid thin grey;border-radius: 10px;margin-top: 100px" class="container">
<form action="{{URL::to('b_chklogin')}}" method="post" enctype="multipart/form-data">
	<div class="form-group">
        <br/>
    <h3 style="text-align: center;"> <b> Business Admin Login</b></h3>
<br>
     <div style="color: white; margin-left: 50px">
	    @if($message = Session::get('success'))
     <div>
     	
     	<b>{{$message}}</b>
     </div>

	@endif</div><br/>
	
	<div class="form-group">
    <label><b> Email: </b></label>
    <input type="email"  class="form-control" name="b_email" id="b_email" required="" placeholder="Email">
   </div>   

   <div class="form-group">
   <label><b> Password: </b></label> 
    <input type="password" name="b_password" id="b_password" class="form-control"  required="" placeholder="Password">
   </div>
   
    <input type="hidden" name="_token" value="{{csrf_token()}}">


    <div class="form-group" style="margin-top: 12px;float: left">
      <b><a href="b_signup" style="color: #FFC003;" >Dont have account?</a></b>
    </div>
    <div class="form-group" style="margin-top: 12px;float: right">
    <a href="b_resetpwd"><input type="button" name="reset" value="Forget Password" class="btn btn-warning"></a>
    <input type="submit" value="Login" class="btn btn-warning" />
    </div>

    </div>
</form>
</div>
</body>
</html>