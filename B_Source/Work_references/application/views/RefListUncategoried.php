  	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/style.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/css.css"/>
	
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/myjs.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/ajax-base.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-1.7.2.min.js"></script>
	
	<script type="text/javascript">
		$(document).ready(function(){
				$('#form').hide();
				$('#category').click(function(){
					$('#form').slideDown();
					});
				$('.exit').click(function(){
					$('#form').slideUp();
					});
				$('.show-more').click(function(){
					$('#body').hide();
					$('.list-more').load("<?php echo base_url();?>index.php/m_references/showmore/<?php echo $craftsmanId;?>");
				});
		});
	</script>

<style>
	#category-selector{display:none}
</style>

<div id="category" style="font-size:14px;float:left;margin-left:32%;">
	<a style="cursor:pointer;">Add reference</a>
</div>			
<div id="body">
	<div id="column1" class="column">
		<?php if (count($references)>0)
		{?>
			<?php 			
			for($count=0;$count<intval(count($references)/2)+1;$count++){
	        ?>
				<div class="reference">
					<?php if ($_SESSION['categoried']==true)
	               		{?>
	               			<a href="<?php echo base_url() ?>index.php/m_references/deleteRef/<?php echo $references[$count]->id;?>/true" id="del">Delete reference</a>
	               		<?php }
	               		else 
	               		{?>
	               			<a href="<?php echo base_url() ?>index.php/m_references/deleteRef/<?php echo $references[$count]->id;?>/false" id="del">Delete reference</a>
	               		<?php }?>
					<img class="picture" src="<?php echo base_url();?>savedfiles/<?php echo $pictures[$count];?>"/>
					<div class="info">
						<div class="info-path">
							<h4 class="title"><?php echo $references[$count]->title ?></h4>
							<p class="date"><?php echo $references[$count]->timestamp ?></p>
						</div>
						<div class="info-path content">
							<p>Content: </p>
							<div>
								<p><?php echo $references[$count]->text ?></p>
							</div>
						</div>
						<div class="info-path">
							<div class="comment">
								<p>Comment</p>
								<div>
									<p><?php echo $references[$count]->comment ?></p>
									<p class="author"><?php echo $references[$count]->comment_author ?></p>
								</div>
							</div>
							<div class="rate">
								<ul>
									<?php if ($rates[$count])
									{?>
										<li>
											<?php if ($rates[$count][0]) $count2=$rates[$count][0]->rating;
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
												if ($rates[$count][1])
														$count2=$rates[$count][1]->rating;
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
											<span class="small-text">quality</span>
										</li>
										<li>
											<?php 
											if ($rates[$count][2]) 
												$count2=$rates[$count][2]->rating;
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
									<?php }?>
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
			for($count=intval(count($references)/2)+1;$count<count($references);$count++){
	        ?>
			
			<div class="reference">
				<a href="<?php echo base_url();?>index.php/m_references/deleteRef/<?php echo $references[$count]->id;?>" style="float:right" id="del">Delete reference</a>
				<img class="picture" src="<?php echo base_url();?>savedfiles/<?php echo $pictures[$count];?>"/>
				<div class="info">
					<div class="info-path">
						<h4 class="title"><?php echo $references[$count]->title ?></h4>
						<p class="date"><?php echo $references[$count]->timestamp ?></p>
					</div>
					<div class="info-path content">
						<p>Content: </p>
						<div>
							<p><?php echo $references[$count]->text ?></p>
						</div>
					</div>
					<div class="info-path">
						<div class="comment">
							<p>Comment</p>
							<div>
								<p><?php echo $references[$count]->comment ?></p>
								<p class="author"><?php echo $references[$count]->comment_author ?></p>
							</div>
						</div>
						<div class="rate">
							<ul>
								<?php if ($rates[$count])
								{?>
									<li>
										<?php if ($rates[$count][0]) $count2=$rates[$count][0]->rating;
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
											if ($rates[$count][1])
													$count2=$rates[$count][1]->rating;
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
										<span class="small-text">quality</span>
									</li>
									<li>
										<?php 
										if ($rates[$count][2]) 
											$count2=$rates[$count][2]->rating;
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
								<?php }?>
							</ul>
						</div>
						<br class="both"/>
					</div>
				</div>
			</div>
		
		<?php } ?>
	<?php }?>
</div>
</div>
<div class="list-more">
	
</div>
<?php if (count($references)>0)
		{?>
<div class="show-more" style="text-align:center;margin:auto;clear:both"><a style="cursor: pointer">Show more references</a></div>
<?php }?>
<?php 
	$data['listCategories'] = $listCategories;
	$this->load->view('RefAddReference',$data);
?>
