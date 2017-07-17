@extends('layout.master')
@section('content')
	
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
      @foreach( $Images as $Image )
         <li data-target="#carousel-example-generic" data-slide-to="{{ $loop->index }}" class="{{ $loop->first ? 'active' : '' }}"></li>
      @endforeach
  </ol>

  <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        @foreach ($Images as $Image)
            <div class="item {{ $loop->first ? ' active' : '' }}">
              <img class="img-responsive center-block" src="/carousel/{{$Image->original_filename}}" alt="...">
              <div class="carousel-caption">
                ...
              </div>
            </div> 
        @endforeach
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
