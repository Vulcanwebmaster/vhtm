<!-- BEGIN .menu-primary-wrapper -->
			<div class="menu-primary-wrapper">
				<!-- BEGIN .menu-primary -->
				<div class="menu-primary">
					<table>
						<tr>
							<td class="menu">
								<ul>
									<li>
										<a href="<?php echo base_url();?>"><span>Trang chu</span></a>
										<!--
										<a href="assets/sieuthixehoi/images/homepage-style-1.html"><span>Homepage</span></a>
										<ul>
											<li><a href="assets/sieuthixehoi/images/homepage-style-1.html">Homepage style 1</a></li>
											<li><a href="assets/sieuthixehoi/images/homepage-style-2.html">Homepage style 2</a></li>
										</ul>-->
									</li>
									<li><a href="shortcodes-contact-form.html">Gioi thieu</a></li>
									<li>
										<a href="<?php echo base_url("sanpham");?>"><span>San pham</span></a>
										<ul>
											<li><a href="blog-style-1.html">Blog list style 1</a></li>
											<li><a href="blog-style-2.html">Blog list style 2</a></li>
											<li><a href="#"><span>Single post</span></a><ul><li><a href="post-style-1.html">Single post style 1</a></li><li><a href="post-style-2.html">Single post style 2</a></li><li><a href="post-no-slider.html">Single post without slider</a></li><li><a href="post-car-listings.html">Car listing post</a></li></ul></li>
										</ul>
									</li>
									<li>
										<a href="#"><span>Tu van san pham</span></a>
										<ul>
											<?php foreach ($list_tuvan as $tuvan){ ?>
												<li><a href="<?php echo base_url();?>tuvansanpham/detail/<?php echo $tuvan->id;?>">
													<?php echo $tuvan->sub_menu_title ?>
													</a>
												</li>
											<?php } ?>
										</ul>
									</li>
									<li><a href="shortcodes-contact-form.html">Lien he</a></li>
								</ul>
							</td>
						</tr>
					</table>
				<!-- END .menu-primary -->
				</div>
			<!-- END .menu-primary-wrapper -->
			</div>