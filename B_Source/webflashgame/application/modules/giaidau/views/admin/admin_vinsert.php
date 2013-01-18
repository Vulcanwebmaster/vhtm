	
		<?php 
			echo validation_errors('<div class="error">','</div>');
		?>	
		
<script type="text/javascript">
	$(function() {
		$( "#ngaythang" ).datepicker();
	});
</script>
		
<form method="post" action="<?php echo base_url();?>giaidau/admin/insert">	
	<article class="module width_3_quarter" style="width:95%;">
		<header><h3 class="tabs_involved"><?php echo $title;?></h3>
		
		</header>
		<div class="tab_container">
			
			<div id="tab1" class="tab_content">
				<fieldset>
					<label>Tên giải đấu</label>
					<input type="text" name="name" style="width:92%"/>
				</fieldset>
				<fieldset>
					<label>overview</label>
					<?php echo $this->ckeditor->editor('overview','',$config);?>
				</fieldset>
				<fieldset>
					<label>Tên games</label>
					<select name="game_id">
						<option></option>
						<?php foreach ($list as $item)
						{?>
							<option value="<?php echo $item->id?>"><?php echo $item->name;?></option>							
						<?php }?> 
					</select>
				</fieldset>
				<fieldset>
					<label>Rules</label>
					<?php echo $this->ckeditor->editor('rules','',$config);?>
				</fieldset>
				<fieldset>
					<label>Start_date</label>
					<input type="text" name="start_date" id="start_date" value="<?php echo date('Y/m/d', time()+7*3600);?>"/>
				</fieldset>
				<fieldset>
					<label>End_date</label>
					<input type="text" name="end_date" id="start_date" value="<?php echo date('Y/m/d', time()+7*3600);?>"/>
				</fieldset>
				
			</div>
			
			<footer style="float:left">
					<div class="submit_link">
						<input type="submit" name="submit" value="Thêm" class="alt_btn">
					</div>
			</footer>
		</div><!-- end of .tab_container -->
				</article><!-- end of content manager article -->	
</form>
		