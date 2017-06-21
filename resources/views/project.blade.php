@extends('layout.master')
@section('content')
	<link href="css/custom.css" rel="stylesheet">

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
            <div class="col-md-3">
              <li>
                <a  href="#exterior-fence" data-slide-to="0" class="thumbnail">
                  <img src="images/exterior/exterior-fence.jpg" alt="fence staining" data-toggle="modal" data-target="#exterior-fence-Modal">
                  <h2>Exterior Fence</h2>
                </a>
              </li>
            </div>
            <div class="col-md-3">
              <li>
                <a href="#wallpaper-removal" data-slide-to="0" class="thumbnail">
                  <img src="images/interior/wallpaper-removal/wallpaper-removal.jpg" alt="wallpaper removal"  data-toggle="modal" data-target="#wallpaper-removal-Modal">
                  <h2>Wallpaper Removal</h2>
                </a>
              </li>
            </div>
            <div class="col-md-3">
               <li>
                <a href="#commercial-wallpaper-removal"  data-slide-to="0" class="thumbnail">
                   <img src="images/interior/wallpaper-removal/commercial/commercial-wallpaper-removal.jpg" alt="Commercial wallpaper removal" data-toggle="modal" data-target="#commercial-wallpaper-removal-Modal">
                   <h2>Wallpaper Removal Commercial</h2>
                </a>
              </li>
           </div>
             <div class="col-md-3">
               <li>
                <a href="#fence"  data-slide-to="0" class="thumbnail">
                   <img src="images/exterior/fence/fence3.jpg" alt="power wash fence" data-toggle="modal" data-target="#fence-Modal">
                   <h2>Power Wash Stain Fence</h2>
                </a>
              </li>
           </div>
            <div class="col-md-3">
               <li>
                <a href="#patio-fence"  data-slide-to="0" class="thumbnail">
                   <img src="images/exterior/patio-fence/patio-fence.jpg" alt="patio and fence" data-toggle="modal" data-target="#patio-fence-Modal">
                   <h2>Patio and Fence</h2>
                </a>
              </li>
           </div>
            <div class="col-md-3">
               <li>
                <a href="#nursery"  data-slide-to="0" class="thumbnail">
                   <img src="images/interior/nursery-room/nursery-room.jpg" alt="painted nursery" data-toggle="modal" data-target="#nursery-Modal">
                   <h2>Boy's Nursey Room</h2>
                </a>
              </li>
           </div>
            <div class="col-md-3">
               <li>
                <a href="#justin"  data-slide-to="0" class="thumbnail">
                   <img src="images/profile/justin.jpg" alt="younge girls room painted" data-toggle="modal" data-target="#justin-Modal">
                   <h2>Young Girls Room</h2>
                </a>
              </li>
           </div>
            <div class="col-md-3">
               <li>
                <a href="#cabinet-condo"  data-slide-to="0" class="thumbnail">
                   <img src="images/interior/cabinet-condo-restoration/cabinet-condo-14.png" alt="condo painting" data-toggle="modal" data-target="#cabinet-condo-Modal">
                   <h2>Cabinet restoration and condo flip</h2>
                </a>
              </li>
           </div>
        </ul>
    </div>
  </div>
