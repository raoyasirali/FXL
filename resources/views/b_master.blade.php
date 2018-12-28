<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<style type="text/css">
  .footer {
  position: fixed;
  left: 0;
  bottom: 0;
  width: 100%;
  height: 100px;
  background-color: #984B17;
  color: white;
  text-align: center;
}
 a{
  text-decoration: none;
}

</style>
  <nav class="navbar navbar-expand-lg navbar-light " style="background-color: #984B17;height: 50px">
   
  <div class="collapse navbar-collapse" >
    <a class="navbar-brand" href=""><img src="logo.png" height="60px" width="150px"></a>
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0" style="margin-left: 920px">
      <!-- <li class="nav-item " style="margin-top: 20px">
        <a class="" href="" ><p style="font-size: 20px;color: white">Contact</p> </a>
      </li> -->
      <li class="nav-item" style="margin-top: 20px;margin-left: 20px">
        <a class="" href="#"><p style="font-size: 20px;color: white">Information</p></a>
      </li>
      <li class="nav-item" style="margin-top: 20px;margin-left: 20px">
        <a class=" " href="#"><p style="font-size: 20px;color: white">Login</p></a>
      </li>
    </ul>
    <!-- <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-primary" type="submit">Search</button>
    </form> -->
  </div>
</nav>

</head>
<body>
      <div style="width: 150px;height: 220px;border:solid thin black;float: left;">
    <!-- <a href="" class="a" >Current Orders</a> </br></br> -->
    <a href="b_add_p"  class="w3-button w3">Add Product</a>    </br>
    <a href="#"  class="w3-button w3-blue" >Delete Product</a></br>
    <a href="p_view_p"  class="w3-button w3-blue" >View Products</a></br>
    <a href="#"  class="w3-button w3-blue" >Update Product</a></br></br>
    <!-- <a href=""  class="a" >View Sales</a></br></br> -->

    </div>
     <div class="container">
      	
      	@yield('content') 

      </div>


<!-- <div class="alert alert-info">
    <strong>Info!</strong> This alert box could indicate a neutral informative change or action.
  </div> -->
<div class="footer">
	 <button class="btn btn-secondary" id="feedback" data-toggle="modal" data-target="#myModal">Feedback</button>
	 <button class="btn btn-secondary" id="contact">Contact</button>
	<div>
  <img src="fb.png"> &nbsp&nbsp<img src="email.png">
  <p>©FoodXPress 2019- All Rights Reserved  </p>
    </div>
  
</div>
</body>
</html>