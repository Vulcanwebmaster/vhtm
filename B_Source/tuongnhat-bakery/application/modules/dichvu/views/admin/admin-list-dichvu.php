<?php if ($this->session->userdata('insert_dichvu_result')!='')
{
	echo '<p style="color:red; padding-left:30px">';
	echo $this->session->userdata('insert_dichvu_result');
	$this->session->unset_userdata('insert_dichvu_result');
	echo '</p>';
}?>

<article class="module width_3_quarter" style="width: 95%;">
<header>
	<h3 class="tabs_involved"><?php if (isset($bcCurrent)) echo $bcCurrent;?></h3>
	<ul class="tabs"></ul>
</header>

<div class="tab_container">
	<div id="tab1" class="tab_content" style="overflow:auto">
		<table class="tablesorter" cellspacing="0"> 
			<thead> 
				<tr>
					<th>Chức năng</th> 
		    		<th>Tiêu đề (V)</th> 
		    		<th>Tiêu đề (E)</th>
		    		<th>Nội dung (V)</th>
		    		<th>Nội dung (E)</th> 
		    		<th>Ngày tháng</th>
				</tr> 
			</thead> 
			<tbody> 
				<?php foreach ($list as $item)
				{?>
					<tr> 
						<td><a href="<?php echo base_url();?>dichvu/admin/editById/<?php echo $item->id;?>" title="Edit"><img src="<?php echo base_url();?>assets/admin/images/icn_edit.png"></a>
    				<a href="<?php echo base_url();?>dichvu/admin/deleteById/<?php echo $item->id;?>" title="Del"><img src="<?php echo base_url();?>assets/admin/images/icn_trash.png"></a></td>
			    		<td><?php echo $item->tieudev;?></td> 
			    		<td><?php echo $item->tieudee;?></td> 
			    		<td><?php echo $item->noidungv;?></td> 
			    		<td><?php echo $item->noidunge;?></td> 
			    		<td><?php echo $item->ngaythang;?></td> 
					</tr>
				<?php }?>
			</tbody> 
		</table>
	</div><!-- end of #tab1 -->
			
<footer>
	<form method="post">
		<div class="submit_link">
			<?php echo $this->pagination->create_links();?>	
			<a href="<?php echo base_url();?>dichvu/admin/insertNew" class='alt_btn'>Thêm mới</a>				
		</div>
	</form>
</footer>
			
</div><!-- end of .tab_container -->
		
</article>
