<?php
	$this->load->model('Mfrontpage'); 
	
?>

<article class="module width_full">
<?php foreach ($slogan as $rw):?>
		<form action="<?php echo base_url()?>homepage/admin/getEditSlogan" method="post">
			<header><h3>Edit Slogan</h3></header>
				<div class="module_content">
						<fieldset>
							<label>Slogan</label>
							<!-- <input type="text" name="slogan" id="slogan" value="<?php echo $rw->slogan?>"> -->
							<?php echo $this->editor_library->editor('slogan',$rw->slogan,'')?>
						</fieldset>
						<div class="clear"></div>
				</div>
			<footer>
				<div class="submit_link">
					<input type="submit" value="Update" class="alt_btn">
				</div>
			</footer>
		<?php echo form_close();?>
<?php endforeach;?>
</article><!-- end of post new article -->	

		
		
		
		<div class="clear"></div>
	
	
	<article class="module width_3_quarter" style="width:95%;">
		<header><h3 class="tabs_involved">Slide</h3>
		<ul class="tabs">
   			<?php echo $paging;?>
		</ul>
		</header>

		<div class="tab_container">
			<div id="tab1" class="tab_content">
			<table class="tablesorter" cellspacing="0"> 
			<thead> 
				<tr> 
    				<th>Tittle</th> 
    				<th>Description</th>
    				<th>Order</th>
    				<th>Detail Tittle</th> 
    				<th>Actions</th> 
    				
				</tr> 
			</thead> 
			<tbody> 
			
			<?php foreach ($listpaging as $row):?>
				<tr>  
    				<td><?php echo $row-> title?></td> 
    				<td><?php echo word_limiter($row-> descriptiontitle, 8);?></td> 
    				<td><?php echo $row-> order?></td>
    				<td><?php echo $row-> detailtitle?></td> 
    				<td><a href="<?php echo base_url()?>homepage/admin/getSlide/<?php echo $row->id?>" title="Edit"><img src="<?php echo base_url()?>assets/leerobertsonx_admin/images/icn_edit.png"></a>
    				<a href="<?php echo base_url()?>homepage/admin/delSlide/<?php echo $row->id?>" title="Del"><img src="<?php echo base_url()?>assets/leerobertsonx_admin/images/icn_trash.png"></a></td>
				</tr> 
				<?php endforeach;?>
				
			</tbody> 
			</table>
			</div><!-- end of #tab1 -->
			
		<footer>
		<form action="<?php echo base_url()?>homepage/admin/getPostSlide" method="post">
				<div class="submit_link">
					
					<input type="submit" value="Add Slide" class="alt_btn">
					
				</div>
				</form>
			</footer>
			
		</div><!-- end of .tab_container -->
		
		</article><!-- end of content manager article -->
		
		
		
		<div class="clear"></div>
	

		


