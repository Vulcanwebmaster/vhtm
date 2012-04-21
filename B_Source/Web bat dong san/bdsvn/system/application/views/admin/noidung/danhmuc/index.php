 <div style="width: 78%;float: left;">
     <fieldset>
        <legend>Quản lý danh mục</legend>
        <table class="adminlist">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tiêu đề</th>
                    <th>Thể loại</th>
                    <th>Săp xếp</th>
                    <th>Chức năng</th>
                </tr>
            </thead>
            <?$k=1;
            foreach($danhmuc as $rs):
            
            ?>
            <tr class="row<?=$k?> record">
                <td width="30"><?=$rs->id?></td>
                <td><?=$rs->ten?></td>
                <td><?=$this->noidung->getITheloai($rs->parentid)?></td> 
                <td width="70"><?=$rs->sapxep?></td>
                
                <td align="center">

                <?=$this->icon_library->edit('noidung/capnhatdanhmuc/'.$rs->id)?>
                <?=$this->icon_library->publish('noidung/batdanhmuc/'.$rs->id.'/'.$rs->bat,$rs->bat)?>
                <?=$this->icon_library->del($rs->id)?>
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
                    <?=$this->icon_library->add('noidung/themdanhmuc')?>
                </li>
                <li>
                    <a class="toolbar"><span class="icon-32-save"></span>Lưu</a>
                </li>
                <li>
                    <a class="toolbar"><span class="icon-32-trash"></span>Xóa</a>
                </li>                 
                <li class="divider"></li>                
                <li>
                    <?=$this->icon_library->cancel('admin/quantri')?> 
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
    if(confirm("Bạn có chắc chắn muốn xóa danh mục này?"))
    {
        $.ajax({
        type: "POST",
        url: "<?=base_url()?>noidung/xoatheloai/"+info,
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