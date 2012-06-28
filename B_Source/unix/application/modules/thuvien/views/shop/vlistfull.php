<script type="text/javascript">
	$(document).ready(function(){
		$("#list").hide().fadeIn(400);
		
		});
</script>
<ul id="list" class="list" style="text-align:center; margin-top:40px">
					<?php if (isset($listfull))
					{
						for ($i=0;$i<count($listfull);$i+=4)
						{							
							?>
							<li style="clear:both; height:145px">
								<ul style="list-style-type:none; padding-left:0">
									<?php $j=0;
										for($j=0;$j<4;$j++)
										{
											if (isset($listfull[$i+$j]))
											{
											?>
											<li style="float:left; margin:0 20px 10px 5px;">
												<fieldset style="width:120px; height:130px; border-style:none;background:url('<?php echo base_url();?>assets/unix/images/book-bg.png') no-repeat">
													<div id="book-name">
														<div style="height:40px"></div>
														<a title="<?php echo $listfull[$i+$j]->tensach;?>" href="<?php echo base_url();?>index.php/thuvien/detail/<?php echo $listfull[$i+$j]->sach_id;?>"><?php 
														{
															if (strlen($listfull[$i+$j]->tensach)>50)
																echo substr($listfull[$i+$j]->tensach,0,50).' ...';
															else echo $listfull[$i+$j]->tensach;
														}?></a>
													</div>
													<div id="book-information">
														<p><?php echo substr($listfull[$i+$j]->tacgia,0,17);?></p>
													</div>
												</fieldset>
											</li>
										<?php }
										}
									?>
								</ul>
							</li>
							<li style="height:20px"></li>
					<?php
							}
					}?>
				</ul>	
