<script type="text/javascript">
	$('#menu-sanpham').parent().addClass('currentmenu');
</script>

<div id="center">
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