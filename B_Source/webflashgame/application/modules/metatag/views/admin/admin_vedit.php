	<?php 
			echo validation_errors('<div class="error">','</div>');
		?>	
<form method="post" action="<?php echo base_url();?>metatag/admin/edit/<?php echo $info->id;?>">	
	<article class="module width_3_quarter" style="width:95%;">
		<header><h3 class="tabs_involved"><?php echo $title;?></h3>
		
		</header>
		<div class="tab_container">
			<?php if ($this->session->userdata('result')!='')
						{
						echo '<p style="color:red; padding-left:30px">';
						echo $this->session->userdata('result');
						$this->session->unset_userdata('result');
						echo '</p>';
						}?>
			<div id="tab1" class="tab_content">
				<fieldset>
					<label>Meta maison</label>
					<input type="text" name="meta_home" style="width:92%" value="<?php echo $info->meta_home;?>"/>
				</fieldset>
				
				<fieldset>
					<label>Meta nouvelles</label>
					<input type="text" name="meta_news" style="width:92%" value="<?php echo $info->meta_news;?>"/>
				</fieldset>
				
				<fieldset>
					<label>Meta tournois</label>
					<input type="text" name="meta_tourmanents" style="width:92%" value="<?php echo $info->meta_tourmanents;?>"/>
				</fieldset>
				<fieldset>
					<label>Meta en ligne</label>
					<input type="text" name="meta_online" style="width:92%" value="<?php echo $info->meta_online;?>"/>
				</fieldset>
				<fieldset>
					<label>Meta aider</label>
					<input type="text" name="meta_help" style="width:92%" value="<?php echo $info->meta_help;?>"/>
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
		