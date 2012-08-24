<?php
	foreach ($formData as $row) :
		switch ($row->id)
		{
		case 'slogan':
			$slogan = $row->title;
	  		$sloganContent = $row->content;
			$sloganE = $row->titleE;
	  		$sloganContentE = $row->contentE;  
		 	break;
		case 'hyperlink1':
			$hylnkTitle = $row->title;
	  		$hylnkTitleE = $row->titleE;
			$hylnkTitleContent = $row->content;
			$hylnkTitleContentE = $row->contentE;
		  	break;
		case 'column1':
			$column1TitleE = $row->titleE;
		  	$column1ContentE = $row->contentE;
			$column1Title = $row->title;
	  		$column1Content = $row->content;
		  	break;
		case 'column2':
			$column2TitleE = $row->titleE;
		  	$column2ContentE = $row->contentE;
			$column2Title = $row->title;
	  		$column2Content = $row->content; 
		  	break;		  
		case 'column3':
			$column3Title = $row->title;
	  		$column3TitleE = $row->titleE;
		  	break;	
		default:
		  break;
		} 		
		if ($row->parentid == 'column1')
		{
			$column1Hyperlink[] = array(
				"title" => $row->title,
				"link" => $row->content,
				"titleE" => $row->titleE,
				"linkE" => $row->contentE,
				);				
		}
		if ($row->parentid == 'column3')
		{
			$column3Comment[] = array(
				"content" => $row->content,
				"author" => $row->attribute1,
				"position" => $row->attribute2,
				"contentE" => $row->contentE,
				"authorE" => $row->attribute1E,
				"positionE" => $row->attribute2E
				);					
		}
 ?>
 <?php endforeach;?>
<section id="main" class="column" style="width:100%;">	
	
<form action="<?php echo base_url()?>gioithieu/admin/saveSlogan" method="post">    
	<article class="module width_full" style="width:95%;">
		<header>
			<h3>Slogan</h3>			
		</header>
		<div class="module_content">
			<fieldset>
				<label>Tieu de</label>						
				<input type="text" name="gt_slogan" style="width:45%;" value="<?php echo $slogan; ?>"/>
				<input type="text" name="gt_sloganEng" style="width:45%;" value="<?php echo $sloganE; ?>"/>
			</fieldset>
		</div>		
		<div class="module_content">
			<fieldset>
				<label><?php echo $this->lang->line('gioithieu_admin_slogan_delail'); ?></label>						
				<input type="text" name="gt_sloganDetail" style="width:45%;" value="<?php echo $sloganContent; ?>"/>
				<input type="text" name="gt_sloganDetailEng" style="width:45%;" value="<?php echo $sloganContentE; ?>"/>
			</fieldset>
		</div>
		<div class="module_content">
			<fieldset>
				<label><?php echo $this->lang->line('gioithieu_admin_slogan_hyperlink'); ?></label>			
				<input type="text" name="gt_hylink" style="width:45%;" value="<?php echo $hylnkTitle; ?>"/>
				<input type="text" name="gt_hylinkE" style="width:45%;" value="<?php echo $hylnkTitleE; ?>"/>
				<br/>
				<br/>
				<input type="text" name="gt_hylinkCont" style="width:45%;" value="<?php echo $hylnkTitleContent; ?>"/>
				<input type="text" name="gt_hylinkContE" style="width:45%;" value="<?php echo $hylnkTitleContentE; ?>"/>
			</fieldset>
		</div>
		<footer>
			<div class="submit_link">
				<input type="submit" value="<?php echo $this->lang->line('gioithieu_admin_update'); ?>" class="alt_btn">
			</div>
		</footer>
		</article><!-- end of post new article -->
</form>	
<!-- End Slogan Info -->
<form action="<?php echo base_url()?>gioithieu/admin/saveColumn1" method="post">    
	<article class="module width_full" style="width:95%;">
		<header>
			<h3><?php echo $this->lang->line('gioithieu_admin_column1'); ?></h3>			
		</header>
		<div class="module_content">
			<fieldset>
				<label><?php echo $this->lang->line('gioithieu_admin_column1_title'); ?></label>						
				<input type="text" name="gt_title" style="width:45%;" value="<?php echo $column1Title; ?>"/>
				<input type="text" name="gt_titleEng" style="width:45%;" value="<?php echo $column1TitleE; ?>"/>
			</fieldset>
		</div>		
		<div class="module_content">
			<fieldset>
				<label><?php echo $this->lang->line('gioithieu_admin_column1_content'); ?></label>						
				<input type="text" name="gt_content" style="width:45%;" value="<?php echo $column1Content; ?>"/>
				<input type="text" name="gt_contentEng" style="width:45%;" value="<?php echo $column1ContentE; ?>"/>
			</fieldset>
		</div>
		<div class="module_content">
			<fieldset>
				<label><?php echo $this->lang->line('gioithieu_admin_column1_hyperlinklist'); ?></label>		
				<?php 
				$count = 0;
				foreach ($column1Hyperlink as $row) : {?>
					<input type="text" name="gt_hpTitle<?php echo $count; ?>" style="width:20%;" value="<?php echo $row["title"]; ?>"/>
					<input type="text" name="gt_hpLink<?php echo $count; ?>" style="width:20%;" value="<?php echo $row["link"]; ?>"/>
					<input type="text" name="gt_hpTitleE<?php echo $count; ?>" style="width:20%;" value="<?php echo $row["titleE"]; ?>"/>
					<input type="text" name="gt_hpLinkE<?php echo $count; ?>" style="width:20%;" value="<?php echo $row["linkE"]; ?>"/>
					<br/><br/>
				<?php 
					$count++;} 
				endforeach;?>					
				<input type="hidden" name="hpLinkCnt" value = "<?php echo $count; ?>">
			</fieldset>
		</div>
		<footer>
			<div class="submit_link">
				<input type="submit" value="<?php echo $this->lang->line('gioithieu_admin_update'); ?>" class="alt_btn">
			</div>
		</footer>
	</article><!-- end of post new article -->
