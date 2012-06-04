
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

<?php
	$this->db->order_by("date_src","DESC");
	$query = $this->db->get("is_order",5);
	$exchange_order = $query->result();   
?>
</div>
-->
<div id="left-column">
            <div id="menu">
                <div style="padding-top:20px; padding-left:40px">
                    <div class="menuitem">
                        <img alt="" src="<?php echo base_url()?>assets/images/house-icon.png" style="float:left"/>
                        <a href="<?php echo site_url()?>" style="float:left; margin-left:-20px; color:#ce0701">Home</a>
                    </div>
                    <div class="menuitem">
                        <a href="<?php  echo base_url()?>news/all-news">Service news</a>
                    </div>
                    <div class="menuitem"><a href="<?php  echo base_url()?>servicefees">Service Fees</a></div>
                    <div class="menuitem"><a href="<?php  echo base_url()?>exchangers">Buy/Sell LR</a></div>
                    <div class="menuitem"><a href="<?php  echo base_url()?>merchants">Merchants</a></div>
                    <div class="menuitem"><a href="<?php  echo base_url()?>download">Downloads</a></div>
                    <div class="menuitem"><a href="<?php  echo base_url()?>consummeralert">Consummer Alert</a></div>
                </div>
            </div>
           <div id="support">
                <div id="head-support" style="height:30px"></div>
                <div style="border-left:solid 1px #9d9d9d; border-right:solid 1px #9d9d9d; border-bottom:solid 1px #9d9d9d">
	                <div style="padding-top:15px" align="center">
	                    <img src="<?php echo base_url()?>assets/images/support-logo.jpg" alt="" />
	                </div>
	                
	                
	         <!-- by AN 5/5 -->
	         
	                <?php  
						$query = $this->db->get("is_online_support");
						$online_support = $query->result();
						foreach ($online_support as $row) {  
					?>
	                
	               
	                <div id="support-information">
	                    <div style="margin-bottom:0px">
	                    <!--                         
	                            <span style="float:left">Y! online support 1:</span>
	                            <img style="float:left;" src="<?php echo base_url()?>assets/images/online.png" alt="" />
						-->
						<!-- Author: tienlx -->
								<span style="float:left">Y! online support 1:</span>
								<a href="ymsgr:sendim?<?php echo $row->yahoo_nick1?>">
	                            	<img style="border-style:none;float:left;" src="http://opi.yahoo.com/online?u=<?php echo $row->yahoo_nick1?>&amp;m=g&amp;t=2&amp;l=us" width="70" height="20" alt="" />
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
								<a href="ymsgr:sendim?<?php echo $row->yahoo_nick2?>">
	                            	<img style="border-style:none;float:left;" src="http://opi.yahoo.com/online?u=<?php echo $row->yahoo_nick2?>&amp;m=g&amp;t=2&amp;l=us" width="70" height="20" alt="" />
	                            </a>
						<!-- End Author: tienlx -->
						</div>
	                    <div style="clear:both;margin-top:-15px; height:33px">
	                        <span style="margin-top:0px; float:left"><?php echo $row->name?></span>
	                        <img alt="" src="<?php echo base_url()?>assets/images/green-flower.png" style=" float:left; margin-top:0px" />
	                        <span style="float:left">:  <?php echo $row->phone?></span>
	                    </div>
	                </div>

	                <?php } ?>
	                	                
                </div>
            </div> 
           <!-- by AN 5/5 -->
            
            
            
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
                <div id="reserved_box" style="margin-top:30px">
                    <img alt="" src="<?php echo base_url()?>assets/images/abc.jpg" style="padding-top:15px; width:80px"/>
                    <span id ="a" style="color:#6c7175;font-size:12px;line-height:10px; padding-bottom:5px"></span>
                <br/>
                    <img alt="" src="<?php echo base_url()?>assets/images/wu.jpg" style="margin-top:3px; width:80px"/>
                    <span id ="b" style="color:#6c7175;font-size:12px;line-height:10px"></span>
                </div>
            </div>
            
       <!--
		End by An
     -->
     
          
     
            <div id="lastest-exchange">
                <div style="height:35px"></div>
                <style type="text/css">
                	td{padding:0 0 0 6px}
                </style>
                <table style="border-spacing:0;margin-top:-5px; border-right:solid 1px silver; border-left:solid 1px silver; font-size:11px">
                    <tr style="font-weight:bold">
                        <td>Date</td>
                        <td>Action</td>
                        <td>User</td>
                        <td>Amount</td>
                    </tr>
                    <?php 
                    $count=0;
                    foreach ($exchange_order as $rs)
                    {?>
                    <tr class="hangle" <?php if ($count%2!=0) echo 'style="background-color:white"';?>>
                        <td style="color:#647f0f"><?php echo $this->MKaimonokago->destroy_time($rs->date_src)?></td>
                        <td><?php echo $rs->c_src?> <span>To</span> <?php echo $rs->c_dst?></td>
                        <td><?php echo substr($rs->email, 0, 3).'***'?></td>
                        <td><span><?php echo $rs->amount_src?>$</span></td>
                    </tr>
                    <?php $count++;};?>  
                    
                </table>
            </div>
            <div id="send" style="margin-bottom:15px">
                <div id="send-head" style="height:35px"></div>
                <div align="center">
                    <img src="<?php echo base_url()?>assets/images/weston unio2.jpg"/>
                </div>
                <div align="center">
                    <img src="<?php echo base_url()?>assets/images/abc.jpg"/>
                </div>
                <div align="center">
                    <img src="<?php echo base_url()?>assets/images/web-money.jpg" />
                </div>
            </div>
            
            <div id="tags-box">
            	<img id="img-tag" src="<?php echo base_url();?>assets/images/bg-tag.gif"/>
            	<div>
            		<?php $listTag=$this->MIStockGold->getListTag();
            			$tags=explode(',', $listTag);
            			for ($i=0;$i<count($tags);$i+=5)
            			{
            				if ($i<count($tags))
            					echo '<a href="'.base_url().'index.php/welcome/allNewsWithTag/'.trim($tags[$i]).'" style=" color:#026197; font-size:12px"><strong> '.$tags[$i].',</strong></a>';
            				if ($i+1<count($tags))
            					echo '<a href="'.base_url().'index.php/welcome/allNewsWithTag/'.trim($tags[$i+1]).'" style=" color:#026197; font-size:10px"><strong> '.$tags[$i+1].',</strong></a>';
            				if ($i+2<count($tags))
            					echo '<a href="'.base_url().'index.php/welcome/allNewsWithTag/'.trim($tags[$i+2]).'" style=" color:#026197; font-size:22px"><strong> '.$tags[$i+2].',</strong></a>';
            				if ($i+3<count($tags))
            					echo '<a href="'.base_url().'index.php/welcome/allNewsWithTag/'.trim($tags[$i+3]).'" style=" color:#026197; font-size:20px"><strong> '.$tags[$i+3].',</strong></a>';
            				if ($i+4<count($tags))
            					echo '<a href="'.base_url().'index.php/welcome/allNewsWithTag/'.trim($tags[$i+4]).'" style=" color:#026197; font-size:22px"><strong> '.$tags[$i+4].',</strong></a>';
            			}
            		?>
            	</div>
            </div>
        </div>  
