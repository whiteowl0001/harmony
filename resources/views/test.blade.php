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
        <div class="item active">
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
        <div class="item">
          <img class="img-responsive center-block" src="img/mural1.jpg" alt="...">
          <div class="carousel-caption">
            ...
          </div>
        </div>
          <div class="item">
          <img class="img-responsive center-block" src="images/interior/wallpaper-removal/wallpaper-removal.jpg" alt="...">
          <div class="carousel-caption">
            ...
          </div>
        </div>
          <div class="item">
          <img class="img-responsive center-block" src="images/mural/artist-wall/artist-wall4.jpg" alt="...">
          <div class="carousel-caption">
            ...
          </div>
        </div>
           <div class="item">
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
