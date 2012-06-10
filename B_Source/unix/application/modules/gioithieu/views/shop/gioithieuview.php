<script type="text/javascript">
	$(document).ready(function(){
		var content=document.getElementById('gioithieu-content');		
		//$('#listbook').load('<?php echo base_url();?>index.php/thuvien/loadFull');
		$('#list-type').change(function(){
			var list=document.getElementById('list-type');
			var value=list.value;
			$('#gioithieu-content').load('<?php echo base_url();?>index.php/gioithieu/detail/'+value);
			});
		});
</script>

<div id="title-panel">
	<div id="title">
		<div id="title-left"></div>
		<div id="title-center">
			<h1>Giới thiệu</h1>
		</div>
		<div id="title-right"></div>
	</div>
</div>
<div id="content-panel">
	<div id="current-map">
		<a href="<?php echo base_url();?>">Trang chủ</a>
		<a>:</a>
		<a>Giới thiệu</a>
	</div>
	<hr/>
	<div id="menu-panel" style="margin-bottom:15px">
				<div id="menu-book">
					<p>
						<span style="color:white; font-size:12px">Chọn thông tin: </span>
						<select id="list-type">
							<option value="0">Tất cả</option>
							<?php if (isset($listsubmenu))
							{
								foreach($listsubmenu as $item)
								{
									echo '<option value="'.$item->submenu_id.'">'.$item->ten.'</option>';
								}
							}?>						
						</select>
					</p>
				</div>
				<div style="float:right;">
					<marquee style="width:100%; margin-right:400px">
						<h3 style="text-transform:uppercase; color:#f37221">Một số thông tin về Unix</h3>					
					</marquee>
				</div>
			</div>
	<div id="gioithieu-content">
		<?php if ($gioithieu!=false)
		{
			echo $gioithieu->noidung;
		}?>
	</div>
</div>