
<script type="text/javascript">
	$('#menu-sanpham').parent().addClass('currentmenu');
</script>

<div id="center">
						<div id="photo">
						<div id="slideshow-wrapper">
                            <div id="slider" class="nivoSlider">		
	                            <img src="<?php echo base_url();?>assets/5sao/images/slide1.jpg" tppabs="" alt="" /><img src="<?php echo base_url();?>assets/5sao/images/slide3.jpg" tppabs="" alt=""  />
	                            <img src="<?php echo base_url();?>assets/5sao/images/slide2.jpg"/> <img src="<?php echo base_url();?>assets/5sao/images/slide4.jpg"/>
                            </div>                           
                          </div>
					</div>
	
	<?php 
	if (isset($current_category))
	if ($current_category->anhdaidien1!='' || $current_category->anhdaidien2!='' || $current_category->anhdaidien3!='')
	{?>
	<div id="photo" style="margin-top:10px">
		<div id="slideshow-wrapper">
        	<div id="slider" class="nivoSlider">	
        		<?php if ($current_category->anhdaidien1!='' && $current_category->anhdaidien1!=' ')
        			echo $current_category->anhdaidien1;
        		if ($current_category->anhdaidien2!='' && $current_category->anhdaidien2!=' ')
        			echo $current_category->anhdaidien2;
        		if ($current_category->anhdaidien3!='' && $current_category->anhdaidien3!=' ')
        			echo $current_category->anhdaidien3;?>	
            </div>                           
        </div>
	</div>
	<?php }?>
	<ul id="breadcrum">
	<li><a href="<?php echo base_url();?>"><?php echo $this->lang->line('menu-trangchu');?></a></li>
	<li>> <h1><?php if(isset($current_breadcrum)) echo $current_breadcrum;?></h1></li>
</ul>

	<div id="items">
		<?php foreach ($list as $item)
		{?>
			<div class="item">
				<div class="itemimage">
					<a href="<?php echo base_url();?>sanpham/<?php echo $item->alias;?>">
						<?php echo $item->hinhanh;?>
					</a><br />								
				</div>
	            <div class="itemh5"><?php if ($lang=="vn") echo $item->ten_v; else echo $item->ten_e;?></div>
			</div>
		<?php }?>
		<br class="clear"/>
	</div>
	<div class="pagination-control"><?php echo $this->pagination->create_links();?></div>
</div>