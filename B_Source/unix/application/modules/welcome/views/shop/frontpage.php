		<div id="mask" style="display:none;text-align:center;padding: 20px; text-shadow: black 0px -1px 0px; color: white; position: fixed; width: 600px; height: auto; margin-top: 0; margin-left:350px; background-color: rgb(90, 90, 90); border-top-left-radius: 10px; border-top-right-radius: 10px; border-bottom-right-radius: 10px; border-bottom-left-radius: 10px; z-index: 9; border: 4px solid rgb(182, 182, 181); display: block; ">
			<div style="width:30px; cursor:pointer; border-radius:10px; background-color:white; padding:5px; color:black; float:right" align="right"><span id="maskClose">Thoát</span></div>
			<h3 style="padding-left:20px">Đăng ký</h3>
			<h2>KIỂM TRA ĐẦU VÀO MIỄN PHÍ TẠI UNIX</h2>
			<center>
				<form method="post" action="<?php echo base_url();?>index.php/dangky/dangkymoi">
					<table>
						<tr>
							<td style="width:150px">Họ tên</td>
							<td><input name="hoten" type="text"/></td>
						</tr>
						<tr><td style="height:10px"></td></tr>
						<tr>
							<td>Trường học</td>
							<td><input name="truonghoc" type="text"/></td>
						</tr>
						<tr><td style="height:10px"></td></tr>
						<tr>
							<td>Lớp</td>
							<td><input name="lop" type="text"/></td>
						</tr>
						<tr><td style="height:10px"></td></tr>
						<tr>
							<td>Phụ huynh</td>
							<td><input name="phuhuynh" type="text"/></td>
						</tr>
						<tr><td style="height:10px"></td></tr>
						<tr>
							<td>Điện thoại liên lạc</td>
							<td><input name="dienthoai" type="text"/></td>
						</tr>
						<tr><td style="height:10px"></td></tr>
						<tr>
							<td>Chọn lịch kiểm tra</td>
							<td>
							<select name="ten" style="width:152px">
								<?php 
									$lichtest=$this->MKaimonokago->get_lichtest();
									foreach($lichtest as $test)
									{
								?>
								<option value="<?php echo $test->ten;?>"><?php echo $test->ten; ?></option>
								<?php }?>
							</select>
							</td>
						</tr>
						<tr><td style="height:10px"></td></tr>
						<tr>
							<td colspan="2" style="text-align:center">
								<input type="submit" value="Đăng ký" name="submit"/>
							</td>
						</tr>
					</table>
				</form>
			</center>
		</div>
		
		<div id="laai" style="display:none;text-align:center;padding: 20px; text-shadow: black 0px -1px 0px; color: white; position: fixed; width: 600px; height: auto; margin-top: 0; margin-left:350px; background-color: rgb(90, 90, 90); border-top-left-radius: 10px; border-top-right-radius: 10px; border-bottom-right-radius: 10px; border-bottom-left-radius: 10px; z-index: 9; border: 4px solid rgb(182, 182, 181); display: block; ">
			<div style="width:30px; cursor:pointer; border-radius:10px; background-color:white; padding:5px; color:black; float:right" align="right"><span id="laaiClose">Thoát</span></div>
			<?php 
				$content=$this->MKaimonokago->homepageLoadNoiDung(7);
				?>
					<center style="font-weight:bold;text-transform: uppercase;">
						<?php echo $content->tenmuc; ?>
					</center>
				<span style="align:left"><?php echo $content->dulieu;?></span>
		</div>
		
		<div id="lamgi" style="display:none;text-align:center;padding: 20px; text-shadow: black 0px -1px 0px; color: white; position: fixed; width: 600px; height: auto; margin-top: 0; margin-left:350px; background-color: rgb(90, 90, 90); border-top-left-radius: 10px; border-top-right-radius: 10px; border-bottom-right-radius: 10px; border-bottom-left-radius: 10px; z-index: 9; border: 4px solid rgb(182, 182, 181); display: block; ">
			<div style="width:30px; cursor:pointer; border-radius:10px; background-color:white; padding:5px; color:black; float:right" align="right"><span id="lamgiClose">Thoát</span></div>
			<?php 
				$content=$this->MKaimonokago->homepageLoadNoiDung(8);
				?>
					<center style="font-weight:bold;text-transform: uppercase;">
						<?php echo $content->tenmuc; ?>
					</center>
				<span style="align:left"><?php echo $content->dulieu;?></span>
		</div>
		<!--
	    <div id="banner-left">
	    	<ul>
		    	<li>
		    		<a class="image" href="<?php echo base_url();?>index.php/gioithieu" style="vertical-align:50%"><img src="<?php echo base_url();?>assets/unix/images/teacher_icon.png"/><br/><span>Thầy Phan Quang Điệp</span></a>
		    	</li>
		    	<li><hr/></li>
		    	<li>
		    		<a href="<?php echo base_url();?>index.php/camnhan" style="vertical-align:50%"><img src="<?php echo base_url();?>assets/unix/images/comment-icon.png"/><span>Cảm nhận</span></a>
		    	</li>	
		    	<li><hr/></li>
	    	</ul>
	    </div>
		-->
