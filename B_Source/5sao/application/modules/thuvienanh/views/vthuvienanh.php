<script type="text/javascript">
	$('#menu-sanpham').css('color','#D9B24A');
</script>

<div id="center">
	<?php 
		if ($lang=="vn")
			echo '<h2>Danh sách hình ảnh:</h2>';
		else echo '<h2>Images gallery:</h2>';
	?>	
	<div id="items">
		<?php foreach ($list as $item)
		{?>
			<div class="item">
				<div class="itemimage">
					<a>
						<?php echo $item->file;?>
					</a><br />								
				</div>
			</div>
		<?php }?>
		<br class="clear"/>
	</div>
</div>