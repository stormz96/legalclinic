<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="images/iium1.ico">

    <title>IIUM LEGAL CLINIC</title>

    <!-- Fonts -->
   <link href='http://fonts.googleapis.com/css?family=Raleway:400,800,500,600,300,700' rel='stylesheet' type='text/css'>
    <link href="css/font-awesome.min.css" rel="stylesheet">

    <!-- Styles  CSS-->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
<header class="site-header">
  <div class="header-inner">
    <div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>

<div id="id01" class="modal">

<form class="modal-content animate" action="/action_page.php">
<div class="imgcontainer">
<span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
<img src="images/img_avatar2.png" alt="Avatar" class="avatar">
</div>

<div class="container">
<label for="uname"><b>Username</b></label>
<input type="text" placeholder="Enter Username" name="uname" required>

<label for="psw"><b>Password</b></label>
<input type="password" placeholder="Enter Password" name="psw" required>

<button type="submit">Login</button>
<label>
<input type="checkbox" checked="checked" name="remember"> Remember me
</label>
</div>

<div class="container" style="background-color:#f1f1f1">
<button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
<span class="psw">Forgot Password ? <a href="#"></a></span>
</div>
</form>
</div>
  <a href="#abt">About Us</a>
    <a href="#hours">Working Hours</a>
  <a href="#services">Services</a>
  <a href="expertise.html">List of Expertise</a>
  <a href="#gallery">Gallery</a>
  <a href="contact-us.html">Contact Us</a>
</div>

    <div class="container">
      <div class="row">
        <div class="header-table col-md-12">
          <div class="brand">
            <a href="#">
              <img src="images/logo.png" alt="IIUM">
            </a>
          </div>
            <nav id="nav-wrap" class="main-nav">
              <div id="mobnav-btn"> </div>
              <ul class="sf-menu">
                <li>
                  <a href="contact-us.html">CONTACT  US </a>
                  <div class="mobnav-subarrow"><i class="fa fa-caret-down"></i></div>
                </li>

              <li class="menu-search-bar">
                <a id="search-label"><i class="fa fa-search"></i></a>
                <form class="search-bar" id="searchform">
                  <input type="text"  placeholder="Search" name="s">
                </form>
              </li>
              <li>
                <a class="navbtn1" style="font-size:20px;cursor:pointer" onclick="openNav()">&#9776; </a>
              </li>

            </ul>



          </nav>
        </div>
      </div>
    </div>
  </div>
</header>
<div class="slider-wrapper">
  <div class="fr-slider">
  <div class="fs_loader"></div>

      <div class="slide">
       <img data-fixed class="slide-bg" src="images/slide-04.jpg" alt="Slide">

      <div data-position="190,0" data-in="top" data-delay="1600" class="caption fr-slider-5c">
          IIUM LEGAL CLINIC
      </div>

      <div data-position="240,0" data-in="top" data-delay="1500" class="caption fr-slider-6c">
      "Serving from the heart"
      </div>

      <img data-position="290,0" data-in="right" data-delay="2000" data-ease-in="easeOutQuart" class="caption fr-slider-7c" src="images/checkmark.png" alt="Slide">
      <div data-position="293,45" data-in="left" data-delay="2200" data-ease-in="easeOutQuart" class="caption fr-slider-8c">
          Legal Advice
      </div>


      <img data-position="332,0" data-in="right" data-delay="2300" data-ease-in="easeOutQuart" class="caption fr-slider-7c" src="images/checkmark.png" alt="Slide">
      <div data-position="336,45" data-in="left" data-delay="2500" data-ease-in="easeOutQuart" class="caption fr-slider-8c">
          Legal Representation in Court
      </div>

       <img data-position="373,0" data-in="right" data-delay="2600" data-ease-in="easeOutQuart" class="caption fr-slider-7c" src="images/checkmark.png" alt="Slide">
      <div data-position="377,45" data-in="left" data-delay="2800" data-ease-in="easeOutQuart" class="caption fr-slider-8c">
          Counseling Services
      </div>

    </div>
    <div class="slide">
      <img data-fixed class="slide-bg" src="images/slide-03.jpg" alt="Slide">



      <div data-position="250,465" data-in="top" data-delay="700" data-out="bottom" class="caption fr-slider-11c">
      Have Any Problem ?
      </div>

      <div data-position="280,480" data-in="bottom" data-delay="1500" data-out="bottom" class="caption fr-slider-12c">
      <a href="contact-us.html" class="button fr-slider-13c">Contact Us</a>
      </div>

    </div>
  </div>
