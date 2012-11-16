<script type="text/javascript">
	$('#menu-tintuc').parent().addClass('currentmenu');	$('#bg_itemmenu_3').addClass('styleshow');
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
						<ul class="aboutus-menu">
							<?php foreach($list_tintuc as $item)
							{?>
								<li style="width:100%; float:left; border:1px solid #ddd; padding:5px 5px; margin:5px 0px;">
									<?php echo $item->anh;?>
						            <div class="aboutth-item" style="float:left; width:76%; height: 86px;">
						            	<h3><a href="<?php echo base_url();?>tintuc/detail/<?php echo $item->id;?>"><?php if ($lang=="vn") echo strip_tags($item->tieude_v); else echo strip_tags($item->tieude_e);?></a></h3>
						            </div>
						  	    </li>
						  	<?php }?>
						</ul>
					<!------<tr>
						<td valign="top">
									<?php foreach($list_tintuc as $item)
										{?>
							<div>							
								<div class="contentpaneopen">
									<h3 class="contentheading"><a href="<?php echo base_url();?>tintuc/detail/<?php echo $item->id;?>">
										<?php if ($lang=="vn") echo strip_tags($item->tieude_v); else echo strip_tags($item->tieude_e);?></a></h2>
									<div class="article-toolswrap">
										<div class="article-tools clearfix">
											<div class="article-meta">
												<span class="createdate">
													Ngày: <?php echo $item->ngaythang ?></span>
											</div>
										</div>
									</div>
									<div class="article-content">
										<p><span style="font-size: 12pt !important ">
												<?php 
													if($lang=='vn')
														echo $item->noidung_v;
													else echo $item->noidung_e;
												?>
										   </span>
										</p>
								</div>
							</div>

							<span class="article_separator">&nbsp;</span>
						</div>
						<?php }?>
					</td>
				</tr>
				------------->
</table>

</div>	
				
	  <!-- BEGIN: JAZIN -->
  <div id="jazin-fp">
    	
    </div>
    <!-- END: JAZIN -->
		
		
	</div>
	<!---------END: CONTENT------>
	<?php $this->load->view('front/left');?>