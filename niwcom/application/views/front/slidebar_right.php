                    <!-- Sidebar -->
                    <div class="sidebar">
                        <div class="sidebar_back">
							<!---------------------begin tags------------>
							<style type="text/css">
								#tags p{ float:left; margin:0; padding:5px; height:35px;}
								#tags a{ text-decoration:none}
								
							</style>
							<div class="box" id="tags">
								<h4>Tags</h4>
								<?php foreach ($list_tagscloud as $_tagscloud){ ?>
									<p ><a href="<?php echo base_url();?>tagcloud/page/<?php echo $_tagscloud->id.'/'.$_tagscloud->alias;?>"><b style="font-size:20px;">
										<?php if ( $_SESSION['lang']=="vn" ){
												      echo $_tagscloud->tentag; 
												}else {
													  echo $_tagscloud->tentage; 
												}
										 ?></b>()</a></p>
								<?php } ?>
							</div>
							<!---------------------end tags------------>
                        </div>
                    </div>
                    <!-- / Sidebar -->