	
		<?php 
			echo validation_errors('<div class="error">','</div>');
		?>	
<form method="post" action="<?php echo base_url();?>giaidau/admin/edit/<?php echo $info->tour_id;?>">	
	<article class="module width_3_quarter" style="width:95%;">
		<header><h3 class="tabs_involved"><?php echo $title;?></h3>
		
		</header>
		<div class="tab_container">
			
			<div id="tab1" class="tab_content">
				<fieldset>
					<label>Tournament name (en) </label>
					<input type="text" name="name_tour" style="width:92%" value="<?php echo $info->name_tour;?>"/>
				</fieldset>
				<fieldset>
					<label>Tournament name (fr)</label>
					<input type="text" name="name_tourfr" style="width:92%" value="<?php echo $info->name_tourfr;?>"/>
				</fieldset>
				<fieldset>
					<label>Overview (en)</label>
					<?php echo $this->ckeditor->editor('overview',$info->overview,$config);?>
				</fieldset>
				<fieldset>
					<label>Overview (fr)</label>
					<?php echo $this->ckeditor->editor('overviewfr',$info->overviewfr,$config);?>
				</fieldset>
				<fieldset>
					<label>Name game</label>
					<select name="game_id">
						<option></option>
						<?php foreach ($list as $item)
						{
							if ($item->game_id == $info->game_id)
							{?>
								<option value="<?php echo $item->game_id?>" selected="selected"><?php echo $item->name;?></option>
							<?php }
							else {?>
								<option value="<?php echo $item->game_id?>"><?php echo $item->name;?></option>
						<?php }}?>
					</select>
				</fieldset>
				<fieldset>
					<label>Name games (fr)</label>
					<select name="game_id">
						<option></option>
						<?php foreach ($list as $item)
						{
							if ($item->game_id == $info->game_id)
							{?>
								<option value="<?php echo $item->game_id?>" selected="selected"><?php echo $item->namefr;?></option>
							<?php }
							else {?>
								<option value="<?php echo $item->game_id?>"><?php echo $item->namefr;?></option>
						<?php }}?>
					</select>
				</fieldset>
				<fieldset>
					<label>Rules (en)</label>
					<?php echo $this->ckeditor->editor('rules',$info->rules,$config);?>
				</fieldset>
				<fieldset>
					<label>Rules (fr)</label>
					<?php echo $this->ckeditor->editor('rulesfr',$info->rulesfr,$config);?>
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
		