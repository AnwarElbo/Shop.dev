            <!--BEGIN SIDEBAR MENU-->
            <?php echo modules::run('menu/admin_menu'); ?>
            <!--END SIDEBAR MENU-->
            <div id="page-wrapper">
                <!--BEGIN TITLE & BREADCRUMB PAGE-->
                <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
                    <div class="page-header pull-left">
                        <div class="page-title">
                            Products</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right">
                        <li><i class="fa fa-home"></i>&nbsp;<a href="/admin/dashboard">Home</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li class="hidden"><a href="#">Products</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li class="active">Products</li>
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
                                    <div class="panel panel-grey">
                                            <div class="panel-heading">
                                                Edit product</div>
                                            <div class="panel-body pan">
                                                <?php if($_SERVER['REQUEST_METHOD'] == 'POST'): ?>
                                                    <div class="alert alert-danger">
                                                        <?php echo validation_errors(); ?>
                                                    </div>
                                                <?php endif; ?>
                                                <form method="POST" >
                                                <div class="form-body pal">
                                                    <div class="form-group">
                                                        <input name="productName" type="text" placeholder="Product name" value="<?php echo $product[0]->name; ?>" class="form-control">
                                                    </div>
                                                    <div class="form-group">
			                                            <?php echo modules::run('CKEditor/get_ckeditor', $product[0]->description); ?>
                                                    </div>
                                                    <div class="form-group">
                                                        <input name="productSeoUrl" type="text" placeholder="Url" value="<?php echo $product[0]->seo_url; ?>" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <input name="productPrice" type="text" placeholder="Price" value="<?php echo $product[0]->price; ?>" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <select name="productCategory" class="form-control">
                                                            <option>Category</option>
                                                            <?php foreach($categories as $category): ?>
                                                                <option <?php if($mainCategory[0]->category_id == $category->id): ?>selected="selected"<?php endif; ?> value="<?php echo $category->id; ?>"><?php echo $category->category; ?></option>
                                                            <?php endforeach; ?>
                                                        </select></div>
                                                    <div class="form-group">
                                                        <div class="checkbox">
                                                            <input tabindex="5" name="productDisabled" type="checkbox" style="display: block; margin: 0px;" value="<?php echo $product[0]->disabled; ?>">&nbsp; Disable product
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-actions text-right pal">
                                                    <button type="submit" class="btn btn-primary">
                                                        Save</button>
                                                </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                          <!--  <div class="col-lg-3">
                                <div class="row">
                                    <div class="panel panel-grey">
                                            <div class="panel-heading">
                                                Edit product</div>
                                            <div class="panel-body pan">
                                                <form method="POST" >
                                                <div class="form-body pal">
                                                    <div class="form-group">
                                                        <input name="productName" type="text" placeholder="Product name" value="<?php echo $product[0]->name; ?>" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <input name="productSeoUrl" type="text" placeholder="Url" value="<?php echo $product[0]->seo_url; ?>" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <input name="productPrice" type="text" placeholder="Price" value="<?php echo $product[0]->price; ?>" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <select name="productCategory" class="form-control">
                                                            <option>Category</option>
                                                            <?php foreach($categories as $category): ?>
                                                                <option <?php if($mainCategory[0]->category_id == $category->id): ?>selected="selected"<?php endif; ?> value="<?php echo $category->id; ?>"><?php echo $category->category; ?></option>
                                                            <?php endforeach; ?>
                                                        </select></div>
                                                    <div class="form-group">
                                                        <div class="checkbox">
                                                            <input tabindex="5" name="productDisabled" type="checkbox" style="display: block; margin: 0px;" value="<?php echo $product[0]->disabled; ?>">&nbsp; Disable product
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-actions text-right pal">
                                                    <button type="submit" class="btn btn-primary">
                                                        Save</button>
                                                </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
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
                