<div class="col-lg-3">
    <div class="row">
        <div class="panel panel-grey">
            <div class="panel-heading">
                Edit category</div>
            <div class="panel-body pan">
                <form method="POST" >
                <div class="form-body pal">
              
                	<table>
                        <?php foreach($categories as $category): ?>
                        	<?php 
                        	$select = false;
                        	$main = false;
                        	foreach($selectedCategories AS $selCat){
                        		if($category->id == $selCat->id) {
                        			$select = true;
                        			if($selCat->main == '1') {
                        				$main = true;
                        			}
                        		}
                        	} ?>
                            <tr>
                            	<td>
                                	<input tabindex="5" name="selectedCategories[]" type="checkbox" style="display: block; margin: 0px;" <?php if($select): ?> checked="checked" <?php endif; ?> <?php if($main): ?> disabled="disabled" <?php endif; ?> value="<?php echo $category->id; ?>">
	                            </td>
	                            <td>
                                	<?php echo $category->category; ?>
                        		</td>
                        	</tr>
                        <?php endforeach; ?>
                    </table>
                    
                </div>
                <div class="form-actions text-right pal">
                    <button type="submit" name="saveCategories" class="btn btn-primary">
                        Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
