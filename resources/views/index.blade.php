<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>FoodXpress</title>
  


  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Satisfy|Bree+Serif|Candal|PT+Sans">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  

</head>

<body>
  <!--banner-->
  <section id="banner" style="background-image: url(banner-bg.jpg) ">
    <div class="bg-color">
      
      <div class="container">
        <div class="row">
          <div class="inner text-center">
            <h1 class="logo-name">Food Xpress</h1>
            <h2>Order your favourite Food Online</h2>
            <p>It's the food you love, delivered !!</p>
            
           <div class="contacts-btn-pad">
                <a href="{{URL::to('welcome')}}"><button class="btn btn-secondary" id="partner"><h4><b> Order Food Online</b></h4></button></a>
              </div><br>
            <div class="contacts-btn-pad">
                <a href="{{URL::to('b_login')}}"><button class="btn btn-secondary" id="partner"><h4><b> Partner With Us</b></h4></button></a>
              </div>

          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / banner -->
  <!--about-->
  <section id="about" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center marb-35">
          <h1 class="header-h">About FoodXpress</h1>
          <p class="header-p" style="font-size: 20px">FoodXpress is an online food ordering application currently working in Lahore
            <br>You can order various food and baverages from your surrounding restaurants. </p>
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-10">
          <div class="col-md-6 col-sm-6">
            <div class="about-info">
              <h2 class="heading"><b style="font-size: 30px">Following steps to place an order</b></h2>
              <p></p>
              <div class="details-list">
                <ul>
                  <li style="font-size: 20px"><i> <img src="chk1.png" width="20px" height="20px"></i>Search food of your favourite category</li>
                  <li style="font-size: 20px"><i><img src="chk1.png" width="20px" height="20px"></i>Add items into cart</li>
                  <li style="font-size: 20px"><i ><img src="chk1.png" width="20px" height="20px"></i>Select payment method</li>
                  <li style="font-size: 20px"><i ><img src="chk1.png" width="20px" height="20px"></i>Place an order</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-sm-6">
            <img src="newlogo.png" alt="" class="img-responsive">
          </div>
        </div>
        <div class="col-md-1"></div>
      </div>
    </div>
  </section>
  <!--/about-->
  <!-- event -->
  <section id="event" style="background-image: url(res02.jpg);">
    <div class="bg-color" class="section-padding">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 text-center" style="padding:60px;">
            <h1 class="header-h">Register your business with us!</h1>
            <p class="header-p">Increase in sale upto 100%</p>
          </div>
          <div class="col-md-12" style="padding-bottom:50px;">
            <div class="item active left">
              <div class="col-md-6 col-sm-6 left-images">
                <img src="res02.jpg" class="img-responsive">
              </div>
              <div class="col-md-6 col-sm-6 details-text">
                <div class="content-holder">
                  <h2>Steps to register business</h2>
                  <div class="details-list">
                <ul>
                  <li style="font-size: 20px"><i> <img src="chk2.png" width="20px" height="20px"></i>Search food of your favourite category</li>
                  <li style="font-size: 20px"><i><img src="chk2.png" width="20px" height="20px"></i>Add items into cart</li>
                  <li style="font-size: 20px"><i ><img src="chk2.png" width="20px" height="20px"></i>Select payment method</li>
                  <li style="font-size: 20px"><i ><img src="chk2.png" width="20px" height="20px"></i>Place an order</li>
                </ul>
              </div>
                  
                  <a class="btn btn-imfo btn-read-more" href="events-details.html">Read more</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ event -->
  
  <!-- contact -->
  <section id="contact" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <h1 class="header-h">Report an issue or contact with us</h1>
          <p class="header-p">Send us your valuable feedback or 
            <br>Report an issue our team will shortly contact with you. Thanks </p>
        </div>
      </div>
      <div class="row msg-row">
        <div class="col-md-4 col-sm-4 mr-15">
          <div class="media-2">
            <div class="media-left">
              <div class="contact-phone bg-1 text-center"><span class="phone-in-talk fa fa-phone"></span></div>
            </div>
            <div class="media-body">
              <h4 class="dark-blue regular">Phone Numbers</h4>
              <p class="light-blue regular alt-p">+923234345275 </p>
            </div>
          </div>
          <div class="media-2" >
            <div class="media-left" >
              <div class="contact-email bg-14 text-center"><span class="hour-icon fa fa-clock-o"></span></div>
            </div>
            <div class="media-body">
              <h4 class="dark-blue regular">Opening Hours</h4>
              <p class="light-blue regular alt-p"> 24/7 </p>
              
            </div>
          </div>
        </div>
        <div class="col-md-8 col-sm-8">
          <form action="" method="post" role="form" class="contactForm">
            <div id="sendmessage">Your booking request has been sent. Thank you!</div>
            <div id="errormessage"></div>
            <div class="col-md-6 col-sm-6 contact-form pad-form">
              <div class="form-group label-floating is-empty">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validation"></div>
              </div>

            </div>
            
            <div class="col-md-6 col-sm-6 contact-form pad-form">
              <div class="form-group">
                <input type="email" class="form-control label-floating is-empty" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validation"></div>
              </div>
            </div>
            
            <div class="col-md-6 col-sm-6 contact-form">
              <div class="form-group">
                <input type="text" class="form-control label-floating is-empty" name="phone" id="phone" placeholder="Phone" data-rule="required" data-msg="This field is required" />
                <div class="validation"></div>
              </div>
            </div>
            
            <div class="col-md-12 contact-form">
              <div class="form-group label-floating is-empty">
                <textarea class="form-control" name="message" rows="5" rows="3" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validation"></div>
              </div>

            </div>
            <div class="col-md-12 btnpad">
              <div class="contacts-btn-pad">
                <button class="contacts-btn">Submit</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
  <!-- / contact -->
  <!-- footer -->
  <footer class="footer text-center">
    <div class="footer-top">
      <div class="row">
        <div class="col-md-offset-3 col-md-6 text-center">
          <div class="widget">
            <h4 class="widget-title">FoodXpress</h4>
            <address>SST UMT<br>Lahore, Pakistan</address>
            <div class="social-list">
              <a href="#"><img src="fb.png"></a>
              <a href="#"><img src="email.png"></a>
            </div>
            <p class="copyright clear-float">
              © Food Xpress. All Rights Reserved
              <div class="credits">
                
                Designed by Team FoodXpress
              </div>
            </p>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- / footer -->


</body>

</html>
