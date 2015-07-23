<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-10 col-md-offset-1">
            <table class="table table-hover checkout-table">
                <thead>
                    <tr>
                        <th>Product</th>
                        <th>Quantity</th>
                        <th class="text-center">Price</th>
                        <th class="text-center">Total</th>
                        <th> </th>
                    </tr>
                </thead>
                <tbody>
               	<?php $subtotal = 0; ?>
               	<?php $shipping = 0; ?>
                <?php foreach($products as $product): ?>
                    <tr>
                    	<input type="hidden" value="<?php echo $product->id; ?>" name="product_id" />

                        <td class="col-sm-8 col-md-6">
                        <div class="media">
                            <a class="thumbnail pull-left" href="#"> <img class="media-object" src="https://placeholdit.imgix.net/~text?txtsize=30&txt=320%C3%97150&w=320&h=150" style="width: 84px; height: 72px;"> </a>
                            <div class="media-body">
                                <h4 class="media-heading"><a href="#"><?php echo $product->name; ?></a></h4>
                            </div>
                        </div></td>
                        <td class="col-sm-1 col-md-1" style="text-align: center">
                        	<input type="number" class="form-control product-quantity" name="amount" onkeypress="return isNumberKey(event)" value="<?php echo $product->amount; ?>">
                        </td>
                        <td class="col-sm-1 col-md-1 text-center price-single-product"><strong>$<?php echo $product->price; ?></strong></td>
                        <td class="col-sm-1 col-md-1 text-center price-total-product"><strong>$<?php echo $product->total_price; ?> </strong></td>
                        <td class="col-sm-1 col-md-1">
                        <button type="button" class="btn btn-danger remove-product">
                            <span class="glyphicon glyphicon-remove"></span> Remove
                        </button></td>
                    </tr>
                <?php $subtotal += $product->total_price; ?>
                <?php $shipping += $product->shipping_costs; ?>
                <?php endforeach; ?>
                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
                        <td><h5>Subtotal</h5></td>
                        <td class="text-right"><h5><strong id="subtotal">$<?php echo number_format($subtotal, 2, '.', ''); ?></strong></h5></td>
                    </tr>
                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
                        <td><h5>Estimated shipping</h5></td>
                        <td class="text-right"><h5><strong id="shipping">$<?php echo number_format($shipping,2, '.', ''); ?></strong></h5></td>
                    </tr>
                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
                        <td><h3>Total</h3></td>
                        <td class="text-right"><h3><strong id="total">$<?php echo $shipping + $subtotal; ?></strong></h3></td>
                    </tr>
                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
                        <td>
                        <a href="/products" class="btn btn-default">
                            <span class="glyphicon glyphicon-shopping-cart"></span> Continue Shopping
                        </a></td>
                        <td>
                        <a href="/checkout/step1" class="btn btn-success">
                            Checkout <span class="glyphicon glyphicon-play"></span>
                        </a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>