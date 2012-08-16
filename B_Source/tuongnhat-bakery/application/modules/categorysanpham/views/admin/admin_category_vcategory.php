<article id="content" class="module width_3_quarter" style="width:95%;">
		<header><h3 class="tabs_involved">Products</h3>
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
    				<th>ID_Category</th> 
    				<th>Category Name en</th>
    				<th>Category Name en</th> 
    				<th>Category Decription en</th>
    				<th>Category Decription vn</th> 
    				<th>Actions</th> 
				</tr> 
			</thead> 
			<tbody> 
			<?php foreach ($listpaging as $row):?>
			
				<tr> 
					<td><?php echo $row-> category_id?></td> 
    				<td><?php echo $row-> category_name_en?></td>  
    				<td><?php echo $row-> category_name_vn?></td> 
    				<td><?php echo $row-> category_decription_en?></td>  
    				<td><?php echo $row-> category_decription_vn?></td> 
    				<td><a href="<?php echo base_url()?>categorysanpham/admin/getUpdateCategory/<?php echo $row->category_id?>" title="View"><img src="<?php echo base_url()?>assets/admin/images/icn_edit.png"></a>
    				<a href="<?php echo base_url()?>categorysanpham/admin/delCategory/<?php echo $row->category_id?>" title="Del"><img src="<?php echo base_url()?>assets/admin/images/icn_trash.png"></a></td>
    			</tr> 
		
			<?php endforeach;?>
				
			</tbody> 
			</table>
			</div>
			<?php echo form_open('categorysanpham/admin/getInsertCategory')?>
				<footer>
					<div class="submit_link">
						<input type="submit" value="Insert" class="alt_btn">
					</div>
				</footer>
		</form> 
		</div><!-- end of .tab_container -->
	</article><!-- end of content manager article -->	

<?php echo $this->paging_library->ajax_paging("ajax_paging","content","ajax_category")?>