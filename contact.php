<!DOCTYPE html>
<html lang="en">
<head>
    
    <link rel="icon"  type="image/png" sizes="16×16" href="images/leaf_logo2.png">
    <meta charset="UTF-8">
    <!-- Meta Veiwport -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Edge Compatability -->
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <!-- Title -->
     <title>SureGrowth Digital Solutions - Web Development/Graphic Design/Digital Marketing and more</title>
     <!-- Meta Description -->
     <meta name="description" content=" Web development and othe digital solutions made easy and affordable with SureGrowth Digital Solutions" >
     <!-- Meta Keyword -->
     <meta name="keywords" content="web dev, website development, web development, affordable website, cheap website, website for small business, html5, css, javascrips, jquery, graphic design, logo, company logo, digital marketing, marketing, design, digital design, digital, digital soultions, sure growth, suregrowth, sure, growth, grow, grow business, website development company, web development company, web dev company, graphic design company, digital marketing company, marketing company, web dev business, web development business, graphic design business, need company logos, get logo made, get website made, make a website, build a website, easy website, suregrowth digital solutions, solutions, web presence, online presence, run my shopify, run my wix, run my wordpress, managme websites, manage cms, cms, content managment, content managment site, manage website, web hosting, special offers, discounts, discount on digital services, discounts on web development, should I hire a web developer, hire a web developer, hire developer, website developer, how to make a website, "
     
<!--

DIGITAL TREND

https://templatemo.com/tm-538-digital-trend

-->

     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/font-awesome.min.css">
     <link rel="stylesheet" href="css/aos.css">
     <link rel="stylesheet" href="css/owl.carousel.min.css">
     <link rel="stylesheet" href="css/owl.theme.default.min.css">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="css/templatemo-digital-trend.css">

</head>
<body>

     <!-- MENU BAR -->
    <nav class="navbar navbar-expand-lg position-absolute">
        <div class="container">
          <a class="navbar-brand" href="index.html">
               <img src="images/leaf_logo.png" width="30" height="6" class="img-fluid" alt="leaf icon">
             SureGrowth <strong>Digital Solutions</strong>
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="index.html#about" class="nav-link">Solutions</a>
                    </li>
                    <li class="nav-item">
                        <a href="index.html#project" class="nav-link">Services</a>
                    </li>
                    <li class="nav-item">
                        <a href="growth.html" class="nav-link">Growth</a>
                    </li>
                    <li class="nav-item">
                        <a href="contact.php" class="nav-link active contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


     <!-- CONTACT -->
     <?php

if(isset($_POST{'submit'})) {
	
	$name = $_POST['name'];
	$mailFrom = $_POST['mail'];
	$message = $_POST['message'];
	
	$mailTo = "team@suregrowthdigital.com";
	$headers = "From: ".$mailFrom;
	$txt = "You have received an email from ".$name.".\n\n".$message;
	
	mail($mailTo, $txt, $headers);
	header("location: contact.php?mailsend");
}

?>
     <section class="contact section-padding">
          <div class="container">
               <div class="row">
                 <div class="col-lg-6 col-12">
                          <div class="hero-image" data-aos="fade-up" data-aos-delay="300">

                            <img src="images/working-girl2.png" class="img-fluid" alt="web development logo">
                          </div>
                        </div>
                    <div class="col-lg-6 mx-auto col-md-7 col-12 py-5 mt-5 text-center" data-aos="fade-up">

                      <h1 class="mb-4"> <br><br> Hey there, Let's <strong>talk</strong> about ways to <strong>grow</strong> your business </h1>

                      <p>Feel free to use the contact form below to reach us. You can also reach us by calling or texting 303 630 9095, or at our email <a href="mailto:team@suregrowthdigital.com">team@suregrowthdigital.com</a></p>
                     <!-- <p>Please follow our <a rel="nofollow" href="https://templatemo.com/contact">contact page</a> to <strong>setup</strong> the contact form.</p>-->
                    </div>

                    <div class="col-lg-8 mx-auto col-md-10 col-12">
                    
                    <!-- Follow https://templatemo.com/contact page to setup your own contact form -->
                    
                      <form action= "contact.php" method="post" class="contact-form"   data-aos="fade-up" data-aos-delay="300" role="form">
                        <div class="row">
                          <div class="col-lg-6 col-12">
                            <input type="text" class="form-control" name="name" placeholder="Name">
                          </div>

                          <div class="col-lg-6 col-12">
                            <input type="text" class="form-control" name="mail" placeholder="Email">
                          </div>

                          <div class="col-lg-12 col-12">
                            <textarea name= "message" class="form-control" rows="6" placeholder="Message"></textarea>
                          </div>

                          <div class="col-lg-5 mx-auto col-7">
                            <button type="submit" class="form-control" id="submit-button" name="submit">Send Message</button>
                          </div>
                        </div>

                      </form>
                    </div>

               </div>
          </div>
     </section>