</div>

                <!--Interior Modal-->
  <div class="modal fade" id="interior-Modal">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-body">
          <!-- artist wall carousel-->
          <div class="carousel slider" id="interior">
            <ol class="carousel-indicators">
              <li data-target="#interior" data-slide-to="0" class="active"></li>
            </ol>
            <div class="carousel-inner">
     
                               <!--Interior 2:images-->
            <div class="item active">
              <div class="row">
                <div class="col-md-12 col-sm-12">
                  <img  class="img-responsive" src="images/interior/interior1.jpg" alt="First slide">
                </div>
              
              </div>
            </div>
            <div class="item">
              <div class="row">
                <div class="col-md-12 col-xs-12">
              <img  class="img-responsive" src="images/interior/interior.jpg" alt="First slide">
                    </div>
               
              </div>
            </div>
             <div class="item">
              <div class="row">
                <div class="col-md-12 col-sm-12">
              <img  class="img-responsive" src="images/interior/interior-3.jpg" alt="First slide">
                    </div>
               
              </div>
            </div>
              </div><!-- /.carousel-inner -->
             <a class="left carousel-control" href="#interior" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
          </a>
          <a class="right carousel-control" href="#interior" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
          </a>
          </div><!-- /.carousel slider -->
        </div><!-- /.modal-body -->
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
  
                                   <!--Exterior Fence Modal-->
  <div class="modal fade" id="exterior-fence-Modal">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-body">
          <!-- artist wall carousel-->
          <div class="carousel slider" id="exterior-fence">
            <ol class="carousel-indicators">
              <li data-target="#exterior-fence" data-slide-to="0" class="active"></li>
            </ol>
            <div class="carousel-inner">
     
                               <!--Exterior Fence 2:images-->
            <div class="item active">
              <div class="row">
                <div class="col-md-8 col-md-offset-2">
              <img  class="img-responsive" src="images/exterior/exterior-fence.jpg" alt="Second slide">
                    </div>
              </div>
            </div>
             <div class="item">
              <div class="row">
                <div class="col-md-8 col-md-offset-2">
              <img  class="img-responsive" src="images/exterior/exterior-fence1.jpg" alt="Second slide">
                    </div>
               
              </div>
            </div>
             <div class="item">
              <div class="row">
                <div class="col-md-8 col-md-offset-2">
              <img  class="img-responsive" src="images/exterior/exterior-fence2.jpg" alt="Second slide">
                    </div>
              
              </div>
            </div>
             <div class="item">
              <div class="row">
                <div class="col-md-8 col-md-offset-2">
              <img  class="img-responsive" src="images/exterior/exterior-fence3.jpg" alt="Second slide">
                    </div>
             
              </div>
            </div>
             <div class="item">
               <div class="row">
                <div class="col-md-8 col-md-offset-2">
              <img  class="img-responsive" src="images/exterior/exterior-stairs.jpg" alt="Second slide">
                    </div>
             
              </div>
            </div>
              </div><!-- /.carousel-inner -->
             <a class="left carousel-control" href="#exterior-fence" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
          </a>
          <a class="right carousel-control" href="#exterior-fence" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
          </a>
          </div><!-- /.carousel slider -->
        </div><!-- /.modal-body -->
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
  
                                       <!--wallpaper-removal Modal-->
  <div class="modal fade" id="wallpaper-removal-Modal">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-body">
          <!-- artist wall carousel-->
          <div class="carousel slider" id="wallpaper-removal">
            <ol class="carousel-indicators">
              <li data-target="#wallpaper-removal" data-slide-to="0" class="active"></li>
            </ol>
            <div class="carousel-inner">
     
                               <!--Wallpaper Removal 4:images-->
            <div class="item active">
              <div class="row">
                <div class="col-md-8 col-md-offset-2">
              <img  class="img-responsive" src="images/interior/wallpaper-removal/wallpaper-removal.jpg" alt="Third slide">
                    </div>
              
              </div>
            </div>
            <div class="item">
              <div class="row">
                <div class="col-md-8 col-md-offset-2">
              <img  class="img-responsive" src="images/interior/wallpaper-removal/wallpaper-removal-2.jpg" alt="Third slide">
                    </div>
               
              </div>
            </div>
            <div class="item">
              <div class="row">
                <div class="col-md-8 col-md-offset-2">
                  <img  class="img-responsive" src="images/interior/wallpaper-removal/wallpaper-removal-3.jpg" alt="Third slide">
                </div>
              </div>       
            </div>
            <div class="item">
              <div class="row">
                <div class="col-md-8 col-md-offset-2">
              <img  class="img-responsive" src="images/interior/wallpaper-removal/wallpaper-removal-4.jpg" alt="Third slide">
                  </div>
              </div>
            </div>
              </div><!-- /.carousel-inner -->
             <a class="left carousel-control" href="#wallpaper-removal" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
          </a>
          <a class="right carousel-control" href="#wallpaper-removal" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
          </a>
          </div><!-- /.carousel slider -->
        </div><!-- /.modal-body -->
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
  
                                         <!--commercial wallpaper removal modal-->
  <div class="modal fade" id="commercial-wallpaper-removal-Modal">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-body">
          <!-- artist wall carousel-->
          <div class="carousel slider" id="commercial-wallpaper-removal">
            <ol class="carousel-indicators">
              <li data-target="#commercial-wallpaper-removal" data-slide-to="0" class="active"></li>
            </ol>
            <div class="carousel-inner">
     
                             <!--Wallpaper Removal Commerical 2:images-->
            <div class="item active">
              <div class="row">
                <div class="col-md-8 col-md-offset-2">
              <img  class="img-responsive" src="images/interior/wallpaper-removal/commercial/commercial-wallpaper-removal.jpg" alt="Third slide">
                   </div>
              
              </div>
              
            </div>
            <div class="item">
              <div class="row">
                <div class="col-md-8 col-md-offset-2">
              <img  class="img-responsive" src="images/interior/wallpaper-removal/commercial/commercial-wallpaper-removal2.jpg" alt="Third slide">
                    </div>
               
              </div>
            </div>
              
              </div><!-- /.carousel-inner -->
             <a class="left carousel-control" href="#commercial-wallpaper-removal" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
          </a>
          <a class="right carousel-control" href="#commercial-wallpaper-removal" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
          </a>
          </div><!-- /.carousel slider -->
        </div><!-- /.modal-body -->
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
   <!--nursery modal-->
  <div class="modal fade" id="patio-fence-Modal">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-body">
          <!-- artist wall carousel-->
          <div class="carousel slider" id="patio-fence">
            <ol class="carousel-indicators">
              <li data-target="#patio-fence" data-slide-to="0" class="active"></li>
            </ol>
            <div class="carousel-inner">
     
                                     <!--nursery-->
            <div class="item active">
              <div class="row">
                <div class="col-md-8 col-md-offset-2">
                  <img  class="img-responsive" src="images/exterior/patio-fence/patio-fence.jpg" alt="Third slide">
                </div>
              </div>
            </div>
              </div><!-- /.carousel-inner -->
             <a class="left carousel-control" href="#patio-fence" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
          </a>
          <a class="right carousel-control" href="#patio-fence" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
          </a>
          </div><!-- /.carousel slider -->
        </div><!-- /.modal-body -->
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
                              <!--nursery modal-->
  <div class="modal fade" id="nursery-Modal">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-body">
          <!-- artist wall carousel-->
          <div class="carousel slider" id="nursery">
            <ol class="carousel-indicators">
              <li data-target="#nursery" data-slide-to="0" class="active"></li>
            </ol>
            <div class="carousel-inner">
     
                                     <!--nursery-->
            <div class="item active">
              <div class="row">
                <div class="col-md-8 col-md-offset-2">
                  <img  class="img-responsive" src="images/interior/nursery-room/nursery-room.jpg" alt="Third slide">
                </div>
              </div>
            </div>
              </div><!-- /.carousel-inner -->
             <a class="left carousel-control" href="#nursery" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
          </a>
          <a class="right carousel-control" href="#nursery" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
          </a>
          </div><!-- /.carousel slider -->
        </div><!-- /.modal-body -->
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
                                           <!--justin modal-->
  <div class="modal fade" id="justin-Modal">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-body">
          <!-- artist wall carousel-->
          <div class="carousel slider" id="justin">
            <ol class="carousel-indicators">
              <li data-target="#justin" data-slide-to="0" class="active"></li>
            </ol>
            <div class="carousel-inner">
     
                                     <!--justin-->
            <div class="item active">
              <div class="row">
                <div class="col-md-8 col-md-offset-2">
                  <img  class="img-responsive" src="images/profile/justin.jpg" alt="Third slide">
                </div>
              </div>
            </div>
              </div><!-- /.carousel-inner -->
             <a class="left carousel-control" href="#justin" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
          </a>
          <a class="right carousel-control" href="#justin" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
          </a>
          </div><!-- /.carousel slider -->
        </div><!-- /.modal-body -->
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
                                         <!--cabinet-condo Modal-->
  <div class="modal fade" id="cabinet-condo-Modal">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-body">
          <!-- artist wall carousel-->
          <div class="carousel slider" id="cabinet-condo">
            <ol class="carousel-indicators">
              <li data-target="#cabinet-condo" data-slide-to="0" class="active"></li>
            </ol>
            <div class="carousel-inner">
       <!--Condo Cabinet 20:images-->
             <div class="item active">
              <div class="row">
                <div class="col-md-8 col-md-offset-2">
                  <img  class="img-responsive" src="images/interior/cabinet-condo-restoration/cabinet-condo-12.png" alt="First slide">
                </div>
               
              </div>
            </div>
                  <div class="item">
              <div class="row">
                <div class="col-md-8 col-md-offset-2">
                  <img  class="img-responsive" src="images/interior/cabinet-condo-restoration/cabinet-condo-14.png" alt="First slide">
                </div>
               
              </div>
            </div>
                  <div class="item">
              <div class="row">
                <div class="col-md-8 col-md-offset-2">
                  <img  class="img-responsive" src="images/interior/cabinet-condo-restoration/cabinet-condo-15.png" alt="First slide">
                </div>
              
              </div>
            </div>
                  <div class="item">
              <div class="row">
                <div class="col-md-8 col-md-offset-2">
                  <img  class="img-responsive" src="images/interior/cabinet-condo-restoration/cabinet-condo-19.jpeg" alt="First slide">
                </div>
              
              </div>
            </div>
                  <div class="item">
              <div class="row">
                <div class="col-md-8 col-md-offset-2">
                  <img  class="img-responsive" src="images/interior/cabinet-condo-restoration/cabinet-condo-20.jpeg" alt="First slide">
                </div>
              
              </div>
            </div>
                  <div class="item">
              <div class="row">
                <div class="col-md-8 col-md-offset-2">
                  <img  class="img-responsive" src="images/interior/cabinet-condo-restoration/cabinet-condo-2.png" alt="First slide">
                </div>
              
              </div>
            </div>
                  <div class="item">
              <div class="row">
                <div class="col-md-8 col-md-offset-2">
                  <img  class="img-responsive" src="images/interior/cabinet-condo-restoration/cabinet-condo-4.png" alt="First slide">
                </div>
               
              </div>
            </div>
              </div><!-- /.carousel-inner -->
             <a class="left carousel-control" href="#cabinet-condo" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
          </a>
          <a class="right carousel-control" href="#cabinet-condo" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
          </a>
          </div><!-- /.carousel slider -->
        </div><!-- /.modal-body -->
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->


