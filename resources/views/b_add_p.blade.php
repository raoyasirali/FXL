@include('b_master')
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Add Product</title>
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
     
<div style="width: 450px;height: 620px;margin-top:50px;border: solid thin black " class="container">
<form action="{{URL::to('add_p_server')}}" method="post" enctype="multipart/form-data">
	<div class="form-group">
	    <span style="margin-left: 30%;font-size: 30px;color: Black"><b> Add Product</b></span><br/>
		<div id="err" style="color: red"></div>	
<<<<<<< HEAD
    </div>
=======
<br/>	
	<div style="width: 28%;height: 100%;margin-left: 45%;padding-top: 30px;padding-bottom: 80px;background-color: white;border: solid thick black">
	<span style="margin-left: 10%"><label><b> Item Name: </b></label></span>&nbsp  &nbsp
	<input type="text" name="p_name" id="p_name" required="" onkeyup="
  var start = this.selectionStart;
  var end = this.selectionEnd;
  this.value = this.value.toUpperCase();
  this.setSelectionRange(start, end);
" /> <br/><br/>
>>>>>>> 0b058e2b4c4add5d6e24541c2a061573ae0f81f1
	
	<div class="form-group">
	   <span ><label><b> Item Name: </b></label></span>&nbsp  &nbsp
	   <input type="text" name="p_name" id="p_name" required="" class="form-control" /> 
	</div>

	<div class="form-group">
	    <span ><label><b> Price: </b></label></span>
	    <input type="text" name="p_price" id="p_price" required="" class="form-control" /> 
	    <input type="hidden" name="b_id" value='<?= $value ?>'>
    </div>

	<div class="form-group">
	    <span ><label><b> Description: </b></label></span>
	    <input type="text" name="p_description" id="p_description" required="" class="form-control" /> 
    </div>

    <div class="form-group">
	   <span ><label><b> Category: </b></label></span> &nbsp &nbsp
	   <select id="p_category" name="p_category" class="form-control">
						<option value="1">Fast Food</option>
						<option value="2">Chinese</option>
						<option value="3">Itaian</option>
						<option value="4">Desi</option>
					</select></span> 
    </div>
	
	<input type="hidden" name="_token" value="{{ csrf_token() }}">

	<div class="form-group">
	   <span ><label><b> Image: </b></label></span> 
	    <span style="margin-left: 20%"><input type="file" name="p_image" id="p_image" required="" class="form-control" /></span> 
    </div>

	<span style="margin-left: 70%"><input type="submit" value="Add Item" /></span>
    </div>
</form>
</div>


</body>
</html>