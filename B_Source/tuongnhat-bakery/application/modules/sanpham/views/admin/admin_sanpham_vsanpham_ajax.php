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
    				<th>Name_VN</th> 
    				<th>Name_EN</th>
    				<th>Actions</th> 
				</tr> 
			</thead> 
			<tbody> 
			<?php foreach ($listpaging as $row):?>
			<?php echo form_open('contactus/admin/getuser/'.$row->product_id)?>
				<tr> 
    				<td><?php echo $row-> product_name_vn?></td> 
    				<td><?php echo $row-> product_name_en?></td>  
    				<td><a href="<?php echo base_url()?>sanpham/admin/getDetailProduct/<?php echo $row->product_id?>" title="View"><img src="<?php echo base_url()?>assets/admin/images/icn_view.png"></a>
    				<a href="<?php echo base_url()?>sanpham/admin/delProduct/<?php echo $row->product_id?>" title="Del"><img src="<?php echo base_url()?>assets/admin/images/icn_trash.png"></a></td>
    			</tr> 
			</form> 
			<?php endforeach;?>
			</tbody> 
			</table>
			</div>
			
		</div><!-- end of .tab_container -->