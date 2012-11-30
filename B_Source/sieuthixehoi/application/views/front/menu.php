<!-- BEGIN .menu-primary-wrapper -->
			<div class="menu-primary-wrapper">
				<!-- BEGIN .menu-primary -->
				<div class="menu-primary">
					<table>
						<tr>
							<td class="menu">
								<ul>
									<li>
										<a href="<?php echo base_url();?>">Trang chủ</a>
									</li>
									<li><a href="<?php echo base_url("gioithieu");?>">Giới thiệu</a></li>
									<li>
										<a href="<?php echo base_url("sanpham");?>"><span>Sản phẩm</span></a>
										<ul>
											<li><a href="#">Chevrolet</a></li>
											<li><a href="#">Hyundai</a></li>
										</ul>
									</li>
									<li>
										<a href="#"><span>Tư vấn sản phẩm</span></a>
										<ul>
											<?php foreach ($list_tuvan as $tuvan){ ?>
												<li><a href="<?php echo base_url();?>tuvansanpham/detail/<?php echo $tuvan->id;?>">
													<?php echo $tuvan->sub_menu_title ?>
													</a>
												</li>
											<?php } ?>
										</ul>
									</li>
									<li><a href="<?php echo base_url("lienhe");?>">Liên hệ</a></li>
								</ul>
							</td>
						</tr>
					</table>
				<!-- END .menu-primary -->
				</div>
			<!-- END .menu-primary-wrapper -->
			</div>