@extends('admin.admin-master')
@section('content')
         <div id="page-wrapper">
            <div class="container-fluid">
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                           Projects
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Dashboard
                            </li>
                        </ol>
                         <div class="form-group">
                                <h2>Upload</h2>
                               <form action="upload/uploadFiles" method="post" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    Product photos (can attach more than one):
                                    <br />
                                    <input type="file" name="images" id="images"/>
                                    <br /><br />
                                    <input type="submit" value="Upload"/>
                                </form>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
@stop