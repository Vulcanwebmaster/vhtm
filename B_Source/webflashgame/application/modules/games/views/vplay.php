
<div id="main">

	
	<script language="javascript">
		if (AC_FL_RunContent == 0) {
			alert("This page requires AC_RunActiveContent.js.");
		} else {
			AC_FL_RunContent('codebase', 'http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,0,0', 'width', '124', 'height', '332', 'src', '/media/flash/product_sidePanel', 'quality', 'high', 'pluginspage', 'http://www.macromedia.com/go/getflashplayer', 'align', 'middle', 'play', 'true', 'loop', 'true', 'scale', 'showall', 'wmode', 'window', 'wmode', 'transparent', 'devicefont', 'false', 'id', 'product_sidePanel', 'bgcolor', '#ffffff', 'name', 'product_sidePanel', 'menu', 'true', 'allowFullScreen', 'false', 'allowScriptAccess', 'sameDomain', 'movie', '/media/flash/product_sidePanel?productAmount=3', 'salign', '');
			//end AC code
		}
	</script>

	<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="1000" height="400" id="myFlashMovie" align="middle">
		
		<param name="movie" value="http://localhost/flashgamebelote/belote.swf" />
		<param name=FlashVars value="userName=<?php echo $_SESSION['front_user_fullname']?>&idUser=<?php echo $_SESSION['front_user_id']?>&countryUser=<?php echo $account->country?>" />
		<!--[if !IE]>-->
		<object type="application/x-shockwave-flash" data="http://localhost/flashgamebelote/belote.swf" width="100%" height="700">
			<param name="movie" value="http://localhost/flashgamebelote/belote.swf" />
			<param name=FlashVars value="userName=<?php echo $_SESSION['front_user_fullname']?>&idUser=<?php echo $_SESSION['front_user_id']?>&countryUser=<?php echo $account->country?>" />
			<!--<![endif]-->
			<a href="http://www.adobe.com/go/getflash"> <img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" /> </a>
			<!--[if !IE]>-->
		</object>
		
		<!--<![endif]-->
	</object>

</div>