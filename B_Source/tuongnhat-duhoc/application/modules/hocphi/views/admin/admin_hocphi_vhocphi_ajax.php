		<header><h3 class="tabs_involved"><?php echo $this->lang->line('hocphi-admin-product-hocphi');?></h3>
			<ul class="tabs">
			<div id="ajax_paging">
   				<?php echo $paging;?>
   			</div>
			</ul>
		</header>
		<div class="tab_container">
			<div id="tab1" class="tab_content" style="overflow:auto">
			<table class="tablesorter" cellspacing="0" style="width:1800px"> 
			<thead> 
				<tr> 
    				<th style="width: 50px"><?php echo $this->lang->line('hocphi-admin-fee-id');?></th> 
    				<th style="width: 150px"><?php echo $this->lang->line('hocphi-admin-fee-name-vn');?></th>
    				<th style="width: 150px"><?php echo $this->lang->line('hocphi-admin-fee-name-en');?></th> 
    				<th style="width: 500px"><?php echo $this->lang->line('hocphi-admin-fee-decription-vn');?></th>
    				<th style="width: 500px"><?php echo $this->lang->line('hocphi-admin-fee-decription-en');?></th> 
    				<th style="width: 100px"><?php echo $this->lang->line('hocphi-admin-actions');?></th> 
				</tr> 
			</thead> 
			<tbody> 
			<?php foreach ($listpaging as $row):?>
			<?php //echo form_open('sanpham/admin/getInsertProduct')?>
				<tr> 
					<td><?php echo $row-> fee_id?></td> 
    				<td><?php echo $row-> fee_name_vn?></td>  
    				<td><?php echo $row-> fee_name_en?></td> 
    				<td><?php echo $row-> fee_decription_vn?></td>  
    				<td><?php echo $row-> fee_decription_en?></td> 
    				<td><a href="<?php echo base_url()?>hocphi/admin/getUpdateFee/<?php echo $row->fee_id?>" title="Edit"><img src="<?php echo base_url()?>assets/admin/images/icn_edit.png"></a>
    				<a href="<?php echo base_url()?>hocphi/admin/delFee/<?php echo $row->fee_id?>" title="Del"><img src="<?php echo base_url()?>assets/admin/images/icn_trash.png"></a></td>
    			</tr> 
		
			<?php endforeach;?>
				
			</tbody> 
			</table>
			</div>
			<?php echo form_open('hocphi/admin/getInsertFee')?>
				<footer>
					<div class="submit_link">
						<input type="submit" value="<?php echo $this->lang->line('hocphi-admin-insert');?>" class="alt_btn">
					</div>
				</footer>
			</form> 
		</div><!-- end of .tab_container -->
<?php echo $this->paging_library->ajax_paging("ajax_paging","content")?>