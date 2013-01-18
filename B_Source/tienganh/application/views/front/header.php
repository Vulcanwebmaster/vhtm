
<div id="header">
				<div class="content_header">
					<div id="topheader">
						<div id="left_topheader">
							<!-- <div class="left_top">
								<img src="<?php echo base_url();?>assets/trungtam-tienganh/images/star.gif"/>
								<p>
									<script language="javascript">
									<!--
									function bookmarksite(title, url) {
										if (document.all)
											window.external.AddFavorite(url, title);
										else if (window.sidebar)
											alert("Press Ctrl D keys to bookmark our site");
									}
									
								</script>
									<li><a href="javascript:bookmarksite('Yoursite.com','http://www.yoursite.com')">Bookmark us</a></li>
								</p>
							</div> -->
							<div class="left_top">
								<img src="<?php echo base_url();?>assets/trungtam-tienganh/images/star.gif">
								<!-- START BOOKMARK LINK -->
								<script language="javascript">
									function bookmarksite(title, url) {
										if (document.all)
											window.external.AddFavorite(url, title);
										else if (window.sidebar)
											alert("Press Ctrl D keys to bookmark our site");
									}
								</script>
	<a href="javascript:bookmarksite('trungtam-tienganh.com','<?php echo base_url();?>homepage')">Bookmark Us</a>
