		<?php $counter = 0; ?>

		<div class="row">
			<h3>Nieuwe producten</h3>
			<?php foreach($newProducts as $product): ?>

				<?php $counter++; ?>
			   
			    <div class="col-sm-4 col-lg-4 col-md-4">
			        <div class="thumbnail">
			            <img src="https://placeholdit.imgix.net/~text?txtsize=30&txt=320%C3%97150&w=320&h=150" alt="">
			            <div class="caption">
			                <h4 class="pull-right">$<?php echo $product->price; ?></h4>
			                <h4><a href="/product/<?php echo $product->seo_url; ?>/<?php echo $product->id; ?>"><?php echo $product->name; ?></a>
			                </h4>
			                <p><?php echo $product->description; ?></p>
			            </div>
			            <div class="ratings">
			                <p class="pull-right">15 reviews</p>
			                <p>
			                    <span class="glyphicon glyphicon-star"></span>
			                    <span class="glyphicon glyphicon-star"></span>
			                    <span class="glyphicon glyphicon-star"></span>
			                    <span class="glyphicon glyphicon-star"></span>
			                    <span class="glyphicon glyphicon-star"></span>
			                </p>
			            </div>
			        </div>
			    </div>

		<?php if($counter == 3): ?>
		<?php $counter = 0; ?>
		</div>
		<div class="row">
		<?php endif; ?>

			<?php endforeach; ?>
		    <div class="col-sm-4 col-lg-4 col-md-4">
		        <h4><a href="#">Like this template?</a>
		        </h4>
		        <p>If you like this template, then check out <a target="_blank" href="http://maxoffsky.com/code-blog/laravel-shop-tutorial-1-building-a-review-system/">this tutorial</a> on how to build a working review system for your online store!</p>
		        <a class="btn btn-primary" target="_blank" href="http://maxoffsky.com/code-blog/laravel-shop-tutorial-1-building-a-review-system/">View Tutorial</a>
		    </div>
		</div>