<?php 
include "simplehtmldom/simple_html_dom.php"; 
function LuuTinVaoDB($tin, $url, $source){ 
    $tieude = trim(mysql_real_escape_string(strip_tags($tin['tieude']))); 
    $tomtat = trim(mysql_real_escape_string(strip_tags($tin['tomtat']))); 
    $content = trim(mysql_real_escape_string($tin['content'])); 

$sql = "SELECT id from n_tintuc where urlGoc='{$url}'"; 
    $rs = mysql_query($sql) or die (mysql_error()); 
    if (mysql_num_rows($rs) >0 ) return false; 

    $sql="INSERT INTO n_tintuc (tieude, noidung, urlGoc, source, ngay) 
        VALUES ('$tieude', '$content', '$url', '$source', Now())"; 
    mysql_query($sql) or die (mysql_error()); 
    return true; 
} 

function Dantri_TrangChu($url) { 
    $linkarray=array(); 
    $html = file_get_html($url); 
    foreach ($html->find("a.fon44") as $link){             
        if ($link->href==NULL)  continue; 
        if ($link->plaintext==NULL) continue; 
        $text=str_replace("&nbsp;"," ",$link->plaintext); 
        $text=trim($text);         
        if ($text=="") continue; 
        if (substr($link->href,0,1)=="/") $link->href=$url. $link->href; 
        if (in_array($link->href,$linkarray)==false) $linkarray[$text]=$link->href; 
    } 
    foreach ($html->find(".fon6") as $link){             
        if ($link->href==NULL)  continue; 
        if ($link->plaintext==NULL) continue; 
        $text=str_replace("&nbsp;"," ",$link->plaintext); 
        $text=trim($text);         
        if ($text=="") continue; 
        if (substr($link->href,0,1)=="/") $link->href=$url. $link->href; 
        if (in_array($link->href,$linkarray)==false) $linkarray[$text]=$link->href; 
    } 
     
     
       
    $html->clear(); 
    unset($html); 
    return $linkarray; 
} 
function Dantri_Lay1Tin($urlwebsite,$url) {
	$url = str_replace('suc-manh-so.htm','', $url);
    $html = file_get_html($url); 
	
	
    $tin = array(); 
    $td = $html->find('.fon31',0); 
    $tin['tieude']=$td->innertext; 
    $td->outertext=''; 
    $tt = $html->find('.fon33',0); 
    $tin['tomtat']=$tt->innertext; 
    $tt->outertext = ''; 
    $content = $html->find('div.fon34',0);         
     
    foreach( $content->find('img') as $img) {         
        if (substr($img->src,0,1) == "/")  
        $img->src = $urlwebsite.$img->src; 
    } 
    $tin['content'] = $content->innertext; 
    $html->clear(); 
    unset($html); 
    return $tin; 
} 
?>