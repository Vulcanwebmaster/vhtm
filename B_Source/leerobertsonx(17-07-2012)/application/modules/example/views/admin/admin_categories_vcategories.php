<?php $this->load->model('Mcategories');?>
<article class="module width_3_quarter" style="width:95%;">
		<header><h3 class="tabs_involved">Why Us</h3>
		<ul class="tabs">
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
			<?php foreach ($list as $rw):?> 
				<tr>  
    				<td width="200px"><?php echo $rw->title?></td> 
    				<td width="600px"><?php echo word_limiter($rw->detail,10).'...'?></td> 
    				<td><a href="<?php echo base_url()?>example/admin/getEditWhyUs/<?php echo $rw->id?>" title="Edit"><img src="<?php echo base_url()?>assets/leerobertsonx_admin/images/icn_edit.png">
    				</td> 
				</tr>
			<?php endforeach;?>
			</tbody> 
			</table>
			</div><!-- end of #tab1 -->
			
		</div><!-- end of .tab_container -->
		
</article><!-- end of content manager article -->
		
<div class="clear"></div>
		<article class="module width_3_quarter" style="width:95%;">
		<header><h3 class="tabs_involved">Help</h3>
		<ul class="tabs">
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
			<?php foreach ($listhelp as $rws):?> 
				<tr>  
    				<td width="200px"><?php echo $rws->id?></td> 
    				<td width="600px"><?php echo $rws->title?></td>  
    				<td><a href="<?php echo base_url()?>example/admin/getEditHelp/<?php echo $rws->id?>" title="Edit"><img src="<?php echo base_url()?>assets/leerobertsonx_admin/images/icn_edit.png">
    				</td> 
				</tr>
			<?php endforeach;?>
			</tbody> 
			</table>
			</div><!-- end of #tab1 -->
			
		</div><!-- end of .tab_container -->
		
</article><!-- end of content manager article -->

<div class="clear"></div>

<article class="module width_3_quarter" style="width:95%;">
		<header><h3 class="tabs_involved">Link Image</h3>
		<ul class="tabs">
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
			<?php foreach ($listimage as $rw):?> 
				<tr>  
    				<td width="200px"><?php echo $rw->id?></td> 
    				<td width="600px"><?php echo $this->Mcategories->fixImageLink_ToView($rw->image);?></td>  
    				<td><a href="<?php echo base_url()?>example/admin/getEditImage/<?php echo $rw->id?>" title="Edit"><img src="<?php echo base_url()?>assets/leerobertsonx_admin/images/icn_edit.png">
    				</td> 
				</tr>
			<?php endforeach;?>
			</tbody> 
			</table>
			</div><!-- end of #tab1 -->
			
		</div><!-- end of .tab_container -->
		
</article><!-- end of content manager article -->
		