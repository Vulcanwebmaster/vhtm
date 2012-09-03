<?php
	foreach ($formData as $row) :
		switch ($row->id)
		{
		case 'column2':
			$column2TitleE = $row->titleE;
		  	$column2ContentE = $row->contentE;
			$column2Title = $row->title;
	  		$column2Content = $row->content; 
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
	
<form action="<?php echo base_url()?>gioithieu/admin/saveColumn1" method="post">    
	<article class="module width_full" style="width:95%;">
		<header>
			<h3><?php echo $this->lang->line('gioithieu-admin-column1'); ?></h3>			
		</header>
		<div class="module_content">
			<fieldset>
				<label><?php echo $this->lang->line('gioithieu-admin-column1-hyperlinklist'); ?></label>		
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
				<input type="submit" value="<?php echo $this->lang->line('gioithieu-admin-update'); ?>" class="alt_btn">
			</div>
		</footer>
	</article><!-- end of post new article -->
</form>	
<!-- End Column1 Info -->
<form action="<?php echo base_url()?>gioithieu/admin/saveColumn2" method="post">    
	<article class="module width_full" style="width:95%;">
		<header>
			<h3><?php echo $this->lang->line('gioithieu-admin-column2'); ?></h3>			
		</header>	
		<div class="module_content">
			<fieldset>
				<label><?php echo $this->lang->line('gioithieu-admin-column2-content'); ?></label>						
				<textarea name="gt_content" id="gt_content" ><?php echo $column2Content; ?></textarea>
				<?php echo display_ckeditor($ckeditor); ?>
				<br />
				<textarea name="gt_contentEng" id="gt_contentEng" ><?php echo $column2ContentE; ?></textarea>
				<?php echo display_ckeditor($ckeditor_2); ?>
			</fieldset>
		</div>		
		<footer>
			<div class="submit_link">
				<input type="submit" value="<?php echo $this->lang->line('gioithieu-admin-update'); ?>" class="alt_btn">
			</div>
		</footer>
		</article><!-- end of post new article -->
</form>	
<!-- End Column2 Info -->
<form action="<?php echo base_url()?>gioithieu/admin/saveColumn3" method="post">    
	<article class="module width_full" style="width:95%;">
		<header>
			<h3><?php echo $this->lang->line('gioithieu-admin-column3'); ?></h3>			
		</header>
		<div class="module_content">
			<fieldset>
				<label><?php echo $this->lang->line('gioithieu-admin-column3-comment'); ?></label>		
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
				<input type="submit" value="<?php echo $this->lang->line('gioithieu-admin-update'); ?>" class="alt_btn">
			</div>
		</footer>
	</article><!-- end of post new article -->
</form>	
<!-- End Column3 Info -->
</section>

</body>