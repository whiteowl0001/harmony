@extends('layout.master')
@section('content')

<div id="main_area">
  <div class="container">
    <h1>Projects</h1>
  	<div class="row">
        <ul class="nav nav-pills nav-stacked">
            <div class="col-md-3">
              <li>
                <a href="#interior" data-slide-to="0" class="thumbnail">
                   <img src="images/interior/interior1.jpg" alt="interior painting"  data-toggle="modal" data-target="#interior-Modal">
                   <h2>Interior</h2>
                </a>
              </li>
              </div>
        </ul>
    </div>
  </div>
</div>

                <!--Interior Modal-->
  <div class="modal fade" id="interior-Modal">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-body">
          <!-- artist wall carousel-->
          <div class="carousel slider" id="interior">
            <ol class="carousel-indicators">
              <li data-target="#interior" data-slide-to="0" class="active"></li>
            </ol>
              <div class="carousel-inner">
                  @foreach ($Images as $index => $Image)
                    <div class="item @if($index == '1'){{'active'}}@endif">
                      <img class="img-responsive center-block" src="/carousel/{{$Image->original_filename}}" alt="...">
                    </div> 
                  @endforeach
              </div><!-- /.carousel-inner -->
             <a class="left carousel-control" href="#interior" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
          </a>
          <a class="right carousel-control" href="#interior" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
          </a>
          </div><!-- /.carousel slider -->
        </div><!-- /.modal-body -->
         <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
 
 
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
