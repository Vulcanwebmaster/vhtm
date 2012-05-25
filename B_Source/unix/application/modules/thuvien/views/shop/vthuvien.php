<script type="text/javascript">
	$(document).ready(function(){
		var content=document.getElementById('content');		
		$('#listbook').load('<?php echo base_url();?>index.php/thuvien/loadFull');
		$('#list-type').change(function(){
			var list=document.getElementById('list-type');
			var value=list.value;
			$('#listbook').load('<?php echo base_url();?>index.php/thuvien/load/0/'+value);
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
						<span style="color:white; font-size:12px">Chọn loại sách: </span>
						<select id="list-type">
							<option value="0">Tất cả</option>
							<?php if (isset($listtype))
							{
								foreach($listtype as $item)
								{
									echo '<option value="'.$item->loaisach_id.'">'.$item->tenloai.'</option>';
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
				
			</div>
		</div>
	</div>
</div>