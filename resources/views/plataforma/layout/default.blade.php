<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Qualimentos | @yied('plataforma_titie')</title>

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
    <!-- Add local styles, mostly for plugins css file -->
    <!-- Add jQuery Style direct - used for jQGrid plugin -->
    <link href="assets/css/plataforma/Scripts/plugins/jquery-ui/jquery-ui.css" rel="stylesheet" type="text/css" />

    <!-- Primary Inspinia style -->
    <link href="assets/css/plataforma/Content/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/plataforma/Content/animate.css" rel="stylesheet">
    <link href="assets/css/plataforma/Content/style.css" rel="stylesheet">
    <link href="assets/css/plataforma/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet">

</head>
<body>

<!-- Wrapper-->
<!-- PageClass give you ability to specify custom style for specific view based on action -->
<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element"> <span>
                            <img alt="image" class="img-circle" src="assets/img/plataforma/Images/profile_small.jpg" />
                             </span>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">Lucas de Souza</strong>
                             </span> <span class="text-muted text-xs block">Desenvolvedor <b class="caret"></b></span> </span> </a>
                        <ul class="dropdown-menu animated fadeInRight m-t-xs">
                            <li><a href="#">Trocar senha</a></li>
                        </ul>
                    </div>
                    <div class="logo-element">
                        QUALI
                    </div>
                </li>
                <li>
                    <a href="/admin"><i class="fa fa-diamond"></i> <span class="nav-label">Home</span></a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-diamond"></i> <span class="nav-label">Clientes</span></a>
                </li>
                <li class="landing_link">
                    <a href="#"><i class="fa fa-diamond"></i> <span class="nav-label">Processo Selectivo</span></a>
                </li>
                <li class="landing_link">
                    <a href="#"><i class="fa fa-th-large"></i>
                        <span class="nav-label">Workshop</span>
                        <span class="fa arrow"></span>
                    </a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="/admin/workshops">Lista de Workshop</a></li>
                        <li><a href="#">Participantes</a></li>
                    </ul>
                </li>
                <li class="landing_link">
                    <a href="#"><i class="fa fa-th-large"></i>
                        <span class="nav-label">Configurações</span>
                        <span class="fa arrow"></span>
                    </a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="/admin/usuarios">Usuarios</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>


    <!-- Page wraper -->
    <div id="page-wrapper" class="gray-bg">
        <!-- Top Navbar -->
        <div class="row border-bottom">
            <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
                <div class="navbar-header">
                    <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
                </div>
                <ul class="nav navbar-top-links navbar-right">
                    <li>
                        <a href="#">
                            <i class="fa fa-sign-out"></i> Log out
                        </a>
                    </li>
                </ul>
            </nav>
        </div>

    @yield('plataforma_content')

    <!-- Footer -->
        <div class="footer">
            <div class="pull-right">
                Qualimentos Jr.
            </div>
            <div>
                <strong>Copyright</strong> Example Company &copy; 2014 - 2017
            </div>
        </div>


    </div>
    <!-- End page wrapper-->

</div>
<!-- End wrapper-->

<!-- Section for main scripts render -->
<script src="assets/js/plataforma/Scripts/jquery-2.1.1.min.js"></script>

<script src="assets/js/plataforma/Scripts/bootstrap.min.js"></script>

<script src="assets/js/plataforma/Scripts/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<script src="assets/js/plataforma/Scripts/plugins/metisMenu/metisMenu.min.js"></script>
<script src="assets/js/plataforma/Scripts/plugins/pace/pace.min.js"></script>
<script src="assets/js/plataforma/Scripts/app/inspinia.js"></script>

<!-- Skin config script - only for demo purpose-->
<script src="assets/js/plataforma/Scripts/app/skin.config.min.js"></script>

</body>
</html>
