<div id="presentation">
	<div id="presentationWrapper">	
		<div class="contentslide" id="contentslide1">					
			<div class="slideshow" id="slideshow1">
				<img alt="image01" src="<?php echo base_url();?>assets/flash_game/images/1.jpg">
				<img alt="image013" src="<?php echo base_url();?>assets/flash_game/images/4.jpg">
				<img alt="image011" src="<?php echo base_url();?>assets/flash_game/images/2.jpg">
				<img alt="image012" src="<?php echo base_url();?>assets/flash_game/images/3.jpg">				
			</div> 
			<div id="contentsl1" class="contentsl">
				<p>Top winners</p>
				<ul class="1ct">
					<li><a href="#">lament</a></li>
					<li><a href="#">lament</a></li>
					<li><a href="#">lament</a></li>
					<li><a href="#">lament</a></li>
					<li><a href="#">lament</a></li>
					<li><a href="#">lament</a></li>
					<li><a href="#">lament</a></li>					
				</ul>
			</div>
		</div>
		<div class="contentslide" id="contentslide2">
			<div class="slideshow" id="slideshow2">
				<img alt="image010" src="<?php echo base_url();?>assets/flash_game/images/1.jpg">
				<img alt="image015" src="<?php echo base_url();?>assets/flash_game/images/3.jpg">
				<img alt="image014" src="<?php echo base_url();?>assets/flash_game/images/2.jpg">				
				<img alt="image016" src="<?php echo base_url();?>assets/flash_game/images/4.jpg">
			</div> 
			<div id="contentsl2" class="contentsl">
				<p>Top Tournaments</p>
				<ul class="2ct">
					<li><a href="#">lament</a></li>
					<li><a href="#">lament</a></li>
					<li><a href="#">lament</a></li>
					<li><a href="#">lament</a></li>
					<li><a href="#">lament</a></li>
					<li><a href="#">lament</a></li>
					<li><a href="#">lament</a></li>					
				</ul>
			</div>
		</div>
		<div class="contentslide" id="contentslide3">
			<div class="slideshow" id="slideshow3">				
				<img alt="image018" src="<?php echo base_url();?>assets/flash_game/images/2.jpg">
				<img alt="image019" src="<?php echo base_url();?>assets/flash_game/images/3.jpg">
				<img alt="image017" src="<?php echo base_url();?>assets/flash_game/images/1.jpg">
				<img alt="image0100" src="<?php echo base_url();?>assets/flash_game/images/4.jpg">
			</div>
			<div id="contentsl3" class="contentsl">
				<p>Top winners</p>

			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	$(function() {
		
		$('#slideshow1 img:gt(0)').hide();
		setInterval(function(){
			$('#slideshow1 :first-child').slideDown()
				.next('img').slideUp()
				.end().appendTo('#slideshow1');},
			7000);
			$('#slideshow2 img:gt(0)').hide();
		setInterval(function(){
			$('#slideshow2 :first-child').slideDown()
				.next('#slideshow2 img').slideUp('slow')
				.end().appendTo('#slideshow2');},
			7000);

			$('#slideshow3 img:gt(0)').hide();
		setInterval(function(){
			$('#slideshow3 :first-child').slideDown()
				.next('#slideshow3 img').slideUp()
				.end().appendTo('#slideshow3');},
			7000);
		


	})
  </script>
