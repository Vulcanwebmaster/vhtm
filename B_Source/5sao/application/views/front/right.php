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
                    <marquee direction="down" behavior="alternate"  scrollamount="2"  loop="-1" onmouseover="this.stop()" scrollamount="2" onmouseout="this.start()" height="300" style="margin-top:-8px;">
                      	<ul class="brands">
                      		<?php for ($i=0;$i<count($list_tintuc_right); $i++)
                      		{
                      			if ($lang=="vn") $tieude=substr($list_tintuc_right[$i]->tieude_v,0,30).'...';
                      			else $tieude=substr($list_tintuc_right[$i]->tieude_e,0,30).'...';
                      			if ($i%2==0)
                      				echo '<li class="color"><a href="'.base_url().'tintuc/detail/'.$list_tintuc_right[$i]->id.'">'.$tieude.'</a></li>';
                      			else echo '<li><a href="'.base_url().'tintuc/detail/'.$list_tintuc_right[$i]->id.'">'.$tieude.'</a></li>';
                      		}?>
						</ul>
                    </marquee>	
                    <div class="bottomh4"><img src="<?php echo base_url();?>assets/5sao/images/bth4.jpg" /></div>
                   </div>
                 <div id="mainmap"  class="bodermove">
                   		<h4 class="title3" style=" margin-top:0px;"><?php echo $this->lang->line('right-bando');?></h4>
                        <div id="map"><iframe width="170" height="145" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=vi&amp;geocode=&amp;q=S%E1%BB%91+03+-+T%C3%A2n+Xu%C3%A2n+-+Xu%C3%A2n+%C4%90%E1%BB%89nh+-+T%E1%BB%AB+Li%C3%AAm+-+H%C3%A0+N%E1%BB%99i&amp;aq=&amp;sll=21.043171,105.758429&amp;sspn=0.044539,0.084543&amp;ie=UTF8&amp;hq=&amp;hnear=T%C3%A2n+Xu%C3%A2n,+T%E1%BB%AB+Li%C3%AAm,+H%C3%A0+N%E1%BB%99i,+Vi%E1%BB%87t+Nam&amp;t=m&amp;ll=21.080736,105.785036&amp;spn=0.011613,0.014505&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=vi&amp;geocode=&amp;q=S%E1%BB%91+03+-+T%C3%A2n+Xu%C3%A2n+-+Xu%C3%A2n+%C4%90%E1%BB%89nh+-+T%E1%BB%AB+Li%C3%AAm+-+H%C3%A0+N%E1%BB%99i&amp;aq=&amp;sll=21.043171,105.758429&amp;sspn=0.044539,0.084543&amp;ie=UTF8&amp;hq=&amp;hnear=T%C3%A2n+Xu%C3%A2n,+T%E1%BB%AB+Li%C3%AAm,+H%C3%A0+N%E1%BB%99i,+Vi%E1%BB%87t+Nam&amp;t=m&amp;ll=21.080736,105.785036&amp;spn=0.011613,0.014505&amp;z=14&amp;iwloc=A" style="color:#0000FF;text-align:left">Xem Bản đồ cỡ lớn hơn</a></small></div>
                        <div class="bottomh4"><img src="<?php echo base_url();?>assets/5sao/images/bth4.jpg" /></div>
                   </div>			
				</div>