</div>
<div id="abt"></div>
<div class="container-about">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
       <h3 class="title-un"><br><br>ABOUT US</h3>
        <p class="title-un-des">
        The clinic provides legal advice to the general public,
        especially to the community of IIUM (staff & students)
        for free. The clinic opens its doors to those in need of
        legal advice. The clinic is run by a panel of consultants
        from the Ahmad Ibrahim Kuliyyah of Laws. It's main aim is
        to provide legal advice and if the need arises will forward
        the cases to a panel of attorneys  attached to the clinic.</p>
      </div>

    </div>
    <div class="container-our-services">
      <h3 class="title-un">OUR OBJECTIVES</h3>
      <div class="container">
        <div class="row">

          <div class="col-lg-4">
            <div class="service-box-la wow fadeInDown animated">
              <div class="service-icon">
                <i class="fa fa-anchor"></i>
              </div>
              <div class="service-info">
                <div class="desc">
                  To provide legal counseling and advice as well as a forum of reference on Malaysian law
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="service-box-la wow fadeInDown animated" data-wow-delay=".2s">
              <div class="service-icon">
                <i class="fa fa-bell-o"></i>
              </div>
              <div class="service-info">
                <div class="desc">
                  To provide legal counseling and consultancy services on all areas of law especially on
                  Islamic law to the community as a whole and the IIUM community in particular
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="service-box-la wow fadeInDown animated" data-wow-delay=".4s">
              <div class="service-icon">
                <i class="fa fa-bicycle"></i>
              </div>
              <div class="service-info">
                <div class="desc">
                  To assist lecturers in upgrading practical knowledge especially in the interpretation
                  of the existing legal provisions so that the law is effectively enforceable
                </div>
              </div>
            </div>
          </div>


        </div>

        <div class="row">

          <div class="col-lg-4">
            <div class="service-box-la wow fadeInDown animated">
              <div class="service-icon">
                <i class="fa fa-slideshare"></i>
              </div>
              <div class="service-info">

                <div class="desc">
                  To provide forum for research among lecturers and anyone interested in expanding laws in Malaysia
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="service-box-la wow fadeInDown animated" data-wow-delay=".4s">
              <div class="service-icon">
                <i class="fa fa-lemon-o"></i>
              </div>
              <div class="service-info">
                <div id="hours" class="desc">
                  To provide a training in legal counseling for law students of IIUM
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
    <div class="container-about-fact">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
           <h3 class="title-un">WORKING HOURS</h3>
            <p class="title-un-des22">ISNIN - KHAMIS : 9.00AM - 1.00PM <br>                          2.00PM - 5.00PM<br><br>JUMAAT             : 9.00AM - 12.30PM<br>                           2.45PM - 5.00PM </p>
          </div>

        </div>
      </div>
    </div>
    <h3 id="services" class="title-un"><br><br><br>SERVICES</h3><BR></BR>
    <div class="row">
      <div class="col-lg-4">
        <div class="service-box-sb wow fadeInDown animated">
          <div class="service-icon">
            <i class="fa fa-lightbulb-o"></i>
          </div>
          <div class="service-info">
            <h5 id="legaladvice">Legal Advice</h5>
            <div class="desc">
              It is an advisory and legal assistance to individuals or groups who face legal problems (Civil & Shariah)
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4" style="border-left:ridge; border-right:ridge;">
        <div class="service-box-sb wow fadeInDown animated" data-wow-delay=".2s">
          <div class="service-icon">
            <i class="fa fa-tablet"></i>
          </div>
          <div class="service-info">
            <h5 id="court">Legal Representation in Court</h5>
            <div class="desc" >
            This is a follow-up service when counseling or advice can not solve the problems of individuals or groups.
            The cases will be brought to the court via panel attorneys proposed by the clinic. It includes :<br><br>
            <li>Marriage and divorce cases</li>
            <li>Child care or custody cases</li>
            <li>Property and other ancillary matters</li>
            <li>Maintenance of wife and child</li>
            <li>Inheritance claims</li>
            <li>Shariah criminal cases</li>


            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="service-box-sb wow fadeInDown animated" data-wow-delay=".4s">
          <div class="service-icon">
            <i class="fa fa-cogs"></i>
          </div>
          <div class="service-info">
            <h5 id="counseling">Counseling Services</h5>
            <div class="desc">
              It provides counseling on legal problems involving Civil and Shariah law
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="container">
  <div class="poster">
    <img src="images/poster.jpg" alt="Legal Clinic Poster" width="500" height="333">
  </div>
