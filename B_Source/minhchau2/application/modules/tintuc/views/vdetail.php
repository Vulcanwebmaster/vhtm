<script type="text/javascript">
	$('#menu-tintuc').parent().addClass('currentmenu');
</script>

			<!-- BEGIN: CONTENT -->
			<div id="ja-mainbody" class="clearfix">
	  		<div id="ja-pathway">
        		<span class="breadcrumbs pathway"><a class="pathway" href="<?php echo base_url() ?>"><?php echo $this->lang->line('content-trangchu'); ?> 
        			</a><img src="<?php echo base_url()?>assets/minhchau2/images/arrow.png" alt=""> <?php echo $this->lang->line('content-tintuc'); ?>
        	</div>
				
    		<div id="ja-content" class="clearfix">
				<h1 class="componentheading">Tin tức </h1>
				<table class="blog" cellpadding="0" cellspacing="0">
					<tr>
						<td valign="top">
									<br>
							<br>
						</td>
					</tr>
					<tr>
						<td valign="top">
							<div>							
								<div class="contentpaneopen">
									<h3 class="gioithieu-title"><?php if ($lang=="vn") echo $detail->tieude_v; else echo $detail->tieude_e;?></h3></br>
									<div class="article-toolswrap">
										<div class="article-tools clearfix">
											<div class="article-meta">
												<span class="createdate">
													Ngày: (<?php echo $detail->ngaythang;?>)</br></span>
											</div>
										</div>
									</div>
									<div class="article-content">
										<p><span style="font-size: 12pt;">
												<?php 
													if($lang=='vn')
														echo $detail->noidung_v;
													else echo $detail->noidung_e;
												?>
										   </span>
										</p>
										(Tác giả: <?php echo $detail->tacgia;?>)</br>
								</div>
							</div>

							<span class="article_separator">&nbsp;</span>
						</div>
					</td>
				</tr>
<tr>
	<td valign="top" align="center"></td>
</tr>
<tr>
	<td valign="top" align="center"></td>
</tr>
</table>

</div>	
				
	  <!-- BEGIN: JAZIN -->
  <div id="jazin-fp">
    	
    </div>
    <!-- END: JAZIN -->
		
		
	</div>
	<!---------END: CONTENT------>
	<?php $this->load->view('front/left');?>

