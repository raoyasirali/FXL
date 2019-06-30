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
     
<div style="width: 30%;height: 500px;margin-top:50px;border: solid 2px grey;border-radius: 10px;" class="container">
<form action="../update/{{$p->id}}" method="post" enctype="multipart/form-data">
	<div class="form-group">
		<!-- <br/> -->
	    <span style="margin-left: 20%;font-size: 30px;color: Black;"><b> Update Product</b></span><br/>
		<div id="err" style="color: red"></div>	

    </div>
<br/>	
		
	<div class="form-group">
	<label><b> Item Name: </b></label>&nbsp  &nbsp
	<input type="text" name="p_name" id="p_name"  class="form-control" required="" value="{{$p->p_Name}}" onkeyup="
  var start = this.selectionStart;
  var end = this.selectionEnd;
  this.value = this.value.toUpperCase();
  this.setSelectionRange(start, end);
"/> </div>
	
	<div class="form-group">
	    <span ><label><b> Price: </b></label></span>
	<input type="text" name="p_price" id="p_price"  class="form-control" required="" value="{{$p->p_Price}}"/> 
	
	<input type="hidden" name="b_id" value='<?= $value ?>'>
	</div>

	<div class="form-group">
	    <span ><label><b> Description: </b></label></span> 
	<input type="text" name="p_description" id="p_description" class="form-control"  required="" value="{{$p->p_Desc}}" /> 
	</div>


	<div class="form-group">
	   <span ><label><b> Category: </b></label></span> &nbsp &nbsp
	<select id="p_category" name="p_category"  class="form-control" value="{{$p->c_id}}">
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
					</select></span> 
    </div> 

	
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<!-- <span style="margin-left: 10%"><label><b> Image: </b></label></span> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
	<span style="margin-left: 20%"><input type="file" name="p_image" id="p_image" required="" value="{{$p->p_Img_Name}}" /></span> <br/><br/>
     -->


    <div class="form-group">
	<span style="margin-left: 72%"><input type="submit" class="btn btn-primary " value="Update Item" /></span>
    </div>
</form>
</div>
<br/><br/><br/>

</body>
</html>




