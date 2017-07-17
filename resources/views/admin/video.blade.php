@extends('admin.admin-master')
@section('content')
         <div id="page-wrapper">
            <div class="container-fluid">
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                           Video
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Dashboard
                            </li>
                        </ol>
                        <div class="panel panel-default">
                            <div class="panel-heading">Add Video</div>
                            <div class="panel-body">
                                <form enctype="multipart/form-data" action="upload/video" method="POST">
                                {!! csrf_field() !!}
                                    <div class="col-lg-5">
                                                                <!--Add Video-->
                                        <p>Video Iframe src</p>
                                    </div>
                    	    	    <div class="form-group col-lg-10">
                                        <input type="text" class="form-control" id="video_name" name="video_name" placeholder="SRC Input">
                                        <br>
                                    </div>
                                    <input type="submit" class="pull-right btn btn-sm btn-primary">
                                </form>
            		        </div>
            		    </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">Projects</div>
                                            <div class="panel-body">
                                                   @foreach ($Videos as $Video)
                                                        <div class="col-sm-6">
                                                           <div >
                                                                <iframe class="embed-responsive-item"  src="https://www.youtube.com/embed/{{$Video->video_name}}" allowfullscreen></iframe>       
                                                            </div>
                                                        </div>
                                                    @endforeach 
                        		            </div>
                        		        </div>
                        	        </div>
                        	    </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
@stop