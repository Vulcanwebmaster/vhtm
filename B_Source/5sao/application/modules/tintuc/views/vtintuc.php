<script type="text/javascript">
	$('#menu-tintuc').parent().addClass('currentmenu');	$('#bg_itemmenu_3').addClass('styleshow');
</script>

<div id="center">
	<ul id="aboutus-menu">
		<?php foreach($list_tintuc as $item)
		{?>
			<li style="width:100%; float:left; border:1px solid #ddd; padding:5px 5px; margin:5px 0px;">
	            <img width="122" height="86" style="float:left; margin-right:10px;" src="<?php echo base_url();?>assets/5sao/images/chanhleo.jpg">    
	            <div class="aboutth-item" style="float:left; width:76%; height: 86px;">
	            	<h5><a href="<?php echo base_url();?>tintuc/detail/<?php echo $item->id;?>"><?php if ($lang=="vn") echo strip_tags($item->tieude_v); else echo strip_tags($item->tieude_e);?></a></h5>
	            </div>
	  	</li>
	  			<?php }?>
	</ul>
	<div style="text-align:center; clear:both; padding-top: 10px"><?php echo $this->pagination->create_links();?></div>
</div>