<?php $this->load->view('shop/slide.php')?>
<!-- Start slide show and video-->
<div id="mainbottom">
		<div id="bottom-left">
			<div style="height:55px"></div>
			<marquee onmouseover="this.stop();" onmouseout="this.start();" behavior="scroll" direction="left" scrollamount="5">
				<a><img alt="" src="http://i1168.photobucket.com/albums/r484/manhtienunix/Slide anh-trang chu/DSC_0596.jpg" height="150px"></a><a><img alt="" src="http://i1168.photobucket.com/albums/r484/manhtienunix/Slide anh-trang chu/DSC_0601.jpg" height="150px"></a><a><img alt="" src="http://i1168.photobucket.com/albums/r484/manhtienunix/Slide anh-trang chu/DSC_0616.jpg" height="150px"></a><a><img alt="" src="http://i1168.photobucket.com/albums/r484/manhtienunix/Slide anh-trang chu/1123MaxWidth640MaxHeight480.jpg" height="150px"></a><a><img alt="" src="http://i1168.photobucket.com/albums/r484/manhtienunix/Slide anh-trang chu/7.jpg" height="150px"></a><a><img alt="" src="http://i1168.photobucket.com/albums/r484/manhtienunix/Slide anh-trang chu/DSC_0341.jpg" height="150px"></a><a><img alt="" src="http://i1168.photobucket.com/albums/r484/manhtienunix/Slide anh-trang chu/DSC_0364MaxWidth1024MaxHeight768.jpg" height="150px"></a><a><img alt="" src="http://i1168.photobucket.com/albums/r484/manhtienunix/Slide anh-trang chu/DSC_0350.jpg" height="150px"></a><a><img alt="" src="http://i1168.photobucket.com/albums/r484/manhtienunix/Slide anh-trang chu/33MaxWidth640MaxHeight480.jpg" height="150px"></a><a><img alt="" src="http://i1168.photobucket.com/albums/r484/manhtienunix/Slide anh-trang chu/DSC_0770.jpg" height="150px"></a><a><img alt="" src="http://i1168.photobucket.com/albums/r484/manhtienunix/Slide anh-trang chu/DSC_0704.jpg" height="150px"></a><a><img alt="" src="http://i1168.photobucket.com/albums/r484/manhtienunix/Slide anh-trang chu/DSC_0719.jpg" height="150px"></a><a><img alt="" src="http://i1168.photobucket.com/albums/r484/manhtienunix/Slide anh-trang chu/IMG_3318MaxWidth640MaxHeight480.jpg" height="150px"></a>				<!-- a><img alt="" src="http://unix.vn/assets/unix/images/slide-bottom/1.jpg" height="150px"/></a>
				<a><img alt="" src="http://unix.vn/assets/unix/images/slide-bottom/2.jpg" height="150px"/></a>
				<a><img alt="" src="http://unix.vn/assets/unix/images/slide-bottom/3.jpg" height="150px"/></a>
				<a><img alt="" src="http://unix.vn/assets/unix/images/slide-bottom/4.jpg" height="150px"/></a>
				<a><img alt="" src="http://unix.vn/assets/unix/images/slide-bottom/5.jpg" height="150px"/></a -->
			</marquee>
		</div>
		<div id="bottom-right">
			<div style="height:40px"></div>
			<?php if ($this->MKaimonokago->homepageLoadNoiDung(6))
			{
				$video=$this->MKaimonokago->homepageLoadNoiDung(6);
				echo '<iframe height="180px" src="'.str_replace('watch?v=', 'embed/', $video->dulieu).'" frameborder="0" allowfullscreen></iframe>';
			}?>
			<!--iframe height="200px" src="http://www.youtube.com/embed/bKAdluwY49M" frameborder="0" allowfullscreen></iframe -->
		
		</div>
	</div>

