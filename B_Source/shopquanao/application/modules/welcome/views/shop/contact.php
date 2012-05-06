<div id="main-container col2-right-layout">
    <div id="omossleft">
        <div class="contentleft">
	<?php print displayStatus();?>
        <?php
        if ($this->session->flashdata('subscribe_msg')){
                echo "<div class='status_box'>";
                echo $this->session->flashdata('subscribe_msg');
                echo "</div>";
        }
        ?>
		<div class="page-title">
			<h1>Liên Hệ Với Chúng Tôi</h1>
		</div>
		 <?php echo form_open( $module."/message", array('class' => 'contactForm', 'id' => 'contactForm')); ?>
		    <div class="fieldset">
		        <h2 class="legend">Contact Information</h2>
		        <ul class="form-list">
		            <li class="fields">
		                <div class="field">
		                    <label class="required" for="name"><em>*</em>Name</label>
		                    <div class="input-box">
		                        <input type="text" class="input-text required-entry" name="name" id="name" value="<?php echo set_value('name'); ?>" maxlength="30" size="30"  />
		                    </div>
		                </div>
		                <div class="field">
		                    <label class="required" for="email"><em>*</em>Email</label>
		                    <div class="input-box">
		                        <input type="text" class="input-text required-entry" name="email" id="email" value="<?php echo set_value('email'); ?>" maxlength="30" size="30"  />
		                    </div>
		                </div>
		            </li>
		            <li class="wide">
		                <label class="required" for="comment"><em>*</em>Comment</label>
		                <div class="input-box">
		                    <?php 
			                          $data = array(
			                      'name'  => 'message',
			                      'id'    => 'message',
		                          'value' => set_value('message'),
			                      'rows'  => '15',
			                      'cols'  => '3',
			                      'style' => 'width:106%',
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
		    <div class="buttons-set">
		        <p class="required">* Required Fields</p>
		        <input type="text" style="display:none !important;" value="" id="hideit" name="hideit">
		        <button class="button" title="Submit" type="submit"><span><span>Submit</span></span></button>
		    </div>
		<?php echo form_close(); ?>
        </div>
    </div>
</div>
