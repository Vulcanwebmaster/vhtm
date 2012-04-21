<link rel="stylesheet" type="text/css" href="<?=base_url()?>system/application/views/theme/site/<?=$this->site_library->get_default_template()?>/css/lienhe.css">
<div class="contact_site">Liên hệ</div>
<div class="contact_title"><?=$rs->tenlienhe?></div>
<div class="contact">
    <span>Địa chỉ:</span> <?=$rs->diachi?>
</div> 

<div class="contact">
    <span>Email:</span> <?=$rs->email?>
</div>
<div class="contact">
    <span>Điện thoại:</span> <?=$rs->dienthoai?>
</div>
<div class="contact">
    <span>Đi động:</span> <?=$rs->didong?>
</div>
<div class="contact">
    <span>Fax:</span> <?=$rs->fax?>
</div>
<div class="contact_site">Nội dung liên hệ</div>
<?=form_open('lienhe.html')?>
<div class="contact">
    <span>Họ tên:</span><input type="text" name="hovaten" value="<?=set_value('hovaten')?>" style="width: 200px;">
    <?=form_error('hovaten')?>
</div>
<div class="contact">
    <span>Địa chỉ:</span><input type="text" name="diachi" value="<?=set_value('diachi')?>" style="width: 200px;">
</div>
<div class="contact">
    <span>Điện thoại:</span><input type="text" name="dienthoai" value="<?=set_value('dienthoai')?>" style="width: 200px;">
    <?=form_error('dienthoai')?> 
</div>
<div class="contact">
    <span>Email:</span><input type="text" name="email" value="<?=set_value('email')?>" style="width: 200px;">
    <?=form_error('email')?> 
</div>
<div class="contact"><span>Nội dung:</span></div>
<div>
    <textarea cols="" rows="" name="noidung" style="height: 150px; width: 500px;"><?=set_value('noidung')?></textarea>
    <?=form_error('noidung')?>  
</div>
<div class="contact" style="padding-left: 200px;"><input type="submit" name="submit" value="Gửi liên hệ"></div>
<?=form_close()?>  