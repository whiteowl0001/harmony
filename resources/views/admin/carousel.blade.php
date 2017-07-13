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
                                    <p>{{!!$errors->first('images')!!}}</p>
                                    @if(Session::has('error'))
                                    <p>{{!! Session::get('error')!!}}</p>
                                    @endif
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
        <script src="js/jquery.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

@stop