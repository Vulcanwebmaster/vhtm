<div class="container">
		<div class="title_content_left2">
			<div class="title_img"><img src="<?php echo base_url();?>assets/langnghe/images/ln_34.jpg"/></div>
			<div class="title_img" style="font-weight:bold; color:#fff;">Trang chủ </div>
			<div class="title_img" style=" color:#fff; ">>> </div>
			<div class="title_img" style="color:#fff; ">Làng nghề</div>
		</div>
		<!--<p><?php echo $items->village_description ?></p>-->
		<?php  foreach ($items as $item) 
			{ ?>
			
			<table id="table92" cellpadding="0" width="100%" border="0" style="font-family: arial, sans-serif; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; widows: 2; word-spacing: 0px; -webkit-text-size-adjust: auto; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); border-collapse: collapse; ">
														<tbody>
															<tr>
															<td height="22" style="color: rgb(0, 0, 0); font-family: arial, sans-serif; " bgcolor="#F7F7F7">
															<p align="left">
															<font face="Arial" style="font-size: 9pt; ">
															<img height="5" src="<?php echo base_url();?>" width="3" border="0"><span lang="en-us"><span class="Apple-converted-space">&nbsp;</span></span>
															<a style="text-decoration: none" href="<?php echo base_url(); ?>"><?php echo $item->village_name;?></a></font></p></td>
															</tr>
														
														</tbody></table>
			<?php } ?>
	</div>