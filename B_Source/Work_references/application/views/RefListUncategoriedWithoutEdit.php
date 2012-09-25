<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/style.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/css.css"/>
<div id="body">
	<div id="column1" class="column">
		<?php 			
		for($count=0;$count<(count($ds))/2;$count++){
        ?>
			<div class="reference">
				<!--<img class="picture" alt="" src="<?php echo base_url();?>assets/images/references/f1.jpeg"/>-->
				<img class="picture" src="<?php echo base_url();?>assets/images/references/<?php echo $pictures[$count];?>"/>
				<div class="info">
					<div class="info-path">
						<h4 class="title"><?php echo $ds[$count]->title ?></h4>
						<p class="date"><?php echo $ds[$count]->timestamp ?></p>
					</div>
					<div class="info-path content">
						<p>Content: </p>
						<div>
							<p><?php echo $ds[$count]->text ?></p>
						</div>
					</div>
					<div class="info-path">
						<div class="comment">
							<p>Comment</p>
							<div>
								<p><?php echo $ds[$count]->comment ?></p>
								<p class="author"><?php echo $ds[$count]->comment_author ?></p>
							</div>
						</div>
						<div class="rate">
							<ul>
								<li>
									<?php if (isset($rates[$count][0])) $count2=$rates[$count][0]->rating;
									else $count2=0;
									{
										for ($i=0;$i<$count2; $i++)
										{
											echo '<img alt="" src="'.base_url().'assets/images/circle1.png">';
										}
										for ($i=0;$i<5-$count2; $i++)
										{
											echo '<img alt="" src="'.base_url().'assets/images/circle2.png">';
										}
									}?>
									<span class="small-text">price</span>
								</li>
								<li>
									<?php 
										if (isset($rates[$count][1])) $count2=$rates[$count][1]->rating;
									else $count=0;
										{
											for ($i=0;$i<$count2; $i++)
											{
												echo '<img alt="" src="'.base_url().'assets/images/circle1.png">';
											}
											for ($i=0;$i<5-$count2; $i++)
											{
												echo '<img alt="" src="'.base_url().'assets/images/circle2.png">';
											}
										}?>
									<span class="small-text">quality</span>
								</li>
								<li>
									<?php 
									if (isset($rates[$count][2])) $count2=$rates[$count][2]->rating;
									else $count2=0;
									{
										for ($i=0;$i<$count2; $i++)
										{
											echo '<img alt="" src="'.base_url().'assets/images/circle1.png">';
										}
										for ($i=0;$i<5-$count2; $i++)
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
			</div>
		
		<?php 
		}
		 ?>
		</div>
		
		<div id="column2" class="column">
		<?php 			
		for($count==(count($ds))/2;$count<count($ds);$count++){
        ?>
		
		<div class="reference">
			<img class="picture" alt="" src="/Work_references/assets/images/references/f1.jpeg"/>
			<div class="info">
				<div class="info-path">
					<h4 class="title"><?php echo $ds[$count]->title ?></h4>
					<p class="date"><?php echo $ds[$count]->timestamp ?></p>
				</div>
				<div class="info-path content">
					<p>Content: </p>
					<div>
						<p><?php echo $ds[$count]->text ?></p>
					</div>
				</div>
				<div class="info-path">
					<div class="comment">
						<p>Comment</p>
						<div>
							<p><?php echo $ds[$count]->comment ?></p>
							<p class="author"><?php echo $ds[$count]->comment_author ?></p>
						</div>
					</div>
					<div class="rate">
						<ul>
								<li>
									<?php if (isset($rates[$count][0])) $count2=$rates[$count][0]->rating;
									else $count2=0;
									{
										for ($i=0;$i<$count2; $i++)
										{
											echo '<img alt="" src="'.base_url().'assets/images/circle1.png">';
										}
										for ($i=0;$i<5-$count2; $i++)
										{
											echo '<img alt="" src="'.base_url().'assets/images/circle2.png">';
										}
									}?>
									<span class="small-text">price</span>
								</li>
								<li>
									<?php 
										if (isset($rates[$count][1])) $count2=$rates[$count][1]->rating;
									else $count=0;
										{
											for ($i=0;$i<$count2; $i++)
											{
												echo '<img alt="" src="'.base_url().'assets/images/circle1.png">';
											}
											for ($i=0;$i<5-$count2; $i++)
											{
												echo '<img alt="" src="'.base_url().'assets/images/circle2.png">';
											}
										}?>
									<span class="small-text">quality</span>
								</li>
								<li>
									<?php 
									if (isset($rates[$count][2])) $count2=$rates[$count][2]->rating;
									else $count2=0;
									{
										for ($i=0;$i<$count2; $i++)
										{
											echo '<img alt="" src="'.base_url().'assets/images/circle1.png">';
										}
										for ($i=0;$i<5-$count2; $i++)
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
		</div>
	
	<?php } ?>
</div>

</div>