<?php
  $this->CI = get_instance();
  $this->CI->db->where('bat',1);
  $this->CI->db->where('parentid',2);
  $this->CI->db->order_by('sapxep','ASC');
  $query = $this->CI->db->get('nhadat_dm');
  $listnha = $query->result();
 
  $this->CI->db->where('bat',1);
  $this->CI->db->where('parentid',3);
  $this->CI->db->order_by('sapxep','ASC');
  $query = $this->CI->db->get('nhadat_dm');
  $listdat = $query->result();

  $this->CI->db->where('bat',1);
  $this->CI->db->where('parentid',1);
  $this->CI->db->order_by('sapxep','ASC');
  $query = $this->CI->db->get('nhadat_dm');
  $listbt = $query->result();
     
  $this->db->where('idquan',5);
  $query = $this->db->get('thanhpho');
  $thanhpho = $query->result();
?>
<div style="overflow: hidden;" id="bodyhead">
    <div style="width: 500px;float: left; padding-left: 5px;">
        <div class="bghomenav">
            <div class="menuf" style="padding-left: 110px;margin-top:5px">
                <ul>
                    <li <?if(($this->uri->segment(1)=='loaihinh' && $this->uri->segment(2)==1) || ($this->uri->segment(1)=='chi-tiet' && $this->uri->segment(2)=='Can-ban')){echo ' class="current"';}?>>
                        <a href="<?=base_url()?>loaihinh/1/can-ban.html">
                            <b>Cần bán</b>
                        </a>
                    </li>
                    <li <?if(($this->uri->segment(1)=='loaihinh' && $this->uri->segment(2)==2) || $this->uri->segment(1)=='chi-tiet' && $this->uri->segment(2)=='Can-mua'){echo ' class="current"';}?>>
                        <a href="<?=base_url()?>loaihinh/2/can-mua.html">
                            <b>Cần mua</b>
                        </a>
                    </li> 
                    <li <?if(($this->uri->segment(1)=='loaihinh' && $this->uri->segment(2)==3) || $this->uri->segment(1)=='chi-tiet' && $this->uri->segment(2)=='Can-thue'){echo ' class="current"';}?>>
                        <a href="<?=base_url()?>loaihinh/3/can-thue.html">
                            <b>Cần thuê</b>
                        </a>
                    </li>
                    <li style="border-right: 1px solid #e5e5e5" <?if(($this->uri->segment(1)=='loaihinh' && $this->uri->segment(2)==4) || ($this->uri->segment(1)=='chi-tiet' && $this->uri->segment(2)=='Cho-thue')){echo ' class="current"';}?>>
                        <a href="<?=base_url()?>loaihinh/4/cho-thue.html">
                            <b>Cho thuê</b>
                        </a>
                    </li>                                                           
                </ul>
            </div>
            <div class="homeitemcat">
                 <ul>
                 <li>
                     <ul>
                         <?if($this->uri->segment(1)=='loaihinh'){
                             $idloaihinh = (int)$this->uri->segment(2).'/';
                         }else{
                             $idloaihinh='0/';
                         }?>
                         <?foreach($listnha as $rs):?>
                            <li><?=anchor('loaihinh/'.$idloaihinh.$rs->iddm.'/'.$rs->url_danhmuc.duoi(),$rs->danhmuc)?></li>
                         <?endforeach;?>  
                     </ul>               
                 </li>
                 <li style="width: 180px;">
                     <ul>
                         <?if($this->uri->segment(1)=='loaihinh'){
                             $idloaihinh = (int)$this->uri->segment(2).'/';
                         }else{
                             $idloaihinh='0/';
                         }?>
                         <?foreach($listdat as $rs):?>
                            <li style="width: 180px;"><?=anchor('loaihinh/'.$idloaihinh.$rs->iddm.'/'.$rs->url_danhmuc.duoi(),$rs->danhmuc)?></li>
                         <?endforeach;?>  
                     </ul>               
                 </li>
                   <li>
                     <ul>
                         <?if($this->uri->segment(1)=='loaihinh'){
                             $idloaihinh = (int)$this->uri->segment(2).'/';
                         }else{
                             $idloaihinh='0/';
                         }?>
                         <?foreach($listbt as $rs):?>
                            <li><?=anchor('loaihinh/'.$idloaihinh.$rs->iddm.'/'.$rs->url_danhmuc.duoi(),$rs->danhmuc)?></li>
                         <?endforeach;?>  
                     </ul>               
                 </li>

                 </ul>
            </div>
        </div>
    </div>
    <div style="width: 460px;float: right; padding-right: 5px;">
    
<?
$this->CI->db->where('parentid <>',0);
$this->CI->db->order_by('danhmuc','ASC');
$query = $this->CI->db->get('nhadat_dm');
$listdm = $query->result();

$query = $this->CI->db->get('huong');
$listhuong = $query->result();

