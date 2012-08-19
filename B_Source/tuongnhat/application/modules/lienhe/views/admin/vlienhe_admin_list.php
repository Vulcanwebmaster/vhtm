<article class="module width_3_quarter" style="width:95%;">
		<header><h3 class="tabs_involved">Category Manager</h3>
		<ul class="tabs">
		</ul>
		</header>

		<div class="tab_container">
			<div id="tab1" class="tab_content">
				<table class="tablesorter" cellspacing="0"> 
					<thead> 
						<tr> 
		    				<th>ID</th> 
		    				<th>Tên</th> 
		    				<th>Email</th> 
		    				<th>Thông tin</th> 
						</tr> 
					</thead> 
					<tbody>
					 	<?php foreach ($list as $item)
					 	{?>
					 		<tr>  
			    				<td><?php echo $item->id;?></td> 
			    				<td><?php echo $item->ten;?></td> 
			    				<td><?php echo $item->email;?></td> 
			    				<td><?php echo $item->thongtin;?></td> 
							</tr>
					 	<?php }?>
					</tbody> 
				</table>
				<?php echo $this->pagination->create_links();?>
			</div><!-- end of #tab1 -->
			
		</div><!-- end of .tab_container -->
		
</article>