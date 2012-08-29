<p><?php if ($this->session->userdata('rightmenu-update-result'))
	echo $this->session->userdata('rightmenu-update-result');
?></p>

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
		    		<th>Hình ảnh</th> 
		    		<th>Tiêu đề (V)</th>
		    		<th>Tiêu đề (E)</th>
		    		<th>Nội dung (V)</th> 
		    		<th>Nội dung (E)</th>
				</tr> 
			</thead> 
			<tbody> 
				<?php foreach ($list as $item)
				{?>
					<tr> 
						<td><a href="<?php echo base_url();?>rightmenu/admin/editMenuById/<?php echo $item->id;?>" title="Edit"><img src="<?php echo base_url();?>assets/admin/images/icn_edit.png"></a>
    				<a href="<?php echo base_url();?>rightmenu/admin/deleteMenuById/<?php echo $item->id;?>" title="Del"><img src="<?php echo base_url();?>assets/admin/images/icn_trash.png"></a></td>
			    		<td><?php echo $item->hinhanh;?></td> 
			    		<td><?php echo $item->tieudev;?></td> 
			    		<td><?php echo $item->tieudee;?></td> 
			    		<td><?php echo $item->noidungv;?></td> 
			    		<td><?php echo $item->noidunge;?></td>			    		
					</tr>
				<?php }?>
			</tbody> 
		</table>
	</div><!-- end of #tab1 -->
			
<footer>
<form action="http://localhost/leerobertsonx/app/admin/getPost" method="post">
		<div class="submit_link">
			<?php echo $this->pagination->create_links();?>	
			<a href="<?php echo base_url();?>rightmenu/admin/insertNewMenu" class='alt_btn'>Thêm mới</a>				
		</div>
		</form>
	</footer>
			
</div><!-- end of .tab_container -->
		
</article>
