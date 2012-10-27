<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-1.7.2.min.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/style.css"/>
<script type="text/javascript">
<!--
	$(document).ready(function(){
		$('.list ul').css('width',300*<?php echo count($references);?>+'px');
		$('.prev img').click(function(){
			$left=parseInt($('.list ul').css('margin-left'));
			if ($left<0)
				{
					$left+=900;
					$('.list ul').animate({marginLeft:$left+'px'},500);
				}
		});
		
		$('.next img').click(function(){
			$width=parseInt($('.list ul').css('width'));
			$left=parseInt($('.list ul').css('margin-left'));
			
			if ($left>-($width-900))
				{
					$left-=900;
					$('.list ul').animate({marginLeft:$left+'px'},500);
				}
		});
	});
//-->
</script>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<div id="body">
	<div id="gallery">
		<div class="prev">
			<img src="<?php echo base_url();?>assets/images/prev.png"/>
		</div>
		<div class="list">
			<ul>
				<?php for ($i=0;$i<count($references);$i++)
				{?>
					<li>
						<p><img alt="" src="<?php echo base_url();?>savedfiles/<?php echo $pictures[$i];?>"/></p>
						<p><?php echo $references[$i]->title;?></p>
					</li>
				<?php }?>
			</ul>
		</div>
		<div class="next">
			<img src="<?php echo base_url();?>assets/images/next.png"/>
		</div>
	</div>
</div>