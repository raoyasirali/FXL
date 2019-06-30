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



<div class="container" style="border: solid thin gray;border-radius: 10px;height: 900px;width: 40%;margin-top: 60px;margin-bottom: 60px">
<form action="{{URL::to('b_register')}}" method="post" enctype="multipart/form-data" style="width:500px; margin: auto; height: 890px"><br/>
  <div class="form-group">
    <h3 style="text-align: center;"> <b> Business Admin Signup form</b></h3>

   </div> 

   <div class="form-group">
    <label><b>First Name:</b></label>
    <input type="text"  class="form-control " placeholder="First Name" name="b_first_name" id="b_first_name" required="">
   </div>   
    
   <div class="form-group">
    <label><b>Last Name:</b></label>
    <input type="text"  class="form-control "  placeholder="Last Name" name="b_last_name" id="b_last_name" required="">
   </div>

   <div class="form-group">
    <label><b>Resturant Name:</b></label>
    <input type="text"  class="form-control"  placeholder="Resturant Name" name="b_name" id="b_name" required="">
   </div>

   <div class="form-group">
    <label><b>Resturant Category:</b></label>
    
    <select id="b_category" name="b_category" class="form-control">
            <option value="1">Fast Food</option>
            <option value="2">Chinese</option>
            <option value="3">Itaian</option>
            <option value="5">Desi</option>
            <option value="6">Fast Food</option>
            <option value="7">Chinese</option>
            <option value="8">Itaian</option>
            <option value="9">Desi</option>
            <option value="10">Fast Food</option>
            <option value="11">Chinese</option>
            <option value="12">Itaian</option>
            <option value="13">Desi</option>
            <option value="14">Fast Food</option>
            <option value="15">Chinese</option>
            <option value="16">Itaian</option>
            <option value="17">Desi</option>
            <option value="18">Fast Food</option>
            <option value="19">Chinese</option>
            <option value="20">Itaian</option>
            <option value="21">Desi</option>
            <option value="22">Fast Food</option>
            <option value="23">Chinese</option>
            <option value="24">Itaian</option>
            <option value="25">Desi</option>

    </select>
   </div>

   <div class="form-group">
    <label><b>Address:</b></label>
    <input type="text"  placeholder="Address" name="b_address" id="b_address" class="form-control"  id="u_phone" required="">
   </div>

      <div class="form-group">
    <label><b>Delivery Area:</b></label>
    <select required  name="darea" id="darea" class="form-control">
      
      <option value="">-Select-</option>;
      <option value="wapdatown">Wapda Town</option>;
      <option value="township">Township</option>;
      <option value="modeltown">Model town</option>;
      <option value="Walton">Walton</option>;

       <option value="wapdatown">Wapda Town</option>;
      <option value="township">Township</option>;
      <option value="modeltown">Model town</option>;
      <option value="Walton">Walton</option>;

       <option value="wapdatown">Wapda Town</option>;
      <option value="township">Township</option>;
      <option value="modeltown">Model town</option>;
      <option value="Walton">Walton</option>;
      
    </select>
   </div>

   <div class="form-group">
    <label><b>Phone:</b></label>
    <input type="text"  placeholder="Phone Number"  class="form-control" name="b_phone" id="u_phone" required="">
   </div>

   <div class="form-group">
    <label><b>Email:</b></label>
    <input type="text"  placeholder="Email Address"  class="form-control" name="b_email" id="b_email" required="">
   </div>

   <div class="form-group">
    <label><b>Password:</b></label>
    <input type="password"  placeholder="Password"  class="form-control" name="b_password" id="b_password" required="">
   </div>


   <div class="form-group">
    <input type="hidden" name="b_status" value="0">
    <input type="hidden" name="_token" value="{{csrf_token()}}">

    <input style="margin-left: 83%" type="submit" value="Register" class="btn btn-primary" />
  </div>

</form>
</div>
<br/><br/><br/>

</body>
</html>