<section id="main" class="column" style="width:100%;">
		
	
	<article class="module width_3_quarter" style="width:95%;">
		<header><h3 class="tabs_involved">About Us</h3>
		<ul class="tabs">
   			<?php echo $paging;?>
    		
		</ul>
		</header>

		<div class="tab_container">
			<div id="tab1" class="tab_content">
			<table class="tablesorter" cellspacing="0"> 
			<thead> 
				<tr> 
   					<th></th> 
    				<th>Tittle</th> 
    				<th>Content</th> 
    				<th>Last Modify</th> 
    				<th>Actions</th> 
    				
				</tr> 
			</thead> 
			<tbody> 
			
			<?php foreach ($listpaging as $row):?>
				<tr> 
   					<td><input type="checkbox"></td> 
    				<td><?php echo $row-> title?></td> 
    				<td><?php echo word_limiter($row->content,7).'...'?></td> 
    				<td><?php echo $row-> date?></td> 
    				<td><a href="<?php echo base_url()?>aboutus/admin/getEditAbout/<?php echo $row->id?>" title="Edit"><img src="<?php echo base_url()?>assets/leerobertsonx_admin/images/icn_edit.png"></a>
    				<a href="<?php echo base_url()?>aboutus/admin/delAboutus/<?php echo $row->id?>" title="Del"><img src="<?php echo base_url()?>assets/leerobertsonx_admin/images/icn_trash.png"></a></td>
				</tr> 
				<?php endforeach;?>
				
			</tbody> 
			</table>
			</div><!-- end of #tab1 -->
			
		<footer>
		<form action="<?php echo base_url()?>aboutus/admin/getAbout" method="post">
				<div class="submit_link">
					
					<input type="submit" value="Add New Article" class="alt_btn">
					
				</div>
				</form>
			</footer>
			
		</div><!-- end of .tab_container -->
		
		</article><!-- end of content manager article -->
		
		
		
		<div class="clear"></div>
	
		
		
	</section>

