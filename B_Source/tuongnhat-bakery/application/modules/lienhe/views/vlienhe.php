<script type="text/javascript">
	$(document).ready(function(){
		$('.menu-item a').removeClass('active');
		$('#lienhe-menu a').addClass('active');
	});
</script>

<div class="breadcrumb">
	<a href="<?php echo base_url();?>"><?php echo $this->lang->line('menu-trangchu');?></a>
	&rsaquo; <?php echo $this->lang->line('menu-lienhe');?>
</div>
<?php  if ($this->session->userdata('message')!='')
{
	echo '<div id="message" style="margin-bottom:15px; background-color: #c1dde7; padding: 15px 10px; border: solid 1px #3eaed8; line-height: 15px;">';
	echo $this->session->userdata('message');
	echo '</div>';
	
	$this->session->unset_userdata('message');
}?>
<?php 
	if (validation_errors())
	{
		echo '<div id="error-panel" style="margin-bottom:15px; background-color: #FFEBE8; padding: 15px 10px; border: solid 1px #DD3C10; line-height: 15px;">';
		echo validation_errors('<p style="margin-bottom:5px">','</p>');
		echo '</div>';
	}
?>
<a name="top"></a>
    <div id="node-5992" class="node webform">
        <h1><?php echo $this->lang->line('form_lien_he');?></h1>
        <form action="<?php echo base_url();?>lienhe/send" accept-charset="UTF-8"
        method="post" id="webform-client-form-5992" class="webform-client-form" enctype="multipart/form-data">
        <div>
            <div class="webform-component webform-component-textfield" id="webform-component-vorname-name">
                <div class="form-item" id="edit-submitted-vorname-name-wrapper">
                    <label for="edit-submitted-vorname-name">
                        <?php echo $this->lang->line('lienhe_hoten');?>: <span class="form-required" title="This field is required.">*</span></label>
                    <input type="text" maxlength="128" name="hoten" id="edit-submitted-vorname-name"
                        size="60" value="" class="form-text required" />
                </div>
            </div>
            <div class="webform-component webform-component-textfield" id="webform-component-firma">
                <div class="form-item" id="edit-submitted-firma-wrapper">
                    <label for="edit-submitted-firma">
                        <?php echo $this->lang->line('lienhe_congty');?>: <span class="form-required" title="This field is required.">*</span></label>
                    <input type="text" maxlength="128" name="congty" id="edit-submitted-firma"
                        size="60" value="" class="form-text required" />
                </div>
            </div>
            <div class="webform-component webform-component-textfield" id="webform-component-kundennummer">
                <div class="form-item" id="edit-submitted-kundennummer-wrapper">
                    <label for="edit-submitted-kundennummer">
                        <?php echo $this->lang->line('lienhe_makhachhang');?>:
                    </label>
                    <input type="text" maxlength="128" name="makhachhang" id="edit-submitted-kundennummer"
                        size="60" value="" class="form-text" />
                </div>
            </div>
            <div class="webform-component webform-component-textfield" id="webform-component-strasse-hausnr">
                <div class="form-item" id="edit-submitted-strasse-hausnr-wrapper">
                    <label for="edit-submitted-strasse-hausnr">
                        <?php echo $this->lang->line('lienhe_pho');?>:
                    </label>
                    <input type="text" maxlength="128" name="pho" id="edit-submitted-strasse-hausnr"
                        size="60" value="" class="form-text" />
                </div>
            </div>
            <div class="webform-component webform-component-textfield" id="webform-component-plz-ort">
                <div class="form-item" id="edit-submitted-plz-ort-wrapper">
                    <label for="edit-submitted-plz-ort">
                        <?php echo $this->lang->line('lienhe_thanhpho');?>:
                    </label>
                    <input type="text" maxlength="128" name="thanhpho" id="edit-submitted-plz-ort"
                        size="60" value="" class="form-text" />
                </div>
            </div>
            <div class="webform-component webform-component-email" id="webform-component-e-mail">
                <div class="form-item" id="edit-submitted-e-mail-wrapper">
                    <label for="edit-submitted-e-mail">
                        <?php echo $this->lang->line('lienhe_email');?>:
                    </label>
                    <input class="form-text form-email email" type="email" id="edit-submitted-e-mail"
                        name="email" size="60" />
                </div>
            </div>
            <div class="webform-component webform-component-textfield" id="webform-component-telefon">
                <div class="form-item" id="edit-submitted-telefon-wrapper">
                    <label for="edit-submitted-telefon">
                        <?php echo $this->lang->line('lienhe_dt');?>: <span class="form-required" title="This field is required.">*</span></label>
                    <input type="text" maxlength="128" name="dt" id="edit-submitted-telefon"
                        size="60" value="" class="form-text required" />
                </div>
            </div>
            
            <div class="webform-component webform-component-textarea" id="webform-component-ihre-frage">
                <div class="form-item" id="edit-submitted-ihre-frage-wrapper">
                    <label for="edit-submitted-ihre-frage">
                        <?php echo $this->lang->line('lienhe_cauhoi');?>:
                    </label>
                    <textarea cols="60" rows="5" name="cauhoi" id="edit-submitted-ihre-frage"
                        class="form-textarea resizable"></textarea>
                </div>
            </div>
            <input type="hidden" name="details[sid]" id="edit-details-sid" value="" />
            <input type="hidden" name="details[page_num]" id="edit-details-page-num" value="1" />
            <input type="hidden" name="details[page_count]" id="edit-details-page-count" value="1" />
            <input type="hidden" name="details[finished]" id="edit-details-finished" value="0" />
            <input type="hidden" name="form_build_id" id="form-6ea70898253521a7e2ce35beb0a8c719"
                value="form-6ea70898253521a7e2ce35beb0a8c719" />
            <input type="hidden" name="form_id" id="edit-webform-client-form-5992" value="webform_client_form_5992" />
            <div id="edit-actions" class="form-actions form-wrapper">
                <div class="captcha">
                    <input type="hidden" name="captcha_sid" id="edit-captcha-sid" value="13938" />
                    <input type="hidden" name="captcha_token" id="edit-captcha-token" value="609bc65de044f1c17ce687cbc23dcef2" />
                    <?php echo $this->lang->line('lienhe_ma');?>: <span class="form-required" title="This field is required.">
                                    *</span></label>
                    <?php echo $captcha;?>
                    
                </div>
                <input type="submit" name="op" id="edit-submit" value="<?php echo $this->lang->line('lienhe_submit');?>" class="form-submit" />
            </div>
        </div>
        </form>
    </div>