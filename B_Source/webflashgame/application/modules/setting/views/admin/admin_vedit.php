	<?php 
			echo validation_errors('<div class="error">','</div>');
		?>	
		<?php if ($this->session->userdata('result')!='')
						{
						echo '<p style="color:red; padding-left:30px">';
						echo $this->session->userdata('result');
						$this->session->unset_userdata('result');
						echo '</p>';
						}?>
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
					<label>Link Fanpage</label>
					<input type="text" name="linkface" style="width:92%" value="<?php echo $info->linkface;?>"/>
				</fieldset>
				
				<fieldset>
					<label>Nouvelles (en)</label>
					<input type="text" name="news" style="width:92%" value="<?php echo $info->news;?>"/>
				</fieldset>
				
				<fieldset>
					<label>Nouvelles (fr)</label>
					<input type="text" name="newsfr" style="width:92%" value="<?php echo $info->newsfr;?>"/>
				</fieldset>
				<fieldset>
					<label>Jouer (en)</label>
					<input type="text" name="play" style="width:92%" value="<?php echo $info->play;?>"/>
				</fieldset>
				
				<fieldset>
					<label>Jouer (fr)</label>
					<input type="text" name="playfr" style="width:92%" value="<?php echo $info->playfr;?>"/>
				</fieldset>
				
				<fieldset>
					<label>Link Twitter</label>
					<input type="text" name="linktwitter" style="width:92%" value="<?php echo $info->linktwitter;?>"/>
				</fieldset>
				
				<fieldset>
					<label>Link Google</label>
					<input type="text" name="linkgoogle" style="width:92%" value="<?php echo $info->linkgoogle;?>"/>
				</fieldset>
				
				<fieldset>
					<label>Link Youtube</label>
					<input type="text" name="linkyoutube" style="width:92%" value="<?php echo $info->linkyoutube;?>"/>
				</fieldset>
				
				<fieldset>
					<label>Les données personnelles (fr)</label>
					<input type="text" name="personalfr" style="width:92%" value="<?php echo $info->personalfr;?>"/>
				</fieldset>
				<fieldset>
					<label>Les données personnelles</label>
					<input type="text" name="personal" style="width:92%" value="<?php echo $info->personal;?>"/>
				</fieldset>
				<fieldset>
					<label>Réglages (fr)</label>
					<input type="text" name="settingfr" style="width:92%" value="<?php echo $info->settingfr;?>"/>
				</fieldset>
				<fieldset>
					<label>Réglages (en)</label>
					<input type="text" name="setting" style="width:92%" value="<?php echo $info->setting;?>"/>
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
		