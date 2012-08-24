</header>

<?php $thongtinlienhe=$this->session->GetFirstChar($this->lang->line('lienhe-thongtinlienhe'));
	$lienhe=$this->session->GetFirstChar($this->lang->line('lienhe-lienhe'));
?>

<div id="content">
        <?php $this->load->view('front/slogan');?>
        <div class="page5-row1">
            <div class="page5-col-1 border-right">
            	<h2><span class="clr-1"><?php echo $thongtinlienhe['before'];?></span><?php echo $thongtinlienhe['after'];?></h2>
                <dl class="adr">
                    <dt class="clr-1"><strong>Kensington College of Business</strong></dt>
                    <dd><strong>34 Hồng Phúc, Quận Ba Đình Hà Nội, Vietnam</strong></dd>
                    <dd><span><?php echo $this->lang->line('lienhe-dienthoai');?>:</span><strong>(+844) 85868119</strong></dd>
                    <dd><span><?php echo $this->lang->line('lienhe-mobile');?>:</span><strong>(+84) 0983721368</strong></dd>
                    <dd><span>Fax:</span><strong>(+844) 38284948</strong></dd>
                    <dd><span>Email:</span><a href="#" class="link">Lien@kensingtoncoll.ac.uk</a><br/></dd>
                    <dd style="padding-left:72px;"><a href="#" class="link">kcb2vietnam@gmail.com</a><br/></dd>
                    <dd><span>Website:</span><a href="#" class="link">www.kensingtoncoll.ac.uk/vietnam</a></dd>
                    <dd><img src="<?php echo base_url();?>assets/tuongnhat/images/fc.png"/></dd>
                    
                </dl> 
            </div>
            <div class="page5-col-2">
            	<p style="color:#9eb4be">
            		<?php echo $this->session->userdata('result');
            			$this->session->unset_userdata('result');
            		?>
				</p>
            	<?php if (validation_errors())
            	{
            		echo '<div>';
            		echo validation_errors('<p style="color:#cf4e47">','</p>');
            		echo '</div>';
            	}?>
            	<h2><span class="clr-1"><?php echo $lienhe['before'];?></span><?php echo $lienhe['after'];?>:</h2>
                <form id="form" method="post" action="<?php echo base_url();?>lienhe/Insert">
                  <fieldset>
                    <label><strong><?php echo $this->lang->line('lienhe-ten');?>:</strong><input type="text" value="" name="ten"><strong class="clear"></strong></label>
                    <label><strong>Email:</strong><input type="text" value="" name="email"><strong class="clear"></strong></label>
                    <label><strong><?php echo $this->lang->line('lienhe-thongtin');?>:</strong><textarea name="thongtin" id="thongtin"></textarea><strong class="clear"></strong></label>
                    <strong class="clear"></strong>
                    <div class="btns">
                    	<input type="submit" value="<?php echo $this->lang->line('lienhe-gui');?>" style="width:auto; height:auto; float:right; text-transform:uppercase; text-decoration:underline; cursor:pointer"/>
                    </div>
                    <div style="margin-top:10px;"><?php echo $this->lang->line('lienhe-sodo');?>
                    	 <iframe style="float:right" width="460" height="200" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=H%E1%BB%93ng+Ph%C3%BAc,+qu%E1%BA%ADn+Ba+%C4%90%C3%ACnh,+H%C3%A0+N%E1%BB%99i,+Vietnam&amp;aq=&amp;sll=21.042044,105.846984&amp;sspn=0.002483,0.005284&amp;ie=UTF8&amp;hq=&amp;hnear=H%E1%BB%93ng+Ph%C3%BAc,+Ba+Dinh+District,+Hanoi,+Vietnam&amp;t=m&amp;ll=21.040687,105.848465&amp;spn=0.016022,0.039396&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=H%E1%BB%93ng+Ph%C3%BAc,+qu%E1%BA%ADn+Ba+%C4%90%C3%ACnh,+H%C3%A0+N%E1%BB%99i,+Vietnam&amp;aq=&amp;sll=21.042044,105.846984&amp;sspn=0.002483,0.005284&amp;ie=UTF8&amp;hq=&amp;hnear=H%E1%BB%93ng+Ph%C3%BAc,+Ba+Dinh+District,+Hanoi,+Vietnam&amp;t=m&amp;ll=21.040687,105.848465&amp;spn=0.016022,0.039396&amp;z=14&amp;iwloc=A" style="color:#0000FF;text-align:left">View Larger Map</a></small>
                    </div>
                  </fieldset>  
                </form> 
                
            </div> 
           
        </div>
        <?php $this->load->view('front/bottom-content');?>
    </div> 