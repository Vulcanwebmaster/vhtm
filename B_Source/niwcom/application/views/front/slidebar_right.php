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
								<?php foreach ($list_tagv as $item){ ?>
									<p ><a href="<?php echo base_url();?>tintuc/category/<?php echo $item->id.'/'.$item->alias;?>"><b style="font-size:20px;">
										<?php if ( $_SESSION['lang']=="vn" ){
												      echo $item->tentag; 
												}else {
													  echo $item->tentage; 
												}
										 ?></b>()</a></p>
								<?php } ?>
							</div>
							<!---------------------end tags------------>
                        </div>
                    </div>
                    <!-- / Sidebar -->