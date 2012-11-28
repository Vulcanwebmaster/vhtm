<?php function cutString($str,$limit)
{
	$final_limit=0;
	if ($str[$limit]!=' ')
		while ($str[$limit]!=' ')
			$limit++;
	return substr($str,0, $limit);
}?>

<div id="right">
                	<div class="bodermove">
                    	<h4 class="title3"  style=" margin-bottom: 4px;"><?php echo $this->lang->line('right-lienhe');?></h4>
                        <div class="support">   
		                        <?php foreach ($list_hotro as $hotro)
		                	 	{ ?>
		                	 		   <p><?php echo $hotro->sdt;?></p>
		                	 		   <a href="ymsgr:sendim?<?php echo $hotro->yahoo;?>">        		
			                            <img src="http://opi.yahoo.com/online?u=inox5saoviet_hotro02&amp;m=g&amp;t=2&amp;l=us" width="63" height="16"/>
			                           </a>
			                           <a href="skype:<?php echo $hotro->skype;?>?call">
			                           	<img src="<?php echo base_url();?>assets/5sao/images/skype.jpg" height="20" width="75"/>
			                           </a>
		                	 	<?php }?>   
                        </div>
						<div class="bottomh4"><img src="<?php echo base_url();?>assets/5sao/images/bth4.jpg" /></div>
                    </div>
                  <div class="bodermove">
<h4 class="title3" ><?php echo $this->lang->line('right-tintuc');?></h4>
                    <!--<marquee direction="down" scrollamount="2"  loop="-1" onmouseover="this.stop()" scrollamount="2" onmouseout="this.start()" height="300" style="margin:-8px 0 5px 0">&nbsp-->
                    	<marquee direction="down" width="100%" onmouseover="this.stop()" scrollamount="2" onmouseout="this.start()" height="280" align="left">
                      	<ul class="brands">
                      		<?php for ($i=0;$i<count($list_tintuc_right); $i++)
                      		{
                      			if ($_SESSION['lang']=="vn")  $tieude=$list_tintuc_right[$i]->tieude_v;
                      			else $tieude=$list_tintuc_right[$i]->tieude_e.'...';
                      			?>
                      				<li class="color">
                      					<a href="<?php echo base_url().'/tintuc/detail/'.$list_tintuc_right[$i]->id?>">
                      						<p><?php echo $tieude;?></p>
                      						<i>
                      						<?php
                      						if(isset($_SESSION['lang'])){
                      						 if($_SESSION['lang']=="vn"){
                      							//echo $_SESSION['lang']; die();
                      							echo cutString(strip_tags($list_tintuc_right[$i]->noidung_v),100).'...';
                      						}else{
                      							//echo cutString(strip_tags($list_tintuc_right[$i]->noidung_v),100).'...';
												//echo $_SESSION['lang']; die();
                      						} } ?>
                      						</i>
                      					</a>
                      				</li>
                      	<?php } ?>                      	
                    </marquee>	
                    <div class="bottomh4"><img src="<?php echo base_url();?>assets/5sao/images/bth4.jpg" /></div>
                   </div>
                   <div  class="bodermove">
                    <?php if ($_SESSION['lang']=="vn"){?>
                    	<h4 class="title3" style=" padding-top:10px">Thư viện ảnh</h4>
                    <?php } else{ ?>
                    	<h4 class="title3" style=" padding-top:10px">PHOTO GALLERY</h4>
                    <?php } ?>	
                	
                	<style>
                		.pr-img p img{width:170px !important; height:131px !important}
                	</style>
                	<marquee direction="down" width="100%" onmouseover="this.stop()" scrollamount="2" onmouseout="this.start()" height="280" align="left">
                	 <!--<marquee direction="down" onmouseover="this.stop()" scrollamount="2" onmouseout="this.start()" height="300" style="margin:-8px 0 5px 0">&nbsp;</marquee>-->
                	 	<?php foreach ($list_thuvienanh as $tva)
                	 	{ ?>
                	 		<div class="pr-img">
                	 			<a href="<?php echo base_url();?>thuvienanh/"><?php echo $tva->file;?></a>
                	 		</div>
                	 	<?php }?>
                    </marquee>
                      <div class="bottomh4"><img src="<?php echo base_url();?>assets/5sao/images/bth4.jpg" /></div>          
                	</div>	
				</div>