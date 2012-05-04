
<!--<div id="leftbox"><!--Start of leftbox 1
    <h2>Categories</h2>
<?php
//    if(count($this->data['navlist'])){// in order to prevent an error after installtion
//        echo "\n<ul id='catnav'>";
//    foreach ($this->data['navlist'] as $key => $menu){
//            echo "\n<li class='menuone'>\n";
//            echo anchor ($this->data['mainmodule']."/cat/".$key, $menu);
//            echo "\n</li>\n";
//    }
//    echo "\n</ul>\n";
//    }
//
?>
</div>
-->
<div id="left-column">
            <div id="menu">
                <div style="padding-top:20px; padding-left:40px">
                    <div class="menuitem">
                        <img alt="" src="<?php echo base_url()?>assets/images/house-icon.png" style="float:left"/>
                        <a href="<?php echo site_url()?>" style="float:left; margin-left:-20px">Home</a>
                    </div>
                    <div class="menuitem">
                        <a>Service news</a>
                    </div>
                    <div class="menuitem"><a href="<?php  echo base_url()?>index.php/welcome/servicefees">Service Fees</a></div>
                    <div class="menuitem"><a href="<?php  echo base_url()?>index.php/welcome/exchangers">Buy/Sell LR</a></div>
                    <div class="menuitem"><a href="<?php  echo base_url()?>index.php/welcome/merchants">Merchants</a></div>
                    <div class="menuitem"><a href="<?php  echo base_url()?>index.php/welcome/download">Downloads</a></div>
                    <div class="menuitem"><a href="<?php  echo base_url()?>index.php/welcome/consummeralert">Consummer Alert</a></div>
                </div>
            </div>
           <div id="support">
                <div id="head-support" style="height:30px"></div>
                <div style="border-left:solid 1px #9d9d9d; border-right:solid 1px #9d9d9d; border-bottom:solid 1px #9d9d9d">
	                <div style="padding-top:15px" align="center">
	                    <img src="<?php echo base_url()?>assets/images/support-logo.jpg" alt="" />
	                </div>
	                <div id="support-information">
	                    <div style="margin-bottom:0px">
	                    <!--                         
	                            <span style="float:left">Y! online support 1:</span>
	                            <img style="float:left;" src="<?php echo base_url()?>assets/images/online.png" alt="" />
						-->
						<!-- Author: tienlx -->
								<span style="float:left">Y! online support 1:</span>
								<a href="ymsgr:sendim?mr_superan">
	                            	<img style="float:left;" src="http://opi.yahoo.com/online?u=mr_superan&amp;m=g&amp;t=2&amp;l=us" width="70" height="20" alt="" />
	                            </a>
						<!-- End Author: tienlx -->
	                    </div>
	                    
	                    <div style="clear:both; margin-top:0px; margin-bottom:0px">
	                    <!--                         
	                            <span style="float:left">Y! online support 2:</span>
	                            <img style="float:left;" src="<?php echo base_url()?>assets/images/offline.png" alt="" />
						-->                        
						<!-- Author: tienlx -->
								<span style="float:left">Y! online support 2:</span>
								<a href="ymsgr:sendim?omega_weapon_0311">
	                            	<img style="float:left;" src="http://opi.yahoo.com/online?u=omega_weapon_0311&amp;m=g&amp;t=2&amp;l=us" width="70" height="20" alt="" />
	                            </a>
						<!-- End Author: tienlx -->
						</div>
	                    <div style="clear:both;margin-top:-15px; height:33px">
	                        <span style="margin-top:0px; float:left">icq support</span>
	                        <img alt="" src="<?php echo base_url()?>assets/images/green-flower.png" style=" float:left; margin-top:0px" />
	                        <span style="float:left">:  19900081</span>
	                    </div>
	                </div>
                </div>
            </div>
        
            
                 
    <!--
		E-currency reserve by An
     -->
     
 <script type="text/javascript">
self.setInterval("time()",1000);
function time()
{
	var xmlHttp;
	try
	  {
	  // Firefox, Opera 8.0+, Safari
	  xmlHttp=new XMLHttpRequest();	  
	  }
	catch (e)
	  {
	  // Internet Explorer
	  try
	    {
	    xmlHttp=new ActiveXObject("Msxml2.XMLHTTP");
	    }
	  catch (e)
	    {
	    try
	      {
	      xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
	      }
	    catch (e)
	      {
	      alert("Your browser does not support AJAX!");
	      return false;
	      }
	    }
	  }//kiem tra brower
  
	xmlHttp.onreadystatechange=function()
    {
    	if(xmlHttp.readyState==4)
      	{
    		success(xmlHttp.responseText);
      	}
    }	
	xmlHttp.open("POST","<?php echo base_url()?>application/views/admin/ajax.php",true);
	xmlHttp.send();
}

function success(response)
{
	var result=response;
	var mang=result.split("&");
	document.getElementById("a").innerHTML = "Lyberty Reserve (USD):  $"+mang[1];
	document.getElementById("b").innerHTML = "Western Union (USD):   $"+mang[2];
	return true;
}
self.setInterval("time()",3000);
</script> 
            
            <div id="istock"> 
            <div> </div>               
                <div id="reserved_box" style="margin-top:30px">
                    <img alt="" src="<?php echo base_url()?>assets/images/Liberty Reserve.jpg" style="margin-top:10px; width:80px"/>
                    <span id ="a" style="font-size:12px;line-height:20px"></span>
                <br>
                    <img alt="" src="<?php echo base_url()?>assets/images/wu.jpg" style="margin-top:3px; width:80px"/>
                    <span id ="b" style="font-size:12px;line-height:20px"></span>
                </div>
            </div>
            
       <!--
		End by An
     -->
     
          
            
            
            <div id="lastest-exchange">
                <div style="height:35px"></div>
                <table>
                    <tr style="font-weight:bold">
                        <td>Date</td>
                        <td>Action</td>
                        <td>User</td>
                        <td>Amount</td>
                    </tr>
                    <tr class="hangle">
                        <td>11/09/2011</td>
                        <td>Wu <span>To</span> LR(USD)</td>
                        <td>UCE**</td>
                        <td><span>$500,00</span></td>
                    </tr>                    
                    <tr>
                        <td>11/09/2011</td>
                        <td>Wu <span>To</span> LR(USD)</td>
                        <td>UCE**</td>
                        <td><span>$500,00</span></td>
                    </tr>
                    <tr class="hangle">
                        <td>11/09/2011</td>
                        <td>Wu <span>To</span> LR(USD)</td>
                        <td>UCE**</td>
                        <td><span>$500,00</span></td>
                    </tr>
                    <tr>
                        <td>11/09/2011</td>
                        <td>Wu <span>To</span> LR(USD)</td>
                        <td>UCE**</td>
                        <td><span>$500,00</span></td>
                    </tr>
                    <tr class="hangle">
                        <td>11/09/2011</td>
                        <td>Wu <span>To</span> LR(USD)</td>
                        <td>UCE**</td>
                        <td><span>$500,00</span></td>
                    </tr>
                </table>
            </div>
            <div id="send">
                <div style="height:35px"></div>
                <div align="center">
                    <img src="<?php echo base_url()?>assets/images/weston unio2.jpg" alt="" />
                </div>
                <div align="center">
                    <img src="<?php echo base_url()?>assets/images/Liberty Reserve.jpg" alt="" />
                </div>
                <div align="center">
                    <img src="<?php echo base_url()?>assets/images/web-money.jpg" alt="" />
                </div>
            </div>
        </div>  
