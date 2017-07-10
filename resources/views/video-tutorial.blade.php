@extends('layout.master')

@section('content')
<div class="video">
    <div class="container">
        <div class="row">
            <div class="col-sm-4 video-layout">
               <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item"  src="https://www.youtube.com/embed/OSK3mQpPvxg?rel=0" allowfullscreen></iframe>       
                </div>
            </div>
            <div class="col-sm-4 video-layout">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" width="560" height="315" src="https://www.youtube.com/embed/Gz51ciTi4ZA?rel=0" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
 <script src="js/jquery.js"></script>
    <!--<script src="js/bootstrap.min.js"></script>-->
    <script src="https://maps.google.com/maps/api/js?sensor=true"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>   
    <script src="js/wow.min.js"></script>
	<script src="js/main.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
   
@stop
