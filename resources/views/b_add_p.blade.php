@include('b_master')
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Add Product</title>
	<!-- <link rel="stylesheet" type="text/css" href="style.css">
					 -->

<style>
          label{
            color: white;
          }    
          
        </style>	

</head>
<body style="background-image:url(b15.jpg);">
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
     
<div style="width: 30%;height: 560px;margin-top:50px;border: solid 2px grey;border-radius: 10px;" class="container">
<form action="{{URL::to('add_p_server')}}" method="post" enctype="multipart/form-data">
	<div class="form-group">
	    <span style="margin-left: 30%;font-size: 30px;color: white"><b> Add Product</b></span><br/>
		<div id="err" style="color: red"></div>	

    </div>
<br/>	
	<!-- <div style="height: 100%;padding-top: 30px;padding-bottom: 80px;background-color: white"> -->
		<div class="form-group">
	<label><b> Item Name: </b></label>&nbsp  &nbsp
	<input type="text" name="p_name" placeholder="Item Name" id="p_name" required=""  class="form-control"  onkeyup="
  var start = this.selectionStart;
  var end = this.selectionEnd;
  this.value = this.value.toUpperCase();
  this.setSelectionRange(start, end);
" /> 
</div>
	
<!-- 	<div class="form-group">
	   <span ><label><b> Item Name: </b></label></span>&nbsp  &nbsp
	   <input type="text" name="p_name" id="p_name" required="" class="form-control" /> 
	</div> -->

	<div class="form-group">
	    <span ><label><b> Price: </b></label></span>
	    <input type="text" name="p_price" placeholder="Price" id="p_price" required="" class="form-control" /> 
	    <input type="hidden" name="b_id" value='<?= $value ?>'>
    </div>

	<div class="form-group">
	    <span ><label><b> Description: </b></label></span>
	    <input type="text" name="p_description" placeholder="Description" id="p_description" required="" class="form-control" /> 
    </div>

    <div class="form-group">
	   <span ><label><b> Category: </b></label></span> &nbsp &nbsp
	   <select id="p_category" name="p_category" class="form-control">
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
					</select></span> 
    </div>
	
	<input type="hidden" name="_token" value="{{ csrf_token() }}">

	<div class="form-group">
	   <span ><label><b> Image: </b></label></span> 
	    <span style="margin-left: 20%"><input type="file" name="p_image" id="p_image" required="" class="form-control" /></span> 
    </div>

    <div class="form-group">
	<span style="margin-left: 77%"><input type="submit" class="btn btn-warning " value="Add Item" /></span>
    </div>
</form>
</div>
<br/><br/><br/>

</body>
</html>