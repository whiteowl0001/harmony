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
                            <div class="panel-heading">Add Review</div>
                            <div class="panel-body">
                                <form enctype="multipart/form-data" action="upload/review" method="POST">
                                {!! csrf_field() !!}
                                    <div class="col-lg-12">
                                                                <!--Add Video-->
                                        <p>Reviews</p>
                                    </div>
                                    <div class="form-group">
                                        <label for="select" class="col-lg-2 control-label">Rating</label>
                                        <div class="col-lg-2">
                                            <select class="form-control" id="stars" name="stars">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                        </div>
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
                                        <textarea type="textarea" name="project_description" placeholder="Project Description"></textarea>
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