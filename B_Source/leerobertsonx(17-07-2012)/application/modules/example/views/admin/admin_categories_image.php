<?php
	$this->load->helper('date');
	$this->load->model('Mcategories');
?>

		<article class="module width_full">
			<header><h3>Edit Image</h3></header>
				<div class="module_content">
				<?php foreach ($listimage as $row):?>
				<form action="<?php echo base_url()?>example/admin/editImage/<?php echo $row->id;?>" method="post">
						<fieldset>
							<label>Link Image</label>
							<input type="text" name="image" value="<?php echo $this->Mcategories->fixImageLink_ToView($row->image)?>" >
						</fieldset>
						
						<fieldset>
							<label>Select Image</label>
							<?php echo $this->editor_library->filemanager('content',$row->image,'')?>					
						</fieldset>																	
						<div class="clear"></div>
						<?php endforeach;?>
				</div>
			<footer>
				<div class="submit_link">
					
					<input type="submit" value="Update" class="alt_btn">
					
				</div>
			</footer>
		</article><!-- end of post new article -->
	</form>

