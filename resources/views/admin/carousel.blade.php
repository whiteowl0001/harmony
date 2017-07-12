@extends('admin.admin-master')
@section('content')
         <div id="page-wrapper">
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                           Carousel
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Dashboard
                            </li>
                        </ol>
                        <div class="form-group">
                                <h2>Upload</h2>
                                {!! Form::open(array('url' => 'upload/uploadFiles', 'method'=>'POST', 'files'=>true)) !!}
                                {!! Form::file('images[]', array('multiple' => true))!!}
                                {!! Form::submit('Submit', array('class'=>'btn btn-lg btn-primary col-md-2'))!!}
                                {!! Form::close() !!}
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
@stop