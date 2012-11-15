<?php 
	$newModel=new CI_Model();
	$lang=$this->session->userdata('lang');
?>
	<div id="ja-col">
	  	<div class="moduletable_menuhilite">
        <h3><span>Danh mục sản phẩm</span> </h3>
			<ul class="menu0">
				<?php
					if(isset($parents))
					{ 
						for ($i=0;$i<count($parents);$i++)
						{
							//$num=$newModel->getListByColumn('mc_category','parent_id',$parent->id);
							if($i%2==0)
							{
								$num=$newModel->getListByColumn('mc_category','parent_id',$parents[$i]->id);
								if(count($num)>0)
								{
									?>
										<li> 
										<a style="cursor:pointer">
											<?php
												if ($lang=='vn') 
													echo $parents[$i]->namev;
												else echo $parents[$i]->namee;
											?>
										</a>	</li>
										<?php
											$childs=$newModel->getListByColumn('mc_category','parent_id',$parents[$i]->id);
											if (isset($childs))
											{
												foreach($childs as $child)
												{ 
													?>
									                	<ul class="menu1">
									                    	<li><a href="<?php echo base_url() ?>sanpham/view/<?php echo $child->id ?>">
									                    		<?php
									                    			if ($lang=='vn') 
									                    				echo $child->namev;
																	else echo $child->namee;
									                    		?>
									                    	</a></li>
									                    </ul>
						                			<?php
												}
											}
					                	?>
				                	
			            			<?php
		            			}
								else
								{
									?>
										<li> 
											<a href="<?php echo base_url() ?>sanpham/view/<?php echo $parents[$i]->id ?>">
												<?php
													if ($lang=='vn') 
														echo $parents[$i]->namev;
													else echo $parents[$i]->namee;
												?>
											</a>
				                		</li>
			            			<?php	
								}
		            		}
							else
							{
								$num=$newModel->getListByColumn('mc_category','parent_id',$parents[$i]->id);
								if(count($num)>0)
								{
									?>
										<li> 
											<a style="cursor:pointer">
												<?php
													if ($lang=='vn') 
														echo $parents[$i]->namev;
													else echo $parents[$i]->namee;
												?>
											</a>
											<?php
												$childs=$newModel->getListByColumn('mc_category','parent_id',$parents[$i]->id);
												if (isset($childs))
												{
													foreach($childs as $child)
													{ 
														?>
										                	<ul class="menu1">
										                    	<a href="<?php echo base_url() ?>sanpham/view/<?php echo $child->id ?>">
										                    		<?php
										                    			if ($lang=='vn') 
										                    				echo $child->namev;
																		else echo $child->namee;
										                    		?>
										                    	</a><br/>
										                    </ul>
							                			<?php
													}
												}
						                	?>
			                			</li>
		            				<?php
								}
								else
								{
									?>
										<li> 
											<a href="<?php echo base_url() ?>sanpham/view/<?php echo $parents[$i]->id ?>">
												<?php
													if ($lang=='vn') 
														echo $parents[$i]->namev;
													else echo $parents[$i]->namee;
												?>
											</a>
											
			                			</li>
		            				<?php
								}
							}
							
						}
					}
		            ?>
			</ul>
		</div>
        
        <!--------------end danh mục----------------------->
        <!---------------begin Hỗ trợ trực tuyến----------------------->
        <div class="moduletable">
			<h3><span>HỖ TRỢ TRƯC TUYẾN</span></h3>
			<div align="center">
				<?php foreach ($list_hotro as $hotro)
		        { ?>
				<a href="ymsgr:sendIM?<?php echo $hotro->yahoo;?>"><img border="0" src="<?php echo base_url()?>assets/minhchau2/images/online" vspace="5"></a><br>
				<strong><?php echo $hotro->ten;?></strong><br><?php echo $hotro->sdt;?><br> 
				<?php }?> 
				<style>#pah{display:block; text-indent:-9999px; height:1px;}</style>
			</div>		
		</div>
		<!---------------End Hỗ trợ trực tuyến----------------------->
        <!---------------begin đối tác----------------------->
		<div class="moduletable_menuhilite">
        	<h3><span>Đối tác</span></h3>
        	        	<?php foreach($list_doitac as $doitac){ ?>
            	<p><a href="<?php echo $doitac->link ?>" target="_blank">
            				<?php echo $doitac->logo;?></a></p>
         		 <?php  } ?>
        </div>
	  </div>
	  <script type="text/javascript">
			$(document).ready(function(){
			
				$('.menu1').hide();
				
				$('.menu0').click(function(){
				
					$(this).children('.menu1').slideToggle();
					
				});
				
			});
		</script>