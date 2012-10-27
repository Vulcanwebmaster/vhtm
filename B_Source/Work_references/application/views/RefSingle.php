<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/style.css"/>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/js-references.js"></script>
<div id="body">
	<div class="reference">
		<?php if (isset($message))
		{?>
			<p><?php echo $message;?></p>
		<?php }
		else {?>
		<!-- img class="picture" alt="" src=""/ -->
		<p><img alt="" src="<?php echo base_url();?>savedfiles/<?php echo $pictureName;?>"/></p>
		<div class="info">
			<div class="info-path">
				<h4 class="title"><?php echo $title;?></h4>
				<p class="date">Date</p>
			</div>
			<div class="info-path content">
				<div>
					<p><?php echo $content;?></p>
				</div>
			</div>
			<div class="info-path">
				<div class="comment">
					<p>Comment</p>
					<div>
						<p><?php echo $comment;?></p>
						<p class="author"><?php echo $commentAuthor;?></p>
					</div>
				</div>
				<div class="rate">
					<ul>
						<li>
							<?php if (isset($rate[0])) $count=$rate[0]->rating;
							else $count=0;
							{
								for ($i=0;$i<$count; $i++)
								{
									echo '<img alt="" src="'.base_url().'assets/images/circle1.png">';
								}
								for ($i=0;$i<5-$count; $i++)
								{
									echo '<img alt="" src="'.base_url().'assets/images/circle2.png">';
								}
							}?>
							<span class="small-text">price</span>
						</li>
						<li>
							<?php 
								if (isset($rate[1])) $count=$rate[1]->rating;
							else $count=0;
								{
									for ($i=0;$i<$count; $i++)
									{
										echo '<img alt="" src="'.base_url().'assets/images/circle1.png">';
									}
									for ($i=0;$i<5-$count; $i++)
									{
										echo '<img alt="" src="'.base_url().'assets/images/circle2.png">';
									}
								}?>
							<span class="small-text">quality</span>
						</li>
						<li>
							<?php if (isset($rate[2])) $count=$rate[2]->rating;
							else $count=0;
							{
								for ($i=0;$i<$count; $i++)
								{
									echo '<img alt="" src="'.base_url().'assets/images/circle1.png">';
								}
								for ($i=0;$i<5-$count; $i++)
								{
									echo '<img alt="" src="'.base_url().'assets/images/circle2.png">';
								}
							}?>
							<span  class="none-small-text">speed</span>
						</li>
					</ul>
				</div>
				<br class="both"/>
			</div>
		</div>
		<?php }?>
	</div>
</div>