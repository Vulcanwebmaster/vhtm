<?php function cutString($str,$limit)
{
	$final_limit=0;
	if ($str[$limit]!=' ')
		while ($str[$limit]!=' ')
			$limit++;
	return substr($str,0, $limit);
}?>

<div id="right">
                	<div class="bodermove" style="margin-left:9px;">
                    	<h4 class="title3"  style=" margin-bottom: 4px;"><?php echo $this->lang->line('right-lienhe');?></h4>
                        <div class="support">                        	
                        	<h1>0988.999.687</h1>
                        	<a href="ymsgr:sendim?bonghongxanh_9x">        		
                            <img src="http://opi.yahoo.com/online?u=inox5saoviet_hotro02&amp;m=g&amp;t=2&amp;l=us" width="63" height="16"/>
                           </a>
                           <a href="skype:inox5saoviet_hotro02?call">
                           	<img src="<?php echo base_url();?>assets/5sao/images/skype.jpg" height="20" width="75"/>
                           </a>
                        </div>
                        <div class="support">
                        	<h1>0986.519.994</h1>
                        	<a href="ymsgr:sendim?bonghongxanh_9x">
                            <img src="http://opi.yahoo.com/online?u=inox5saoviet_hotro01&amp;m=g&amp;t=2&amp;l=us" width="63" height="16"/>
                             </a>
                             <a href="skype:inox5saoviet_hotro01?call">
	                           	<img src="<?php echo base_url();?>assets/5sao/images/skype.jpg" height="20" width="75"/>
	                           </a>
                        </div>
                        <div class="support">
                        	<h1>0973.929.547</h1>
                        	<a href="ymsgr:sendim?bonghongxanh_9x">
                            <img src="http://opi.yahoo.com/online?u=inox5saoviet_hotro03&amp;m=g&amp;t=2&amp;l=us" width="63" height="16"/>
                             </a>
                             <a href="skype:inox5saoviet_hotro03?call">
	                           	<img src="<?php echo base_url();?>assets/5sao/images/skype.jpg" height="20" width="75"/>
	                           </a>
                        </div>
						<div class="bottomh4"><img src="<?php echo base_url();?>assets/5sao/images/bth4.jpg" /></div>
                    </div>
                  <div class="bodermove" style="margin-left:9px">
<h4 class="title3" ><?php echo $this->lang->line('right-tintuc');?></h4>
                    <marquee direction="down" behavior="alternate"  scrollamount="2"  loop="-1" onmouseover="this.stop()" scrollamount="2" onmouseout="this.start()" height="306" style="margin-top:-8px;">
                      	<ul class="brands">
                      		<?php for ($i=0;$i<count($list_tintuc_right); $i++)
                      		{
                      			if ($lang=="vn") $tieude=$list_tintuc_right[$i]->tieude_v;
                      			else $tieude=$list_tintuc_right[$i]->tieude_e.'...';
                      			?>
                      				<li class="color">
                      					<a href="<?php echo base_url().'/tintuc/detail/'.$list_tintuc_right[$i]->id?>">
                      						<h3><?php echo $tieude;?></h3>
                      						<i>
                      						<?php if ($lang=="vn") echo cutString(strip_tags($list_tintuc_right[$i]->noidung_v),100).'...';
                      							else echo cutString(strip_tags($list_tintuc_right[$i]->noidung_e),100).'...'?>
                      							</i>
                      					</a>
                      				</li>
                      			<?php 
                      		}?>
                    </marquee>	
                    <div class="bottomh4"><img src="<?php echo base_url();?>assets/5sao/images/bth4.jpg" /></div>
                   </div>
                   <div  class="bodermove" style="margin-left:9px">
                    <h4 class="title3" style=" padding-top:10px">Thư viện ảnh</h4>
                	
                	<style>
                		.pr-img p img{width:170px !important; height:131px !important}
                	</style>
                	 <marquee direction="down" behavior="alternate" scrollamount="2"  loop="-1" onmouseover="this.stop()" scrollamount="2" onmouseout="this.start()" height="300" style="margin:-8px 0 5px 0">
                	 	<?php foreach ($list_thuvienanh as $tva)
                	 	{ ?>
                	 		<div class="pr-img">
                	 			<?php echo $tva->file;?>
                	 		</div>
                	 	<?php }?>
                    </marquee>
                      <div class="bottomh4"><img src="<?php echo base_url();?>assets/5sao/images/bth4.jpg" /></div>          
                	</div>	
				</div>