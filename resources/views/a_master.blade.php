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
  <nav class="navbar navbar-expand-lg navbar-light " style="background-color: #984B17;height: 60px">
   
  <div class="collapse navbar-collapse" >
    <a class="navbar-brand" href="{{URL::to('a_menu')}}"><img src="logo.png" height="60px" width="150px"></a>
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0" style="margin-left: 170px;margin-top: -20px">
      <li class="nav-item " style="margin-top: 20px">
        <a href="a_menu" class="btn btn-secondary" style="font-size: 18px;color: white" >Home</a>
        <a href="b_signup_request" class="btn btn-secondary" style="font-size: 18px;color: white" >View SignUp Requests</a>
        <a href="https://mailtrap.io/inboxes/518208/messages/1073103072" class="btn btn-secondary" style="font-size: 18px;color: white" >View Feed Back</a>
        <a href="c_details_pdf" class="btn btn-secondary" style="font-size: 18px;color: white" >View Customer Details</a>
        <a href="b_details_pdf" class="btn btn-secondary" style="font-size: 18px;color: white" >View Business Details</a>
        <a href="viewSales" class="btn btn-secondary" style="font-size: 18px;color: white" >View Sales</a>
        <a href="a_login" class="btn btn-secondary" style="font-size: 18px;color: white" >Logout</a>
      </li>
      <!-- <li class="nav-item" style="margin-top: 20px;margin-left: 20px">
        <a class="" href="#"><p style="font-size: 20px;color: white">About Us</p></a>
      </li>
      <li class="nav-item" style="margin-top: 20px;margin-left: 20px">
        <a class=" " href="#"><p style="font-size: 20px;color: white">Login</p></a>
      </li> -->
    </ul>
    <!-- <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-primary" type="submit">Search</button>
    </form> -->
  </div>
</nav>

</head>
<body>
    
     <div class="container">
        
        @yield('content') 

      </div>


<!-- <div class="alert alert-info">
    <strong>Info!</strong> This alert box could indicate a neutral informative change or action.
  </div> -->
<div class="footer">
   
  <div>
  <!-- <img src="fb.png"> &nbsp&nbsp<img src="email.png"> --><br/><br/>
  <p>©FoodXPress 2019- All Rights Reserved  </p>
    </div>
  
</div>
</body>
</html>