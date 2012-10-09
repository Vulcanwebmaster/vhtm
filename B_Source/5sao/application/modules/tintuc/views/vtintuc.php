<div id="center">
	<ul id="aboutus-menu">
		<?php foreach($list_tintuc as $item)
		{?>
		<!--<li class="aboutus-item">
			<img alt="" src="<?php echo base_url();?>assets/5sao/images/chanhleo.jpg"/>
			<h3><a href="<?php echo base_url();?>tintuc/detail/<?php echo $item->id;?>"><?php if ($lang=="vn") echo strip_tags($item->tieude_v); else echo strip_tags($item->tieude_e);?></a></h3>
		</li> -->
			<div style="width:566px; float:left; border:1px solid #ddd; padding:5px 5px; margin:5px 0px;">
	            <img width="122" height="86" style="float:left; margin-right:20px;" src="<?php echo base_url();?>assets/5sao/images/chanhleo.jpg">    
	            <li class="aboutth-item">
	            	<h5><a href="<?php echo base_url();?>tintuc/detail/<?php echo $item->id;?>"><?php if ($lang=="vn") echo strip_tags($item->tieude_v); else echo strip_tags($item->tieude_e);?></a></h5></br>
	            </li>
	            <span style="color:#333;"></span>
	        </div>
		<?php }?>
	</ul>
</div>