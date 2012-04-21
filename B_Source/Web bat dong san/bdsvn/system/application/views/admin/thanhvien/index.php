 <div style="width: 78%;float: left;">
     <fieldset>
        <legend>Danh sách thành viên</legend>
        <table class="adminlist">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tên thành viên</th>
                    <th>Tên đăng nhập</th>
                    <th>Email</th>
                    <th>Nhóm</th>
                    <th>Chức năng</th>
                </tr>
            </thead>
            <?$k=1;
            foreach($list as $rs):
            $nhom = $this->thanhviens->getItemNhom($rs->id_group);
            ?>
            <tr class="row<?=$k?> record">
                <td><?=$rs->iduser?></td>
                <td><?=$rs->fullname?></td>
                <td><?=$rs->username?></td>
                <td><?=$rs->email?></td>
                <td><?=$nhom->tennhom?></td>
                <td align="center">

                <?=$this->icon_library->edit('thanhviens/capnhat/'.$rs->iduser)?>

                <?=$this->icon_library->del($rs->iduser)?>
                </td>
            </tr>
            <?
            $k=1-$k;
            endforeach;?>
           
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
                    <a class="toolbar"><span class="icon-32-save"></span>Lưu</a>
                </li>
                <li>
                    <a class="toolbar"><span class="icon-32-trash"></span>Xóa</a>
                </li>                 
                <li class="divider"></li>                
                <li>
                    <?=$this->icon_library->cancel('admin/cpanel')?> 
                </li>
                
            </ul>
        </div>
    </div>
   
 </div>
 </div>
<script type="text/javascript">
$(function() {
$(".delbutton").click(function(){
var element = $(this);
var del_id = element.attr("id");
var info =del_id;
    if(confirm("Bạn có chắc chắn muốn xóa thành viên này?"))
    {
        $.ajax({
        type: "POST",
        url: "<?=base_url()?>thanhviens/del/"+info,
        data: info,
        success: function(){
        }
        });    
        $(this).parents(".record").animate({ backgroundColor: "#fbc7c7" }, "fast")
        .animate({ opacity: "hide" }, "slow");

     }
    return false;
});
});
</script>