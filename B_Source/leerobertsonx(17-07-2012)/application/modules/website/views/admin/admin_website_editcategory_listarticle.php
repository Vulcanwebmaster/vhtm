<article class="module width_3_quarter" style="width:95%;">
		<header><h3 class="tabs_involved">Article Manager</h3>
		<ul class="tabs">
		</ul>
		</header>
		<div class="tab_container">
			<div id="tab1" class="tab_content">
			<table class="tablesorter" cellspacing="0"> 
			<thead> 
				<tr> 
    				<th>Article ID</th> 
    				<th>Article Name</th> 
    				<th>Last Modify</th> 
    				<th>Actions</th> 
				</tr> 
			</thead> 
			<tbody>
			<?php foreach ($lst_article as $rw):?> 
				<tr>  
    				<td><?php echo $rw->id?></td> 
    				<td><?php echo $rw->title?></td> 
    				<td><?php echo $rw->date?></td> 
    				<td><a href="<?php echo base_url()?>website/admin/editArticle/<?php echo $rw->id?>" title="Edit"><img src="<?php echo base_url()?>assets/leerobertsonx_admin/images/icn_edit.png">
    				<a href="<?php echo base_url()?>website/admin/delArticle/<?php echo $rw->category?>/<?php echo $rw->id?>" title="Delele Article"><img src="<?php echo base_url()?>assets/leerobertsonx_admin/images/icn_trash.png"></a></td> 
				</tr>
			<?php endforeach;?>
			</tbody> 
			</table>
			</div><!-- end of #tab1 -->
		</div><!-- end of .tab_container -->
		<?php echo form_open('website/admin/insertArticle/'.$this->uri->segment(4))?>
		<footer>
			<div class="submit_link">
				<input type="submit" value="Add New Article" class="alt_btn">
			</div>
		</footer>
		<?php echo form_close();?>
</article><!-- end of content manager article -->
		