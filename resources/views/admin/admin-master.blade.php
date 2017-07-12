<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Bootstrap Admin Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/admin/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/admin/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/admin/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
	<link href="css/font-awesome.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">SB Admin</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> {{ $user->username }} <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="/dashboard"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="/carousel"><i class="fa fa-fw fa-picture-o"></i> Carousel</a>
                    </li>
                    <li>
                        <a href="/projects"><i class="fa fa-fw fa-table"></i> Projects</a>
                    </li>
                    <li>
                        <a href="/reviews"><i class="fa fa-fw fa-edit"></i> Reviews</a>
                    </li>
                    <li>
                        <a href="/video"><i class="fa fa-fw fa-edit"></i> Videos</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>
@yield('content')


    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/admin/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/admin/js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/admin/js/plugins/morris/raphael.min.js"></script>
    <script src="js/admin/js/plugins/morris/morris.min.js"></script>
    <script src="js/admin/js/plugins/morris/morris-data.js"></script>

</body>

</html>
