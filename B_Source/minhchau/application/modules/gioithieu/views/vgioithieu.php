<script type="text/javascript">
	$(document).ready(function(){
		$('#menu-gioithieu').addClass('but1_active');
	});
</script>
<div id="main_block">
	<div class="content">
		<?php if ($_SESSION['lang']=="vn"){
        	 echo $detail_gt->contentv; 
		}else {
			  echo $detail_gt->contente; 
		} ?>

	</div>
</div>
