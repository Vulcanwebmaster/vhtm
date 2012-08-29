<article class="module width_3_quarter" style="width:95%;">
		<header><h3 class="tabs_involved"><?php echo $title;?></h3>
		<ul class="tabs">
		</ul>
		</header>

		<div class="tab_container">
			<div id="tab1" class="tab_content">
				<table class="tablesorter" cellspacing="0"> 
					<thead> 
						<tr> 
		    				<th>Họ tên</th> 
		    				<th>Công ty</th> 
		    				<th>Mã khách hàng</th> 
		    				<th>Phố</th>
							<th>Thành phố</th>
							<th>Email</th>
							<th>Điện thoại</th>
							<th>Câu hỏi</th>
						</tr> 
					</thead> 
					<tbody>
					 	<?php foreach ($list as $item)
					 	{?>
					 		<tr>  
			    				<td><?php echo $item->hoten;?></td> 
			    				<td><?php echo $item->congty;?></td> 
			    				<td><?php echo $item->makhachhang;?></td> 
			    				<td><?php echo $item->pho;?></td> 
								<td><?php echo $item->thanhpho;?></td> 
								<td><?php echo $item->email;?></td> 
								<td><?php echo $item->dienthoai;?></td> 
								<td><?php echo $item->cauhoi;?></td> 
							</tr>
					 	<?php }?>
					</tbody> 
				</table>
				<?php echo $this->pagination->create_links();?>
			</div><!-- end of #tab1 -->
			
		</div><!-- end of .tab_container -->
		
</article>