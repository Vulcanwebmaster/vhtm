	
		<?php 
			echo validation_errors('<div class="error">','</div>');
		?>	
		
<script type="text/javascript">
	$(function() {
		$( "#ngaythang" ).datepicker();
	});
</script>
		
<form method="post" action="<?php echo base_url();?>giaidau/admin/edit/<?php echo $info->id;?>">	
	<article class="module width_3_quarter" style="width:95%;">
		<header><h3 class="tabs_involved"><?php echo $title;?></h3>
		</header>
		<div class="tab_container">
			
			<div id="tab1" class="tab_content">
				
				<fieldset>
					<label>Tên Giải đấu </label>
					<input type="text" name="name" style="width:92%" value="<?php echo $info->name;?>"/>
				</fieldset>
				<fieldset>
					<label>overview</label>
					<input type="text" name="overview" style="width:92%"/>
				</fieldset>
				<fieldset>
					<label>Tên games</label>
					<select name="game_id">
						<option></option>
						<?php foreach ($list as $item)
						{
							if ($item->id == $info->game_id)
							{?>
								<option value="<?php echo $item->id?>" selected="selected"><?php echo $item->name;?></option>
							<?php }
							else {?>
								<option value="<?php echo $item->id?>"><?php echo $item->name;?></option>
						<?php }}?>
					</select>
				</fieldset>
				<fieldset>
					<label>Rules</label>
					<?php echo $this->ckeditor->editor('rules',$info->rules,$config);?>
				</fieldset>
				<fieldset>
					<label>Start_date</label>
					<input type="text" name="start_date" value="<?php $info->start_date;?>"/>
				</fieldset>
				<fieldset>
					<label>End_date</label>
					<input type="text" name="end_date" id="end_date" value="<?php $info->end_date;?>"/>
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
		