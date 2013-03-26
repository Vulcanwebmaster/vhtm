<script type="text/javascript">
	$(document).ready(function(){
		$('#menu-dichvu').addClass('but1_active');
	});
</script>
<div id="main_block">
	<div class="content">
		<?php if ( $_SESSION['lang']=="vn" ){
         	echo $detail_dv->contentv; 
		}else {
			  echo $detail_dv->contente; 
		} ?>
	</div>
</div>
