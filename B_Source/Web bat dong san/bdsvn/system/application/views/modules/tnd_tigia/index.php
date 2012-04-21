<script type="text/javascript" language="JavaScript" src="http://vnexpress.net/Service/Gold_Content.js"></script>
<script type="text/javascript" language="JavaScript" src="http://vnexpress.net/Service/Forex_Content.js"></script>
<script language="javascript" type="text/javascript">
                    function gmobj(o){
                     if(document.getElementById){ m=document.getElementById(o); }
                     else if(document.all){ m=document.all[o]; }
                     else if(document.layers){ m=document[o]; }
                     return m;
                    } 
                    function ShowGoldPrice(){
                        var sHTML = '';
                        sHTML = sHTML.concat('');
                        if(vGoldSbjBuy=='{0}' || vGoldSbjSell=='{1}' || vGoldSjcBuy =='{2}' || vGoldSjcSell=='{3}'){
                            sHTML = sHTML.concat('<table border="1" bordercolor="#ccc" style="border-collapse:collapse" cellpadding="3" cellspacing="1" class="tbl-goldprice">');
                            sHTML = sHTML.concat('    <tr>');    
                            sHTML = sHTML.concat('        <td class="td-weather-title" style="text-align:center;font-size:10px;width:35%;font-weight:bold">D&#7919; li&#7879;u &#273;ang &#273;&#432;&#7907;c c&#7853;p nh&#7853;t</td>');    
                            sHTML = sHTML.concat('    </tr>');
                            sHTML = sHTML.concat('</table>');
                        }
                        else{    
                            sHTML = sHTML.concat('<table border="1" bordercolor="#ccc" style="border-collapse:collapse" cellpadding="3" cellspacing="1" class="tbl-goldprice">');
                            sHTML = sHTML.concat('    <tr>');
                            sHTML = sHTML.concat('        <td class="td-weather-title" style="font-size:10px;width:30%;">Lo&#7841;i</td>');
                            sHTML = sHTML.concat('        <td class="td-weather-title" style="text-align:center;font-size:10px;width:35%;">Mua</td>');
                            sHTML = sHTML.concat('        <td class="td-weather-title" style="text-align:center;font-size:10px;width:35%;">B&#225;n</td>');
                            sHTML = sHTML.concat('    </tr>');
                            sHTML = sHTML.concat('    <tr>');
                            sHTML = sHTML.concat('        <td class="td-weather-title">SBJ</td>');
                            sHTML = sHTML.concat('        <td class="td-weather-data txtr">').concat(vGoldSbjBuy).concat('</td>');
                            sHTML = sHTML.concat('        <td class="td-weather-data txtr">').concat(vGoldSbjSell).concat('</td>');
                            sHTML = sHTML.concat('    </tr>');
                            sHTML = sHTML.concat('    <tr>');
                            sHTML = sHTML.concat('        <td class="td-weather-title">SJC</td>');
                            sHTML = sHTML.concat('        <td class="td-weather-data txtr">').concat(vGoldSjcBuy).concat('</td>');
                            sHTML = sHTML.concat('        <td class="td-weather-data txtr">').concat(vGoldSjcSell).concat('</td>');
                            sHTML = sHTML.concat('    </tr>');
                            sHTML = sHTML.concat('</table>');    
                        }
                        gmobj('eGold').innerHTML = sHTML;
                    }
                    
                    function ShowForexRate(){
                        var sHTML = '';
                        sHTML = sHTML.concat('<table border="1" bordercolor="#ccc" style="border-collapse:collapse;width:100%" cellpadding="3" cellspacing="1" class="tbl-weather">');
                        for(var i=0;i<vForexs.length;i++){
                            sHTML = sHTML.concat('    <tr>');
                            sHTML = sHTML.concat('        <td class="td-weather-title">').concat(vForexs[i]).concat('</td>');
                            sHTML = sHTML.concat('        <td class="td-weather-data txtr">').concat(vCosts[i]).concat('</td>');
                            sHTML = sHTML.concat('    </tr>');
                        }
                        sHTML = sHTML.concat('</table>');
                        gmobj('eForex').innerHTML = sHTML;
                    }    
                    
                </script>


<table width="100%">
    <tr>
        <td style="width: 50%;text-align: left;">
        <div><img src="<?=base_url()?>skins/giavang.jpg" alt="Giá vàng"><b> Giá vàng</b></div>
        <div id="eGold"></div>
        </td>
        <td style="width: 50%;text-align: left;">
            <div style=""><img src="<?=base_url()?>skins/tigia.jpg" style="height: 16px;" alt="Tỉ giá"><b> Tỉ giá</b></div>
            <div class="stygia"><div id="eForex"></div> </div>
        </td>
    </tr>


</table> 
<script language="javascript" type="text/javascript">ShowGoldPrice();ShowForexRate()</script>
