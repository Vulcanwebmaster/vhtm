			<!-- BEGIN .content-wrapper -->
			<div class="content-wrapper">

				<!-- BEGIN .content -->
				<div class="content">

					<!-- BEGIN .homepage-wrapper -->
					<div class="homepage-wrapper">

						<!-- BEGIN .homepage-title -->
						<div class="homepage-title">
							<p>Các loại xe nổi bật</p>
						<!-- END .homepage-title -->
						</div>

						<!-- BEGIN .homepage-columns-1 -->
						<div class="homepage-columns-1 homepage-columns-1-spacer">
							<!-- BEGIN .item -->
							<?php foreach ($items as $value){ ?>
							<div class="item">
								<h3><a href="<?php echo base_url() ?>sanpham/chitiet/<?php echo $value->id."-".$value->alias ?>">
									<?php echo $value->namev?>
									</a></h3>
								<a href="<?php echo base_url() ?>sanpham/chitiet/<?php echo $value->id."-".$value->alias ?>" class="image12345" style="background: url(images/image-6.jpg) center center no-repeat;"><span class="glass">&nbsp;</span>
									<?php echo $value->image ?>
								</a>
								<p><?php echo word_limiter($value->mota, 25)?></p>
								<a href="<?php echo base_url() ?>sanpham/chitiet/<?php echo $value->id."-".$value->alias ?>" class="more-link">Read more</a>
							<!-- END .item -->
							</div>
							<?php } ?>
						<!-- END .homepage-columns-1 -->
						</div>
						<br clear="both" >
						<div class="back-to-top"><a href="#top"><span>go back to the top</span></a></div>

					<!-- END .homepage-wrapper -->
					</div>

				<!-- END .content -->
				</div>

			<!-- END .content-wrapper -->
			</div>