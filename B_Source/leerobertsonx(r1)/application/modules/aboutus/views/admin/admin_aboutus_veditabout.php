<?php
	$this->load->helper('date');
?>

		<article class="module width_full">
			<header><h3>Edit About Us</h3></header>
				<div class="module_content">
				<?php foreach ($list as $row):?>
				<form action="<?php echo base_url()?>aboutus/admin/editAbout/<?php echo $row->id;?>" method="post">
						<fieldset>
							<label>Title</label>
							<input type="text" name="title" value="<?php echo $row->title?>" >
						</fieldset>
						
						<fieldset>
							<label>Content</label>
							<?php echo $this->editor_library->editor('content',"$row->content",'')?>
							
						</fieldset>
						
						
						<fieldset style="width:46%; float:left; margin-right:5%; "> <!-- to make two field float next to one another, adjust values accordingly -->
							<label>Older Date</label>
							<input type="text" name="olderdate" style="width:92%;" value="<?php echo $row->date?>">
						</fieldset>
						<fieldset style="width:46%; float:left; "> <!-- to make two field float next to one another, adjust values accordingly -->
							<label>Now Date</label>
							<input type="text" name="nowdate" style="width:92%;" value="<?php echo mdate('%Y-%m-%d %H:%i:%s',time())?>">
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

