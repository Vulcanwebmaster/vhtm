<div id="content_left">
	<div id="imgleftgv"><p align="center">Thư viện</p></div>
 	<div id="contentlefftgv">
 		<ul id="ul_leftgv">
 			<li id="li_leftgv1"><a href="<?php echo base_url()?>thuvien/category/0">Hình ảnh trung tâm</a></li>
 			<li id="li_leftgv2"><a href="<?php echo base_url()?>thuvien/category/1">Hình ảnh khóa học</a></li>
 			<li id="li_leftgv3"><a href="<?php echo base_url()?>thuvien/category/2">Hình ảnh sự kiện</a></li>
 			<li id="li_leftgv4"><a href="<?php echo base_url()?>thuvien/video">Video khóa học</a></li>
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