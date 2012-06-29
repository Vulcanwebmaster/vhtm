		<div id="mask" style="text-align:center;padding: 20px; text-shadow: black 0px -1px 0px; color: white; position: fixed; width: 600px; height: auto; margin-top: 0; margin-left:350px; background-color: rgb(90, 90, 90); border-top-left-radius: 10px; border-top-right-radius: 10px; border-bottom-right-radius: 10px; border-bottom-left-radius: 10px; z-index: 9; border: 4px solid rgb(182, 182, 181); display: block; ">
			<div style="width:30px; cursor:pointer; border-radius:10px; background-color:white; padding:5px; color:black; float:right" align="right"><span id="maskClose">Thoát</span></div>
			<h3>Đăng ký miễn phí lớp học</h3>
			<h2>BỨT PHÁ MÔN TOÁN TRƯỜNG HN AMS</h2>
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
							<td colspan="2" style="text-align:center">
								<input type="submit" value="Đăng ký" name="submit"/>
							</td>
						</tr>
					</table>
				</form>
			</center>
		</div>
		
		<!-- script type="text/javascript">
			$(document).ready(function(){
				var flag=0;
				$('#sound-controller').click(function(){
					if (flag==0)
					{
						flag=1;
						$('#background-music').hide();
						$(this).attr('src','<?php echo base_url();?>assets/unix/images/speaker-on.png');
					}
					else
					{
						flag=0;
						$('#background-music').show();
						$(this).attr('src','<?php echo base_url();?>assets/unix/images/speaker-off.png');
					}
				});
			});
		</script -->
	    <div id="banner-left">
	    	<ul>
		    	<li>
		    		<a href="<?php echo base_url();?>index.php/welcome/detail/2" style="vertical-align:50%"><img src="<?php echo base_url();?>assets/unix/images/teacher_icon.png"/><span>Thầy Phan Quang Điệp</span></a>
		    	</li>
		    	<li><hr/></li>
		    	<li>
		    		<a href="<?php echo base_url();?>index.php/camnhan" style="vertical-align:50%"><img src="<?php echo base_url();?>assets/unix/images/comment-icon.png"/><span>Cảm nhận</span></a>
		    	</li>	
		    	<!-- li><hr/></li>
		    	<li style="text-align:center">
		    		<img id="sound-controller" style="width:32px; height:32px" src="<?php echo base_url();?>assets/unix/images/speaker-off.png"/>
		    	</li -->	    	
	    	</ul>
	    </div>

