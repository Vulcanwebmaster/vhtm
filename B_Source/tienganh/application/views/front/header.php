<div id="header">
				<div class="content_header">
					<div id="topheader">
						<div id="left_topheader">
							<div class="left_top">
								<img src="<?php echo base_url();?>assets/trungtam-tienganh/images/star.gif"/>
								<p>Bookmark us</p>
							</div>
							<div class="left_top">|</div>
							<div class="left_top">
								<img src="<?php echo base_url();?>assets/trungtam-tienganh/images/gif.gif" alt="">
								<p>RSS</p>
							</div>
						</div>
						<div id="right_topheader">
							<img src="<?php echo base_url();?>assets/trungtam-tienganh/images/call.gif" alt=""/>
							<p>Tư vấn và hỗ trợ trực tuyến</p> <p class="textbold">Call 0985320995</p>
						</div>
					</div>
					<div id="absalute">
						<a href="https://twitter.com/"><img src="<?php echo base_url();?>assets/trungtam-tienganh/images/titwer.gif"/></a>
						<a href="https://www.youtube.com/"><img src="<?php echo base_url();?>assets/trungtam-tienganh/images/tube.gif" /></a>
						<a href="http://www.facebook.com/"><img src="<?php echo base_url();?>assets/trungtam-tienganh/images/face.gif"/></a>
					</div>
					<div id="header_logo">
						<div id="logo">
							<img src="<?php echo base_url();?>assets/trungtam-tienganh/images/logo.gif" alt="">				
						</div>
						<style>
							#search_bt{
								background: none;
								border: none;
								cursor: pointer
							}
						</style>
						<!------------Google Search---------->
						<div id="search">
							<div class="input">
								<form action="http://www.google.com/search" method="get" target="_blank">
									<input type="text" name="query" class="inputsearch"/>
									<!--<label class="labelsearch">Search</label>-->
									<input type="submit" value="Tìm kiếm" onclick="this.form.keyword.focus();" class="submitsearch"/>
									<input value="niw.com.vn" name="sitesearch" style="opacity: 0">
								</form>
							</div>
							<div class="language">
								<a href="#"><img src="<?php echo base_url();?>assets/trungtam-tienganh/images/language.gif"/></a>
							</div>
						</div>
						<!------------End Google Search---------->
					</div>
					
					<div id="menutop">
						<ul>
							<li class="home menu_move" id="homehd"><a href="<?php echo base_url();?>homepage">Home</a></li>
							<li  class="li menu_move" id="aboutushd"><a href="<?php echo base_url();?>gioithieu">Giới thiệu</a></li>
							<li  class="li menu_move" id="newshd"><a href="<?php echo base_url();?>tintuc">Tin tức</a></li>
							<li  class="li menu_move" id="coursehd"><a href="<?php echo base_url()?>khoahoc">Khóa học</a>
					<div class="submenu">
									<!-- <?php foreach ($list_courses_cate as $key) { ?>
										<?php foreach ($list_courses as $value) {?>
												<?php if($value->courses_category  ==  $key->id)
															{?>
																<div><?php echo $key->cate_name ?>
																	<div class="slidemove">
																		<ul class="inside">
																		<li><a href="<?php echo base_url();?>khoahoc/detail/<?php echo $value->courses_id."-".$value->alias;?>"><?php echo $value->courses_name ?></a></li>
																		</ul>
																	</div>
																</div>
															<?php } ?>
															<?php } ?>
														<?php } ?> -->
										<?php foreach ($list_courses_cate as $key) { ?>
																<div><?php echo $key->cate_name ?>
																	<div class="slidemove">
																		<?php foreach ($list_courses as $value) {?>
																		<?php if($value->courses_category  ==  $key->id)
																					{?>
																		<ul class="inside">
																		<li><a href="<?php echo base_url();?>khoahoc/detail/<?php echo $value->courses_id."-".$value->alias;?>"><?php echo $value->courses_name ?></a></li>
																		</ul>
																		<?php } ?>
																		<?php } ?>
																	</div>
																</div>
														<?php } ?>
							</li>
							<li  class="li menu_move" id="teacherhd"><a href="<?php echo base_url();?>giangvien">Giảng viên</a></li>
							<li  class="li menu_move" id="libraryhd"><a href="<?php echo base_url()?>thuvien/video">Thư viện</a></li>
							<li  class="li menu_move" id="contactushd"><a href="<?php echo base_url();?>lienhe">Liên hệ</a></li>
						</ul>
					</div>
				</div>
			</div>