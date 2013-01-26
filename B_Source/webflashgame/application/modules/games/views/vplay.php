<style>
	#main{
		background: url(<?php echo base_url();?>assets/flash_game/images/backContentTop.jpg) no-repeat;
	_zoom: 1;
	overflow: hidden;
	padding: 54px 24px 0 24px;
	
	}
	
	#sideNav{
				float: left;
			    width: 294px;
			}
			 #container{
				float: right;
			   
			    width: 648px;
			}
		#container{
			float: left;
			width: 648px;
		}
			body.hasSideBar #sideBar {
margin-left: 628px;
_margin-left: 625px;
_zoom: 1;
width: 314px;
overflow: hidden;
position: relative;
}

</style>
</style>
 <script type="text/javascript">
    $(document).ready(function(){
     $('body').addClass('games_details uc hasSideBar noLeaderBoard root chrome, game_uc').removeClass('game_default');
    })
   </script>
<?php $this->load->view('front/menu')?>
<div id="main">
	
  <object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=10,0,0,0" width="550" height="400" id="belote" align="middle">
  <param name="allowScriptAccess" value="sameDomain" />
  <param name="allowFullScreen" value="false" />
  <param name="movie" value="belote.swf" />
  <param name="quality" value="high" />
  <param name="bgcolor" value="#333333" /> 
  <embed src="http://niwvietnam.info/flashgamebelote/belote.swf" quality="high" bgcolor="#333333" width="1000" height="700" name="belote" align="middle" allowScriptAccess="sameDomain" allowFullScreen="false" type="application/x-shockwave-flash" pluginspage="http://www.adobe.com/go/getflashplayer" />
  </object>
						
						
</div>