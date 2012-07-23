<article class="module width_3_quarter" style="width:95%;">
		<header><h3 class="tabs_involved">Help</h3>
		<ul class="tabs">
			<?php echo $paging?>
		</ul>
		</header>

		<div class="tab_container">
			<div id="tab1" class="tab_content">
			<table class="tablesorter" cellspacing="0"> 
			<thead> 
				<tr> 
    				<th>ID</th> 
    				<th>Tittle</th>
       				<th>Actions</th> 
				</tr> 
			</thead> 
			<tbody>
			<?php foreach ($listpaging as $rws):?> 
				<tr>  
    				<td width="200px"><?php echo $rws->title?></td>  
    				<td width="600px"><?php echo word_limiter($rws->content,10).'...'?></td>
    				<td><a href="<?php echo base_url()?>example/admin/getEditHelp/<?php echo $rws->id?>" title="Edit"><img src="<?php echo base_url()?>assets/leerobertsonx_admin/images/icn_edit.png">
    					<a href="<?php echo base_url()?>example/admin/delHelp/<?php echo $rws->id?>" title="Del"><img src="<?php echo base_url()?>assets/leerobertsonx_admin/images/icn_trash.png">
    				</td> 
				</tr>
			<?php endforeach;?>
			</tbody> 
			</table>
			</div><!-- end of #tab1 -->
			<footer>
			<form action="<?php echo base_url()?>example/admin/getPostHelp" method="post">
				<div class="submit_link">
					<input type="submit" value="Post" class="alt_btn">	
				</div>
				</form>
				
			</footer>	
		</div><!-- end of .tab_container -->
	
			
		</div><!-- end of .tab_container -->
		
</article><!-- end of content manager article -->
