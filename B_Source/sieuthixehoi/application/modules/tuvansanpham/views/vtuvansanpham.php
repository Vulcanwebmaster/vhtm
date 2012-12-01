				<!-- BEGIN .content -->
				<div class="content">


					<!-- BEGIN .full-width-content-wrapper -->
					<div class="full-width-content-wrapper">
						<!-- BEGIN .main-content -->
						<div class="main-content">

							<!-- BEGIN .main-title -->
							<div class="main-title">
								<span><b><h3>Menu tiêu đề</h3></b></span>
							<!-- END .main-title -->
							</div>

							<!-- BEGIN .full-width -->
							<div class="full-width">
								<ul>
									<?php foreach ($list as $tuvan){ ?>
										<li><a href="<?php echo base_url();?>tuvansanpham/detail/<?php echo $tuvan->id;?>">
											<?php echo $tuvan->title ?>
											</a>
										</li>
									<?php } ?>
								</ul>
							<!-- END .full-width -->
							</div>

						<!-- END .main-content -->
						</div>
						<div class="main-content-bottom">&nbsp;</div>
					<!-- END .full-width-content-wrapper -->
					</div>


					<div class="back-to-top"><a href="#top"><span>go back to the top</span></a></div>


				<!-- END .content -->
				</div>