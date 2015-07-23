            <!--BEGIN SIDEBAR MENU-->
            <?php echo modules::run('menu/admin_menu'); ?>
            <!--END SIDEBAR MENU-->
            <div id="page-wrapper">
                <!--BEGIN TITLE & BREADCRUMB PAGE-->
                <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
                    <div class="page-header pull-left">
                        <div class="page-title">
                            Pages</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right">
                        <li><i class="fa fa-home"></i>&nbsp;<a href="dashboard.html">Home</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li class="hidden"><a href="#">Dashboard</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li class="active">Dashboard</li>
                    </ol>
                    <div class="clearfix">
                    </div>
                </div>
                <!--END PAGE WRAPPER-->
                <div class="page-content">
                    <div id="tab-general">
                        <div class="row mbl">
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="panel panel-blue" style="background:#FFF;">
                                        <div class="panel-heading">All pages</div>
                                        <div class="panel-body">
                                            <table class="table table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Page</th>
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $counter = 0;
                                                          foreach($allPages as $page):
                                                          $counter++; 
                                                    ?>
                                                        <tr>
                                                            <td><?php echo $counter; ?></td>
                                                            <td><?php echo $page->name; ?></td>
                                                            <td><a href="/admin/pages/edit/<?php echo $page->id; ?>">Edit</a></td>
                                                        </tr>
                                                    <?php endforeach; ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--BEGIN FOOTER-->
                <div id="footer">
                    <div class="copyright">
                        <?php echo date("Y"); ?>© Elbo CMS</div>
                </div>
                <!--END FOOTER-->
            </div>
                