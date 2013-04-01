	
		<?php 
			echo validation_errors('<div class="error">','</div>');
		?>	
<form method="post" action="<?php echo base_url();?>tagcloud/admin/edit/<?php echo $info->id;?>">	
	<article class="module width_3_quarter" style="width:95%;">
		<header><h3 class="tabs_involved"><?php echo $title;?></h3>
		</header>
		<div class="tab_container">
			<div id="tab1" class="tab_content">
				<fieldset>
					<label>Tên (Việt)</label>
					<input type="text" name="tentag" style="width:92%" value="<?php echo $info->tentag;?>"/>
				</fieldset>
				<fieldset>
					<label>Tên (Anh)</label>
					<input type="text" name="tentage" style="width:92%" value="<?php echo $info->tentage;?>"/>
				</fieldset>
				<fieldset>
					<label>Tags hot</label>
					<select name="hot">
						<?php if ($info->hot==1) { ?>
							<option value="1">Có</option>
							<option value="0">Không</option>
						<?php } else {?>
							<option value="0">Không</option>
							<option value="1">Có</option>
						<?php }?>
					</select>
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
		