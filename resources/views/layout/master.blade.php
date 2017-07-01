<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>@yield('title')</title>
    <meta name="description" content="@yield('description')">
    <meta name="google-site-verification" content="E79bmhBqLo3q-COSq7-VtWtnYj9dm2IgLEm9Y-6op7Y" />
    <!-- Bootstrap -->

   
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/font-awesome.min.css">

	<link href="css/responsive.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<script src="https://use.fontawesome.com/ad5057c19b.js"></script>
	
    <!-- =======================================================
        Theme Name: Gp
        Theme URL: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-templat/
        Author: BootstrapMade
        Author URL: https://bootstrapmade.com
    ======================================================= -->  
    
  </head>
   <body class="homepage"> 
  	<header id="home">
		<section class="top-nav hidden-xs">
			<div class="container">
				<div class="row">
				    <div class="col-lg-6 col-md-6 logo-img">
						<img src="img/logo.jpg" >
					</div>
					<div class="col-lg-6 col-md-6">
					    <div class="top-right">
					    	<ul>
							<li><p>Servicing:<span>New Jersey, Essex and Bergen County</span></p></li>
							<li><u>Phone Number:<a href="tel:201-556-8222"> (201)-566-8222</a></u></li>
							<li><r>Licened and Insured</r></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!--main-nav-->

		<div id="main-nav">
			<nav class="navbar">
				<div class="container">
					<div class="navbar-header">
						<div class="navbar-toggle row mobile-header">
							<div class="col-xs-2">
							<a href="tel:201-556-8222"><i class="fa fa-phone-square fa-3x"></i></a>
							</div>
								<div class="col-xs-2">
							<img class="mobile-logo" src="img/logo-transparent-1.png" >
							</div>
								<div class="col-xs-3">
							<img class="mobile-logo-text" src="img/logo-transparent-2.png" >
										</div>
								<div class="col-xs-2 col-xs-offset-3">
							<button type="button" class="mobile-device collapsed" data-toggle="collapse" data-target="#ftheme">
								<span class="sr-only">Toggle</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							</div>
						</div>
					</div>

					<div class="navbar-collapse collapse" id="ftheme">

						<ul class="nav navbar-nav navbar-inner">
							<li><a href="/">Home</a></li>
							<li><a href="/service">Services</a></li>
							<li><a href="/project">Projects</a></li>
							<li><a href="/video-tutorial">Video Tutorial</a></li>
							<li><a href="/testimonial">Ratings and Reviews</a></li>

						<!--	<li><a href="/contact">Contact</a></li>
						<!--	<li class="hidden-sm hidden-xs">
	                            <a href="#" id="ss"><i class="fa fa-search" aria-hidden="true"></i></a>
	                        </li> -->
						</ul>
					</div>
				</div>
			</nav>
		</div>
	</header>

@yield('content')
	<div class="top-bar">
		<div class="container">
			<div class="row">
			    <div class="col-lg-12">
				   <div class="social">
						<ul class="social-share">
							<li><a href="https://www.facebook.com/harmonypaintingnj/"><i class="fa fa-facebook fa-2x"></i></a></li>
							<li><a href="https://www.youtube.com/channel/UCt4FK6bizuOsAe7ZegrWa8g"><i class="fa fa-youtube fa-2x"></i></a></li>
							<li><a href="https://www.yelp.com/biz/harmony-painting-nutley"><i class="fa fa-yelp fa-2x"></i></a></li>
						</ul>
				   </div>
                </div>
			</div>
		</div><!--/.container-->
	</div><!--/.top-bar-->
	<footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    &copy; Harmony Painting. All Rights Reserved.
                    <div class="credits">
                        <!-- 
                            All the links in the footer should remain intact. 
                            You can delete the links only if you purchased the pro version.
                            Licensing information: https://bootstrapmade.com/license/
                            Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Gp
                        -->
                        <a href="#">Web Design</a> by <a href="#">Kevin Morales</a>
                    </div>
                </div>
                <div class="col-sm-4 ">
                    <div class="col-md-4 col-sm-4 col-xs-4">
                    	<a href="http://www.homeadvisor.com/rated.HarmonyPaintingLLC.60133895.html">
                        <img src="images/site-logos/toprated.png" class="img-responsive">
                        </a>
                    </div><!--/.col-md-3-->

                </div>
<!--
                <div class="col-sm-4">
                    <ul class="pull-right">
                        <li><a href="/">Home</a></li>
                        <li><a href="/contact">Contact Us</a></li>
                    </ul>
                </div> -->
            </div>
        </div>
    </footer><!--/#footer-->
    <script src="js/bootstrap.min.js"></script>
</body>

</html>
