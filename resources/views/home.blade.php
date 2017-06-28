@extends('layout.master')
@section('title')
    Harmony Painting | Nutley NJ, 07110
@stop

@section('description')
    Need an amazing Painting Contractor in New Jersey? Harmony Painting provides Exterior, Interior, 
    and Mural services in your area. 
@stop
@section('content')
	
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
    <li data-target="#carousel-example-generic" data-slide-to="4"></li>
    <li data-target="#carousel-example-generic" data-slide-to="5"></li>
  </ol>

  <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        <div class="item adjust active">
          <img class="img-responsive center-block" src="images/mural/school/mural-school2.jpg" alt="...">
          <div class="carousel-caption">
            ...
          </div>
        </div> 
        <div class="item">
          <img class="img-responsive center-block" src="images/interior/interior1.jpg" alt="...">
          <div class="carousel-caption">
            ...
          </div>
        </div>
        <div class="item">
          <img class="img-responsive center-block" src="img/updated-outdoor-stairs.jpg" alt="...">
          <div class="carousel-caption">
            ...
          </div>
        </div>
        <div class="item adjust">
          <img class="img-responsive center-block" src="img/mural1.jpg" alt="...">
          <div class="carousel-caption">
            ...
          </div>
        </div>
          <div class="item ">
          <img class="img-responsive center-block" src="images/interior/wallpaper-removal/wallpaper-removal.jpg" alt="...">
          <div class="carousel-caption">
            ...
          </div>
        </div>
          <div class="item adjust">
          <img class="img-responsive center-block" src="images/mural/artist-wall/artist-wall4.jpg" alt="...">
          <div class="carousel-caption">
            ...
          </div>
        </div>
           <div class="item adjust">
          <img class="img-responsive center-block" src="images/exterior/fence/fence3.jpg" alt="...">
          <div class="carousel-caption">
            ...
          </div>
        </div>
    </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

    
	 <section id="feature" >
        <div class="container">
           <div class="center wow fadeInDown">
                <h2>About Us</h2>
                <p class="lead">At Harmony Painting, LLC, we pride ourselves on perfection, efficiency, and credibility. 
                    We understand the dilemma of allowing unfamiliar faces into your home, that disrupt from your daily routine.
                    At Harmony, you are getting the owner of the company on every job site, with a crew of trusted craftsman, to 
                    handle creating the look and feel you desire for your homes latest upgrades. Quality craftsmanship and attention 
                    to detail is our priority.
                </p>
            </div>
<!--
            <div class="row">
                <div class="features">
                    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <a href="#"><i class="fa fa-building"></i></a>
                            <h2>Commercial Painting</h2>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <a href="#"><i class="fa fa-home"></i></a>
                            <h2>Residential Painting</h2>
                            <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit</h3>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <a href="#"><i class="fa fa-paint-brush"></i></a>
                            <h2>Finish and Stains</h2>
                            <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit</h3>
                        </div>
                    </div>
                </div>
            </div>
           --> 
            <div id="about" class="row">
                <div class="col-lg-6 col-md-6">
                    <img class="about-img" src="images/profile/justin.jpg">
                    <h2>Joe Pellegrino</h2>
                    <p>Interior/Exterior Specialist.</p>
                </div>
                <div class="col-lg-6 col-md-6">
                    <img class="about-img" src="images/profile/monica.jpg">
                    <h2>Monica Aramayo</h2>
                    <p>Murals and Design.</p>
                </div>
            </div>
        </div><!--/.container-->
    </section><!--/#feature-->
	

    <section id="middle">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 wow fadeInDown">
                    <div class="skill">
                        <h2>Our Skills</h2>
                        <div class="progress-wrap">
                            <h3>Painting - Interior and Exterior</h3>
                    
                        </div>
                        <div class="progress-wrap">
                           
                            <h3> Commercial and Residential Painting</h3>
                            
                        </div>
                        <div class="progress-wrap">
                            
                            <h3>Wallpaper removal</h3>
                            
                        </div>
                        <div class="progress-wrap">
                            
                            <h3>All styles of finish and stains</h3>
                            
                        </div>
                        <div class="progress-wrap">
                            
                            <h3>Murals and design</h3>
                            
                        </div>
                        <div class="progress-wrap">
                            
                            <h3>Dry Wall and Plaster Repair</h3>
                            
                        </div>
                    </div>

                </div><!--/.col-sm-6-->

                <div class="col-sm-6 wow fadeInDown">
                    <div class="accordion">
                        <h2>Ratings & Reviews</h2>
  <div id="rating-home">
    <div class="container">
        <div class="row">
            <div class="t-stars-small">
                <i class="fa fa-star fa-2x" aria-hidden="true"></i>
                <i class="fa fa-star fa-2x" aria-hidden="true"></i>
                <i class="fa fa-star fa-2x" aria-hidden="true"></i>
                <i class="fa fa-star fa-2x" aria-hidden="true"></i>
                <span itemprop="ratingValue">
                   4.0
                </span>
                <span class="t-text-lite">&nbsp;&nbsp;|&nbsp;&nbsp;<span itemprop="datePublished">06-05-2017</span></span>
            </div>
            <div class="profile-user-review-body">
                <div class="t-heavy">
                    <div>
                        <strong>Review by</strong>
                        <span class="review-by-colon is-hidden">:</span>
                        <span itemprop="author"> James G. in Verona, NJ </span>
                        
                    </div>
                    <div>
                        <strong>Project:</strong>
                        Paint, Varnish or Stain Interior Surfaces
                    </div>
               </div>
               <div class="profile-user-review-content">
                  <span itemprop="reviewBody">Arrived on time. Worked hard. Cleaned up at end of day.</span>
               </div>
            </div>
        </div>
    </div>
</div>
<div id="rating-home">
    <div class="container">
        <div class="row">
            <div class="t-stars-small">
                <i class="fa fa-star fa-2x" aria-hidden="true"></i>
                <i class="fa fa-star fa-2x" aria-hidden="true"></i>
                <i class="fa fa-star fa-2x" aria-hidden="true"></i>
                <i class="fa fa-star fa-2x" aria-hidden="true"></i>
                <i class="fa fa-star fa-2x" aria-hidden="true"></i>
                <span itemprop="ratingValue">
                   5.0
                </span>
                <span class="t-text-lite">&nbsp;&nbsp;|&nbsp;&nbsp;<span itemprop="datePublished">06-05-2017</span></span>
            </div>
            <div class="profile-user-review-body">
                <div class="t-heavy">
                    <div>
                        <strong>Review by</strong>
                        <span class="review-by-colon is-hidden">:</span>
                        <span itemprop="author">Ron F. in Saddle River, NJ </span>
                    </div>
                    <div>
                        <strong>Project:</strong>
                       Refinish Already Installed Cabinets
                    </div>
               </div>
               <div class="profile-user-review-content">
                  <span itemprop="reviewBody">Great customer service. I have already recommended them to family and friends.</span>
               </div>
            </div>
        </div>
    </div>
</div>
                    </div>
                </div>

            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#middle-->
    <!--
	<div class="">
       	<div id="google-map" data-latitude="40.827901" data-longitude="-74.148721"></div>
    </div><!--/#bottom-->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.js"></script>
    <!--<script src="js/bootstrap.min.js"></script>-->
    <script src="https://maps.google.com/maps/api/js?sensor=true"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>   
    <script src="js/wow.min.js"></script>
	<script src="js/main.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script>
  $('.carousel').carousel({
   interval: 2500
  });
 </script> 
    @stop