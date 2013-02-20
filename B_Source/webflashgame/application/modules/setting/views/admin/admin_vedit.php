	<?php 
			echo validation_errors('<div class="error">','</div>');
		?>	
<form method="post" action="<?php echo base_url();?>setting/admin/edit/<?php echo $info->id;?>">	
	<article class="module width_3_quarter" style="width:95%;">
		<header><h3 class="tabs_involved"><?php echo $title;?></h3>
		
		</header>
		<div class="tab_container">
			
			<div id="tab1" class="tab_content">
				<fieldset>
					<label>Web pour cent</label>
					<input type="text" name="phantramweb" style="width:92%" value="<?php echo $info->phantramweb;?>"/>
				</fieldset>
				
				<fieldset>
					<label>Or utilisateurs</label>
					<input type="text" name="user_gold" style="width:92%" value="<?php echo $info->user_gold;?>"/>
				</fieldset>
				
				<fieldset>
					<label>Fanpage</label>
					<input type="text" name="linkface" style="width:92%" value="<?php echo $info->linkface;?>"/>
				</fieldset>
				
			</div>
			
			<footer style="float:left">
					<div class="submit_link">
						<input type="submit" name="submit" value="Éditer" class="alt_btn">
					</div>
			</footer>
		</div><!-- end of .tab_container -->
				</article><!-- end of content manager article -->	
</form>
		