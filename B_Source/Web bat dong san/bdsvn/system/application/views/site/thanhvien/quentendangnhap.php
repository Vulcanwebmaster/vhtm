<div style="padding: 0 200px;">
<fieldset>
    <legend>Quên tên đăng nhập</legend>
        <div>Lấy lại tên đăng nhập: Vui lòng nhập địa chỉ Email của bạn</div>
        <?=form_open('quentendangnhap.html')?>
        <div>
            Email của bạn: <input type="text" name="email" value="<?=set_value('email')?>"><input type="submit" name="submit" value="Gửi yêu cầu">
        </div>
        <div><?=form_error('email')?></div>
    <?=form_close()?>
</fieldset>
</div>