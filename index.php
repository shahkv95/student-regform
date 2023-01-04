<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Leaf Drive Academy</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/LeafDrive2.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

 <style>
   table, td {
  border: 1px solid black;
}
   </style>
</head>

<body>

  <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container-fluid">
        
      <div id="logo" class="pull-left">
          <h1>
              <img src="img/LeafDrive2.png" width="87.125px" height="35.375px" >
        <a href="#intro" class="scrollto"> Leaf Drive</a></h1>
      
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#intro">Home</a></li>
          
          <li><a href="#services">Student</a></li>
         
          
          <li><a href="#contact">Contact</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <!--==========================
    Intro Section
  ============================-->
  <section id="intro">
    <div class="intro-container">
      <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <div class="carousel-item active">
            <div class="carousel-background"><img src="img/intro-carousel/1.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>MAKHDUM HUSSAIN</h2>
                <p>REALIZE EDUCATION IN REAL SENSE</p>
                <a href="#featured-services" class="btn-get-started scrollto">Get Started</a>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="img/intro-carousel/2.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>MIHIR PARMAR</h2>
                <p>Leaf Drive Quote 2</p>
                <a href="#featured-services" class="btn-get-started scrollto">Get Started</a>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="img/intro-carousel/3.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Leaf Drive Member 3</h2>
                <p>Leaf Drive Quote 3</p>
                <a href="#featured-services" class="btn-get-started scrollto">Get Started</a>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="img/intro-carousel/4.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Leaf Drive Member 4</h2>
                <p>Leaf Drive Quote 4</p>
                <a href="#featured-services" class="btn-get-started scrollto">Get Started</a>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="img/intro-carousel/5.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Leaf Drive Member 5</h2>
                <p>Leaf Drive Quote 5</p>
                <a href="#featured-services" class="btn-get-started scrollto">Get Started</a>
              </div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
    </div>
  </section><!-- #intro -->

  <main id="main">

    

    

    <!--==========================
      Student Registration Form
    ============================-->
    <section id="services">
      <div class="container">

        <header class="section-header wow ">
          <h3>Student Registration Form</h3>
          <p>Students are requested to fill up the given form carefully.</p>
        </header>



        <form method="POST" action="connect.php">




        <div class="row">

          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-people-outline"></i></div>
            <h4 class="title"><a href="">Name</a></h4>
            <p class="description">Please enter Full name</p>
          
            <div class="input-group" style="margin-left: 60px">
              <input class="input--style-1" type="text" placeholder="First Name" name="Fname" style="margin-bottom: 5px" required="">
              <input class="input--style-1" type="text" placeholder="Last Name" name="Lname" style="margin-bottom: 5px" required="">
              
          </div>
            
          </div>




          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-bookmarks-outline"></i></div>
            <h4 class="title"><a href="">BOD / Gender</a></h4>
            <p class="description">Please choose the your correct birthdate</p>

            <div class="input-group" style="margin-left: 60px">
              <input class="input--style-1 js-datepicker" type="date" placeholder="BIRTHDATE" name="birthday" required="">
              
              </div>
              </br>
                <div style="margin-left: 60px">
              <input type="radio" name="gender" value="male" checked="true"> Male
              <input type="radio" name="gender" value="female"> Female
              <input type="radio" name="gender" value="other"> Other 
          </div>


          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-paper-outline"></i></div>
            <h4 class="title"><a href="">Permanent Address</a></h4>
            <p class="description">Please Enter your Permanent Address</p>

            <div class="input-group" style="margin-left: 60px">
              <input class="input--style-1" type="text" placeholder="Permanent Add" name="PAddress" style="margin-bottom: 5px" required="">
              <input class="input--style-1" type="text" placeholder="City/State/Zip" name="PAcity" style="margin-bottom: 5px" required="">
              <input class="input--style-1" type="text" placeholder="Country of Residence" name="PAcountry" required="">
              
          </div>
        


          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-speedometer-outline"></i></div>
            <h4 class="title"><a href="">Email Address</a></h4>
            <p class="description">Please provide your email address to stay udpated.</p>

            <div class="input-group" style="margin-left: 60px">
              <input class="input--style-1" type="email" placeholder="Email id" name="Email" style="margin-bottom: 5px ; width: 200px" required="">
              <input class="input--style-1" type="email" placeholder="Alternate Email id, if any" name="AEmail" style="width: 200px">
          </div>

          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-barcode-outline"></i></div>
            <h4 class="title"><a href="">Cell Phone Number</a></h4>
            <p class="description">Please enter your cell phone number to be contacted</p>
            <div class="input-group" style="margin-left: 60px">
              <input class="input--style-1" type="number" placeholder="Number" name="Cnumber" style="margin-bottom: 5px ; width: 220px" required="">
              <input class="input--style-1" type="number" placeholder="Alternate Number, if any" name="ACnumber" style="width: 220px">
          </div>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-people-outline"></i></div>
            <h4 class="title"><a href="">College Name</a></h4>
            <p class="description">Please enter present College Name</p>

            <div class="input-group" style="margin-left: 60px">
              <input class="input--style-1" type="text" placeholder="College Name" name="CName" style="margin-bottom: 5px" required="">
              <input class="input--style-1" type="text" placeholder="City/State" name="CCity" style="margin-bottom: 5px" required="">
              <input class="input--style-1" type="number" placeholder="Zip" name="CZip">
              
          </div>

          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-people-outline"></i></div>
            <h4 class="title"><a href="">Parent Name</a></h4>
            <p class="description">Please enter Parent name</p>
          
            <div class="input-group" style="margin-left: 60px">
              <input class="input--style-1" type="text" placeholder="Parent Name" name="PFname" style="margin-bottom: 5px" required="">
              
          </div>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-barcode-outline"></i></div>
            <h4 class="title"><a href="">Parent Contact Number</a></h4>
            <p class="description">Please enter your parent contact number</p>
            <div class="input-group" style="margin-left: 60px">
              <input class="input--style-1" type="number" placeholder="Number" name="PCNumber" style="margin-bottom: 5px ; width: 220px" required="">
              <input class="input--style-1" type="number" placeholder="Alternate Number, if any" name="PACNumber" style="width: 220px">
          </div>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-speedometer-outline"></i></div>
            <h4 class="title"><a href="">Parent Email Id</a></h4>
            <p class="description">Please provide your parent email address</p>

            <div class="input-group" style="margin-left: 60px">
              <input class="input--style-1" type="email" placeholder="Email id" name="PEmail" style="margin-bottom: 5px ; width: 200px" required="">
              <input class="input--style-1" type="email" placeholder="Alternate Email id, if any" name="PAEmail" style="width: 200px">
          </div>
          </div>
        </div>

      </div>
    </section>

    <!--==========================
     Submit Button Section
    ============================-->
    <section id="call-to-action" class="wow fadeIn">
      <div class="container text-center">
        <h3>Final Check</h3>
        <p> The team of Leaf Drive Academy give you one more chance to check your details properly. Once sent, it would be possible to change again.</p>
        <input type="submit" name="Submit" value="submit">
      </div>
    </section><!-- #call-to-action -->




     </form>

    

    <!--==========================
      Contact Section
    ============================-->
    <!--
    <section id="contact" class="section-bg wow ">
      <div class="container">

        <div class="section-header">
          <h3>Contact Us</h3>
          <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
        </div>

        <div class="row contact-info">

          <div class="col-md-4">
            <div class="contact-address">
              <i class="ion-ios-location-outline"></i>
              <h3>Address</h3>
              <address>102, Swastik Chambers, Opp. Kailash Sweets, Nr. Gokul Juice Center, Timaliyawad, Surat - 395 001, India </address>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-phone">
              <i class="ion-ios-telephone-outline"></i>
              <h3>Phone Number</h3>
              <p><a href="tel:+155895548855">+91 8866066301</a></p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-email">
              <i class="ion-ios-email-outline"></i>
              <h3>Email</h3>
              <p><a href="mailto:info@example.com">info@leafdrive.com</a></p>
            </div>
          </div>

        </div>

        <div class="form">
          <div id="sendmessage">Your message has been sent. Thank you!</div>
          <div id="errormessage"></div>
          <form action="" method="post" role="form" class="contactForm">
            <div class="form-row">
              <div class="form-group col-md-6">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validation"></div>
              </div>
              <div class="form-group col-md-6">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validation"></div>
              </div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
              <div class="validation"></div>
            </div>
            <div class="text-center"><button type="submit">Send Message</button></div>
          </form>
        </div>

      </div>
    </section>
  </main>

 
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-6 col-md-6 footer-info">
            <h3>Leaf Drive</h3>
            <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus. Scelerisque felis imperdiet proin fermentum leo. Amet volutpat consequat mauris nunc congue.</p>
          </div>

          

          <div class="col-lg-6 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p>
              102, Swastik Chambers, Opp. Kailash Sweets,<br>
              Nr. Gokul Juice Center, Timaliyawad, Surat - 395 001<br>
              India <br>
              <strong>Phone:</strong> +91 8866066301<br>
              <strong>Email:</strong> info@leafdrive.com<br>
            </p>

            <div class="social-links">
              <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
              <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
              <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
            </div>

          </div>

          

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>Leaf Drive</strong>. All Rights Reserved
      </div>
      <div class="credits">
        
        Designed by <a href="https://bootstrapmade.com/">Kush Shah</a>
      </div>
    </div>
  </footer>

-->
  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
 
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/isotope/isotope.pkgd.min.js"></script>
  <script src="lib/lightbox/js/lightbox.min.js"></script>
  <script src="lib/touchSwipe/jquery.touchSwipe.min.js"></script>
  
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

  <!-- Jquery JS-->
  <script src="lib/jquery/jquery.min.js"></script>
  <!-- lib JS-->
  <script src="lib/select2/select2.min.js"></script>
  <script src="lib/datepicker/moment.min.js"></script>
  <script src="lib/datepicker/daterangepicker.js"></script>

  <!-- Main JS-->
  <script src="js/global.js"></script>










</body>
</html>
