<?php
	$newModel=new CI_Model(); 
	$this->load->helper('text');
	$lang=$this->session->userdata('lang');
?>



<!------------------------------------------>
<div id="ja-mainbody">
      <!---------------begin center----------------------->																																																																																																																																																																										
	  <div id="center" class="column">
      <!---------------begin slider----------------------->
      <?php $this->load->view('front/slide');?>
       <!---------------end slider----------------------->
       
       <!--------------begin content center----------------------->
       <style>
	.menu-visited{ background:url(<?php echo base_url(); ?>assets/minhchau2/images/but4.gif);}
</style>
<script>
	$(document).ready(function() {
	  $('#m-trangchu').addClass('menu-visited');
	});
</script>
<!-- BEGIN: FEATURE PRODUCTS -->
	  	<div id="ja-topsl3">
        	<div class="moduletable">
			<p  style=" font-size:20px; border-bottom:1px solid #999; padding-top:20px">
				<?php echo $this->lang->line('content-sanphammoi'); ?>
			</p>
			<!--<table border="0" cellpadding="0" cellspacing="0" width="100%">
					<tr>
					<?php
					if(isset($items))
					{
						foreach($items as $item)
						{
					?>
						<td width="7%" align="center" class="trangchuhehe"> 
							<span style="font-weight:bold;"><?php echo $item->namev; ?></span>
							<br>
							<a href="<?php echo base_url() ?>sanpham/chitiet/<?php echo $item->category_id?>/<?php echo $item->id ?>" class="name">
								<?php echo $item->image; ?>
							</a>
							<br>
						</td>
				<?php
					}
					}
				?>
						</tr>
			</table>---->
			<div class="stuff">
				<?php
					if(isset($items))
					{
						foreach($items as $item)
						{
					?>
							<div class="trangchuhehe">
								<span style="font-weight:bold;"><?php if ($lang=='vn') echo $item->namev; else echo $item->namee; ?></span>
								<br>
								<a href="<?php echo base_url() ?>sanpham/chitiet/<?php echo $item->category_id."-".$item->id."-".$item->alias ?>" class="name">
								<?php echo $item->image; ?>
								</a>
								<br>
							</div>
					<?php
					}
					}
				?>
				
			</div>
			
			</div>
							<!-- BEGIN: BOTTOM SPOTLIGHT -->
		<div id="ja-botsl" class="clearfix">
		
			<div class="ja-box-full" style="width: 99.5%;">
				<div class="moduletable">
					<h3><span>Latest</span> News</h3>
						<ul class="latestnews">
						</ul>		
				</div>	
			</div>
		</div>
		<!-- END: BOTTOM SPOTLIGHT -->
		</div>
        <!---------------end content center----------------------->
	  </div>
</div>
	  	<?php $this->load->view('front/left');?>
      <!---------------end đối tác---------------------->
      

<script>
	
</script>	  	 
