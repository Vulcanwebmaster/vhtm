<script type="text/javascript">
	$(document).ready(function(){
		$('#slides').css('height','250px');
		$('#slides div').css('z-index','1');
		$('#slides div').css('position','absolute');
		$('#slide2').hide();
	});

	var flag=0;
	window.setInterval(function(){
		if (flag==0)
		{
			$('#slide1').fadeOut(2000);
			$('#slide2').fadeIn(2000);
			flag=1;
		}
		else
		{
			$('#slide2').fadeOut(2000);
			$('#slide1').fadeIn(2000);
			flag=0;
		}
	},4000);
</script>
<div id="slide-container" style="">
	<!-- div id="slider" class="nivoSlider">
		<?php if ($this->MKaimonokago->homepageLoadNoiDung('slide'))
		{
			$slide=$this->MKaimonokago->homepageLoadNoiDung('slide');
			foreach(explode(',', $slide->dulieu) as $item)
			{
				echo '<img src="'.base_url().trim($item).'" alt="" />';
			}
		}?>
    </div -->
    <div id="slides">
    	<div id="slide1" style="background:url('<?php echo base_url();?>assets/unix/images/khoahoc-slide.jpg')">
    		<br/>
    		<br/>
    		<br/>
    		<br/>
    		<br/>
    		<br/>
    		<br/>
    		<a class="slidebutton" href="<?php echo base_url();?>index.php/khoahoc"><img src="<?php echo base_url();?>assets/unix/images/slidebutton.png"/></a>
    	</div>
    	<div id="slide2" style="background:url('<?php echo base_url();?>assets/unix/images/thuvien-slide.jpg')">
    		<br/>
    		<br/>
    		<br/>
    		<br/>
    		<br/>
    		<br/>
    		<br/>
    		<a class="slidebutton" href="<?php echo base_url();?>index.php/thuvien"><img src="<?php echo base_url();?>assets/unix/images/slidebutton.png"/></a>
    	</div>
    </div>
</div>