$this->CI->db->where('idquan',0);
$query = $this->CI->db->get('thanhpho');
$listtp = $query->result();
?>
       <div class="htimkiem">
          
       <div class="search"> 
       <?=form_open('nhadat/timkiem')?> 
             <table cellpadding="0">
                <tr>
                    <td>
                        <span class="slabel">Tìm loại tin : </span>
                    </td>
                    <td>
                         Trong danh mục: 
                    </td>
                </tr>
                <tr>
                    <td>
                        <select name="nhucau" id="nhucau" style="width: 150px;">
                            <option value="0">Tất cả</option>
                            <option value="1">Cần bán</option>
                            <option value="2">Cần mua</option>
                            <option value="2">Cần thuê</option>
                            <option value="2">Cho thuê</option>
                        </select>
                    </td>
                    <td>
                        <select name="sectionid" id="sectionid" style="width: 150px;">
                            <option value="0">Tất cả</option>
                            <?foreach($listdm as $rs):?>
                            <option value="<?=$rs->iddm?>"><?=$rs->danhmuc?></option>
                            <?endforeach;?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Mức giá từ :</td>
                    <td>Thuộc khu vực:</td>
                </tr>
                <tr>
                    <td>
                        <select name="giatu" id="giatu" style="width: 150px;">
                            <option value="0">Tất cả</option>
                            <option value="1000000"> &nbsp;&nbsp; 1 triệu</option>
                            <option value="5000000"> &nbsp;&nbsp; 5 triệu</option>
                            <option value="10000000"> &nbsp;10 triệu</option>
                            <option value="15000000"> &nbsp;15 triệu</option>
                            <option value="20000000"> &nbsp;20 triệu</option>
                            <option value="40000000"> &nbsp;40 triệu</option>
                            <option value="50000000"> &nbsp;50 triệu</option>
                            <option value="100000000">100 triệu</option>
                            <option value="200000000">200 triệu</option>
                            <option value="500000000">500 triệu</option>
                            <option value="1000000000"> &nbsp;1 tỷ</option>
                            <option value="2000000000"> &nbsp;2 tỷ</option>
                            <option value="3000000000"> &nbsp;3 tỷ</option>
                            <option value="4000000000"> &nbsp;4 tỷ</option>
                            <option value="5000000000"> &nbsp;5 tỷ</option>
                            <option value="6000000000"> &nbsp;6 tỷ</option>
                            <option value="7000000000"> &nbsp;7 tỷ</option>
                            <option value="8000000000"> &nbsp;8 tỷ</option>
                            <option value="9000000000"> &nbsp;9 tỷ</option>
                            <option value="10000000000">10 tỷ</option>
                            <option value="30000000000">30 tỷ</option>
                        </select>
                    </td>
                    <td>
                        <select name="id_thanhpho" id="id_thanhpho" style="width: 150px;">
                            <option value="0">Tất cả</option>
                            <?foreach($listtp as $rs):?>
                            <option value="<?=$rs->idthanhpho?>"><?=$rs->ten?></option>
                            <?endforeach;?>                            
                        </select>
                    </td>
                </tr> 
                <tr>
                    <td>Tới :</td>
                    <td>Hướng :</td>
                </tr>
                <tr>
                    <td>
                        <select name="giaden" id="giaden" style="width: 150px;">
                            <option value="0">Tất cả</option>
                            <option value="1000000"> &nbsp;&nbsp; 1 triệu</option>
                            <option value="5000000"> &nbsp;&nbsp; 5 triệu</option>
                            <option value="10000000"> &nbsp;10 triệu</option>
                            <option value="15000000"> &nbsp;15 triệu</option>
                            <option value="20000000"> &nbsp;20 triệu</option>
                            <option value="40000000"> &nbsp;40 triệu</option>
                            <option value="50000000"> &nbsp;50 triệu</option>
                            <option value="100000000">100 triệu</option>
                            <option value="200000000">200 triệu</option>
                            <option value="500000000">500 triệu</option>
                            <option value="1000000000"> &nbsp;1 tỷ</option>
                            <option value="2000000000"> &nbsp;2 tỷ</option>
                            <option value="3000000000"> &nbsp;3 tỷ</option>
                            <option value="4000000000"> &nbsp;4 tỷ</option>
                            <option value="5000000000"> &nbsp;5 tỷ</option>
                            <option value="6000000000"> &nbsp;6 tỷ</option>
                            <option value="7000000000"> &nbsp;7 tỷ</option>
                            <option value="8000000000"> &nbsp;8 tỷ</option>
                            <option value="9000000000"> &nbsp;9 tỷ</option>
                            <option value="10000000000">10 tỷ</option>
                            <option value="30000000000">30 tỷ</option>
                        </select>
                       
                    </td>
                    <td>
                        <select name="idhuong" style="width: 150px;">
                            <option value="0">Tất cả</option>
                            <?foreach($listhuong as $rs):?>
                            <option value="<?=$rs->idhuong?>"><?=$rs->tenhuong?></option>
                            <?endforeach;?>                            
                        </select>
                    </td>
                </tr> 
                <tr>
                    <td></td>
                    <td><input type="button" onclick="timkiem()" name="search" value="Tìm kiếm"></td>
                </tr>                                              
             </table>
             <?=form_close();?>
             </div>
           <div class="tp" style="font-size: 11px;">
                <div><b>ĐÀ NẴNG</b></div>
                <?foreach($thanhpho as $tp):?>
                    <div>
                        <?=anchor('khuvuc/'.$tp->idthanhpho.'/index.html',$tp->ten)?>
                    </div>
                <?endforeach;?>
           </div>             
       </div>

    </div>

</div>
<script type="text/javascript">
function timkiem()
{ 
    var nhucau=$("#nhucau").val();
    var sectionid=$("#sectionid").val();
    var giatu=$("#giatu").val();
    var giaden=$("#giaden").val();
    var id_thanhpho=$("#id_thanhpho").val();
    var idhuong=$("#idhuong").val();
    var page_no ='0';
    $.post("<?=base_url()?>nhadat/timkiem/",{'nhucau':nhucau,'sectionid':sectionid,'giatu':giatu,'giaden':giaden,'id_thanhpho':id_thanhpho,'idhuong':idhuong},function(data)
            {
                //if (data!='')
                $("#nhadat").html(data);
            }); 
}

</script>