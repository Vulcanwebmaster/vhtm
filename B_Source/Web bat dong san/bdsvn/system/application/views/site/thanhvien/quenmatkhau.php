<div style="padding: 0 200px;">
<fieldset>
    <legend>Quên mật khẩu</legend>
    <div>Lấy lại mật khẩu: Vui lòng nhập địa chỉ Email</div>
    <?=form_open('quenmatkhau.html')?>
    <div>
        Email của bạn: <input type="text" name="email" value="<?=set_value('email')?>"><input type="submit" name="submit" value="Gửi yêu cầu">
    </div>
    <div><?=form_error('email')?></div>
    <?=form_close()?>
</fieldset> 
</div> 
