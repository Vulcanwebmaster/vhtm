<?php $dangky=$this->session->GetFirstChar($this->lang->line('bottom-emaildangky'));
	$luuy=$this->session->GetFirstChar($this->lang->line('bottom-luuy'));
?>

<div class="wrap page1-row2" style="margin-top:10px;">				
				<div class="wrap">
				  <div class="aside-col-1 border-right-2">
						<h3><span class="clr-1"><?php echo $dangky['before'];?></span><?php echo $dangky['after'];?>:</h3>
						<form id="form-search" method="post" action="<?php echo base_url();?>dangky/doRegister">
						  <span><?php echo $this->lang->line('bottom-nhapdiachi');?>:</span>
						  <input name="email" type="text" value="" onBlur="if(this.value=='') this.value=''" onFocus="if(this.value =='' ) this.value=''"  />
						  <input style="width:auto; height:auto; background:transparent; border:none" class="link-2" type="submit" value="<?php echo $this->lang->line('bottom-dangky');?>"/>
						</form>
					</div>
					<div class="aside-col-2 border-right-2">
						<h3><span class="clr-1"><?php echo $luuy['before'];?></span><?php echo $luuy['after'];?>:</h3>
						<p>Chúng tôi sẽ gửi thông báo tới hòm thư mà bạn đăng ký. Vì vậy hãy nhập chính xác địa chỉ email vì quyền lợi của bạn. </p>
					</div>  
					<div class="aside-col-3 border-right-2">
						<dl class="adrss">
							<dd><span><?php echo $this->lang->line('bottom-dt1');?>:</span><strong>+1 800 559 6580</strong></dd>
							<dd><span><?php echo $this->lang->line('bottom-dt2');?>:</span><strong>+1 800 603 6035</strong></dd>
							<dd><span>Fax:</span><strong>+1 800 889 9898</strong></dd>
							<dd><span>E-mail:</span><a href="#" class="link"><strong>hr@niw.com.vn</strong></a></dd>
						</dl> 
						<p><strong>P1902-CT5B-Mễ Trì Thượng-Từ Liêm - Hà Nội</strong></p>
					</div>  
					<div class="aside-col-4">
						<div class="soc-icons">
							<a href="#"><img src="<?php echo base_url();?>assets/tuongnhat/images/icon-1.png" alt=""></a>
							<a href="#"><img src="<?php echo base_url();?>assets/tuongnhat/images/icon-2.png" alt=""></a>
							<a href="#"><img src="<?php echo base_url();?>assets/tuongnhat/images/icon-3.png" alt=""></a>
						</div>
					</div>  
				</div>
			</div>