<div class="slogan">
	<?php $slogan_big=$this->lang->line('slogan-big');
		$result=$this->session->CutText($slogan_big);
	?>
				<p><span class="clr-1"><?php echo $result['before'];?></span> <?php echo $result['after'];?></p>
				<p><?php echo $this->lang->line('slogan-small');?></p>
			</div>