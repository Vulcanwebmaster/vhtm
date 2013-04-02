<style>
	#main{
/*		background: url(<?php echo base_url();?>assets/flash_game/images/backContentTop.jpg) no-repeat;*/
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
			
</style>

<?php $this->load->view('front/menu')?>
<div id="main">
			
				 <p><?php echo $list_chitiet->title ?></p>
				<p> <?php echo $list_chitiet->content ?></p>

	<div id="sideNav"></div>
	<div id="sideBar"></div>
</div>