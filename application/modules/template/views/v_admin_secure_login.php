<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin - login</title>
	<link href="<?php echo base_url('assets/css/bootstrap.css'); ?>" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url('assets/css/bootstrap-theme.css'); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url('assets/css/admin-login.css'); ?>" rel="stylesheet" type="text/css">

</head>

<body>
    <!-- Page Content -->
    <div class="container">
        <?php echo modules::run('login/secure_admin_login'); ?>
    </div>
    <!-- /.container -->    
    <script src="<?php echo base_url('assets/js/jquery-2.1.4.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/jquery-ui.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/js/bootstrap.js'); ?>"></script>

</body>

</html>
