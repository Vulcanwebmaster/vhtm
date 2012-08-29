<?php $this->load->helper('text');?>
<article class="module width_3_quarter" style="width:95%;">
	<header><h3 class="tabs_involved">Courses List</h3>
		
	</header>
	<div class="tab_container">
		<div id="tab1" class="tab_content">

			<table class="tablesorter" cellspacing="0"> 
			 	<thead> 
				<tr> 
					<th>ID</th>
    				<th>Tên khóa học</th>
    				<th>Loại khóa học</th>
    				<th>Học phí</th>
    				<th>Actions</th>
				</tr> 
			</thead> 
			<tbody> 
			
			<?php foreach ($query as $row): ?>
				<tr> 
    				<td><?php echo $row->id?></td>
    				<td><?php echo $row->ten?></td>
    				<td><?php echo $row->loaikhoahoc?></td>
    				<td><?php echo $row->hocphi?></td>
    				<td>
    					<a href="<?php echo base_url()?>khoahoc/admin/edit/<?php echo $row->id?>" title="View"><img src="<?php echo base_url()?>assets/admin/images/icn_edit.png"></a>
	    				<a href="<?php echo base_url()?>khoahoc/admin/delete/<?php echo $row->id?>" title="Del"><img src="<?php echo base_url()?>assets/admin/images/icn_trash.png"></a>
    				</td>
    			</tr> 
			<?php endforeach;?>
				
			</tbody>
			
			</table>
			<center>
				<span style="height:30px;text-align:center;color:blue;font-weight: bold;"><?php echo $this->pagination->create_links();?></span>
			</center>
		</div>
			<footer>
				<?php print form_open('khoahoc/admin/add')?>	
					<div class="submit_link">
						<input type="submit" value="Thêm khóa học" class="alt_btn">
					</div>
			</footer>
				<?php print form_close()?>
			
	</div>
</article>