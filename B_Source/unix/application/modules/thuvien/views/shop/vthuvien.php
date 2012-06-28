<script type="text/javascript">
	$(document).ready(function(){
		var content=document.getElementById('content');		
		//$('#listbook').load('<?php echo base_url();?>index.php/thuvien/loadFull');
		$('#list-type').change(function(){
			var list=document.getElementById('list-type');
			var value=list.value;
			//$('#listbook').load('<?php echo base_url();?>index.php/thuvien/load/'+value);
			window.location.href="<?php echo base_url();?>index.php/thuvien/load/"+value;
			});
		});
</script>

<div id="title-panel">
	<div id="title">
		<div id="title-left"></div>
		<div id="title-center">
			<h1>Thư viện</h1>
		</div>
		<div id="title-right"></div>
	</div>
</div>
<div id="content-panel">
	<div id="current-map">
		<a href="<?php echo base_url();?>">Trang chủ</a>
		<a>:</a>
		<a>Thư viện</a>
	</div>
	<hr/>
	<div id="thuvien-content">
		<div id="col_left">
			<?php $this->load->view('shop/left');?>
		</div>
		<div id="col_right">
			<div id="menu-panel">
				<div id="menu-book">
					<p>
						<span style="color:white; font-size:12px">Chọn loại tài liệu: </span>
						<select id="list-type">
							<option value="0">Tất cả</option>
							<?php if (isset($listtype))
							{
								foreach($listtype as $item)
								{
									if ($item->loaisach_id!=$selected)
										echo '<option value="'.$item->loaisach_id.'">'.$item->tenloai.'</option>';
									else 
										echo '<option selected="selected" value="'.$item->loaisach_id.'">'.$item->tenloai.'</option>';
								}
							}?>						
						</select>
					</p>
				</div>
				<div id="quangcao">
					<marquee>
						<p> Hệ thống thư viện phong phú của Unix là một kho tri thức khổng lồ chờ bạn khám phá</p>
					</marquee>
				</div>
			</div>
			<div id="listbook">
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
			</div>
		</div>
	</div>
</div>