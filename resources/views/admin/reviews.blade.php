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
                        <div class="col-lg-12">
                            <h2>Reviews</h2>
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Customer Name</th>
                                            <th>Project Title</th>
                                            <th>Project Description</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($Reviews as $Review)
                                        <tr>
                                            <td>{{$Review->reviewed_by}}</td>
                                            <td>{{$Review->project_title}}</td>
                                            <td>{{$Review->project_description}}</td>
                                            <td><button type="button" class="btn btn-lg btn-danger">Delete</button></td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
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