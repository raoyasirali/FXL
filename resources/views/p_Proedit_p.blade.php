@include('b_master')
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Add Promotion</title>
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
     
<div style="width: 30%;height: 560px;margin-top:50px;border: solid 2px grey;border-radius: 10px;" class="container">
<form action="../promo/{{$p->id}}" method="post" enctype="multipart/form-data">
	<div class="form-group">
		<!-- <br/> -->
	    <span style="margin-left: 20%;font-size: 30px;color: Black;"><b> Add Promotion</b></span><br/>
		<div id="err" style="color: red"></div>	

    </div>
<br/>	
		
	<div class="form-group">
	<label><b> Item Name: </b></label>&nbsp  &nbsp
	<input type="text" name="p_name" id="p_name"  class="form-control" readonly="" required="" value="{{$p->p_Name}}" onkeyup="
  var start = this.selectionStart;
  var end = this.selectionEnd;
  this.value = this.value.toUpperCase();
  this.setSelectionRange(start, end);
"/> </div>
	
	<div class="form-group">
	    <span ><label><b> Price: </b></label></span>
	<input type="double" name="p_price" id="p_price" readonly=""  class="form-control" required="" value="{{$p->p_Price}}"/> 
	
	<input type="hidden" name="b_id" value='<?= $value ?>'>
	</div>

	<div class="form-group">
	    <span ><label><b> Description: </b></label></span> 
	<input type="text" name="p_description" id="p_description" readonly="" class="form-control"  required="" value="{{$p->p_Desc}}" /> 
	</div>

	<div class="form-group">
		    <span ><label><b> Discount (%): </b></label></span>
		<input type="number" min="0" placeholder="Percentage of Discount (1-100)" name="p_Percent" id="p_Percent"  class="form-control" required=""/>
	</div>

	<div class="form-group">
	    <span ><label><b> Promotion Ending Date: </b></label></span> 
	<input type="date" name="p_proDate" id="p_proDate" required="" class="form-control"/> 
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	</div>


	<!-- <span style="margin-left: 10%"><label><b> Image: </b></label></span> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
	<span style="margin-left: 20%"><input type="file" name="p_image" id="p_image" required="" value="{{$p->p_Img_Name}}" /></span> <br/><br/>
     -->


    <div class="form-group">
	<span style="margin-left: 70%;"><input type="submit" class="btn btn-primary " value="Add Promotion" /></span>
    </div>
</form>
</div>


</body>
</html>