<!--Lịch hội thảo-->
<div id="table">
	<div id="icon-menu"><p>Lịch hội thảo</p></div>
	<div id="main-table">
		<table border="0px" style="width:100%">
			<tr id="tr1" class="tr-th">
				<td style="width:27%;padding-left:11%"><b>Sự kiện</b></td>
				<td style="width:15%;padding-left: 4%"><b>Thời gian</b></td>
				<td style="width:27%;padding-left: 10%;"><b>Địa điểm</b></td>
				<td style="width:15%;padding-left: 2%;"><b>Đơn vị tổ chức</b></td>
				<td style="width:15%;padding-left:4%"><b>Tình trạng</b></td>
			</tr>
			<?php 
				$lichhoithao=$this->MKaimonokago->get_lichhoithao();
				foreach($lichhoithao as $hoithao)
				{
			?>
			<tr class="tr-td">
				<td><?php echo $hoithao->sukien; ?></td>
				<td><?php echo $hoithao->thoigian; ?></td>
				<td><?php echo $hoithao->diadiem;?></td>
				<td><?php echo $hoithao->donvitochuc; ?></td>
				<td><?php echo $hoithao->tinhtrang; ?></td>				
			</tr>
			<?php }?>
		</table>
	</div>
</div>

<!--Lịch test đầu vào-->
<div id="table">
	<div id="icon-menu"><p>Lịch kiểm tra đầu vào</p></div>
	<div id="main-table">
		<table border="0px" style="width:100%">
			<tr id="tr1" class="tr-th">
				<td style="width:15%;padding-left: 9%;"><b>Tên lịch</b></td>
				<td style="width:20%;padding-left:11%"><b>Thời gian</b></td>
				<td style="width:20%;padding-left:11%"><b>Địa điểm</b></td>
				<td style="width:15%;padding-left:5%"><b>Đơn vị tổ chức</b></td>
			</tr>
			<?php 
				$lichtest=$this->MKaimonokago->get_lichtest();
				foreach($lichtest as $test)
				{
			?>
			<tr class="tr-td">
				<td><?php echo $test->ten; ?></td>
				<td><?php echo $test->thoigian; ?></td>
				<td><?php echo $test->diadiem; ?></td>
				<td><?php echo $test->donvitochuc; ?></td>
			</tr>
			<?php }?>
		</table>
	</div>
</div>

<!--Lich học từng khóa-->
<div id="table">
	<div id="icon-menu"><p>Lịch học từng khóa</p></div>
	<div id="main-table">
		<table border="0px" style="width:100%">
			<tr id="tr1" class="tr-th">
				<td style="width:10%;padding-left:6%"><b>Khóa</b></td>
				<td style="width:15%;padding-left:8%"><b>Thời gian</b></td>
				<td style="width:27%;padding-left:16%"><b>Địa điểm</b></td>
				<td style="width:15%;padding-left:8%"><b>Giảng viên</b></td>
			</tr>
			<?php 
				$lichhoc=$this->MKaimonokago->get_lichhoc();
				foreach($lichhoc as $lh)
				{
			?>
			<tr class="tr-td">
				<td><?php echo $lh->khoa; ?></td>
				<td><?php echo $lh->thoigian; ?></td>
				<td><?php echo $lh->diadiem;?></td>
				<td><?php echo $lh->giangvien; ?></td>
			</tr>
			<?php }?>
		</table>
	</div>
</div>


