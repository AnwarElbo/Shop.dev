                <div class="list-group">
                    <?php foreach($categories as $category): $active = false;?>
                    	<?php if($category->url == $this->uri->segment(2, "empty")) {
                    		$active = true;
                    	} ?>
                    	<a href="/category/<?php echo $category->url; ?>" class="list-group-item <?php if($active){ echo 'active'; } ?>"><?php echo $category->category; ?></a>
                	<?php endforeach; ?>
                </div>