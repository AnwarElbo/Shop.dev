		        <textarea name="description" id="editor" rows="10" cols="80">
		            <?php echo $value; ?>
		        </textarea>
				<script src="<?php echo base_url(); ?>assets/plugins/CKEditor/ckeditor.js"></script>
				<script src="<?php echo base_url(); ?>assets/plugins/CKEditor/lang/nl.js"></script>
				<script>CKEDITOR.replace( 'editor' );</script>