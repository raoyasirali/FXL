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
    <a class="navbar-brand" href="{{URL::to('b_menu')}}"><img src="{{ URL::asset('logo.png') }}" height="60px" width="150px"></a>
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0" style="margin-left: 920px">
      <!-- <li class="nav-item " style="margin-top: 20px">
        <a class="" href="" ><p style="font-size: 20px;color: white">Contact</p> </a>
      </li> -->
      <li class="nav-item" style="margin-top: 20px;margin-left: 20px">
        <a class="" href="#"><p style="font-size: 20px;color: white">Information</p></a>
      </li>
      <li class="nav-item" style="margin-top: 20px;margin-left: 20px">
        <a class=" " href="{{URL::to('b_login')}}"><p style="font-size: 20px;color: white">Logout</p></a>
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
      <div style="width: 550px;height: 40px;float: left;">
    
    <a href="{{URL::to('b_add_p')}}" class="btn btn-secondary">Add Products</a> 
    <a href="{{URL::to('p_view_p')}}" class="btn btn-secondary"  >View Products</a>
    <a href="{{URL::to('b_sales_p')}}"  class="btn btn-secondary"  >View   Sales</a>
    

    </div>
     <div class="container">
      	
      	@yield('content') 

      </div>


<!-- <div class="alert alert-info">
    <strong>Info!</strong> This alert box could indicate a neutral informative change or action.
  </div> -->
<div class="footer">
	 <a href="{{URL::to('feedback')}}"><button class="btn btn-secondary" id="feedback" data-toggle="modal" data-target="#myModal">Report Any Issue</button></a>
	 <!-- <button class="btn btn-secondary" id="contact">Contact</button> -->
	<div>
  <a href="https://facebook.com/"><img src="{{ URL::asset('fb.png')}}"></a> &nbsp&nbsp<a href="https://accounts.google.com/signin/v2/identifier?service=mail&passive=true&rm=false&continue=https%3A%2F%2Fmail.google.com%2Fmail%2F&ss=1&scc=1&ltmpl=default&ltmplcache=2&emr=1&osid=1&flowName=GlifWebSignIn&flowEntry=ServiceLogin"><img src="{{ URL::asset('email.png')}}"></a>
  <p>©FoodXPress 2019- All Rights Reserved  </p>
    </div>
  
</div>
</body>
</html>