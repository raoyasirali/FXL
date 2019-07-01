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
    <label><b>Restaurant Name:</b></label>
    <input type="text"  class="form-control"  placeholder="Restaurant Name" name="b_name" id="b_name" required="">
   </div>

   <div class="form-group">
    <label><b>Restaurant Category:</b></label>
    
    <select id="b_category" name="b_category" class="form-control">
            <option value="1">FAST FOOD</option>
            <option value="2">DESI</option>
            <option value="3">TURKISH</option>
            <option value="5">JAPNESE</option>
            <option value="6">INDIAN</option>
            <option value="7">CHINESE</option>
            <option value="8">AMERICAN</option>
            <option value="9">HOMEMADE</option>
            <option value="10">DESSERTS</option>
            <option value="11">BAKERY</option>
            <option value="12">AFGHANI</option>
            <option value="13">COOKIES</option>
            <option value="14">BARBQ</option>
            <option value="15">DRINKS</option>
            <option value="16">VEGETARIAN</option>
            <option value="17">MEXICAN</option>
            <option value="18">ITALIAN</option>
            <option value="19">THAI</option>
            <option value="20">FRENCH</option>
            <option value="21">SPANISH</option>
            <option value="22">ARABIAN</option>

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
      <option value="WapdaTown">Wapda Town</option>;
      <option value="Township">Township</option>;
      <option value="Modeltown">Model town</option>;
      <option value="Walton">Walton</option>;
      <option value="Allama Iqbal Town">Allama Iqbal Town</option>;
      <option value="Izmir Town">Izmir Town</option>;
      <option value="Bahria Town">Bahria Town</option>;
      <option value="Shadman">Shadman</option>;
      <option value="Muslim Town">Muslim Town</option>;
      <option value="Jubliee Town">Jubliee Town</option>;
      <option value="PCSIR Housing Societ">PCSIR Housing Societ</option>;
      <option value="LDA Avenue">LDA Avenue</option>;
      <option value="Johar Town">Johar Town</option>;
      <option value="Barki">Barki</option>;
      <option value="Harbanspura">Harbanspura</option>;
      <option value="Mughalpura">Mughalpura</option>;
      <option value="Faisal Town">Faisal Town</option>;
      <option value="Mozang">Mozang</option>;
      <option value="Garhi Shahu">Garhi Shahu</option>;
      <option value="Gulberg">Gulberg</option>;
      <option value="Garden Town">Garden Town</option>;
      <option value="Kot Lakhpat">Kot Lakhpat</option>;
      <option value="Gulshan e Ravi">Gulshan e Ravi</option>;
      <option value="Sodiwal">Sodiwal</option>;
      <option value="Multan Chungi">Multan Chungi</option>;
      <option value="Samanabad">Samanabad</option>;
      <option value="Mustafa Town">Mustafa Town</option>;
      <option value="Green Town">Green Town</option>;
      <option value="Niaz Baig">Niaz Baig</option>;
      <option value="Chung">Chung</option>;
      <option value="Awan Town">Awan Town</option>;
      <option value="Valencia">Valencia</option>;

      
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