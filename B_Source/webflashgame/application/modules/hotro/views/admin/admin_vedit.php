	<?php 
			echo validation_errors('<div class="error">','</div>');
		?>	
<form method="post" action="<?php echo base_url();?>hotro/admin/edit/<?php echo $info->id;?>">	
	<article class="module width_3_quarter" style="width:95%;">
		<header><h3 class="tabs_involved"><?php echo $title;?></h3>
		
		</header>
		<div class="tab_container">
			
			<div id="tab1" class="tab_content">
				<fieldset>
					<label>Country</label>
					<input type="text" name="country" style="width:92%" value="<?php echo $info->country;?>"/>
				</fieldset>
				<fieldset>
					<label>Phone number</label>
					<input type="text" name="sdt" style="width:92%" value="<?php echo $info->sdt;?>"/>
				</fieldset>
				<fieldset>
					<label>Phone number </label>
					<input type="text" name="title" style="width:92%" value="<?php echo $info->title;?>"/>
				</fieldset>
				<fieldset>
					<label>Email</label>
					<input type="text" name="email" style="width:92%" value="<?php echo $info->email;?>"/>
				</fieldset>
				
			</div>
			
			<footer style="float:left">
					<div class="submit_link">
						<input type="submit" name="submit" value="Cập nhật" class="alt_btn">
					</div>
			</footer>
		</div><!-- end of .tab_container -->
				</article><!-- end of content manager article -->	
</form>
		