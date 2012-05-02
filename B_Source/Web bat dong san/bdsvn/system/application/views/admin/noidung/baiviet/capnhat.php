<?=form_open('noidung/capnhatbaiviet/'.$this->uri->segment('3').'/'.$this->uri->segment('4'),array('name'=>'adminform'))?>
 <div style="width: 60%;float: left;">
     <fieldset>
        <legend>Cập nhật bài viết</legend>
        <table class="adminform">
            <tr>
                <td class="key" width="150">Tiêu đề</td>
                <td><input type="text" name="tieude" value="<?=$rs->tieude?>" style="width: 300px;"><?=form_error('tieude')?></td>
                <td rowspan="5">
                    <?if($rs->hinhanh!=''){
                    ?>
                    	<img src="<?=base_url().$rs->hinhanh?>" alt="" style="height: 150px;">
                    <?
                    }?>
                </td>
            </tr>
            <tr>
                <td class="key" >Alias:</td>
                <td><input type="text" name="alias" value="<?=$rs->alias?>" style="width: 300px;"></td> 
            </tr> 
            <tr>
                <td class="key">Chuyên mục</td>
                <td>
                    <select name="chuyenmuc" style="font-size: 11px;">
                        <option value="0-0">Không có chuyên mục</option>
                        <?foreach($list as $cm):
                        $item = $this->noidung->getListDanhmuc($cm->id);
                        ?>
                        <option value="<?=$cm->id?>-0" <?if($rs->idcat == $cm->id && $rs->idsub==0){echo 'selected="selected"';}?>><?=$cm->ten?></option>
                        <?foreach($item as $sub):?>
                        <option value="<?=$cm->id?>-<?=$sub->id?>" <?if($rs->idcat == $cm->id && $rs->idsub==$sub->id){echo 'selected="selected"';}?>> - -<?=$sub->ten?></option>
                        <?endforeach;?>
                        <?endforeach;?>
                    </select>
                </td> 
            </tr> 
                                  
            <tr>
                <td class="key">Bật | tắt</td>
                <td>
                    <select name="bat">
                        <option value="1" <?if($rs->bat==1){echo 'selected="selected"';}?>>Bật</option>
                        <option value="0"  <?if($rs->bat==0){echo 'selected="selected"';}?>>Tắt</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td class="key">Hình ảnh</td>
                <td><input type="text" name="hinhanh" value="<?=$rs->hinhanh?>"> <a class="addfile" href="<?=base_url()?>quanlyfile/themanh/hinhanh">Thêm ảnh</a></td>   
            </tr> 
            <tr>
                <td class="key">Lựu chọn</td>
                <td>

                      <input type="checkbox" value="1" name="tindacbiet" <?if($rs->tindacbiet==1){echo 'checked="checked"';}?>>Tin nổi bật

                      
                </td>
            </tr>                          
            <tr>
                <td colspan="3">Nội dung ngắn
                
                    <textarea cols="" rows="" style="width: 99%;height: 100px;" name="noidungngan"><?=$rs->noidungngan?></textarea>
                </td>
                
            </tr>     
            <tr>
                <td colspan="3">Nội dung
                
                     <?=$this->editor_library->editor_simply('noidung',$rs->noidung,'')?> 
                </td>
                
            </tr>
                                                      
        </table>
     </fieldset>
 </div> 

 
 <div style="width: 39%;float: right;">
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
                    <?=$this->icon_library->add('noidung/themtheloai')?>
                </li>
                <li>
                    <?=$this->icon_library->save()?>
                </li>
                <li>
                    <a class="toolbar"><span class="icon-32-trash"></span>Xóa</a>
                </li>                 
                <li class="divider"></li>                
                <li>
                    <?=$this->icon_library->cancel('noidung/baiviet')?> 
                </li>
                
            </ul>
        </div>
    </div>
   
 </div>
    <table>
        <tr>
            <td>Miêu tả:</td>
            <td><textarea cols="" rows="" name="mieuta" style="width: 200px;height: 50px;"><?=$rs->mieuta?></textarea></td>
        </tr>
        <tr>
            <td>Từ khóa:</td>
            <td><textarea cols="" rows="" name="tukhoa" style="width: 200px;height: 50px;"><?=$rs->tukhoa?></textarea></td>
        </tr>        
   </table>
   <?$op = explode(',',$rs->option);
   $hienthi = explode('=',$op[0]);   
   $lienquan = explode('=',$op[1]);
   $luotxem= explode('=',$op[2]);
   $ngaydang = explode('=',$op[3]);
   ?>
   <table>
    <tr>
        <td>Hiển thị nội dung ngắn:</td>
        <td>
            
            <select name="hienthi">
                <option value="1" <?if($hienthi[1]=='1'){echo 'selected="selected"';}?>>Hiển thị</option>
                <option value="0" <?if($hienthi[1]==0){echo 'selected="selected"';}?>>Ẩn</option>
            </select>
        </td>
    </tr>
    <tr>
        <td>Hiển thị bài viết liên quan:</td>
        <td>
            <select name="lienquan">
                <option value="1" <?if($lienquan[1]=='1'){echo 'selected="selected"';}?>>Hiển thị</option>
                <option value="0" <?if($lienquan[1]=='0'){echo 'selected="selected"';}?>>Ẩn</option>
            </select>
        </td>
    </tr>  
    <tr>
        <td>Hiển thị lượt xem:</td>
        <td>
            <select name="luotxem">
                <option value="1" <?if($luotxem[1]=='1'){echo 'selected="selected"';}?>>Hiển thị</option>
                <option value="0" <?if($luotxem[1]=='0'){echo 'selected="selected"';}?>>Ẩn</option>
            </select>
        </td>
    </tr>
    <tr>
        <td>Hiển thị ngày đăng:</td>
        <td>
            <select name="ngaydang">
                <option value="1" <?if($ngaydang[1]=='1'){echo 'selected="selected"';}?>>Hiển thị</option>
                <option value="0"  <?if($ngaydang[1]=='0'){echo 'selected="selected"';}?>>Ẩn</option>
            </select>
        </td>
    </tr>           
   </table>   
 </div>
 <?=form_close()?>
<script type="text/javascript">
$('.addfile').popupWindow({
height:600,
width:500,
top:50,
left:50
});
</script>
