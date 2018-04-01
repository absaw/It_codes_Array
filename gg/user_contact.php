<?php
  session_start();
  if(!isset($_SESSION['username'])) 
    header('location:http://localhost/udaan/login.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="shortcut icon" href="loginpic.jpg" type="image/x-icon">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Contact | Array</title>

  <link href="css/bootstrap.min.css" rel="stylesheet">
  
  <link href="css/responsive-slider.css" rel="stylesheet">
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link href="css/style.css" rel="stylesheet">
  
</head>

<body>
  <header>
    <div class="container">
      <div class="row">
        <nav class="navbar navbar-default" role="navigation">
          <div class="container-fluid">
            <div class="navbar-header">
              <div class="navbar-brand">
                <a href="user_login.php"><h1>Array !</h1></a>
              </div>
            </div>
            <div class="menu">
              <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active"><a href="user_login.php">Home</a></li>
                <li role="presentation"><a href="user_contact.php">Contact</a></li>
          <li>
              <a class="btn btn-default dropdown-toggle" data-toggle="dropdown">Hello, <?php echo $_SESSION['username']?>  <span class="caret"></span></a>
                  <ul class=" dropdown-menu">
            <li><a href="logout.php"><i class="fa fa-sign-out" style="font-size:18px;color:red;"></i> Log-Out</a></li>
          </ul></li>
      
               <!-- <li role="presentation"><a href="login.php">Log In</a></li>
                <li role="presentation"><a href="signup.php">Sign Up</a></li>
                <li role="presentation"><a href="portfolio.html">Portfolio</a></li>-->
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </div>
  </header>

  <div class="container">
    <div class="col-lg-6">
      <div id="sendmessage">Your message has been sent. Thank you!</div>
      <div id="errormessage"></div>
      <form action="" method="post" role="form" class="contactForm">
        <div class="form-group">
          <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
          <div class="validation"></div>
        </div>
        <div class="form-group">
          <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
          <div class="validation"></div>
        </div>
        <div class="form-group">
          <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
          <div class="validation"></div>
        </div>
        <div class="form-group">
          <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
          <div class="validation"></div>
        </div>

        <div class="text-center"><button type="submit" class="btn btn-default">Send Message</button></div>
      </form>

    </div>
    <div class="col-lg-6">
      <h3 style="text-align:center;">Find us on Google Maps</h3><hr width="30%" align="center"/><br/>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3718.5489569646165!2d81.60284041466524!3d21.24972718557445!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a28dde213f66723%3A0x21543965c50c43c7!2sNational+Institute+Of+Technology+Raipur!5e0!3m2!1sen!2sin!4v1518869390367" width="100%" height="450" frameborder="1" style="border:0" allowfullscreen></iframe>
		</div>
    </div>
  </div>

  

  <hr>

  <!--start footer-->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="widget">
            <h5 class="widgetheading">About Us</h5>
            <p>We are a an ambitious group of individual striving to give our users an amazing experience

            </p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="widget">
            <h5 class="widgetheading">Pages</h5>
            <ul class="link-list">
              <li><a href="user_login.php">HOME</a></li>
              <!--<li><a href="#">Terms and conditions</a></li>
              <li><a href="#">Privacy policy</a></li>
              <li><a href="#">Career center</a></li>-->
              <li><a href="user_contact.php">Contact us</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="widget">
            <h5 class="widgetheading">Latest posts</h5>
            <ul class="link-list">
              <li><a href="#">You are using the latest version of the portal.</a></li>
              <!--<li><a href="#">Pellentesque et pulvinar enim</a></li>
              <li><a href="#">Natus error sit voluptatem </a></li>-->
            </ul>
          </div>
        </div>

      </div>
    </div>

    <div class="sub-footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <ul class="social-network">
              <li><a href="#" data-placement="top" title="Facebook"><i class="fa fa-facebook fa-1x"></i></a></li>
              <li><a href="#" data-placement="top" title="Twitter"><i class="fa fa-twitter fa-1x"></i></a></li>
              <li><a href="#" data-placement="top" title="Linkedin"><i class="fa fa-linkedin fa-1x"></i></a></li>
              <li><a href="#" data-placement="top" title="Pinterest"><i class="fa fa-pinterest fa-1x"></i></a></li>
              <li><a href="#" data-placement="top" title="Google plus"><i class="fa fa-google-plus fa-1x"></i></a></li>
            </ul>
          </div>
          <div class="col-lg-12">
            
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </footer>
  <!--end footer-->

  <script src="js/jquery-2.1.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD8HeI8o-c1NppZA-92oYlXakhDPYR7XMY"></script>
  <script src="js/responsive-slider.js"></script>
  <script src="js/wow.min.js"></script>
  <script>
    wow = new WOW({}).init();
  </script>
  
  <script src="contactform/contactform.js"></script>

</body>

</html>
