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
	<hr style="border:none">
	<div id="thuvien-content">
		<div id="col_left">
			<?php $this->load->view('shop/left');?>
		</div>
		<div id="col_right">
			<div id="menu-panel">
				<div id="menu-book">
					<p>
						<span style="color:white; font-size:12px">Loại tài liệu: </span>
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
				<div class="quangcao">
					<marquee>
						<p> Hệ thống thư viện phong phú của Unix là một kho tri thức khổng lồ chờ bạn khám phá</p>
					</marquee>
				</div>
			</div>
			<div id="listbook">
				<div id="content">
				<ul class="list">
					<?php 
					{
						foreach($listfull as $item)
						{?>
					<li style="clear:both">
						<style type="text/css">
							p{margin-top:5px; margin-bottom:3px}
						</style>
						<table>
							<tr>
								<td>
									<a href="<?php echo base_url();?>index.php/thuvien/detail/<?php echo $item->sach_id;?>"><img src="<?php if ($item->anhdaidien!='') echo base_url().$item->anhdaidien; else echo base_url().'assets/unix/images/logo2.png';?>" height="100px" width="130px" style="float:left; border:double 4px silver"/></a>
								</td>
								<td style="padding:0 10px; text-align:justify; vertical-align:0">
									<a href="<?php echo base_url();?>index.php/thuvien/detail/<?php echo $item->sach_id;?>"><h3 style="margin:0;color:#0158a1"><?php echo $item->tensach;?></h3></a>
									<p>Thể loại: 
										<?php if ($this->MKaimonokago->getTheLoaiById($item->loaisach_id))
										{?>
											<a href="<?php echo base_url();?>index.php/thuvien/load/<?php echo $item->loaisach_id;?>"><?php echo $this->MKaimonokago->getTheLoaiById($item->loaisach_id)->tenloai;?></a></p>
										<?php 
										}
										else echo 'Chưa biết';?>
									<!-- ?php echo substr($item->noidung,0,200).' ...';?>
									<a href="#" style="font-style:italic">Xem thêm</a-->
								</td>
							</tr>
						</table>
					</li>
					<li><hr/></li>
					<?php 	}
					}?>
				</ul>
				<?php echo $this->pagination->create_links();?>
				<br id="space-bottom"/>
			</div>
			
			</div>
		</div>
	</div>
</div>