<?php $this->load->view('shop/slide.php')?>
<div id="main">
	<div id="maintop">
			<div class="field-left">
				<div class="field-image-panel">
					<img src="<?php echo base_url();?>assets/unix/images/cackhoahoc.png" height="200px"/>
				</div>
				<div class="field-content-panel">
					<h4>Các khóa học</h4>
					<p style=" padding:10px 20px">
						<?php if ($this->MKaimonokago->homepageLoadNoiDung('Các khóa học'))
							echo substr($this->MKaimonokago->homepageLoadNoiDung('Các khóa học')->dulieu,0,300);
						?>
						<a href="<?php echo base_url();?>index.php/khoahoc">Chi tiết</a>
					</p>
				</div>
			</div>
			<div class="field-center">
				<div class="field-image-panel">
					<img src="<?php echo base_url();?>assets/unix/images/ppdaotao.png" height="200px"/>
				</div>
				<div class="field-content-panel">
					<h4>Phương pháp đào tạo</h4>
					<p>
						<?php if ($this->MKaimonokago->homepageLoadNoiDung('Phương pháp đào tạo'))
							echo substr($this->MKaimonokago->homepageLoadNoiDung('Phương pháp đào tạo')->dulieu,0,300);
						?>
						<a href="<?php echo base_url();?>index.php/welcome/detail/2">Chi tiết</a>
					</p>
				</div>
			</div>
			<div class="field-right">
				<div class="field-image-panel">
					<img src="<?php echo base_url();?>assets/unix/images/sukien.png" height="200px"/>
				</div>
				<div class="field-content-panel">
					<h4>Sự kiện</h4>
					<p>
						<?php if ($this->MKaimonokago->homepageLoadNoiDung('Sự kiện'))
							echo substr($this->MKaimonokago->homepageLoadNoiDung('Sự kiện')->dulieu,0,300);
						?>
						<a href="<?php echo base_url();?>index.php/hoithao">Chi tiết</a>
					</p>
				</div>
			</div>
	</div>
	<div id="mainbottom">
		<div id="bottom-left">
			<div style="height:55px"></div>
			<marquee onmouseover="this.stop();" onmouseout="this.start();" behavior="scroll" direction="left" scrollamount=3>
				<?php if ($this->MKaimonokago->homepageLoadNoiDung('images'))
				{
					$images=$this->MKaimonokago->homepageLoadNoiDung('images');
					foreach(explode(',', $images->dulieu) as $item)
					{
						echo '<a><img alt="" src="'.base_url().trim($item).'" height="150px"/></a>';
					}
				}?>
				<!-- a><img alt="" src="<?php echo base_url();?>assets/unix/images/slide-bottom/1.jpg" height="150px"/></a>
				<a><img alt="" src="<?php echo base_url();?>assets/unix/images/slide-bottom/2.jpg" height="150px"/></a>
				<a><img alt="" src="<?php echo base_url();?>assets/unix/images/slide-bottom/3.jpg" height="150px"/></a>
				<a><img alt="" src="<?php echo base_url();?>assets/unix/images/slide-bottom/4.jpg" height="150px"/></a>
				<a><img alt="" src="<?php echo base_url();?>assets/unix/images/slide-bottom/5.jpg" height="150px"/></a -->
			</marquee>
		</div>
		<div id="bottom-right">
			<div style="height:40px"></div>
			<?php if ($this->MKaimonokago->homepageLoadNoiDung('video'))
			{
				$video=$this->MKaimonokago->homepageLoadNoiDung('video');
				echo '<iframe height="180px" src="'.str_replace('watch?v=', 'embed/', $video->dulieu).'" frameborder="0" allowfullscreen></iframe>';
			}?>
			<!-- iframe height="200px" src="http://www.youtube.com/embed/bKAdluwY49M" frameborder="0" allowfullscreen></iframe -->
		</div>
	</div>
</div>

<div id="detail-panel">
	<div class="detail">
		<h4>Chúng tôi là ai</h4>
		<p>
			<?php if ($this->MKaimonokago->homepageLoadNoiDung('Chúng tôi là ai'))
			{
				$content=$this->MKaimonokago->homepageLoadNoiDung('Chúng tôi là ai');
				echo substr($content->dulieu,0,300).'...';
			}?>
			<a style="font-style:italic; text-decoration:underline" href="<?php echo base_url();?>index.php/welcome/detail/7">Chi tiết</a>
		</p>
	</div>
	<div class="detail" style="float:right">
		<h4>Chúng tôi làm gì</h4>
		<p>
			<?php if ($this->MKaimonokago->homepageLoadNoiDung('Chúng tôi làm gì'))
			{
				$content=$this->MKaimonokago->homepageLoadNoiDung('Chúng tôi làm gì');
				echo substr($content->dulieu,0,300).'...';
			}?>
			<a style="font-style:italic; text-decoration:underline" href="<?php echo base_url();?>index.php/welcome/detail/8">Chi tiết</a>
		</p>
	</div>
</div>

<div id="banner-right">
    	<ul>
    		<li><h3>Bứt phá môn Toán trường HN Ams</h3></li>
    		<li><img src="<?php echo base_url();?>assets/unix/images/ticked-icon.png"/><hr/></li>
    		<li><img src="<?php echo base_url();?>assets/unix/images/ticked-icon.png"/><hr/></li>
    		<li><img src="<?php echo base_url();?>assets/unix/images/ticked-icon.png"/><hr/></li>
    		<li><img src="<?php echo base_url();?>assets/unix/images/ticked-icon.png"/><hr/></li>
    		<li><h4 id="register">Đăng ký (Free)</h4></li>
    	</ul>
    </div>