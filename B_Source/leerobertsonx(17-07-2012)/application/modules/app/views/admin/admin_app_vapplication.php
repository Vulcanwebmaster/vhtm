	
	<section id="main" class="column" style="width:100%;">	
	<article class="module width_3_quarter" style="width:95%;">
		<header><h3 class="tabs_involved">Application</h3>
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
    				<th>Shortcontent</th>
    				<th>Order</th>
    				<th>Last Modify</th> 
    				<th>Actions</th> 
    				
				</tr> 
			</thead> 
			<tbody> 
			
			<?php foreach ($listpaging as $rowuser):?>
				<tr> 
   					<td><input type="checkbox"></td> 
    				<td><?php echo $rowuser-> title?></td> 
    				<td><?php echo word_limiter($rowuser-> shortcontent, 10);?></td> 
    				<td><?php echo $rowuser-> order?></td>
    				<td><?php echo $rowuser-> date?></td> 
    				<td><a href="<?php echo base_url()?>app/admin/getApp/<?php echo $rowuser->id?>" title="View"><img src="<?php echo base_url()?>assets/leerobertsonx_admin/images/icn_view.png"></a>
    				<a href="<?php echo base_url()?>app/admin/delApp/<?php echo $rowuser->id?>" title="Del"><img src="<?php echo base_url()?>assets/leerobertsonx_admin/images/icn_trash.png"></a></td>
				</tr> 
				<?php endforeach;?>
				
			</tbody> 
			</table>
			</div><!-- end of #tab1 -->
			
		<footer>
		<form action="<?php echo base_url()?>app/admin/getPost" method="post">
				<div class="submit_link">
					
					<input type="submit" value="Post" class="alt_btn">
					
				</div>
				</form>
			</footer>
			
		</div><!-- end of .tab_container -->
		
		</article><!-- end of content manager article -->
		
		
		
		<div class="clear"></div>
	
		
		
	</section>