<!-- How to change your own map point
	1. Go to Google Maps
	2. Click on your location point
	3. Click "Share" and choose "Embed map" tab
	4. Copy only URL and paste it within the src="" field below
-->
     


            <footer class="site-footer">
      <div class="container">
        <div class="row">

          <div class="col-lg-5 mx-lg-auto col-md-8 col-10">
            <h1 class="text-white" data-aos="fade-up" data-aos-delay="100"> &nbsp;&nbsp;  <img src="images/leaf_logo.png" width="35" height="8" class="img-fluid" alt="leaf icon">  <strong>SureGrowth</strong>
                <br>Let's <strong>grow</strong> together.</h1>
          </div>

          <div class="col-lg-3 col-md-6 col-12" data-aos="fade-up" data-aos-delay="200">
            <h4 class="my-4">Contact Info</h4>

            <p class="mb-1">
              <i class="fa fa-phone mr-2 footer-icon"></i> 
              303 630 9095
            </p>

            <p>
              <a href="mailto:team@.suregrowthdigital.com">
                 <h5><i class="fa fa-envelope mr-2 footer-icon"></i> team@suregrowthdigital.com</h5>
              
              </a>
            </p>
            <p>
              <a href="mailto:support@.suregrowthdigital.com">
                 <h5><i class="fa fa-envelope mr-2 footer-icon"></i>support@suregrowthdigital.com</h5>
              </a>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 col-12" data-aos="fade-up" data-aos-delay="300">
            <h4 class="my-4">Located Out of</h4>

            <p class="mb-1">
              <i class="fa fa-home mr-2 footer-icon"></i> 
              Denver, Colorado, <br> &emsp; &nbsp; United States
            </p>
          </div>

          <div class="col-lg-4 mx-lg-auto text-center col-md-8 col-12" data-aos="fade-up" data-aos-delay="400">
            <p class="copyright-text">&copy; SureGrowth Digital Solutions <br><br>
            <script type="text/javascript"> //<![CDATA[
             var tlJsHost = ((window.location.protocol == "https:") ? "https://secure.trust-provider.com/" : "http://www.trustlogo.com/");
             document.write(unescape("%3Cscript src='" + tlJsHost + "trustlogo/javascript/trustlogo.js' type='text/javascript'%3E%3C/script%3E"));
             //]]></script>
             <script language="JavaScript" type="text/javascript">
             TrustLogo("https://www.positivessl.com/images/seals/positivessl_trust_seal_sm_124x32.png", "POSDV", "none");
             </script>
            <br>
            </p>
          </div>

          <div class="col-lg-4 mx-lg-auto col-md-6 col-12" data-aos="fade-up" data-aos-delay="500">
            
            <!-- <ul class="footer-link">
              <li><a href="#">Stories</a></li>
              <li><a href="#">Work with us</a></li>
              <li><a href="#">Privacy</a></li>
            </ul> -->
          </div>

          <div class="col-lg-3 mx-lg-auto col-md-6 col-12" data-aos="fade-up" data-aos-delay="600">
            <ul class="social-icon">
              <!--<li><a href="#" class="fa fa-instagram"></a></li>-->
              <li><a href="https://twitter.com/SuregrowthS" class="fa fa-twitter"></a></li>
              <!--<li><a href="#" class="fa fa-facebook"></a></li>-->
              <li><a href="https://www.linkedin.com/company/suregrowth-digital-solutions" class="fa fa-linkedin"></a></li>
            </ul>
          </div> 

        </div>
      </div>
    </footer>


     <!-- SCRIPTS -->
     <script src="contact.php"></script>
     <script src="js/jquery.min.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/aos.js"></script>
     <script src="js/owl.carousel.min.js"></script>
     <script src="js/custom.js"></script>

</body>
</html>