</form>	
<!-- End Column1 Info -->
<form action="<?php echo base_url()?>gioithieu/admin/saveColumn2" method="post">    
	<article class="module width_full" style="width:95%;">
		<header>
			<h3><?php echo $this->lang->line('gioithieu_admin_column2'); ?></h3>			
		</header>
		<div class="module_content">
			<fieldset>
				<label><?php echo $this->lang->line('gioithieu_admin_column2_title'); ?></label>						
				<input type="text" name="gt_title" style="width:45%;" value="<?php echo $column2Title; ?>"/>
				<input type="text" name="gt_titleEng" style="width:45%;" value="<?php echo $column2TitleE; ?>"/>
			</fieldset>
		</div>		
		<div class="module_content">
			<fieldset>
				<label><?php echo $this->lang->line('gioithieu_admin_column2_content'); ?></label>						
				<textarea name="gt_content" id="gt_content" ><?php echo $column2Content; ?></textarea>
				<?php echo display_ckeditor($ckeditor); ?>
				<br />
				<textarea name="gt_contentEng" id="gt_contentEng" ><?php echo $column2ContentE; ?></textarea>
				<?php echo display_ckeditor($ckeditor_2); ?>
			</fieldset>
		</div>		
		<footer>
			<div class="submit_link">
				<input type="submit" value="<?php echo $this->lang->line('gioithieu_admin_update'); ?>" class="alt_btn">
			</div>
		</footer>
		</article><!-- end of post new article -->
</form>	
<!-- End Column2 Info -->
<form action="<?php echo base_url()?>gioithieu/admin/saveColumn3" method="post">    
	<article class="module width_full" style="width:95%;">
		<header>
			<h3><?php echo $this->lang->line('gioithieu_admin_column3'); ?></h3>			
		</header>
		<div class="module_content">
			<fieldset>
				<label><?php echo $this->lang->line('gioithieu_admin_column3_title'); ?></label>						
				<input type="text" name="gt_title" style="width:45%;" value="<?php echo $column3Title; ?>"/>
				<input type="text" name="gt_titleEng" style="width:45%;" value="<?php echo $column3TitleE; ?>"/>
			</fieldset>
		</div>	
		<div class="module_content">
			<fieldset>
				<label><?php echo $this->lang->line('gioithieu_admin_column3_comment'); ?></label>		
				<?php 
				$count = 0;
				foreach ($column3Comment as $row) : {?>
					<input type="text" name="gt_cmtContent<?php echo $count; ?>" style="width:45%;" value="<?php echo $row["content"]; ?>"/>
					<input type="text" name="gt_cmtContentEng<?php echo $count; ?>" style="width:45%;" value="<?php echo $row["contentE"]; ?>"/>
					<br/><br/>
					
					<input type="text" name="gt_hpAtt1<?php echo $count; ?>" style="width:20%;margin-left:2.5%" value="<?php echo $row["author"]; ?>"/>
					<input type="text" name="gt_hpAtt1Eng<?php echo $count; ?>" style="width:20%;" value="<?php echo $row["authorE"]; ?>"/>
					<input type="text" name="gt_hpAtt2<?php echo $count; ?>" style="width:20%;margin-left:2.5%" value="<?php echo $row["position"]; ?>"/>
					<input type="text" name="gt_hpAtt2Eng<?php echo $count; ?>" style="width:20%;" value="<?php echo $row["positionE"]; ?>"/>
					<br/><br/>
				<?php 
					$count++;} 
				endforeach;?>					
				<input type="hidden" name="cmtCnt" value = "<?php echo $count; ?>">
			</fieldset>
		</div>
		<footer>
			<div class="submit_link">
				<input type="submit" value="<?php echo $this->lang->line('gioithieu_admin_update'); ?>" class="alt_btn">
			</div>
		</footer>
	</article><!-- end of post new article -->
</form>	
<!-- End Column3 Info -->
</section>

</body>