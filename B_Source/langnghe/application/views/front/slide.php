<div class="moduletable_slider">
			 <div class="slider-wrapper theme-default">
				<div id="slider" class="nivoSlider">
					<img src="<?php echo base_url();?>assets/langnghe/images/slide1.jpg" data-thumb="<?php echo base_url();?>assets/langnghe/images/slide1.jpg" alt="" />					
					<img src="<?php echo base_url();?>assets/langnghe/images/slide2.jpg" data-thumb="<?php echo base_url();?>assets/langnghe/images/slide2.jpg" alt="" data-transition="slideInLeft" />
					<img src="<?php echo base_url();?>assets/langnghe/images/slide3.jpg" data-thumb="<?php echo base_url();?>assets/langnghe/images/slide3.jpg" alt="" title="#htmlcaption" />
					<img src="<?php echo base_url();?>assets/langnghe/images/slide4.jpg" data-thumb="<?php echo base_url();?>assets/langnghe/images/slide4.jpg" alt="" title="#htmlcaption" />
				</div>				
			</div>			
		</div>	
		<script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
			<script type="text/javascript" src="js/jquery.nivo.slider.js"></script>
			 <script type="text/javascript">
				$(window).load(function() {
					$('#slider').nivoSlider();
				});
			</script>