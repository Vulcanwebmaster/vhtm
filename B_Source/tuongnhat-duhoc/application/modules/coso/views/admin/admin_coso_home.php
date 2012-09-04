<?php $this->load->helper('text');?>
<article class="module width_3_quarter" style="width:95%;">
	<header><h3 class="tabs_involved"><?php echo $title; ?></h3>
		
	</header>
	<div class="tab_container">
		<div id="tab1" class="tab_content">

			<table class="tablesorter" cellspacing="0"> 
			 	<thead> 
				<tr> 
    				<th>ID</th>
    				<th>Tên</th>
    				<th>Tiêu đề</th>
    				<th>Sửa</th>
				</tr> 
			</thead> 
			<tbody> 
			
			<?php foreach ($query as $row): ?>
				<tr> 
    				<td><?php echo $row->id?></td>
    				<td><?php echo $row->ten?></td>
    				<td><?php echo $row->tieude?></td>
    				<td>
    					<a href="<?php echo base_url()?>coso/admin/edit/<?php echo $row->id?>" title="View"><img src="<?php echo base_url()?>assets/admin/images/icn_edit.png"></a>
    				</td>
    			</tr> 
			<?php endforeach;?>
				
			</tbody>
			
			</table>
			<center>
				<span style="height:30px;text-align:center;color:blue;font-weight: bold;"><?php echo $this->pagination->create_links();?></span>
			</center>
		</div>			
	</div>
</article>