<!-- Mural -->
<div id="main_area">
  <div class="container">
      <h1>Murals</h1>
       	<div class="row">
        <ul class="nav nav-pills nav-stacked">
            <div class="col-md-4">
              <li>
                <a href="#artist-wall"  data-slide-to="0" class="thumbnail">
                   <img src="images/mural/artist-wall/artist-wall4.jpg" alt="Image" data-toggle="modal" data-target="#artist-wall-Modal">
                   <h2>Artist Wall</h2>
                </a>
              </li>
              </div>
            <div class="col-md-4">
              <li>
                <a href="#school" data-slide-to="0" class="thumbnail">
                  <img src="images/mural/school/mural-school.jpg" alt="Image"  data-toggle="modal" data-target="#school-Modal">
                  <h2>School Mural</h2>
                </a>
              </li>
            </div>
            <div class="col-md-4">
              <li>
                <a href="#commercial" data-slide-to="0" class="thumbnail">
                  <img src="images/mural/spanish/mural-spanish2.jpg" alt="Image" data-toggle="modal" data-target="#commercial-Modal">
                  <h2>Commercial Mural</h2>
                </a>
              </li>
            </div>
        </ul>
    </div>
  </div>
</div>
  <!--cabinet-condo Modal-->
  <div class="modal fade" id="fence-Modal">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-body">
          <!-- artist wall carousel-->
          <div class="carousel slider" id="fence">
            <ol class="carousel-indicators">
              <li data-target="#fence" data-slide-to="0" class="active"></li>
            </ol>
            <div class="carousel-inner">
       <!--Condo Cabinet 20:images-->
             <div class="item active">
              <div class="row">
                <div class="col-md-8 col-md-offset-2">
                  <img  class="img-responsive" src="images/exterior/fence/fence3.jpg" alt="First slide">
                </div>
              
              </div>
            </div>
                  <div class="item">
              <div class="row">
                <div class="col-md-8 col-md-offset-2">
                  <img  class="img-responsive" src="images/exterior/fence/fence2.jpg" alt="First slide">
                </div>
              
              </div>
            </div>
                  <div class="item">
              <div class="row">
                <div class="col-md-8 col-md-offset-2">
                  <img  class="img-responsive" src="images/exterior/fence/fence1.jpg" alt="First slide">
                </div>
               
              </div>
            </div>
                  <div class="item">
              <div class="row">
                <div class="col-md-8 col-md-offset-2">
                  <img  class="img-responsive" src="images/exterior/fence/fence.jpg" alt="First slide">
                </div>
               
              </div>
            </div>
              </div><!-- /.carousel-inner -->
             <a class="left carousel-control" href="#fence" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
          </a>
          <a class="right carousel-control" href="#fence" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
          </a>
          </div><!-- /.carousel slider -->
        </div><!-- /.modal-body -->
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->

                                         <!--Mural Artist Wall Modal-->
  <div class="modal fade" id="artist-wall-Modal">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-body">
          <!-- artist wall carousel-->
          <div class="carousel slider" id="artist-wall">
            <ol class="carousel-indicators">
              <li data-target="#artist-wall" data-slide-to="0" class="active"></li>
            </ol>
            <div class="carousel-inner">
                                          <!--Mural Artist Wall 4:images-->
            <div class="item active">
              <div class="row">
                <div class="col-md-8 col-md-offset-2">
                  <img  class="img-responsive" src="images/mural/artist-wall/artist-wall4.jpg" alt="First slide">
                </div>
              </div>
            </div>
            <div class="item">
              <div class="row">
                <div class="col-md-8 col-md-offset-2">
                  <img  class="img-responsive" src="images/mural/artist-wall/artist-wall2.jpg" alt="First slide">
                </div>
              </div>
            </div>
            <div class="item">
              <div class="row">
                <div class="col-md-8 col-md-offset-2">
                  <img  class="img-responsive" src="images/mural/artist-wall/artist-wall3.jpg" alt="First slide">
                </div>
                
              </div>
            </div>
            <div class="item">
              <div class="row">
                <div class="col-md-8 col-md-offset-2">
                  <img  class="img-responsive" src="images/mural/artist-wall/artist-wall6.jpg" alt="First slide">
                </div>
              </div>
            </div>
              </div>
              </div>
             <a class="left carousel-control" href="#artist-wall" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
          </a>
          <a class="right carousel-control" href="#artist-wall" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
          </a>
             </div><!-- /.modal-body -->
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
                                           <!--Mural School Modal-->
  <div class="modal fade" id="school-Modal">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-body">
          <!-- artist wall carousel-->
          <div class="carousel slider" id="school">
            <ol class="carousel-indicators">
              <li data-target="#school" data-slide-to="0" class="active"></li>
            </ol>
            <div class="carousel-inner">
     
                                         <!--Mural School 2:images-->
             <div class="item active">
              <div class="row">
                <div class="col-md-8 col-md-offset-2">
                  <img  class="img-responsive" src="images/mural/school/mural-school.jpg" alt="First slide">
                </div>
               
              </div>
            </div>
             <div class="item">
              <div class="row">
                <div class="col-md-8 col-md-offset-2">
                  <img  class="img-responsive" src="images/mural/school/mural-school3.jpg" alt="First slide">
                </div>
               
              </div>
            </div>
              </div><!-- /.carousel-inner -->
             <a class="left carousel-control" href="#school" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
          </a>
          <a class="right carousel-control" href="#school" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
          </a>
          </div><!-- /.carousel slider -->
        </div><!-- /.modal-body -->
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
                                       <!--Mural Commercial Modal-->
  <div class="modal fade" id="commercial-Modal">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-body">
          <!-- artist wall carousel-->
          <div class="carousel slider" id="commercial">
            <ol class="carousel-indicators">
              <li data-target="#commercial" data-slide-to="0" class="active"></li>
            </ol>
            <div class="carousel-inner">
     
        <!--Mural Commerical Spanish 4:images-->
             <div class="item active">
              <div class="row">
                <div class="col-md-8 col-md-offset-2">
                  <img  class="img-responsive" src="images/mural/spanish/mural-spanish2.jpg" alt="First slide">
                </div>
              
              </div>
            </div>
             <div class="item">
              <div class="row">
                <div class="col-md-8 col-md-offset-2">
                  <img  class="img-responsive" src="images/mural/spanish/mural-spanish3.jpg" alt="First slide">
                </div>
               
              </div>
            </div>
                  <div class="item">
              <div class="row">
                <div class="col-md-8 col-md-offset-2">
                  <img  class="img-responsive" src="images/mural/spanish/mural-spanish5.jpg" alt="First slide">
                </div>
                
              </div>
            </div>
                  <div class="item">
              <div class="row">
                <div class="col-md-8 col-md-offset-2">
                  <img  class="img-responsive" src="images/mural/spanish/mural-spanish4.jpg" alt="First slide">
                </div>
               
              </div>
            </div>
              </div><!-- /.carousel-inner -->
             <a class="left carousel-control" href="#commercial" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
          </a>
          <a class="right carousel-control" href="#commercial" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
          </a>
          </div><!-- /.carousel slider -->
        </div><!-- /.modal-body -->
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
<!--Java Script-->
    <script src="js/jquery.js"></script>
    <script src="https://maps.google.com/maps/api/js?sensor=true"></script>
	  <script src="js/main.js"></script>
	  
    <script>
      $('.carousel').carousel({
       interval: 2500
      });
     </script>
@stop