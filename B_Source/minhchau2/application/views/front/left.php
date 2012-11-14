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
				<a href="ymsgr:sendIM?vnthaibinh&m=SupportYahoo-namdomedical.vn"><img border="0" src="<?php echo base_url()?>assets/minhchau2/images/online" vspace="5"></a><br>
				<strong>Mr Bình</strong><br> 0979345268<br> 
				<a href="ymsgr:sendIM?dkadoption&m=SupportYahoo-namdomedical.vn"><img border="0" src="<?php echo base_url()?>assets/minhchau2/images//online(1)" vspace="5"></a><br>  
				<strong>Mr Trung</strong><br> 0916138183<br>
				<style>#pah{display:block; text-indent:-9999px; height:1px;}</style>
				<div id="pah">
					<a href="#" title="den san khau">den san khau</a>, 
					<a href="#" title="thue xe">thue xe</a>, 
					<a href="#" title="am thanh anh sang">am thanh anh sang</a>, 
					<a href="#" title="anh sang san khau">anh sang san khau</a>, 
					<a href="#" title="d�n led, den led">den led</a>
				</div>
			</div>		
		</div>
		<!---------------End Hỗ trợ trực tuyến----------------------->
        <!---------------begin đối tác----------------------->
		<div class="moduletable_menuhilite">
        	<h3><span>Đối tác</span></h3>
            	<p><a href="#" target="_blank"><img src="<?php echo base_url()?>assets/minhchau2/images/bionic3.png" 
            					border="0" width="164" height="64"/></a></p>
               	<p><a href="#" target="_blank"><img src="<?php echo base_url()?>assets/minhchau2/images/edan3.png" 
               					border="0" width="164" height="64"/></a></p>
               	<p><a href="#" target="_blank"><img src="<?php echo base_url()?>assets/minhchau2/images/hadeco3.png" 
               					border="0" width="164" height="64"/></a></p>
               	<p><a href="#" target="_blank"><img src="<?php echo base_url()?>assets/minhchau2/images/mindray3.png" 
               					border="0" width="164" height="64"/></a></p>
                <p><a href="#" target="_blank"><img src="<?php echo base_url()?>assets/minhchau2/images/nopa3.png" 
               					border="0" width="164" height="64"/></a></p>
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