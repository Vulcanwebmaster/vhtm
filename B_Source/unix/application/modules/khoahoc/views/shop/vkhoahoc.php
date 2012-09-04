<script type="text/javascript">
	$(document).ready(function(){
		var content=document.getElementById('content');		
		//$('#content').load('<?php echo base_url();?>index.php/khoahoc/pages');
		$('#list-type').change(function(){
			var list=document.getElementById('list-type');
			var value=list.value;
			//$('#content').load('<?php echo base_url();?>index.php/khoahoc/pages/0/'+value);
			window.location.href='<?php echo base_url();?>index.php/khoahoc/pages/'+value+'/0';
			});
		});
</script>

<div id="title-panel">
	<div id="title">
		<div id="title-left"></div>
		<div id="title-center">
			<h1>Khóa học</h1>
		</div>
		<div id="title-right"></div>
	</div>
</div>
<div id="content-panel">
	<hr style="border:none">
	<div id="hoithao-content">
		<div id="col_left">
			<?php $this->load->view('shop/left');?>
		</div>
		<div id="col_right">
			<div id="menu-panel" style="margin-bottom:15px">
				<div id="menu-book">
					<p>
						<span style="color:white; font-size:12px">Chọn đối tượng: </span>
						<select id="list-type">
							<option value="0">Tất cả</option>
							<?php if (isset($listdoituong))
							{
								foreach($listdoituong as $item)
								{
									if ($item->loaikhoahoc_id==$id_doituong)
										echo '<option selected="selected" value="'.$item->loaikhoahoc_id.'">'.$item->tenloai.'</option>';
									else echo '<option value="'.$item->loaikhoahoc_id.'">'.$item->tenloai.'</option>';
								}
							}?>						
						</select>
					</p>
				</div>
			</div>
			
			<div id="content">
				<ul class="list">
					<?php 
					{
						if (count($list)>0)
						foreach($list as $item)
						{?>
							<li style="clear:both">
								<style type="text/css">
									p{margin-top:5px; margin-bottom:3px}
								</style>
								<table>
									<tr>
										<td>
											<a href="<?php echo base_url();?>index.php/khoahoc/detail/<?php echo $item->khoahoc_id;?>"><img src="<?php echo base_url().substr($item->anhdaidien,3);?>" height="100px" width="130px" style="float:left; border:double 4px silver"/></a>
										</td>
										<td style="padding:0 10px; text-align:justify; vertical-align:0">
											<a href="<?php echo base_url();?>index.php/khoahoc/detail/<?php echo $item->khoahoc_id;?>"><h3 style="margin:0;color:#0158a1"><?php echo $item->tieude;?></h3></a>
											<?php echo substr($item->mota,0,200).' ...';?>
											<a href="<?php echo base_url();?>index.php/khoahoc/detail/<?php echo $item->khoahoc_id;?>" style="font-style:italic">Xem thêm</a>
										</td>
									</tr>
								</table>
							</li>
							<li><hr/></li>
					<?php 	}
						else echo 'Không có khóa học nào phù hợp';
					}?>
				</ul>
			</div>
			<?php echo $this->pagination->create_links();?>
		</div>
	</div>
</div>