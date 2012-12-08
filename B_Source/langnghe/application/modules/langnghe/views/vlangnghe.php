<div class="container">
		<div class="title_content_left2">
			<div class="title_img"><img src="../images/ln_34.jpg"/></div>
			<div class="title_img" style="font-weight:bold; color:#fff;">Trang chủ </div>
			<div class="title_img" style=" color:#fff; ">>> </div>
			<div class="title_img" style="color:#fff; ">Làng nghề</div>
		</div>
		<?php foreach ($items as $value): ?>
												<table class="item">
													<tr>
														<td><a href="<?php echo base_url() ?><?php echo $value->village_id."-".$value->alias ?>">
																		</a></td>
														<td>
															<p class="title"><a href="<?php echo base_url() ?>langnghe/chitiet/<?php echo $value->village_id."-".$value->alias ?>"><?php echo $value->village_name?></a></p>
															<p class="description"><?php echo $value->village_description?></p>
														</td>
													</tr>
												</table>												
											<?php endforeach ?>
	</div>