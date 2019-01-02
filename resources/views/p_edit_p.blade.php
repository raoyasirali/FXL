@include('b_master')
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Edit Product</title>
	<!-- <link rel="stylesheet" type="text/css" href="style.css">				 -->
</head>
<body >
<!-- <div style="width: 150px;height: 220px;border:solid thin black;float: left;"> -->
    <!-- <a href="" class="a" >Current Orders</a> </br></br> -->
    <!-- <a href="#"  class="w3-button w3">Add Product</a>    </br>
    <a href="#"  class="w3-button w3-blue" >Delete Product</a></br>
    <a href="#"  class="w3-button w3-blue" >View Products</a></br>
    <a href="#"  class="w3-button w3-blue" >Update Product</a></br></br> -->
    <!-- <a href=""  class="a" >View Sales</a></br></br> -->

    <!-- </div> -->
<?php
   
   $value = session('business_id');
  // echo $value;  
?>
     
<div style="width: 100%;height: 620px;padding-top:10px ">
<form action="../update/{{$p->id}}" method="post" enctype="multipart/form-data">
	<span style="margin-left: 30%;font-size: 30px;color: Black"><b> Update Product</b></span><br/>
		<div id="err" style="color: red"></div>	
<br/>	
	<div style="width: 28%;height: 100%;margin-left: 45%;padding-top: 30px;padding-bottom: 80px;background-color: white;border: solid thick black">
	<span style="margin-left: 10%"><label><b> Item Name: </b></label></span>&nbsp  &nbsp
	<input type="text" name="p_name" id="p_name" required="" value="{{$p->p_Name}}" /> <br/><br/>
	
	<span style="margin-left: 10%"><label><b> Price: </b></label></span>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
	<input type="text" name="p_price" id="p_price" required="" value="{{$p->p_Price}}"/> <br/><br/>
	
	<input type="hidden" name="b_id" value='<?= $value ?>'>

	<span style="margin-left: 10%"><label><b> Description: </b></label></span> &nbsp 
	<input type="text" name="p_description" id="p_description" required="" value="{{$p->p_Desc}}" /> <br/><br/>

	<span style="margin-left: 10%"><label><b> Category: </b></label></span> &nbsp &nbsp
	<select id="p_category" name="p_category" value="{{$p->c_id}}">
						<option value="1">Fast Food</option>
						<option value="2">Chinese</option>
						<option value="3">Itaian</option>
						<option value="4">Desi</option>
					</select></span> <br/>

	
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<!-- <span style="margin-left: 10%"><label><b> Image: </b></label></span> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
	<span style="margin-left: 20%"><input type="file" name="p_image" id="p_image" required="" value="{{$p->p_Img_Name}}" /></span> <br/><br/>
     -->
	<span style="margin-left: 70%"><input type="submit" value="Update Item" /></span>
    </div>
</form>
</div>


</body>
</html>




