<script type="text/javascript">
	$('#menu-tintuc').parent().addClass('currentmenu');
</script>

<div id="center">
	<ul id="aboutus-menu">
		<?php foreach($news as $item)
		{?>
			<div style="width:566px; float:left; border:1px solid #ddd; padding:5px 5px; margin:5px 0px;">
	            <img width="122" height="86" style="float:left; margin-right:20px;" src="<?php echo base_url();?>assets/langnghe/images/chanhleo.jpg">    
	            <li class="aboutth-item">
	            	<h5><a href="<?php echo base_url();?>tintuc/detail/<?php echo $item->news_id;?>"><?php echo strip_tags($item->news_title);?></a></h5></br>
	            </li>
	            <span style="color:#333;"></span>
	        </div>
		<?php }?>
	</ul>
	<div style="text-align:center"><?php echo $this->pagination->create_links();?></div>
</div>