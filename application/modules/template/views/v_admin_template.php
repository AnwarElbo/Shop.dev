
<?php echo modules::run('dashboard/test'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin | <?php echo ucfirst(explode('/', $module)[0]); ?></title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/icons/favicon.ico">
    <link rel="apple-touch-icon" href="images/icons/favicon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/icons/favicon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/icons/favicon-114x114.png">
    <!--Loading bootstrap css-->
    <link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,700">
    <link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oswald:400,700,300">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/css/Admin/jquery-ui-1.10.4.custom.min.css'); ?>">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/css/Admin/font-awesome.min.css'); ?>">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/css/Admin/bootstrap.min.css'); ?>">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/css/Admin/animate.css'); ?>">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/css/Admin/all.css'); ?>">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/css/Admin/main.css'); ?>">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/css/Admin/style-responsive.css'); ?>">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/css/Admin/zabuto_calendar.min.css'); ?>">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/css/Admin/pace.css'); ?>">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/css/Admin/jquery.news-ticker.css'); ?>">
</head>
<body>
    <div>
        <!--BEGIN BACK TO TOP-->
        <a id="totop" href="#"><i class="fa fa-angle-up"></i></a>
        <!--END BACK TO TOP-->
        <!--BEGIN TOPBAR-->
        <div id="header-topbar-option-demo" class="page-header-topbar">
            <nav id="topbar" role="navigation" style="margin-bottom: 0;" data-step="3" class="navbar navbar-default navbar-static-top">
            <div class="navbar-header">
                <button type="button" data-toggle="collapse" data-target=".sidebar-collapse" class="navbar-toggle"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                <div id="logo" class="navbar-brand"><span class="fa fa-rocket"></span><span class="logo-text">Elbo CMS</span></div></div>
            <div class="topbar-main"><a id="menu-toggle" href="#" class="hidden-xs"><i class="fa fa-bars"></i></a>
                <div class="news-update-box hidden-xs"><span class="text-uppercase mrm pull-left text-white">News:</span>
                    <ul id="news-update" class="ticker list-unstyled">
                        <li>Welkom bij het CMS</li>
                    </ul>
                </div>
                <ul class="nav navbar navbar-top-links navbar-right mbn">
                    <li class="dropdown"><a data-hover="dropdown" href="#" class="dropdown-toggle"><i class="fa fa-envelope fa-fw"></i><span class="badge badge-orange">0</span></a>
                        
                    </li>
                    <li class="dropdown topbar-user"><a data-hover="dropdown" href="#" class="dropdown-toggle"><span>Robert John</span>&nbsp;<span class="caret"></span></a>
                        <ul class="dropdown-menu dropdown-user pull-right">
                            <li><a href="#"><i class="fa fa-user"></i>My Profile</a></li>
                            <li><a href="#"><i class="fa fa-envelope"></i>My Inbox<span class="badge badge-danger">3</span></a></li>
                            <li><a href="#"><i class="fa fa-tasks"></i>My Tasks<span class="badge badge-success">7</span></a></li>
                            <li class="divider"></li>
                            <li><a href="Login.html"><i class="fa fa-key"></i>Log Out</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
        </div>
        <!--END TOPBAR-->
        <div id="wrapper">
            <?php echo modules::run($module); ?>
        </div>
    </div>
    <script src="<?php echo base_url('assets/js/Admin/jquery-1.10.2.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/Admin/jquery-migrate-1.2.1.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/Admin/jquery-ui.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/Admin/bootstrap.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/Admin/bootstrap-hover-dropdown.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/Admin/html5shiv.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/Admin/respond.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/Admin/jquery.metisMenu.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/Admin/jquery.slimscroll.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/Admin/jquery.cookie.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/Admin/icheck.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/Admin/custom.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/Admin/jquery.menu.js'); ?>"></script> 
    <script src="<?php echo base_url('assets/js/Admin/pace.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/Admin/holder.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/Admin/responsive-tabs.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/Admin/jquery.flot.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/Admin/jquery.flot.categories.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/Admin/jquery.flot.pie.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/Admin/jquery.flot.tooltip.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/Admin/jquery.flot.resize.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/Admin/jquery.flot.fillbetween.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/Admin/jquery.flot.stack.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/Admin/jquery.flot.spline.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/Admin/zabuto_calendar.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/Admin/index.js'); ?>"></script>
    <!--LOADING SCRIPTS FOR CHARTS-->
    <script src="<?php echo base_url('assets/js/Admin/highcharts.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/Admin/data.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/Admin/drilldown.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/Admin/exporting.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/Admin/highcharts-more.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/Admin/charts-highchart-pie.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/Admin/charts-highchart-more.js'); ?>"></script>
    <!--CORE JAVASCRIPT-->
    <script src="<?php echo base_url('assets/js/Admin/main.js'); ?>"></script>
</body>
</html>
