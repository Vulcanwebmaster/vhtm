<div id="slide-container" style="">
	
	<div id="slider" class="nivoSlider">
		<?php if ($this->MKaimonokago->homepageLoadNoiDung('slide'))
		{
			$slide=$this->MKaimonokago->homepageLoadNoiDung('slide');
			foreach(explode(',', $slide->dulieu) as $item)
			{
				echo '<img src="'.base_url().trim($item).'" alt="" />';
			}
		}?>
          <!-- img src="<?php echo base_url();?>assets/unix/images/khoahoc-slide.jpg" alt="" />
          <img src="<?php echo base_url();?>assets/unix/images/thuvien-slide.jpg" alt="" data-transition="slideInLeft" / -->
    </div>
</div>