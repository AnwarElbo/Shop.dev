<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Shop Homepage - Start Bootstrap Template</title>
	<link href="<?php echo base_url('assets/css/bootstrap.css'); ?>" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url('assets/css/bootstrap-theme.css'); ?>" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url('assets/css/shop-homepage.css'); ?>" rel="stylesheet" type="text/css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>

</head>

<body>

    <?php echo modules::run('menu/menu/head_menu'); ?>
    <!-- Page Content -->
    <div class="container">
        <div class="col-md-9">
            <?php echo modules::run('products/products/get_product_by_url'); ?>
        </div>
    </div>
    <!-- /.container -->

    <div class="container">

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->
    <script src="<?php echo base_url('assets/js/admin/jquery-1.10.2.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/shopping-cart.js'); ?>"></script>
	<script src="<?php echo base_url('assets/js/bootstrap.js'); ?>"></script>

</body>

</html>
