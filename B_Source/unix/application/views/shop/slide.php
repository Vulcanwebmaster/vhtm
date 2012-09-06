<?php $this->load->helper('text');?>
<div id="slide-container" style="">
	<style>
		.add{ background:url(<?php echo base_url();?>assets/unix/images/vertical-banner-bg.png) repeat;}
	</style>
	<script type="text/javascript" language="JavaScript">
		$(document).ready(function(){
			var count=1;
			$('#r1').addClass('add');
			$('#r1').click(function(){
				$('#content-slide-left').animate({'margin-left':'0'},'slow');
				$('.r').removeClass('add');
					$('#r1').addClass('add');
				count=2;
			});
			$('#r2').click(function(){
				$('#content-slide-left').animate({'margin-left':'-750px'},'slow');
				$('.r').removeClass('add');
					$('#r2').addClass('add');
					count=3;
			});
			$('#r3').click(function(){
				$('#content-slide-left').animate({'margin-left':'-1500px'},'slow');
				$('.r').removeClass('add');
						$('#r3').addClass('add');
						count=4;
			});
			$('#r4').click(function(){
				$('#content-slide-left').animate({'margin-left':'-2250px'},'slow');
				$('.r').removeClass('add');
						$('#r4').addClass('add');
						count=1;
			});
			
			window.setInterval(function(){
					if (count==1)
					{
						$('#r1').click();
					}
					else if (count==2)
					{
						$('#r2').click();
					}
					else if (count==3)
					{
						$('#r3').click();
					}
					else if (count==4)
					{
						$('#r4').click();
					}
			;}, 4000)
			
				
		});
		
	</script>
	<div id="main-slide">
		<div id="slide-left">
			<div id="content-slide-left">
				<?php $slide=$this->MKaimonokago->getSlide();
					foreach($slide as $sl)
					{
					?>
						<div class="myslide"><?php echo $sl->noidung; ?></div>
					<?php
					}
				?>
			</div>
		</div>
		<?php 
			
			$tin1=$this->MKaimonokago->getnew(0);
			$tin2=$this->MKaimonokago->getnew(1);
			$tin3=$this->MKaimonokago->getnew(2);
			$tin4=$this->MKaimonokago->getnew(3);
		?>
		<div id="slide-right">
			<div id="r1" class="r">
				<a href="<?php echo base_url();?>index.php/tintuc/detail/<?php echo $tin1->alias;?>"><h3 id="h3"><?php $tieude=$tin1->tieude;echo word_limiter($tieude,10);?></h3></a>
			</div>
			<div id="r2" class="r">
				<a href="<?php echo base_url();?>index.php/tintuc/detail/<?php echo $tin2->alias;?>"><h3 id="h3"><?php $tieude=$tin2->tieude;echo word_limiter($tieude,10);?></h3></a>
			</div>
			<div id="r3" class="r">
				<a href="<?php echo base_url();?>index.php/tintuc/detail/<?php echo $tin3->alias;?>"><h3 id="h3"><?php $tieude=$tin3->tieude;echo word_limiter($tieude,10);?></h3></a>
			</div>
			<div id="r4" class="r">
				<a href="<?php echo base_url();?>index.php/tintuc/detail/<?php echo $tin4->alias;?>"><h3 id="h3"><?php $tieude=$tin4->tieude;echo word_limiter($tieude,10);?></h3></a>
			</div>
			
		</div>
	</div>
</div>