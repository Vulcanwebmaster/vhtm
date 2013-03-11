<div id="content_left">
	<div id="imgleftgv"><p align="center">Thư viện</p></div>
 	<div id="contentlefftgv">
 		<ul id="ul_leftgv">
 			<!-- Hình ảnh Danh mục -->
 			<?php 
 				foreach ($list_danhmuc_album as $danhmuc_album) {
 				if ($_SESSION['lang']=="vn") 
			{?>		
				<li id="li_leftgv4"><a href="<?php echo base_url()?>thuvien/category/<?php echo $danhmuc_album->id."/".$danhmuc_album->alias?>"><?php echo $danhmuc_album->category_name ?></a></li>
			<?php } else{ ?>
				<li id="li_leftgv4"><a href="<?php echo base_url()?>thuvien/category/<?php echo $danhmuc_album->id."/".$danhmuc_album->alias?>"><?php echo $danhmuc_album->category_namee ?></a></li>
			<?php } } ?>
			<!-- Video Danh mục -->
			<?php 
 				foreach ($list_danhmuc_video as $danhmuc_video) {
 				if ($_SESSION['lang']=="vn") 
			{?>		
				<li id="li_leftgv4"><a href="<?php echo base_url()?>thuvien/video/<?php echo $danhmuc_video->id."/".$danhmuc_video->alias?>"><?php echo $danhmuc_video->category_name ?></a></li>
			<?php } else{ ?>
				<li id="li_leftgv4"><a href="<?php echo base_url()?>thuvien/video/<?php echo $danhmuc_video->id."/".$danhmuc_video->alias?>"><?php echo $danhmuc_video->category_namee ?></a></li>
			<?php } } ?>
 			<!--End Video Danh mục -->
 		</ul>
 	</div>
 	<!------Banner------->
				 	<?php foreach ($list_quangcao as $quangcao)
							{?>
							<div id="divAds" >
							<a target="_blank" href="<?php echo $quangcao->link1 ?>"><?php echo $quangcao->anh1 ?></a>
							</div>
					<?php 	}
					foreach ($list_quangcao as $quangcao)
							{?>
							<div id="divAds" >
							<a target="_blank" href="<?php echo $quangcao->link2 ?>"><?php echo $quangcao->anh2 ?></a>
							</div>
					<?php 	} ?>
					<!------End Banner------->
 </div>	