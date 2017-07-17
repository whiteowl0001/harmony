@extends('layout.master')

@section('content')
<div class="video">
    <div class="container">
        <div class="row">
             @foreach ($Videos as $Video)
                <div class="col-sm-4 video-layout">
                   <div class="embed-responsive embed-responsive-16by9">
                          <iframe class="embed-responsive-item"  src="https://www.youtube.com/embed/{{$Video->video_name}}" allowfullscreen></iframe>       
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
<!--             @foreach ($Videos as $Video)
                <div class="col-sm-4 video-layout">
                   <div class="embed-responsive embed-responsive-16by9">
                          <iframe class="embed-responsive-item"  src="https://www.youtube.com/embed/{{$Video->video_name}}" allowfullscreen></iframe>       
                    </div>
                </div>
            @endforeach 
            -->
 <script src="js/jquery.js"></script>
    <!--<script src="js/bootstrap.min.js"></script>-->
    <script src="https://maps.google.com/maps/api/js?sensor=true"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>   
    <script src="js/wow.min.js"></script>
	<script src="js/main.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
   
@stop
