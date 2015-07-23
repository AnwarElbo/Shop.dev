    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-cart">
                    <span class="glyphicon glyphicon-shopping-cart"></span>
                    R$ 1234,56
                </button>
                <a class="navbar-brand" href="#">Start Bootstrap</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <?php foreach($headMenu as $menu): ?>
                        <li>
                            <a href="<?php echo $menu->link; ?>"><?php echo $menu->name; ?></a>
                        </li>
                    <?php endforeach; ?>
                </ul>
                <div id="navbar-cart" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a id="cart-popover" class="btn" data-placement="bottom" data-poload="/cart/cart/get_cart_products" title="Products">
                                <span class="glyphicon glyphicon-shopping-cart"></span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="btn">
                                Checkout
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
