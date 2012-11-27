
<script>
	$(document).ready(function() {
	  $('#m-sanpham').addClass('menu-visited');
	});
</script>
<div id="ja-mainbody" class="clearfix">
			<div class="stuff">
				<?php
					foreach($items as $item)
					{
						?>
							<div align="center" class="trangchuhehe" >
							
								<a href="<?php echo base_url() ?>sanpham/chitiet/<?php echo $item->category_id."-".$item->id."-".$item->alias ?>" class="name">
								
								<?php echo $item->image; ?>
								<?php echo $item->namev; ?>
								<?php echo $item->price; ?>
								</a>
								<br>
							</div>
							
						<?php
					}
				?>
				
			</div>

	</div>
