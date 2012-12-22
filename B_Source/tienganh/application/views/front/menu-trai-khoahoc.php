<div id="content_left">
	<div id="imgleftgv"><p align="center">Thư viện</p></div>
 	<div id="contentlefftgv">
 		<ul id="ul_leftgv">
 			<?php foreach ($category as $value) 
 			{ ?>
 				
 				<li id="li_leftgv4"><a href="<?php echo base_url()?>khoahoc/category/"><?php echo $value->cate_name?></a></li>
 				
 			<?php } ?>
 		</ul>
 	</div>
 </div>	