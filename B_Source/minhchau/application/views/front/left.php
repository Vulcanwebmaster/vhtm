<?php $lang=$this->session->userdata('lang');?>
<div id="sidebar">
			<img src="<?php echo base_url();?>assets/minhchau/images/title1.gif" alt="" width="174" height="30" /><br />																																																																		
			<ul id="list">
				<?php 
					for ($i=0;$i<count($listcate);$i++)
					{
						if ($i%2==0)
						{?>
							<li class="color">
								<a href="#">
									<?php if ($lang=='vn') 
												echo $listcate[$i]->namev; 
										else echo $listcate[$i]->namee;?>
								</a>
							</li>
						<?php }
						else {?>
							<li>
								<a href="#">
									<?php if ($lang=='vn') 
												echo $listcate[$i]->namev; 
										else echo $listcate[$i]->namee;?>
								</a>
							</li>
						<?php }
					}
				?>
			</ul>
		</div>