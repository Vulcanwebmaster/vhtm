	
		<?php 
			echo validation_errors('<div class="error">','</div>');
		?>	
<form method="post" action="<?php echo base_url();?>khoanggia/admin/edit/<?php echo $info->price_id;?>">	
	<article class="module width_3_quarter" style="width:95%;">
		<header><h3 class="tabs_involved"><?php echo $title;?></h3>
		</header>
		<div class="tab_container">
			<div id="tab1" class="tab_content">
				<fieldset>
					<label>Giá thấp nhất</label>
					<input type="text" name="price_min" value="<?php echo $info->price_min;?>"/>
				</fieldset>
				<fieldset>
					<label>Giá cao nhất</label>
					<input type="text" name="price_max" value="<?php echo $info->price_max;?>"/>
				</fieldset>
				<fieldset>
					<label>Kích hoạt</label>
					<select name="is_active">
						<?php if ($info->is_active == '1')
						{?>
							<option value="0">Không</option>
							<option value="1" selected="selected">Có</option>
						<?php }
						else {?>
							<option value="0" selected="selected">Không</option>
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
		