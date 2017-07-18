@extends('admin.admin-master')
@section('content')
         <div id="page-wrapper">
            <div class="container-fluid">
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                           Reviews
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Dashboard
                            </li>
                        </ol>
                        <div class="panel panel-default">
                            <div class="panel-heading">Add Video</div>
                            <div class="panel-body">
                                <form enctype="multipart/form-data" action="upload/review" method="POST">
                                {!! csrf_field() !!}
                                    <div class="col-lg-5">
                                                                <!--Add Video-->
                                        <p>Reviews</p>
                                    </div>
                    	    	    <div class="form-group col-lg-2">
                                        <input type="text" class="form-control" id="month" name="month" placeholder="Month">
                                        <br>
                                    </div>
                                    <div class="form-group col-lg-2">
                                        <input type="text" class="form-control" id="day" name="day" placeholder="Day">
                                        <br>
                                    </div>
                                    <div class="form-group col-lg-2">
                                        <input type="text" class="form-control" id="year" name="year" placeholder="Year">
                                        <br>
                                    </div>
                                    <div class="form-group col-lg-2">
                                        <input type="text" class="form-control" id="stars" name="stars" placeholder="Rating">
                                        <br>
                                    </div>
                                     <div class="form-group col-lg-10">
                                        <input type="text" class="form-control" id="reviewed_by" name="reviewed_by" placeholder="Reviewed By">
                                        <br>
                                    </div>
                                     <div class="form-group col-lg-10">
                                        <input type="text" class="form-control" id="project_title" name="project_title" placeholder="Project Title">
                                        <br>
                                    </div>
                                     <div class="form-group col-lg-10">
                                        <input type="textarea" name="project_description" placeholder="Project Description"/>>
                                        <br>
                                    </div>
                                    <input type="submit" class="pull-right btn btn-sm btn-primary">
                                </form>
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