<!-- END BOOKMARK LINK -->
							</div>
							<div class="left_top">|</div>
							<div class="left_top">
								<img src="<?php echo base_url();?>assets/trungtam-tienganh/images/gif.gif" alt="">
								<a href="<?php echo base_url();?>rss"<p>RSS</p></a>
							</div>
						</div>
						<div id="right_topheader">
							<img src="<?php echo base_url();?>assets/trungtam-tienganh/images/call.gif" alt=""/>
							<p>
								<?php if ($_SESSION['lang']=="vn") 
								{?>		
									Tư vấn và hỗ trợ trực tuyến
								<?php } else{ ?>
									Support Online
								<?php } ?>

								</p> <p class="textbold">Call 0985320995</p>
						</div>
					</div>
					<div id="absalute">
						<a href="https://twitter.com/"><img src="<?php echo base_url();?>assets/trungtam-tienganh/images/titwer.gif"/></a>
						<a href="https://www.youtube.com/"><img src="<?php echo base_url();?>assets/trungtam-tienganh/images/tube.gif" /></a>
						<a href="http://www.facebook.com/"><img src="<?php echo base_url();?>assets/trungtam-tienganh/images/face.gif"/></a>
					</div>
					<div id="header_logo">
						<div id="logo">
							<img src="<?php echo base_url();?>assets/trungtam-tienganh/images/logo-jenny.png" alt="">				
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
									<input type="submit" 
									<?php if ($_SESSION['lang']=="vn") 
									{?>		
										value="Tìm kiếm"
									<?php } else{ ?>
										value="Search"
									<?php } ?>

									 onclick="this.form.keyword.focus();" class="submitsearch" style="padding-left: 14px;"/>
									<input value="jenny.edu.vn" name="sitesearch" style="opacity: 0">
								</form>
							</div>
							<div class="language">
								<!-- <a href="#"><img src="<?php echo base_url();?>assets/trungtam-tienganh/images/language.gif"/></a> -->
								<a href="<?php echo base_url();?>changelang/change/vn/<?php echo $this->uri->uri_string();?>">
									<img src="<?php echo base_url();?>assets/trungtam-tienganh/images/vn.jpg"/>					
								</a>
								<a href="<?php echo base_url();?>changelang/change/en/<?php echo $this->uri->uri_string();?>">
									<img src="<?php echo base_url();?>assets/trungtam-tienganh/images/el.jpg"/>					
								</a>
							</div>
						</div>
						<!------------End Google Search---------->
					</div>
					
					<div id="menutop">
						<ul>
							<?php if ($_SESSION['lang']=="vn") 
							{?>		
								<li class="home menu_move" id="homehd"><a href="<?php echo base_url();?>">Home</a></li>
									<li  class="li menu_move" id="aboutushd"><a href="<?php echo base_url();?>gioithieu/sumenh">Giới thiệu</a>
										<div class="submenu">
											<div>
												<a href="<?php echo base_url();?>gioithieu/sumenh">Sứ mệnh</a><br />
												<a href="<?php echo base_url();?>gioithieu/tamnhin">Tầm nhìn</a><br />
												<a href="<?php echo base_url();?>gioithieu/giatri">Giá trị cốt lõi</a>	<br />
												<a href="<?php echo base_url();?>gioithieu/vanhoa">Văn hóa công ty</a>
											</div>
										</div>
									</li>
									<li  class="li menu_move" id="newshd"><a href="<?php echo base_url();?>tintuc">Tin tức</a></li>
									<li  class="li menu_move" id="coursehd"><a href="<?php echo base_url()?>khoahoc">Khóa học</a>
										<div class="submenu">
										<?php foreach ($list_courses_cate as $key) { ?>
												<div><a href="<?php echo base_url()?>khoahoc/category/<?php echo $key->id."-".$key->alias?>">
													<?php echo $key->cate_name ?>
													</a><br />
												</div>
										<?php } ?>
										</div>
									</li>
									<li  class="li menu_move" id="teacherhd"><a href="<?php echo base_url();?>giangvien">Giảng viên</a>
										<div class="submenu">
											<div>
												<a href="<?php echo base_url();?>giangvien/thaygiao">Thầy giáo</a><br />
												<a href="<?php echo base_url();?>giangvien/cogiao">Cô giáo</a><br />
												<a href="<?php echo base_url();?>giangvien/trogiang">Trợ giảng</a>	<br />
											</div>
										</div>
									</li>
									<li  class="li menu_move" id="libraryhd"><a href="<?php echo base_url()?>thuvien/category/0">Thư viện</a></li>
									<li  class="li menu_move" id="contactushd"><a href="<?php echo base_url();?>lienhe">Liên hệ</a></li>
							<?php } else{ ?>
									<li class="home menu_move" id="homehd"><a href="<?php echo base_url();?>">Home</a></li>
									<li  class="li menu_move" id="aboutushd"><a href="<?php echo base_url();?>gioithieu/sumenh">About Us</a>
										<div class="submenu">
											<div>
												<a href="<?php echo base_url();?>gioithieu/sumenh">Mission</a><br />
												<a href="<?php echo base_url();?>gioithieu/tamnhin">Vision</a><br />
												<a href="<?php echo base_url();?>gioithieu/giatri">Core Values</a>	<br />
												<a href="<?php echo base_url();?>gioithieu/vanhoa">Company Culture</a>
											</div>
										</div>
									</li>
									<li  class="li menu_move" id="newshd"><a href="<?php echo base_url();?>tintuc">News</a></li>
									<li  class="li menu_move" id="coursehd"><a href="<?php echo base_url()?>khoahoc">Course</a>
										<div class="submenu">
										<?php foreach ($list_courses_cate as $key) { ?>
												<div><a href="<?php echo base_url()?>khoahoc/category/<?php echo $key->id."-".$key->alias?>">
													<?php echo $key->cate_namee ?>
													</a><br />
												</div>
										<?php } ?>
										</div>
									</li>
									<li  class="li menu_move" id="teacherhd"><a href="<?php echo base_url();?>giangvien">Lecturer</a>
										<div class="submenu">
											<div>
												<a href="<?php echo base_url();?>giangvien/thaygiao">Male teacher</a><br />
												<a href="<?php echo base_url();?>giangvien/cogiao">Female teacher</a><br />
												<a href="<?php echo base_url();?>giangvien/trogiang">Teaching assistants</a>	<br />
											</div>
										</div>
									</li>
									<li  class="li menu_move" id="libraryhd"><a href="<?php echo base_url()?>thuvien/category/0">Library</a></li>
									<li  class="li menu_move" id="contactushd"><a href="<?php echo base_url();?>lienhe">Contact Us</a></li>
							<?php } ?>
							</ul>	
					</div>
				</div>
			</div>