<?php $counter = 0; ?>

<div class="row">
	<h3>Producten</h3>
	<?php foreach($showProducts as $product): ?>

		<?php $counter++; ?>
	   
	    <div class="col-sm-3 col-lg-3 col-md-3">
	        <div class="thumbnail">
	            <img src="https://placeholdit.imgix.net/~text?txtsize=30&txt=320%C3%97150&w=320&h=150" alt="">
                <h5 class="pull-right">$<?php echo $product->price; ?></h5>
                <h5><a href="/product/<?php echo $product->seo_url; ?>/<?php echo $product->id; ?>"><?php echo $product->name; ?></a></h5>
                <input type="hidden" name="product_id" value="<?php echo $product->id; ?>" />
                <input type="hidden" name="amount" value="1" />
                <?php echo modules::run('cart/_get_cart_button'); ?>
	        </div>
	    </div>

<?php if($counter == 4): ?>
<?php $counter = 0; ?>
</div>
<div class="row">
<?php endif; ?>

<?php endforeach; ?>