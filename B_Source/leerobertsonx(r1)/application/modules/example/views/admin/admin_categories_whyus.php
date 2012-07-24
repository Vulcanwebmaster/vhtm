<?php $this->load->model('Mcategories');?>
<article class="module width_3_quarter" style="width:95%;">
		<header><h3 class="tabs_involved">Why Us</h3>
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
    				<th>Content</th> 
       				<th>Actions</th> 
				</tr> 
			</thead> 
			<tbody>
			<?php foreach ($listpaging as $rw):?> 
				<tr>  
    				<td width="200px"><?php echo $rw->title?></td> 
    				<td width="600px"><?php echo word_limiter($rw->detail,10).'...'?></td> 
    				<td><a href="<?php echo base_url()?>example/admin/getEditWhyUs/<?php echo $rw->id?>" title="Edit"><img src="<?php echo base_url()?>assets/leerobertsonx_admin/images/icn_edit.png">
    					<a href="<?php echo base_url()?>example/admin/delWhyUs/<?php echo $rw->id?>" title="Del"><img src="<?php echo base_url()?>assets/leerobertsonx_admin/images/icn_trash.png">
    				</td> 
				</tr>
			<?php endforeach;?>
			</tbody> 
			</table>
			</div><!-- end of #tab1 -->
			<footer>
		<form action="<?php echo base_url()?>example/admin/getPostWhyUs" method="post">
				<div class="submit_link">
					<input type="submit" value="Post" class="alt_btn">	
				</div>
		</form>
			</footer>	
		</div><!-- end of .tab_container -->
	</article><!-- end of content manager article -->
				
	<div class="clear"></div>
		
		
		