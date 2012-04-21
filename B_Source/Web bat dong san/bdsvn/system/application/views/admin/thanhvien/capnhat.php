<?=form_open('thanhviens/capnhat/'.$this->uri->segment('3'))?>
 <div style="width: 78%;float: left;">
     <fieldset>
        <legend>Cập nhật thành viên</legend>
        <table class="adminform">
            <tr>
                <td class="key" width="200">Họ và tên</td>
                <td><input type="text" name="fullname" value="<?=$rs->fullname?>"></td>
            </tr>
            <tr>
                <td class="key" width="200">Email:</td>
                <td><input type="text" name="email" value="<?=$rs->email?>"></td>
            </tr>            
            <tr>
                <td class="key">Tên đăng nhập</td>
                <td><input type="text" name="username" value="<?=$rs->username?>"></td>
            </tr> 
            <tr>
                <td class="key">Mật khẩu</td>
                <td><input type="text" name="password" value=""></td>
            </tr>     
            <tr>
                <td class="key">Mật khẩu nhập lại</td>
                <td><input type="text" name="password_re" value=""></td>
            </tr>
            <tr>
                <td class="key">Nhóm</td>
                <td>
                    <select name="id_group" multiple="multiple">
                        <?foreach($list as $rs1):?>
                        <option value="<?=$rs1->manhom?>" <?if($rs->id_group == $rs1->manhom){echo 'selected="selected"';}?>><?=$rs1->tennhom?></option>
                        <?endforeach;?>
                    </select>
                </td>
            </tr>                                          
        </table>
     </fieldset>
 </div>
 
 <div style="width: 21%;float: right;">
 <div class="toolbar_box">
    <div class="t">
        <div class="t">
            <div class="t"></div>
        </div>
    </div>
    <div class="m">
        <div class="toolbar-list">
            <ul>
                <li>
                    <?=$this->icon_library->add('thanhviens/themmoi')?>
                </li>
                <li>
                    <?=$this->icon_library->save()?>
                </li>
                <li>
                    <?=$this->icon_library->delete('thanhviens/xoa/'.$this->uri->segment('3'))?> 
                </li>                 
                <li class="divider"></li>                
                <li>
                    <?=$this->icon_library->cancel('thanhviens')?> 
                </li>
                
            </ul>
        </div>
    </div>
   
 </div>
 </div>
 <?=form_close()?>