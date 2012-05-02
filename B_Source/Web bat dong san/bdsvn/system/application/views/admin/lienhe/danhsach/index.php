 <div style="width: 78%;float: left;">
     <fieldset>
        <legend>Danh sách liên hệ hỏi đáp</legend>
        <table class="adminlist">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Họ và tên</th>
                    <th>Email</th>
                    <th>Ngày gửi</th>
                    <th>Nội dung</th>
                    <th>Xóa</th>
                </tr>
            </thead>
            <?$k=1;
            foreach($list as $rs):
            $nhom =$this->lienhe->getItemNhom($rs->idnhom);
            ?>
            <tr class="row<?=$k?> record">
                <td width="30"><?=$rs->idlienhe?></td>
                <td><?=$rs->hovaten?></td>
                <td width="90px">
                <?=$rs->email?>   
                </td>
                <td><?=$rs->ngay?></td>

                <td align="left">

                <?=$rs->noidung?>
                </td>
                <td>
                <?=$this->icon_library->del($rs->idlienhe)?>
                </td>
            </tr>
            <?
            $k=1-$k;
            endforeach;?>
           
        </table>
        <div><?=$pagination?></div>
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
    if(confirm("Bạn có chắc chắn muốn xóa câu hỏi này?"))
    {
        $.ajax({
        type: "POST",
        url: "<?=base_url()?>lienhe/xoalienhe/"+info,
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