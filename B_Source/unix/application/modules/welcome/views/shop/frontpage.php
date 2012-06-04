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
				echo $video->dulieu;
			}?>
			<!-- iframe height="170px" src="http://www.youtube.com/embed/bKAdluwY49M" frameborder="0" allowfullscreen></iframe -->
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