	<article id="content" class="module width_3_quarter" style="width:95%;">
		<header><h3 class="tabs_involved">Messages from customers</h3>
			<ul class="tabs">
			<div id="ajax_paging">
   				<?php echo $paging;?>
   			</div>
			</ul>
		</header>
		<div class="tab_container">
			<div id="tab1" class="tab_content">
   		

			<table class="tablesorter" cellspacing="0"> 
			<thead> 
				<tr> 
    				<th>Name</th> 
    				<th>Email</th> 
    				<th>Created On</th> 
    				<th>Actions</th> 
				</tr> 
			</thead> 
			<tbody> 
			<?php foreach ($listpaging as $rowuser):?>
			<?php echo form_open('contactus/admin/getuser/'.$rowuser->id)?>
				<tr> 
    				<td><?php echo $rowuser-> name?></td> 
    				<td><?php echo $rowuser-> email?></td> 
    				<td><?php echo $rowuser-> date?></td> 
    				<td><a href="<?php echo base_url()?>example/admin/getMessage/<?php echo $rowuser->id?>" title="View"><img src="<?php echo base_url()?>assets/admin/images/icn_view.png"></a>
    				<a href="<?php echo base_url()?>example/admin/delMessage/<?php echo $rowuser->id?>" title="Del"><img src="<?php echo base_url()?>assets/admin/images/icn_trash.png"></a></td>
    			</tr> 
			</form> 
			<?php endforeach;?>
				
			</tbody> 
			</table>
			</div>
			
		</div><!-- end of .tab_container -->
				</article><!-- end of content manager article -->	

<?php echo $this->paging_library->ajax_paging("ajax_paging","content")?>
		