<?php $this->load->model('Mcategories');?>
<article class="module width_3_quarter" style="width:95%;">
		<header><h3 class="tabs_involved">Link Image</h3>
		<ul class="tabs">
			<?php echo $paging?>
		</ul>
		</header>

		<div class="tab_container">
			<div id="tab1" class="tab_content">
			<table class="tablesorter" cellspacing="0"> 
			<thead> 
				<tr> 
    				<th>Id</th> 
    				<th>Link Image</th>
       				<th>Actions</th> 
				</tr> 
			</thead> 
			<tbody>
			<?php foreach ($listpaging as $rw):?> 
				<tr>  
    				<td width="200px"><?php echo $rw->id?></td> 
    				<td width="600px"><?php echo $this->Mcategories->fixImageLink_ToView($rw->image);?></td>  
    				<td><a href="<?php echo base_url()?>example/admin/getEditImage/<?php echo $rw->id?>" title="Edit"><img src="<?php echo base_url()?>assets/leerobertsonx_admin/images/icn_edit.png">
    					<a href="<?php echo base_url()?>example/admin/delImage/<?php echo $rw->id?>" title="del"><img src="<?php echo base_url()?>assets/leerobertsonx_admin/images/icn_trash.png">
    				</td> 
				</tr>
			<?php endforeach;?>
			</tbody> 
			</table>
			</div><!-- end of #tab1 -->
			<footer>
				<form action="<?php echo base_url()?>example/admin/getPostImage" method="post">
				<div class="submit_link">
					<input type="submit" value="Post" class="alt_btn">	
				</div>
				</form>
			</footer>
			
		</div><!-- end of .tab_container -->
		
</article><!-- end of content manager article -->

