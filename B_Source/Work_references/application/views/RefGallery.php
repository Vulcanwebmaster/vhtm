<script type="text/javascript" src="/work_references/assets/js/jquery-1.7.2.min.js"></script>
<link rel="stylesheet" type="text/css" href="/work_references/assets/css/style.css"/>
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
			<img src="/work_references/assets/images/prev.png"/>
		</div>
		<div class="list">
			<ul>
				<?php for ($i=0;$i<count($references);$i++)
				{?>
					<li>
						<p><img alt="" src="<?php echo base_url();?>assets/images/references/<?php echo $pictures[$i];?>"/></p>
						<p><?php echo $references[$i]->title;?></p>
					</li>
				<?php }?>
				<!-- li><img alt="" src="/work_references/assets/images/references/f1.jpeg"/><p>Ảnh 1</p></li>
				<li><img alt="" src="/work_references/assets/images/references/f2.jpg"/><p>Ảnh 2</p></li>
				<li><img alt="" src="/work_references/assets/images/references/f3.jpg"/><p>Ảnh 3</p></li>
				<li><img alt="" src="/work_references/assets/images/references/f4.jpg"/><p>Ảnh 4</p></li>
				<li><img alt="" src="/work_references/assets/images/references/f5.jpg"/><p>Ảnh 5</p></li>
				<li><img alt="" src="/work_references/assets/images/references/f6.jpeg"/><p>Ảnh 6</p></li>
				<li><img alt="" src="/work_references/assets/images/references/f7.jpg"/><p>Ảnh 7</p></li>
				<li><img alt="" src="/work_references/assets/images/references/f8.jpg"/><p>Ảnh 8</p></li>
				<li><img alt="" src="/work_references/assets/images/references/f9.jpg"/><p>Ảnh 9</p></li -->
			</ul>
		</div>
		<div class="next">
			<img src="/work_references/assets/images/next.png"/>
		</div>
	</div>
</div>