</div>
<div class="container-about-fact">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
       <h3 class=""></h3>
        <p id="gallery" class="title-un-des"></p>
      </div>

    </div>
  </div>
</div>
<div class="testimonials-container">
  <h3 class="title-un">GALLERY</h3>
  <div class="container">
    <div class="row">
      <div class="col-lg-12">

        <div id="owl-demo"  class="testimonials owl-carousel">

          <div class="testimonial">

            <img src="images/gallery1.jpg" alt="Photo1" style="width:500px; height:300px;">
            <div class="client">

              <div class="client-info">
                <div class="client-name">
                  "Quality Day 2014"
                </div>
              </div>
            </div>
          </div>
          <div class="testimonial">
            <img src="images/gallery2.jpg" alt="Photo2" style="width:500px; height:300px;">
            <div class="client">

              <div class="client-info">
                <div class="client-name">
                  "SHAS Mosque Carnival 2015"
                </div>
              </div>
            </div>
          </div>
          <div class="testimonial">
            <img src="images/gallery3.jpg" alt="Photo3" style="width:500px; height:300px;">
            <div class="client">

              <div class="client-info">
                <div class="client-name">
                  "Forum Hal Ehwal Islam: Cinta Visa 2015"
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="footer-area-container">
  <div class="container">
    <div class="row">
      <div class="col-lg-3">
        <div class="footer-widget">

        <?php
        /*
if(isset($_POST['name']) && isset($_POST['email']))
  $name = $_POST['name']);
	$email = $_POST['email']);
	echo $name;
	echo $email;

*/
?>

<form action="insert.php" method="post">
  Name:<br>
  <input type="text" name="name" value=""><br>
  Email:<br>
  <input type="text" name="email" value=""><br><br>
  <input type="submit" value="Submit">
</form>
        </div>
      </div>
      <div class="col-lg-3">
        <div class="footer-widget">
          <img class="fotter-logo" src="images/logo.png" alt="">

        </div>
      </div>
      <div class="col-lg-3">
        <div class="footer-widget">
          <p><br>IIUM Legal Clinic<br>
            Ahmad Ibrahim Kuliyyah of Laws,
            International Islamic University Malaysia,
            P.O.BOX 10, 50728 Kuala Lumpur,
            Malaysia</p>
          <p>Email: legalcliniciium@gmail.com</a> <br>
          Tel: 03-61964390</p>
        </div>
      </div>


      </div>


    </div>

  </div>
<div class="footer-holder">
  <div class="container">
    <footer class="site-footer">
      <div class="row">
        <div class="col-lg-12">
        <p>© Copyright KICT, IIUM</p>

        </div>
      </div>
    </footer>
  </div>
</div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/superfish.js"></script>
    <script src="js/jquery.easing.js"></script>
    <script src="js/wow.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.colorbox-min.js"></script>
    <script src="js/jflickrfeed.min.js"></script>
    <script src="js/jquery.fitvids.js"></script>
    <script src="js/jquery-ui-1.10.4.custom.min.js"></script>
    <script src="js/jquery.fractionslider.min.js"></script>
    <script src="js/main.js"></script>
    <script>
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    document.body.style.backgroundColor = "rgba(0,0,0,0.5)";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.body.style.backgroundColor = "white";
}
</script>
<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
  </body>

</html>
