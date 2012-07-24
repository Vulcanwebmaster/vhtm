<?php $this->load->model('Mlastestproject');?>
<?php foreach ($list as $row):?>
<form action="<?php echo base_url()?>lastestproject/admin/editLogo/<?php echo $row->id?>" method="post">
		<article class="module width_full">
			<header><h3>Edit Logo</h3></header>
				<div class="module_content">
						<fieldset>
							<label>Title</label>
							<input type="text" name="title" value="<?php echo $row->title?>">
							
						</fieldset>
						
						<fieldset>
							<label>Image Logo</label>
							<?php echo $this->editor_library->filemanager('imageslide',$row->logo,'')?>
						</fieldset>
						
						<fieldset>
							<label>Link</label>
							<input type="text" name="link" value="<?php echo $row->link?>" >
							
						</fieldset>
						<?php endforeach;?>
						
				<div class="clear"></div>
				</div>
			<footer>
				<div class="submit_link">
					
					<input type="submit" value="Update" class="alt_btn">
					
				</div>
			</footer>
		</article><!-- end of post new article -->
		</form>
		
	
				<div class="spacer"></div>


