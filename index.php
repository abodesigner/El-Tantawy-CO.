<?php

  // Check if user coming from A request
  if($_SERVER[REQUEST_METHOD] == 'POST'){

    // Assign variables
    $fName = filter_var($_POST['firstName'],FILTER_SANITIZE_STRING);
    $lName = filter_var($_POST['lastName'] ,FILTER_SANITIZE_STRING);
    $mail  = filter_var($_POST['email']    ,FILTER_SANITIZE_EMAIL);
    $msg   = filter_var($_POST['message']  ,FILTER_SANITIZE_STRING);

    $fNameError = '';
    $msgError   = '';

    // Create array of Errors
    $formErrors = array();
      if(strlen($fName) < 3){
        $formErrors[] = 'First Name should not be less than <strong>3</strong> chars';
      }

      if(strlen($msg) < 10){
        $formErrors[] = 'Your messgae should be at least <strong>10</strong> chars';
      }

      //If No errors mail function with work
      $headers = 'From: ' . $mail . '\r\n';
      $myEmail = 'mohammed.abosalim@gmail.com';
      $subject = 'Contact Form';

      if (empty($formErrors)){

        mail($myEmail, $subject, $msg, $headers);

          $fName = '';
          $lName = '';
          $mail  = '';
          $msg   = '';
      }}

 ?>




