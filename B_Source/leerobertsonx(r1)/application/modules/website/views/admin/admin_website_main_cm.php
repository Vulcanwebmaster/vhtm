<article class="module width_3_quarter" style="width:95%;">
		<header><h3 class="tabs_involved">Category Manager</h3>
		<ul class="tabs">
		</ul>
		</header>

		<div class="tab_container">
			<div id="tab1" class="tab_content">
			<table class="tablesorter" cellspacing="0"> 
			<thead> 
				<tr> 
    				<th>Category ID</th> 
    				<th>Category Name</th> 
    				<th>Last Modify</th> 
    				<th>Actions</th> 
				</tr> 
			</thead> 
			<tbody>
			<?php foreach ($lst_categories as $rw):?> 
				<tr>  
    				<td><?php echo $rw->id?></td> 
    				<td><?php echo $rw->name?></td> 
    				<td><?php echo $rw->date?></td> 
    				<td><a href="<?php echo base_url()?>website/admin/editCategory/<?php echo $rw->id?>" title="Edit"><img src="<?php echo base_url()?>assets/leerobertsonx_admin/images/icn_edit.png"></td> 
				</tr>
			<?php endforeach;?>
			</tbody> 
			</table>
			</div><!-- end of #tab1 -->
			
		</div><!-- end of .tab_container -->
		
</article><!-- end of content manager article -->
		