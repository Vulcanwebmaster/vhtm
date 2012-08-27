<article id="content" class="module width_3_quarter" style="width:95%;">
		<header><h3 class="tabs_involved"><?php echo $this->lang->line('category-admin-product-category');?></h3>
			<ul class="tabs">
			<div id="ajax_paging">
   				<?php echo $paging;?>
   			</div>
			</ul>
		</header>
		<div class="tab_container" >
			<div id="tab1" class="tab_content" style="overflow:auto">
			<table class="tablesorter" cellspacing="0" style="width:1800px"> 
			<thead> 
				<tr> 
    				<th style="width: 50px"><?php echo $this->lang->line('category-admin-id');?></th> 
    				<th style="width: 150px"><?php echo $this->lang->line('category-admin-name-en');?></th>
    				<th style="width: 150px"><?php echo $this->lang->line('category-admin-name-vn');?></th> 
    				<th style="width: 500px"><?php echo $this->lang->line('category-admin-description-en');?></th>
    				<th style="width: 500px"><?php echo $this->lang->line('category-admin-description-vn');?></th> 
    				<th style="width: 200px"><?php echo $this->lang->line('category-admin-image');?></th> 
    				<th style="width: 100px"><?php echo $this->lang->line('category-admin-actions');?></th> 
				</tr> 
			</thead> 
			<tbody> 
			<?php foreach ($listpaging as $row):?>
			
				<tr> 
					<td><?php echo $row-> category_id?></td> 
    				<td><?php echo $row-> category_name_en?></td>  
    				<td><?php echo $row-> category_name_vn?></td> 
    				<td><?php echo $row-> catogories_decription_en?></td>  
    				<td><?php echo $row-> catogories_decription_vn?></td> 
    				<td><?php echo $row-> category_image?></td>
    				<td><a href="<?php echo base_url()?>categorysanpham/admin/getUpdateCategory/<?php echo $row->category_id?>" title="View"><img src="<?php echo base_url()?>assets/admin/images/icn_edit.png"></a>
    				<a href="<?php echo base_url()?>categorysanpham/admin/delCategory/id=<?php echo $row->category_id?>" title="Del"><img src="<?php echo base_url()?>assets/admin/images/icn_trash.png"></a></td>
    			</tr> 
		
			<?php endforeach;?>
				
			</tbody> 
			</table>
			</div>
			<?php echo form_open('categorysanpham/admin/getInsertCategory')?>
				<footer>
					<div class="submit_link">
						<input type="submit" value="<?php echo $this->lang->line('category-admin-insert');?>" class="alt_btn">
					</div>
				</footer>
			</form> 
		</div><!-- end of .tab_container -->
</article><!-- end of content manager article -->	

<?php echo $this->paging_library->ajax_paging("ajax_paging","content","ajax_category")?>