<?php $this->load->helper('text');?>
<div id="main">
	<div id="maintop">
			<div class="field-left">
				<div class="field-image-panel">
					<img src="<?php echo base_url();?>assets/unix/images/cackhoahoc.png" height="200px"/>
				</div>
				<div class="field-content-panel">
					<?php if($this->MKaimonokago->homepageLoadNoiDung(1)){?>
					
					<h4><?php echo $this->MKaimonokago->homepageLoadNoiDung(1)->tenmuc?></h4>
						<?php
								$content=$this->MKaimonokago->homepageLoadNoiDung(1)->dulieu;
								echo word_limiter($content, 39);
								echo '<br/><a style="float:left" href="'.base_url().'index.php/khoahoc">Chi tiết</a>'.'</p>';
							}						
						?>	
				</div>
			</div>
			<div class="field-center">
				<div class="field-image-panel">
					<img src="<?php echo base_url();?>assets/unix/images/ppdaotao.png" height="200px"/>
				</div>
				<div class="field-content-panel">
					<?php 
					if($this->MKaimonokago->homepageLoadNoiDung(2))
					{
					?>
					<h4><?php echo $this->MKaimonokago->homepageLoadNoiDung(2)->tenmuc?></h4>
					<?php
							$content=$this->MKaimonokago->homepageLoadNoiDung(2)->dulieu;
							echo word_limiter($content, 63);
							echo '<br/><a style="float:left" href="'.base_url().'index.php/welcome/detail/2">Chi tiết</a>'.'</p>';
						}
					?>					
				</div>
			</div>
			<div class="field-right">
				<div class="field-image-panel">
					<img src="<?php echo base_url();?>assets/unix/images/sukien.png" height="200px"/>
				</div>
				<div class="field-content-panel">
					<?php if($this->MKaimonokago->homepageLoadNoiDung(3)){?>
					<h4><?php echo $this->MKaimonokago->homepageLoadNoiDung(3)->tenmuc?></h4>
					
						<?php 
								$content=$this->MKaimonokago->homepageLoadNoiDung(3)->dulieu;
								echo word_limiter($content, 37);
								echo '<br/><a style="float:left" href="'.base_url().'index.php/hoithao">Chi tiết</a>'.'</p>';
							}
						?>										
				</div>
			</div>
	</div>	
	
	<div class="clear" style="clear:both"></div>
	<div id="maincenter" style="margin-left:40px;">
	  
	</div>
	
	
</div>
<!-- End slide show and video-->


<div id="detail-panel">
	<div id="viewlaai" class="detail">
		<?php if($this->MKaimonokago->homepageLoadNoiDung(7)){?>
		<h4><?php echo $this->MKaimonokago->homepageLoadNoiDung(7)->tenmuc?></h4>
		<p>
			<?php 
				$content=$this->MKaimonokago->homepageLoadNoiDung(7)->dulieu;
				echo word_limiter($content, 37);
			}?>
			<span style="font-style:italic; text-decoration:underline">Chi tiết</span>
		</p>
	</div>
	<div id="viewlamgi" class="detail" style="float:right">
		<?php if($this->MKaimonokago->homepageLoadNoiDung(8)){?>
		<h4><?php echo $this->MKaimonokago->homepageLoadNoiDung(8)->tenmuc?></h4>
		<p>
			<?php 
				$content=$this->MKaimonokago->homepageLoadNoiDung(8)->dulieu;
				echo word_limiter($content, 35);
			}?>
			<span style="font-style:italic; text-decoration:underline">Chi tiết</span>
		</p>
	</div>
</div>

<div id="banner-right">
    	<ul>
    		<li><h3>kiểm tra đầu vào miễn phí tại UNIX</h3></li>
    		<li><img src="<?php echo base_url();?>assets/unix/images/ticked-icon.png"/><hr/></li>
    		<li><img src="<?php echo base_url();?>assets/unix/images/ticked-icon.png"/><hr/></li>
    		<li><img src="<?php echo base_url();?>assets/unix/images/ticked-icon.png"/><hr/></li>
    		<li><img src="<?php echo base_url();?>assets/unix/images/ticked-icon.png"/><hr/></li>
    		<li><h4 id="register">Đăng ký (Free)</h4></li>
    	</ul>
    </div>
   