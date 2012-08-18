<script type="text/javascript">
	$(document).ready(function(){
		$('.menu-item a').removeClass('active');
		$('#sanpham-menu a').addClass('active');
	});
</script>

<div class="breadcrumb">
	<a href="<?php echo base_url();?>"><?php echo $this->lang->line('menu-trangchu');?></a>
	&rsaquo; <?php echo $this->lang->line('menu-sanpham');?>
</div>
<a name="top"></a>
                <div id="node-5699" class="product-group product-group clear-block prodcat-31">
                    <div class="content-wrapper">
                        <h1>Phân loại sản phẩm</h1>
                    </div>
                    <div class="productgroups clear-block">
                    	<?php foreach ($list as $cate)
                    	{?>
                    	<div class="column">
                    		<div class="product-group product-group-teaser clear-block prodcat-4">
                    			<a class="overlay pngfix" href="<?php echo base_url();?>sanpham/detail/<?php echo $cate->category_id;?>">
                    			<?php
                    				$lang=$this->session->userdata('lang');
                    				if ($lang=='vn')
                    					echo $cate->category_name_vn;
                    				else echo $cate->category_name_en;
                    			?>
                    			</a>
                    			<a href="<?php echo base_url();?>sanpham/detail/<?php echo $cate->category_id;?>">
                                    <img src="<?php echo base_url().$cate->category_image;?>" alt="Spelt wheat and organic products" title="Spelt wheat and organic products"
                                        width="240" height="190" class="imagecache imagecache-prodgroup" /></a>
                    		</div>
                    	</div>
                    	<?php }?>                        
                    </div>
                </div>