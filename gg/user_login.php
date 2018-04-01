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
  <title>Welcome | Array</title>

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
                <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active"><a href="user_login.php">Home</a></li>
                <li role="presentation"><a href="user_contact.php">Contact</a></li><!-- -->
              <li><a  class="btn btn-default dropdown-toggle" data-toggle="dropdown">Hello, <?php echo $_SESSION['username']?> !<span class="caret"></span></a>
                  <ul class=" dropdown-menu">
            <li><a href="logout.php"><i class="fa fa-sign-out" style="font-size:18px;color:red;"></i> Log-Out</a></li>
          </ul></li>
      </div>
                <!--<li role="presentation"><a type="button"  data-toggle="modal" data-target="#myModal2">Log-In</a</li>
                <li role="presentation"><a type="button"  data-toggle="modal" data-target="#myModal">Sign-Up</a></li>
                <li role="presentation"><a href="portfolio.html">Portfolio</a></li>-->
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </div>
  </header>

  <div class="slider">
    <div id="about-slider">
      <div id="carousel-slider" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators visible-xs">
          <li data-target="#carousel-slider" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-slider" data-slide-to="1"></li>
          <li data-target="#carousel-slider" data-slide-to="2"></li>
        </ol>

        <div class="carousel-inner">
          <div class="item active">
            <img src="img/slide1.jpg" class="img-responsive" alt="">
            <div class="carousel-caption">
              <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.3s">
                <h2><span>A sophisticated way of planning group goals</span></h2>
              </div>
              <div class="col-md-10 col-md-offset-1">
                <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.6s">
                  <p>WELCOME TO THE GG DECIDING PORTAL</p>
                </div>
              </div>
              <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="1.6s">
                
              </div>

              <!--<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.9s">
              </div>-->
            </div>
          </div>

          <div class="item">
            <img src="img/slide2.jpg" class="img-responsive" alt="">
            <div class="carousel-caption">
              <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.9s">
                <h3 style="font-size:35px; color:white" ><span>“Sometimes, it's better to bunk a class and enjoy with friends, because now, when I look back, marks never make me laugh, but memories do.”</span></h3>
              </div>
              <div class="col-md-10 col-md-offset-1">
                <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.6s">
                  <p> ― Dr. A.P.J. Abdul Kalam </p>
                </div>
              </div>
              <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="1.6s">
                <form class="form-inline">
                
                 <!-- <div class="form-group">
                    <button type="getnow" name="subscribe" class="btn btn-primary btn-lg" required="required">Get Now</button>
                  </div>
                </form>
              </div>-->
            </div>
          </div>
        </div>

        <a class="left carousel-control hidden-xs" href="#carousel-slider" data-slide="prev">
					<i class="fa fa-angle-left"></i>
				</a>

        <a class=" right carousel-control hidden-xs" href="#carousel-slider" data-slide="next">
					<i class="fa fa-angle-right"></i>
				</a>
      </div>
      <!--/#carousel-slider-->
    </div>
    <!--/#about-slider-->
  </div>
  <!--/#slider-->

  <div class="container" style="background-color:white;">
    <div class="jumbotron" style="text-align:center; background-color:white;">
                    <a type="livedemo" name="purchase" class="btn btn-warning btn-lg" href="ajax.php" required="required"> GG POLLING PORTAL</a>
                  </div>
  </div>




  <div class="content">
    <h2><span> This is a portal for Information Technology students for deciding group goal and keeping the records of all group goal.<span></h2>
    <p> A group goal is an activity that all the students decide as a unit, to perform some specific events</p>
  </div>
  <!--<div class="breadcrumb">
   <h4>Recent Works</h4>
  </div>

  <div class="container">
    <div class="row">
      <div class="boxs">
        <div class="col-md-4">
          <div class="wow bounceIn" data-wow-offset="0" data-wow-delay="0.8s">
            <div class="align-center">
              <h4>Quick Support</h4>
              <div class="icon">
                <i class="fa fa-heart-o fa-3x"></i>
              </div>
              <p>
                Voluptatem accusantium doloremque laudantium sprea totam rem aperiam.
              </p>
              <div class="ficon">
                <a href="" alt="">Learn more</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="wow bounceIn" data-wow-offset="0" data-wow-delay="1.3s">
            <div class="align-center">
              <h4>Web Design</h4>
              <div class="icon">
                <i class="fa fa-desktop fa-3x"></i>
              </div>
              <p>
                Voluptatem accusantium doloremque laudantium sprea totam rem aperiam.
              </p>
              <div class="ficon">
                <a href="" alt="">Learn more</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="wow bounceIn" data-wow-offset="0" data-wow-delay="1.3s">
            <div class="align-center">
              <h4>Easy Customize</h4>
              <div class="icon">
                <i class="fa fa-location-arrow fa-3x"></i>
              </div>
              <p>
                Voluptatem accusantium doloremque laudantium sprea totam rem aperiam.
              </p>
              <div class="ficon">
                <a href="" alt="">Learn more</a>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="bg">
        <div class="col-md-4">
          <div class="wow bounceIn" data-wow-offset="0" data-wow-delay="0.8s">
            <div class="align-center">
              <h4>Quick Support</h4>
              <div class="icon">
                <i class="fa fa-heart-o fa-3x"></i>
              </div>
              <p>
                Voluptatem accusantium doloremque laudantium sprea totam rem aperiam.
              </p>
              <div class="ficon">
                <a href="" alt="">Learn more</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="wow bounceIn" data-wow-offset="0" data-wow-delay="1.3s">
            <div class="align-center">
              <h4>Hight Quality</h4>
              <div class="icon">
                <i class="fa fa-laptop fa-3x"></i>
              </div>
              <p>
                Voluptatem accusantium doloremque laudantium sprea totam rem aperiam.
              </p>
              <div class="ficon">
                <a href="" alt="">Learn more</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="wow bounceIn" data-wow-offset="0" data-wow-delay="1.3s">
            <div class="align-center">
              <h4>Easy Customize</h4>
              <div class="icon">
                <i class="fa fa-cloud fa-3x"></i>
              </div>
              <p>
                Voluptatem accusantium doloremque laudantium sprea totam rem aperiam.
              </p>
              <div class="ficon">
                <a href="" alt="">Learn more</a>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>-->

  <div class="breadcrumb">
    <h4>About Us - The IT Department</h4>
  </div>

  <div class="container">
    <div class="row">
      <div class="">
        <div class="col-md-7">
          <div class="wow bounceIn" data-wow-offset="0" data-wow-delay="0.8s">
            <img src="img/nitrr_front_2.jpg" style="width:600px;height:600px" alt="nittr front" class="img-responsive">
          </div>
        </div>
        <div class="col-md-5">
          <div class="wow bounceIn" data-wow-offset="0" data-wow-delay="1.3s">
            <div class="list-group">
              <a href="#" class="list-group-item active">
                <h4 class="list-group-item-heading">Vision of IT</h4>
                <p class="list-group-item-text">To become one of the leading departments of the institute and a distinguished centre of excellence in the region. The Bachelor of Technology in Information Technology program is designed to provide its graduates a solid educational foundation on which they can build successful and sustainable career in Information Technology or a related field.
                </p>
              </a>
              <div class="list-group-item">
                <h4 class="list-group-item-heading">Mission </h4>
                <p class="list-group-item-text">The mission of the Department of Information Technology is to serve the society by preparing undergraduate students for professional practice as successful engineers, by providing continuing education opportunities and by making original contributions to the art of engineering.
                </p>
              </div>
              <div class="list-group-item">
                <h4 class="list-group-item-heading">Year of Establishment</h4>
                <p class="list-group-item-text"> Year : 2000
                </p>
              </div>
              <div class="list-group-item">
                <h4 class="list-group-item-heading">Yearly Intake of Students </h4>
                <p class="list-group-item-text">92
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="image2">
            <div class="wow bounceIn" data-wow-offset="0" data-wow-delay="1.3s">
              <img src="img/nitrr_gate.jpg" alt="nitrr gate" class="img-responsive" style="align-center" >
  </div>
  <!--<div class="container">
    <div class="row">
      <div class="">
        <div class="col-md-4">
          <div class="wow bounceIn" data-wow-offset="0" data-wow-delay="0.8s">
            <div class="list-group">
              <a href="#" class="list-group-item active">
                <h4 class="list-group-item-heading">List group item heading</h4>
                <p class="list-group-item-text">praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias
                </p>
              </a>
              <div class="list-group-item">
                <h4 class="list-group-item-heading">Modern interface</h4>
                <p class="list-group-item-text">praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias
                </p>
              </div>
              <div class="list-group-item">
                <h4 class="list-group-item-heading">Easy customize</h4>
                <p class="list-group-item-text">praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias
                </p>
              </div>
              <div class="list-group-item">
                <h4 class="list-group-item-heading">Modern design</h4>
                <p class="list-group-item-text">praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-8">
          <div class="image">
            <div class="wow bounceIn" data-wow-offset="0" data-wow-delay="1.3s">
              <img src="img/nitrr_gate.jpg" alt="" class="img-responsive">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>-->


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
            <!--<div class="copyright">
              <p>&copy;Resi Theme - All right reserved.</p>
              <div class="credits">
                <!--
                  All the links in the footer should remain intact. 
                  You can delete the links only if you purchased the pro version.
                  Licensing information: https://bootstrapmade.com/license/
                  Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Resi
                
                <a href="https://bootstrapmade.com/bootstrap-education-templates/">Bootstrap Education Themes</a> by <a href="https://bootstrapmade.com/">BootstrapMade</a>-->
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </footer>
  <!--end footer-->


  <div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Sign-Up</h4>
      </div>
      <div class="modal-body">
         <form class="form-horizontal" action=" " method="post">
    <div class="form-group">
      <label for="fname" class="control-label col-sm-4">First-Name:</label>
      <div class="col-sm-4"><input class="form-control" type="text" placeholder="First Name" id="fname" name="firstname" required/></div>
    </div>
    <div class="form-group">
      <label for="lname" class="control-label col-sm-4">Last-Name:</label>
      <div class="col-sm-4"><input class="form-control" type="text" placeholder="Last Name" id="lname" name="lastname" required/></div>
    </div>
    <div class="form-group">
      <label for="email" class="control-label col-sm-4">E-Mail:</label>
      <div class="col-sm-4"><input class="form-control" type="text" placeholder="E-Mail Id" id="email" name="email" required/></div>
    </div>
    <div class="form-group">
      <label for="dob" class="control-label col-sm-4">Roll No:</label>
      <div class="col-sm-4"><input class="form-control" type="text" placeholder="Roll No" id="username" name="username" required/></div>
    </div>
    
    <div class="form-group">
      <label for="password" class="control-label col-sm-4">Password:</label>
    <div class="col-sm-4">
      <input class="form-control" type="password" placeholer="Password" id="password" name="password" required/></div>
    </div>
    <div class="form-group">
      <label for="password" class="control-label col-sm-4">Confirm-Password:</label>
    <div class="col-sm-4">
      <input class="form-control" type="password" placeholer="Password" id="password" name="cpassword" required/></div>
    </div>
    <div class="form-group">        
    </div>
  <div class="form-group">        
      <div class="col-sm-offset-4 col-sm-2">
        <button type="submit" class="btn btn-success">Register</button>
      </div>
    <div class="col-sm-2">
        <button type="reset" class="btn btn-success">Reset</button>
      </div>
    </div>
  <div class="form-group">
  <div class="col-sm-offset-4 col-sm-4">
  </div></div>
  </form>
  </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>

  <div id="myModal2" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Log-In</h4>
      </div>
      <div class="modal-body">
    <form class="form-horizontal" method="post">
    <div class="form-group">
      <label for="email" class="control-label col-sm-4">User Name</label>
      <div class="col-sm-4"><input class="form-control" type="text" placeholder="User Name" id="email" name="username" required/></div>
    </div>
    <div class="form-group">
      <label for="password" class="control-label col-sm-4">Password:</label>
    <div class="col-sm-4">
      <input class="form-control" type="password" placeholer="Password" id="password" name="password" required/></div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-4 col-sm-4">
        <div class="checkbox">
          <label><input type="checkbox" name="remember"> Remember me</label>
        </div>
      </div>
    </div>
  <div class="form-group">        
      <div class="col-sm-offset-4 col-sm-2">
        <button type="submit" class="btn btn-success">Log-in</button>
      </div>
    <div class="col-sm-2">
        <button type="reset" class="btn btn-warning">Reset</button>
      </div>
    </div>
  <div class="form-group"></div>
  </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
    

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="js/jquery-2.1.1.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.min.js"></script>
  <script src="js/responsive-slider.js"></script>
  <script src="js/wow.min.js"></script>
  <script>
    wow = new WOW({}).init();
  </script>

</body>

</html>
