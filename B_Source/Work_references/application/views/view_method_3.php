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
					$('.list-more').load("<?php echo base_url();?>index.php/tiennd/showmore/"+<?php echo $craftsmanId;?>);
				});
		});
	</script>

<div id="category" style="font-size:14px;float:left;margin-left:32%;">
	<a style="cursor:pointer;">Add reference</a>
</div>			
<div id="body">
	<div id="column1" class="column">
		<?php
		if($count>0)
		{
			if($count%2==0)
				$floor = floor($count/2);
			else $floor = floor($count/2)+1;
			for($i=0;$i<$floor;$i++)
			{
		?>
		<div class="reference">
			<a href="<?php echo base_url();?>index.php/tiennd/deleteRef/<?php echo $references[$i]->id;?>" style="float:right">Delete reference</a>
			<img class="picture" alt="" src="<?php echo base_url();?>assets/images/references/<?php echo $pictures[$i]; ?>"/>
			<div class="info">
				<div class="info-path">
					<h4 class="title"><?php echo $references[$i]->title; ?></h4>
					<p class="date"><?php echo $references[$i]->timestamp; ?></p>
				</div>
				<div class="info-path content">
					<p>Content</p>
					<div>
						<p><?php echo $references[$i]->text; ?></p>
					</div>
				</div>
				<div class="info-path">
					<div class="comment">
						<p>Comment</p>
						<div>
							<p><?php echo $references[$i]->comment; ?></p>
							<p class="author"><?php echo $references[$i]->comment_author; ?></p>
						</div>
					</div>
					<div class="rate">
						<ul>
							<li>
								<img alt="" src="<?php echo base_url();?>assets/images/circle1.png">
								<img alt="" src="<?php echo base_url();?>assets/images/circle1.png">
								<img alt="" src="<?php echo base_url();?>assets/images/circle1.png">
								<img alt="" src="<?php echo base_url();?>assets/images/circle2.png">
								<img alt="" src="<?php echo base_url();?>assets/images/circle2.png">
								<span class="small-text">price</span>
							</li>
							<li>
								<img alt="" src="<?php echo base_url();?>assets/images/circle1.png">
								<img alt="" src="<?php echo base_url();?>assets/images/circle1.png">
								<img alt="" src="<?php echo base_url();?>assets/images/circle1.png">
								<img alt="" src="<?php echo base_url();?>assets/images/circle1.png">
								<img alt="" src="<?php echo base_url();?>assets/images/circle1.png">
								<span class="small-text">quality</span>
							</li>
							<li>
								<img alt="" src="<?php echo base_url();?>assets/images/circle1.png">
								<img alt="" src="<?php echo base_url();?>assets/images/circle1.png">
								<img alt="" src="<?php echo base_url();?>assets/images/circle1.png">
								<img alt="" src="<?php echo base_url();?>assets/images/circle2.png">
								<img alt="" src="<?php echo base_url();?>assets/images/circle2.png">
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
			for($i;$i<$count;$i++)
			{
		?>
		<div class="reference">
			<a href="<?php echo base_url();?>index.php/tiennd/deleteRef/<?php echo $references[$i]->id;?>" style="float:right">Delete reference</a>
			<img class="picture" alt="" src="<?php echo base_url();?>assets/images/references/<?php echo $pictures[$i]; ?>"/>
			<div class="info">
				<div class="info-path">
					<h4 class="title"><?php echo $references[$i]->title; ?></h4>
					<p class="date"><?php echo $references[$i]->timestamp; ?></p>
				</div>
				<div class="info-path content">
					<p>Content</p>
					<div>
						<p><?php echo $references[$i]->text; ?></p>
					</div>
				</div>
				<div class="info-path">
					<div class="comment">
						<p>Comment</p>
						<div>
							<p><?php echo $references[$i]->comment; ?></p>
							<p class="author"><?php echo $references[$i]->comment_author; ?></p>
						</div>
					</div>
					<div class="rate">
						<ul>
							<li>
								<img alt="" src="<?php echo base_url();?>assets/images/circle1.png">
								<img alt="" src="<?php echo base_url();?>assets/images/circle1.png">
								<img alt="" src="<?php echo base_url();?>assets/images/circle1.png">
								<img alt="" src="<?php echo base_url();?>assets/images/circle2.png">
								<img alt="" src="<?php echo base_url();?>assets/images/circle2.png">
								<span class="small-text">price</span>
							</li>
							<li>
								<img alt="" src="<?php echo base_url();?>assets/images/circle1.png">
								<img alt="" src="<?php echo base_url();?>assets/images/circle1.png">
								<img alt="" src="<?php echo base_url();?>assets/images/circle1.png">
								<img alt="" src="<?php echo base_url();?>assets/images/circle1.png">
								<img alt="" src="<?php echo base_url();?>assets/images/circle1.png">
								<span class="small-text">quality</span>
							</li>
							<li>
								<img alt="" src="<?php echo base_url();?>assets/images/circle1.png">
								<img alt="" src="<?php echo base_url();?>assets/images/circle1.png">
								<img alt="" src="<?php echo base_url();?>assets/images/circle1.png">
								<img alt="" src="<?php echo base_url();?>assets/images/circle2.png">
								<img alt="" src="<?php echo base_url();?>assets/images/circle2.png">
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
		}
		?>
	</div>
</div>
<div class="list-more">
	
</div>
<div class="show-more" style="text-align:center;margin:auto;clear:both"><a style="cursor: pointer">Show more references</a></div>
<?php 
	$data['listCategories'] = $listCategories;
	$this->load->view('RefAddReference-tiennd',$data);
?>