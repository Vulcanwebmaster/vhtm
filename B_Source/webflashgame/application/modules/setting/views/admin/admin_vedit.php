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
					<label>Phần trăm </label>
					<input type="text" name="phantramweb" style="width:92%" value="<?php echo $info->phantramweb;?>"/>
				</fieldset>
				
				<fieldset>
					<label>Top 1</label>
					<input type="text" name="top1" style="width:92%" value="<?php echo $info->top1;?>"/>
				</fieldset>
				<fieldset>
					<label>Top 2</label>
					<input type="text" name="top2" style="width:92%" value="<?php echo $info->top2;?>"/>
				</fieldset>
				<fieldset>
					<label>Top 3</label>
					<input type="text" name="top3" style="width:92%" value="<?php echo $info->top3;?>"/>
				</fieldset>
				<fieldset>
					<label>Top 4</label>
					<input type="text" name="top4" style="width:92%" value="<?php echo $info->top4;?>"/>
				</fieldset>
				<fieldset>
					<label>Top 5</label>
					<input type="text" name="top5" style="width:92%" value="<?php echo $info->top5;?>"/>
				</fieldset>
				
				<fieldset>
					<label>Top 6</label>
					<input type="text" name="top6" style="width:92%" value="<?php echo $info->top6;?>"/>
				</fieldset>
				<fieldset>
					<label>Top 7</label>
					<input type="text" name="top7" style="width:92%" value="<?php echo $info->top7;?>"/>
				</fieldset>
				<fieldset>
					<label>Top 8</label>
					<input type="text" name="top8" style="width:92%" value="<?php echo $info->top8;?>"/>
				</fieldset>
				<fieldset>
					<label>Top 9</label>
					<input type="text" name="top9" style="width:92%" value="<?php echo $info->top9;?>"/>
				</fieldset>
				<fieldset>
					<label>Top 10</label>
					<input type="text" name="top10" style="width:92%" value="<?php echo $info->top10;?>"/>
				</fieldset>
				<fieldset>
					<label>User gold</label>
					<input type="text" name="user_gold" style="width:92%" value="<?php echo $info->user_gold;?>"/>
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
		