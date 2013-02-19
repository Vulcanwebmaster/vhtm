	
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
					<label>NOM DU TOURNOI (en) </label>
					<input type="text" name="name_tour" style="width:92%" value="<?php echo $info->name_tour;?>"/>
				</fieldset>
				<fieldset>
					<label>NOM DU TOURNOI (fr)</label>
					<input type="text" name="name_tourfr" style="width:92%" value="<?php echo $info->name_tourfr;?>"/>
				</fieldset>
			
				<fieldset>
					<label>Joueur</label>
					<input type="text" name="players" style="width:92%" value="<?php echo $info->players;?>"/>
				</fieldset>
				
				
				<fieldset>
					<label>GAINS </label>
					<input type="text" name="tienthuong" style="width:92%" value="<?php echo $info->tienthuong;?>"/>
				</fieldset>
				
				<fieldset>
					<label>Règles (en)</label>
					<?php echo $this->ckeditor->editor('rules',$info->rules,$config);?>
				</fieldset>
				<fieldset>
					<label>Règles (fr)</label>
					<?php echo $this->ckeditor->editor('rulesfr',$info->rulesfr,$config);?>
				</fieldset>
				<fieldset>
					<label>Avatar</label>
					<?php echo $this->ckeditor->editor('avarta',$info->avarta,$config);?>
				</fieldset>
				
				<fieldset>
					<label>Date de début</label>
					<input type="text" name="start_date"  value="<?php echo $info->start_date;?>"/>
				</fieldset>
				<fieldset>
					<label>Date de fin</label>
					<input type="text" name="end_date" id="end_date" value="<?php echo $info->end_date;?>"/>
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
		