<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" name="description">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" name="description">
    <meta name="viewport" content="width=device-width, initial-scale=1" name="description">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>EL Tantawy CO.</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Add animate.css file -->
    <link rel="stylesheet" type="text/css" href="css/animate.min.css">

    <!-- Add hover.css file -->
    <link rel="stylesheet" type="text/css" href="css/hover.css">

    <!-- Add Fontawsome Icons file -->
    <link href="css/all.css" type="text/css" rel="stylesheet"> <!--load all styles -->

    <!-- Add style.css file -->
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <!-- Add media.css file -->
    <link rel="stylesheet" type="text/css" href="css/media.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  	<!-- Start Navbar -->
  	<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">EL Tantawy CO</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li class="active hvr-pop"><a href="#" data-scroll="slider" aria-label="slider">HOME<span class="sr-only">(current)</span></a></li>
            <li><a href="#" data-scroll="about" class="hvr-pop" aria-label="about">ABOUT</a></li>
            <li><a href="#" data-scroll="projects" class="hvr-pop" aria-label="projects">PROJECTS</a></li>
            <li><a href="#" data-scroll="clients" class="hvr-pop" aria-label="clients">CLIENTS</a></li>
            <li><a href="#" data-scroll="contact" class="hvr-pop" aria-label="contactus">CONTACT US</a></li>
          </ul>
          <div class="support">
              <a class="arabic" href="index-rtl.html" target="_self">عربى</a>
          </div>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
    <!-- End Navbar -->

    <!-- Start Slider Section -->
    <div id="slider" class="carousel slide carousel-fade owl-carousel owl-theme" data-ride="carousel" data-interval="3000">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#slider" data-slide-to="0" class="active"></li>
        <li data-target="#slider" data-slide-to="1"></li>
        <li data-target="#slider" data-slide-to="2"></li>
        <li data-target="#slider" data-slide-to="3"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <div class="item active" role="option">
          <img src="images/img-11.jpg" alt="image 1">
          <div class="carousel-caption">
            <h1>GET FRESH MEATS FROM OUR FARM TO YOUR TABLE!</h1>
          </div>
        </div>
        <div class="item" role="option">
          <img src="images/img-2.jpg" alt="image 2">
        </div>
        <div class="item" role="option">
          <img src="images/img-3.jpg" alt="image 3">
          <div class="carousel-caption">
            <h2>Sudan is the world food basket & Food is a life bond</h2>
          </div>
        </div>
        <div class="item" role="option">
          <img src="images/img-4.jpg" alt="image 4">
        </div>
      </div>

      <!-- Controls -->
      <a class="left carousel-control" href="#slider" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#slider" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    <!-- End Slider Section -->

    <!-- Start AboutUs Section -->
    <section id="about">
      <div class="container">
        <div class="row">
          <div class="col-md-3 hidden-xs">
            <div class="imgBlock">
              <img src="images/11.jpeg" alt="imgBlock" class="img-responsive wow bounceInLeft" data-wow-duration="1.9s">
            </div>
          </div>
          <div class="col-md-9">
            <div class="contBlock wow slideInDown" data-wow-duration="2s">
              <h2 class="who">WHO WE ARE?</h2>
              <hr>
              <p>Al-Tantawy International Investment CO. is a Sudanese company with Arab and international expertise for the production and processing of organic agriculture of international quality crops, fresh natural meat.</p>

              <p>The current demand for Sudanese meat, including beef, is especially in the Egyptian market since the beginning of the work issued by the company Tantawy to Egypt since 2011 to reach the volume of supplies until 2016 to the extent and quality appropriate and commensurate gradually with the development of the time of the company and projects and the increased demand for products Altantawi.</p>

              <p>The date of the actual presence of work in Sudan starting in 2005 is not far away, but it carries many experiences and self-development stations towards achieving economic objectives in the short term, in parallel with the achievement of developmental and social goals.</p>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-9">
            <div class="contBlock wow slideInLeft" data-wow-duration="2s">
               <h2 class="why">WHY US?
                <small>reasons to visit our company</small>
               </h2>
               <hr>
              <p> - The view of Tantawi International Development and Investment Co. Ltd., based in Khartoum, State of Sudan, crystallized the importance of the agriculture and livestock sector for all now as a source of food and to fill the global food gap, especially the Arab world, estimated at 60 million tons worth 25 billion dollars annually over the past decade to 82 million tons. In 2025, it exceeded $ 50 billion, and a source of raw materials, which is the cornerstone of the economies of many developed countries and some of them as a major source of national income.</p>
              <br>
              <p> - Tantawy's global policy is to develop accurate market strategy studies by diversifying the direct sales base of its products and forming a large and strong portfolio of customers to build a permanent presence through its dynamic products with a high demand for flexible targeting of many Arab and Gulf markets, Which imports 80-90% of their food needs.</p>
            </div>
          </div>
          <div class="col-md-3 hidden-xs">
            <div class="imgBlock">
              <img src="images/profits.png" alt="imgBlock" class="img-responsive wow jello" data-wow-duration="2s" data-wow-delay="2s">
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-3 hidden-xs">
            <div class="imgBlock">
              <img src="images/creative.png" alt="vision" class="img-responsive wow slideInLeft" data-wow-duration="2s">
            </div>
          </div>
          <div class="col-md-9">
            <div class="contBlock wow slideInRight" data-wow-duration="2s">
               <h2 class="vision">Our Vision</h2>
               <hr>
              <p>- Therefore, a business map has been developed to achieve the maximum achievement of these objectives. This necessitates the development of specialized feasibility studies and the formation of adequate administrative structures and systems, supported by the gathering of highly qualified scientific and academic expertise and practical and operational expertise. In support of the production and processing of meat and agricultural production.</p>
              <p>
                - The current demand for Sudanese meat, including beef, is especially in the Egyptian market since the beginning of the work issued by the company Tantawy to Egypt since 2011 to reach the volume of supplies until 2016
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End AboutUs Section -->

    <!-- Start Projects Section -->
    <section id="projects">
      <h1 class="text-center">Our Projects</h1>
        <div class="ourprojects">
          <div class="container">
            <div class="row">
              <div class="col-md-4 col-xs-12">
                <div class="proj text-center wow slideInRight" data-wow-duration="1.5s">
                  <img src="images/tree64.png" alt="tree">
                  <h4><strong>Agriculture Investment</strong></h4>
                  <p>Al-Tantawi International Investment Company has been a pioneer in the export of strategic Sudanese sesame seeds of quality and international demand, especially to Egypt, Saudi Arabia, Syria and Lebanon.</p>
                  <span><a href="agriculture.html" aria-label="agriculture section">READ MORE</a></span>
                </div>
              </div>

              <div class="col-md-4 col-xs-12 hvr-wobble-horizontal">
                <div class="proj text-center wow slideInDown" data-wow-duration="1.5s">
                  <img src="images/cow64.png" alt="tree">
                  <h4><strong>Animal Production</strong></h4>
                  <p>Al-Tantawi International Investment Company has been a pioneer in the export of strategic Sudanese sesame seeds of quality and international demand, especially to Egypt, Saudi Arabia, Syria and Lebanon.</p>
                  <span><a href="livestock.html" aria-label="livestock section">read more</a></span>
                </div>
              </div>

              <div class="col-md-4 col-xs-12 hvr-bounce-in">
                <div class="proj text-center wow slideInLeft" data-wow-duration="1.5s">
                  <img src="images/wagon64.png" alt="tree">
                  <h4><strong>Mining and quarrying</strong></h4>
                  <p>Al-Tantawi International Investment Company has been a pioneer in the export of strategic Sudanese sesame seeds of quality and international demand, especially to Egypt, Saudi Arabia, Syria and Lebanon.</p>
                  <span><a href="mining.html" aria-label="minig section">read more</a></span>
                </div>
              </div>
            </div>
        </div>
      </div>
    </section>
    <!-- End Projects Section -->

    <!-- Start ContactUs Section -->
    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-lg-12">
            <h1>Contact us <small>We are always waiting for you</small></h1>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="row">
            <div class="col-md-8">
              <form id="target" class="contact-form" action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">

                  <?php if(!empty($formErrors)){ ?>
                  <div class="alert alert-danger alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  <?php
                    foreach ($formErrors as $error) {
                      echo $error . '<br>';
                      }
                      ?>
                      </div>
                    <?php } ?>

                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="fname">First Name</label>
                      <input
                            type="text"
                            class="firstname form-control"
                            id="fname"
                            placeholder="Enter first name"
                            required="required"
                            name="firstName"
                            value="<?php if (isset($fName)) { echo $fName; } ?>" />
                      <span class="astrixs">*</span>
                      <div class="alert alert-danger custom-alert" role="alert">
                        First Name should not be less than <strong>3</strong> character.
                      </div>
                    </div>

                     <div class="form-group">
                       <label for="sname">Last Name</label>
                       <input
                            type="text"
                            class="lastname form-control"
                            id="lname"
                            placeholder="Enter last name"
                            required="required"
                            name="lastName"
                            value="<?php if(isset($lName)) { echo $lName; }?>" />
                       <span class="astrixs">*</span>
                       <div class="alert alert-danger custom-alert" role="alert">
                         Last Name should not be less than <strong>3</strong> character.
                       </div>
                     </div>

                    <div class="form-group">
                      <label for="email">Email</label>
                      <div class="input-group">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
                        <input
                              type="email"
                              class="email form-control"
                              id="email"
                              placeholder="Enter email"
                              required="required"
                              name="email"
                              value="<?php if(isset($mail)) { echo $mail; }?>" />
                        </div>
                        <span class="astrixs">*</span>
                        <div class="alert alert-danger custom-alert" role="alert">
                          Email should be conatins <strong>@</strong> character.
                        </div>
                    </div>

                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="message">Message</label>
                      <textarea name="message" id="message" class="message form-control" rows="9" cols="25" required="required"
                      placeholder="Write Message"><?php if(isset($msg)) { echo $msg; }?></textarea>

                      <div class="alert alert-danger custom-alert" role="alert">
                        Your messgae should be at least <strong>10</strong> chars.
                      </div>
                    </div>


                  </div>
                  <div class="col-md-12">
                    <button type="submit" class="btn btn-warning pull-right" id="btnContactUs">
                      Send Message
                    </button>
                  </div>
                </div>
              </form>
            </div>
            <div class="col-md-4">
                <form class="address">
                <legend><span class="glyphicon glyphicon-globe"></span><strong> Main Office</strong></legend>
                <address>
                    <strong>ElTantawy, Inc.</strong><br>
                    <i class="fas fa-map-marker" title="marker-icon"></i>
                    32 Mahmoud mohamed sharif St, Elmanshia Zone, Square 25,
                    khartoum - Sudan.<br>
                </address>

                <i class="fas fa-phone" title="phone-icon"></i><span> (002) 49183523711</span>

                <address>
                    <a href="mailto:#" class="email"><i class="fas fa-at" aria-label="email-icon"></i> chairman@altantawy.co</a>
                </address>
                </form>
            </div>
        </div>
      </div>
    </section>
    <!-- End ContactUs Section -->

    <!-- Start Clients Section -->
    <section id="clients">
      <div class="container">
        <h1 class="text-center">Our Client</h1>
        <div class="row">
          <div class="col-md-2 col-xs-12"><img src="images/metro.png" alt="metro" class="img-responsive"></div>
          <div class="col-md-2 col-xs-12"><img src="images/beem.jpg" alt="beem" class="img-responsive"></div>
          <div class="col-md-2 col-xs-12"><img src="images/kazyoiun.jpg" alt="kazyoiun" class="img-responsive"></div>
          <div class="col-md-2 col-xs-12"><img src="images/Carrefour.jpg" alt="Carrefour" class="img-responsive"></div>
          <div class="col-md-2 col-xs-12"><img src="images/zahran.jpg" alt="zahran" class="img-responsive"></div>
          <div class="col-md-2 col-xs-12"><img src="images/hyperone.jpg" alt="hyperone" class="img-responsive"></div>
        </div>
      </div>
    </section>
    <!-- End Clients Section -->

    <!-- Start Footer section -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="links">
            <div class="col-md-3">
              <h5>Main Navigation</h5>
              <ul>
                <li><a href="#" aria-label="home link">HOME</a></li>
                <li><a href="#" aria-label="about link">ABOUT</a></li>
                <li><a href="#" aria-label="projects link">PROJECTS</a></li>
                <li><a href="#" aria-label="clients link">CLIENTS</a></li>
                <li><a href="#" aria-label="contact link">CONTACT US</a></li>
              </ul>
            </div>
            <div class="col-md-3"><h5>Support</h5>
              <ul>
                <li><a href="#" aria-label="terms of service link">Terms of service</a></li>
                <li><a href="#" aria-label="security link">Security</a></li>
                <li><a href="#" aria-label="privacy link">Privacy Policy</a></li>
                <li><a href="#" aria-label="siteMap link">Site Map</a></li>
              </ul>
            </div>
            <div class="col-md-3"><h5>Album</h5>
              <ul>
                <li><a href="#" aria-label="agriculture album link">Agriculture</a></li>
                <li><a href="#" aria-label="livestock album link">Livestock Production</a></li>
                <li><a href="#" aria-label="mining album link">Mining</a></li>
              </ul>
            </div>
            <div class="col-md-3"><h5>Contacts</h5>
              <div class="bottomLinks">
                <ul>
                  <li><a href="" aria-label="whatsapp-icon"><i class="fab fa-whatsapp-square fa-2x" id="whatsapp" title="whatsapp-icon"></i></a></li>
                  <li class="social"><a href="#" aria-label="facebook-icon"><i class="fab fa-facebook-square fa-2x" id="fb" title="facebook-icon"></i></a></li>
                  <li class="social"><a href="#" aria-label="instagram-icon"><i class="fab fa-instagram fa-2x" id="inst" title="intagram-icon"></i></a></li>
                  <li class="social"><a href="#" aria-label="twitter-icon"><i class="fab fa-twitter-square fa-2x" id="tw" title="twitter-icon"></i></a></li>
                  <li class="social"><a href="#" aria-label="youtube-icon"><i class="fab fa-youtube-square fa-2x" id="yt" title="youtube-icon"></i></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- End Footer section -->




    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>


    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Include fontawsome for SVG & JS -->


    <!-- Include WOW.js file -->
    <script src="js/wow.min.js"></script>
    <script>
      new WOW().init();
    </script>

    <script src="js/main.js"></script>
  </body>
</html>
