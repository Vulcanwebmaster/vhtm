<div>
	<style type="text/css">
		.field{width:318px; clear:both}
		.fieldset{width:auto}
		#message{width:100%}
	</style>
	<?php print displayStatus();?>
        <?php
        if ($this->session->flashdata('subscribe_msg')){
                echo "<div class='status_box'>";
                echo $this->session->flashdata('subscribe_msg');
                echo "</div>";
        }
        ?>
		<div class="page-title">
			<h1 style="color:#c36f02">Liên hệ với chúng tôi</h1>
		</div>
<div id="main-container col2-right-layout" align="left" style="padding:0 130px">
    <div id="omossleft">
        <div class="contentleft">
	
		 <?php echo form_open( $module."/message", array('class' => 'contactForm', 'id' => 'contactForm')); ?>
		    <div class="fieldset">
		        <h2 class="legend" style="color:#c97201">Thông tin liên hệ</h2>
		        <ul class="form-list">
		            <li class="fields">
		                <div class="field">
		                    <label class="required" for="name"><em>*</em>Họ Tên</label>
		                    <div class="input-box">
		                        <input type="text" class="input-text required-entry" name="name" id="name" value="<?php echo set_value('name'); ?>" width="100%" size="30"  />
		                    </div>
		                </div>
		                <div class="field">
		                    <label class="required" for="email"><em>*</em>Email</label>
		                    <div class="input-box">
		                        <input type="text" class="input-text required-entry" name="email" id="email" value="<?php echo set_value('email'); ?>" width="318px" size="30"  />
		                    </div>
		                </div>
		            </li>
		            <li class="wide">
		                <label class="required" for="comment"><em>*</em>Thông điệp</label>
		                <div class="input-box">
		                    <?php 
			                          $data = array(
			                      'name'  => 'message',
			                      'id'    => 'message',
		                          'value' => set_value('message'),
			                      'rows'  => '15',
			                      'cols'  => '3',
			                      'style' => 'width:318px',
			                    );	
			
			                echo form_textarea($data);
			                ?>
		                </div>
		            </li>
		            <li class="fields">
		                <?php
			                    echo "<p>*".$this->lang->line('contact_captcha')."</p>";
			                    echo "<p>$cap_img</p>" ;
			                ?>
		            </li>
		        </ul>
		    </div>
		    <div align="center">
		    <div class="buttons-set">
		        <p class="required">* Các trường bắt buộc</p>
		        <input type="text" style="display:none !important;" value="" id="hideit" name="hideit">
		        <div align="center" style="padding-left:130px">
		        <button class="button" title="Submit" type="submit"><span><span>Gửi</span></span></button>
		        </div>
		    </div>
		    </div>
		<?php echo form_close(); ?>
        </div>
    </div>
</div>
</div>
