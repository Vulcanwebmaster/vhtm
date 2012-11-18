<?php
	$newModel=new CI_Model();
	$lang=$this->session->userdata('lang');
?>
<!-----<?php if ($lang=='vn') echo $product->technical_infov; else echo $product->technical_infove;?>------>
<div id="ja-mainbody" class="clearfix">
        	<div id="ja-pathway">
        	<a href="<?php echo base_url() ?>"><?php echo $this->lang->line('content-trangchu'); ?> </a><img src="<?php echo base_url()?>assets/minhchau2/images/arrow.png" alt="">  
        	<a href="<?php echo base_url() ?>sanpham"><?php echo $this->lang->line('content-sanpham'); ?> </a><img src="<?php echo base_url()?>assets/minhchau2/images/arrow.png" alt="">
        	<a href="<?php echo base_url() ?>sanpham/view/<?php echo $category->id ?>">
        		<?php
        			if($lang=='vn')
						echo $category->namev;
					else echo $category->namee;
        		?>
			</a><img src="<?php echo base_url()?>assets/minhchau2/images/arrow.png" alt=""> 
        	
        		<?php
        			if($lang=='vn')
						echo $product->namev;
					else echo $product->namee;
        		?>
        	</div>

        	<!-- FEATURE PRODUCTS -->
        				<div id="ja-content" class="clearfix">
						<div id="vmMainPage">
							<div class="buttons_heading"></div>
								<br style="clear:both;">
							<table border="0" align="center" style="width: 100%;">
								<tr>
									<td rowspan="1" colspan="2" align="center">
										<div style="text-align: left;">
											<h1>
											<?php
							        			if($lang=='vn')
													echo $product->namev;
													else echo $product->namee;
							        		?>
											</h1>
										</div>
									</td>
								<!--	<td rowspan="2" style="background-color:#f9f9f9;padding-left:10px;font-family:Tahoma,Verdana,Arial;font-size:11px;">
										<b>Các sản phẩm khác</b>
									</td>
								-->
									<td>
									</td>
								</tr>
								<tr>
									<td></td>
									<td></td>
									<td></td>
								</tr>
								<tr>
									<td rowspan="2" align="center" valign="top" width="160">
										<div class="image_detail">
											<a href="#">
											
											<?php echo $product->image ?>
										</div><br><br>        
									</td>
									<td valign="top" width="280" style="vertical-align: top">
										<div style="text-align: center;">
										<span style="font-style: italic;"></span>
											<div class="vmCartContainer">					
												<form action="" method="post" name="addtocart" id="addtocart_509e748f34f52" class="addtocart_form" onsubmit="handleAddToCart( this.id );return false;">
													<div class="vmCartDetails">	
														<div class="vmCartChild vmRowTwo">
															<input type="hidden" name="product_id" value="128">
															<input type="hidden" name="prod_id[]" value="128">
															<div class="vmCartAttributes">
																<div class="vmAttribChildDetail">
																		<label style="color:#000000;font-weight:bold;">Model </label>
																		<label style="color:#e04139;font-weight:bold; margin-left: 53px;">: <?php echo $product->model ?></label>
																</div>
																<div class="vmAttribChildDetail">
																		<label style="color:#000000;font-weight:bold;">Hãng sản xuất </label>
																		<label style="color:#e04139;font-weight:bold;">: <?php echo $product->hangsx ?></label>
																</div>
																<div class="vmAttribChildDetail">
																		<label style="color:#000000;font-weight:bold;">Bảo hành </label>
																		<label style="color:#e04139;font-weight:bold;  margin-left: 30px;">: <?php echo $product->baohanh ?></label>
																</div>
																<div class="vmAttribChildDetail">
																		<label style="color:#000000;font-weight:bold;">Kho hàng </label>
																		<label style="color:#e04139;font-weight:bold; margin-left: 30px;">: <?php echo $product->khohang ?></label>
																</div>
																<div class="vmAttribChildDetail">
																		<label style="color:#000000;font-weight:bold;">Giá tiền </label>
																		<label style="color:#e04139;font-weight:bold; margin-left: 41px;">: <?php echo $product->price ?> VNĐ</label>
																</div>
															</div>
														</div>	 
													</div>
												</form>
											</div>
											<span style="font-style: italic;"></span>
										</div>
									</td>
									<!--<td rowspan="2" style="background-color:#f9f9f9;padding-left:10px;font-family:Tahoma,Verdana,Arial;font-size:11px; vertical-align: top; width: 300px">
										<table border="0" cellpadding="5" cellspacing="0" width="100%">     
										<?php foreach ($relates as $item)
										{?>	  
											<tr align="left">
												<td width="1" class="sectiontableentry3" style="padding:5px" ></td>
												<td class="sectiontableentry2" style="text-transform:uppercase; padding:5px"> 
												<span><a style="font-weight:bold;color:#033B7F;" title="" href="<?php echo base_url() ?>sanpham/chitiet/<?php echo $item->category_id?>/<?php echo $item->id ?>">
													<?php if ($lang=="vn") echo $item->namev; else echo $item->namee ?>
													</a></span></td>
												</tr>
												<tr align="left">
													<td </td>
													<td  class="sectiontableentry1" style="padding:5px">
												<span style="font-weight:bold;color:#E04139;">Price: <?php echo $item->price ?></span>
												</td>
												</tr>
										<?php }?>
										</table>
									</td>----->
								</tr>        
								<tr>
									<td valign="bottom" align="center">
										<table>
											<tr>
											</tr>
										</table>
									</td>
								</tr>
								<tr>
									<td valign="top" colspan="3" align="left"><br></td>
								</tr>
								<tr>
									<td valign="top" colspan="3"><br></td>
								</tr>
								<tr>
								<td rowspan="1" colspan="3">   
									<p></p>
									<div style="width: 700px;" class="ja-tabswrap tube">	
										<div class="container" id="myTab-Namdo">	
											<div style="height: 23px;" class="ja-tabs-title-top">		
													
												<ul class="ja-tabs-title">
													<li class="first"><h3><span>Chức năng</span></h3></li>
													<li class="last"><h3><span>Thông số kĩ thuật</span></h3></li>
													
												</ul>
											</div>
												<div class="ja-tab-content" id="id_move1">
													<div class="ja-tab-subcontent">
														<p><span style="font-size: 12pt;">
															<?php
											        			if($lang=='vn')
																	echo $product->usesv;
																else echo $product->usese;
											        		?>
														</span></p>
														<span style="font-size: 12pt;"></span><br>
													</div>
												</div>
												<div class="ja-tab-content" id="id_move2">
													<div class="ja-tab-subcontent" >
														<p><span style="font-size: 12pt;"><strong>THÔNG SỐ KỸ THUẬT<br></strong></span></p>
														<span style="font-size: 12pt;"> </span> 
														<ul>
															<li><span style="font-size: 12pt;">
															<?php
											        			if($lang=='vn')
																	echo $product->technical_infov;
																else echo $product->technical_infoe;
											        		?>
															</span></li>
														</ul>
														<span style="font-size: 12pt;"> </span>
														<span style="font-size: 12pt;"> </span>
														<p><span style="font-size: 12pt;">&nbsp;</span></p>
													</div>
											
												<!--<div class="ja-tab-content">
													<div class="ja-tab-subcontent"></div>
												</div>-->
											</div>
										</div>
									</div>
									<br><span style="font-style: italic;"></span>    
								</td>
							</tr>  
							<tr>
								<td colspan="3">
										<br>
								</td>
							</tr>
							<tr>
								<td colspan="3">
									<div style="text-align: center;"></div>
								<br></td>
							</tr>
							
							<tr>
							  <td colspan="3"><br></td>
							</tr>
						</table>
						
	<div id="relate_list">
		<p style="font-weight: bold; font-size: 15px"> Sản phẩm liên quan</p>
		<h4><?php echo $this->lang->line('detailpr-relates');?></h4>
		<div id="items">
			<?php foreach ($relates as $item)
			{?>
				<div class="item12">
					<div class="itemimage">
						<a href="<?php echo base_url() ?>sanpham/chitiet/<?php echo $item->category_id."-".$item->id."-".$item->alias ?>">
							<?php echo $item->image;?>
						</a><br />								
					</div>
		            <div class="itemh5"><?php if ($lang=="vn") echo $item->namev; else echo $item->namee;?></div>
				</div>
			<?php }?>
			<br class="clear"/>
		</div>
	</div>
					</div>
				</div>
		
		
      <!--------------end center----------------------->
	</div>
	  
	<!---------------begin left----------------------->
	  <?php $this->load->view('front/left');?>
	  
	<script type="text/javascript">
          $(document).ready(function(){
           $('#id_move1').show();
           $('#id_move2').hide();
           $('.first').addClass('firstactive');
            
           $('.first').click(function(){
            $(this).addClass('firstactive');
            $(this).parent().parent().parent().children('#id_move1').show();
            $(this).parent().parent().parent().children('#id_move2').hide();
            $('.last').removeClass('active');
            })
           $('.last').click(function(){
            $(this).addClass('active');
            $(this).parent().parent().parent().children('#id_move2').show();
            $(this).parent().parent().parent().children('#id_move1').hide();
            $('.first').removeClass('firstactive');
            })
           });
    </script> 
			
  
