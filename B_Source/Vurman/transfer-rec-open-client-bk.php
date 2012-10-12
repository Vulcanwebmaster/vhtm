<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="de-ch" lang="de-ch">
<head>
    <title>Vurman - Spectrum Funds</title>
    <meta name="keywords" content="Fund Services, Fund Settlement, Hedge Funds, Offshore Funds, Subscription, Redemption">
    <meta name="description" content="Fund Services, Fund Settlement, Hedge Funds, Offshore Funds, Subscription, Redemption">
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    <link rel="Stylesheet" href="styles.css" />
</head>
<body>
    <div id="main_cont">
        <div id="title">
            <img src="ZEIT8.jpg" alt="" /></div>
         <div id="left">
            <div class="menucontainer">
                <p class="menutitle">
                    SETTLEMENT INSTRUCTION</p>                    
                <a class="menu" href="transfer-rec-client.php" onfocus="blur()">TO RECEIVE FUND</a>    
                <a class="menu" href="transfer-del-client.php" onfocus="blur()">TO DELIVER FUND</a>
            </div>
            <div class="menucontainer">
                <p class="menutitle">
                    OPEN TRANSFER(S)</p>                 
                <a class="menu" href="transfer-rec-open-client.php" onfocus="blur()">FUND BEING RECEIVED</a>
                <a class="menu" href="transfer-del-open-client.php" onfocus="blur()">FUND BEING DELIVERED</a>                
            </div>
            <div class="menucontainer">
                <p class="menutitle">
                    SETTLED TRANSFER(S)</p>
                <a class="menu" href="transfer-rec-settled-client.php" onfocus="blur()">FUND RECEIVED</a>
                <a class="menu" href="transfer-del-settled-client.php" onfocus="blur()">FUND DELIVERED</a>
            </div>
            <div class="menucontainer">
                <p class="menutitle">
                    FUND DATABASE</p>
                <a class="menu" href="fund-db-client.php" onfocus="blur()">FUND DATABASE</a>
            </div>
            <div class="menucontainer">
                <p class="menutitle">
                    FUND PORTFOLIO</p>
                <a class="menu" href="portfolio-client.php" onfocus="blur()">FUND PORTFOLIO</a>                         
            </div>
        </div>
     
        <div id="content">

<span id="error">MANDATORY FIELDS * ARE: ISIN, CURRENCY, CUSTODY A/C, QUANTITY, T/D, V/D, SELLER, CUSTODIAN</span><br /><br /><script>
function SetValues(id,number) 
{
var Ids = new Array();
var Currency = new Array();
var Names = new Array();
Ids[1] = "1";Currency[1] = "USD";Names[1] = "FIDELITY ASIAN";Ids[2] = "2";Currency[2] = "GBP";Names[2] = "LEO SMALL PEARL";Ids[3] = "3";Currency[3] = "EUR";Names[3] = "VONTOBEL CLASSIC";Ids[4] = "4";Currency[4] = "JPY";Names[4] = "HSBC TECHNOLOGY";Ids[41] = "5";Currency[5] = "JPY";Names[5] = "OPPENHEIM EASTERN EUROPE";if(Ids[id])
if(number=='0'){
  document.getElementById('Currency').value = Currency[id];
  document.getElementById('Name').value = Names[id];
  }
if(id==0)
if(number=='0'){
  document.getElementById('Currency').value = 'Select ISIN';
  document.getElementById('Name').value = 'Select ISIN';
  }
}

function verify() 
{
var message = '';
  if(document.getElementById('Quantity').value)
  if(!(document.getElementById('Quantity').value == parseInt(document.getElementById('Quantity').value)))
  message = message + 'QUANTITY MUST BE NUMERIC!';	

  reZip = new RegExp(/(^\d{4}-\d{2}-\d{2}$)|(^$)/);
 if(!reZip.test(document.getElementById('Trade_Date').value))
  message = message + '\nTRADE DATE FORMAT MUST BE YYYY-MM-DD !';	
 if(!reZip.test(document.getElementById('Settlement_Date').value))
  message = message + '\nSETTLEMENT DATE FORMAT MUST BE YYYY-MM-DD !';	

 if(!message)
   document.createT.submit();
 else {
   alert(message);
   return false;}
}
function switc(val) 
{
  document.getElementById('xxx').style.visibility = (val == 'switch') ? 'visible' : 'hidden';
  if(val!='switch')
    document.getElementById('amount2').value='0';

  return false;
}
</script>

<form name="createT" method="post"  action="">
<input type='hidden' name='type' value='purchase'/>        
 <div>
     <fieldset>
      <legend>CLIENT DETAILS</legend>
       <table>
 
        <br />
 
        <tr>
         <td align="right"><span style='color:#FF0000'>CLIENT-ID*</span></td>
          
         <td>
          <input class="norm" type="text" name="Client-ID" id="Client-ID" /></div>
         </td>
         
         <td align="right"><span style='color:#FF0000'>REFERENCE*</span></td>
          
         <td>
          <input class="norm" type="text" name="Reference" id="Reference" /></div>
         </td>
        </tr>
 
        <tr>
         <td align="right">CLIENT NAME</td>
              
         <td colspan="4">
          <input class="norm" type="text" size="59" name="Client" id="Client" /></div>
         </td>
        </tr>
       </table>
      </fieldset>
     </div>
 
     <br />

 <div>
  <fieldset>
   <legend>FUND DETAILS</legend>
    <table> 

     <br />
   
     <tr>
      <td align="right"><span style='color:#FF0000'>ISIN*</span></td>
         <td>
          <select name='security1' onchange='SetValues(this.value,"0")'>
           <option value='0'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;selection</option>
           <option value='1'>LU.000'000'000'0</option>
           <option value='2'>CH.111'111'111'1</option>
           <option value='3'>DE.222'222'222'2</option>
           <option value='4'>US.333'333'333'3</option>
           <option value='5'>KY.444'444'444'4</option>
          </select>
         </td>
       
      <td align="right"><span style='color:#FF0000'>CURRENCY*</span></td>
       <td><select name="currency" id="currency" class="dropdown">
        <option value="">selection</option>
        <option value="1">USD</option>
        <option value='2'>EUR</option>
        <option value='3'>GBP</option>
        <option value='4'>JPY</option>
        <option value='5'>CHF</option>
       </select>
      </td>
     </tr>
             
    <tr>
     <td colspan="4">
      <div class='notification'>IF ISIN IS NOT IN THE DATABASE, JUST ADD IT IN THE "REMARKS" FIELD</div>
     </td>
    </tr>
    
    <tr>
     <td align="right">FUND NAME</td>
        
     <td colspan="3">
      <input class="norm" type="text" size="61" name="Name" id="Name"  /></div>
     </td>
    </tr>

    <tr>
     <td align="right">REMARKS</td>
                 
     <td>
      <input class="norm" type="text" name="comment" id="comment" /></div>
     </td>
    </tr>
                    
    <tr>
     <td align="right"><span style='color:#FF0000'>QUANTITY*</span></td>

      <td>
       <input class="norm" type="text" name="Quantity" id="Quantity" /></div>
      </td>
            
      <td><span style='color:#FF0000'>CUSTODY A/C*</span></td>  
       <td><select name="client" id="client" class="dropdown">
        <option value="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;selection</option>
        <option value="1">S1&nbsp; (ORDINARY)</option>
        <option value='2'>S2&nbsp; (RESTRICT.)</option>
       </select>
      </td>
     </tr>
                  
     <tr>
      <td align="right"><span style='color:#FF0000'>TRADE DATE*</span></td>

       <td>
        <input class="norm" type="text" name="Trade_Date" id="Trade_Date" /></div>
       </td>
                
       <td align="right"><span style='color:#FF0000'>VALUE DATE*</span></td>
        <td>
         <input class="norm" type="text" name="Settlement_Date" id="Settlement_Date" /></div>
        </td>
       </table>
      </fieldset>
     </div>
           
     <br />
      
     <div>
      <fieldset>
       <legend>SELLER DETAILS</legend>
        <table> 

         <br />
             
         <tr>
          <td align="right"><span style='color:#FF0000'>SELLER*</span></td>

          <td colspan="4">
           <input class="norm" type="text" size="58" name="Partner" id="Partner" /></div>
          </td>
         </tr>
          
         <tr>
          <td align="right">BIC (SELLER)</td>
            
          <td>
           <input class="norm" type="text" name="BIC_Partner" id="BIC_Partner" /></div>
          </td>

          <td width="220px" align="right">&nbsp;</td>
         </tr>
                
         <tr>
          <td align="right"><span style='color:#FF0000'>CUSTODIAN*</span></td>
              
          <td colspan="4">
           <input class="norm" type="text" size="58" name="Custodian" id="Custodian" /></div>
          </td>
         </tr>

         <tr>    
          <td align="right">BIC (CUSTODIAN)</td>
                
          <td>
           <input class="norm" type="text" name="Custodian_BIC" id="Custodian_BIC" /></div>
          </td>
         </tr>
               
         <tr>
          <td align="right">SELLER A/C WITH CUST.</td>

          <td><input class="norm" type="text" name="client_ac_cust" id="client_ac_cust" value=""/></td>
         </tr>
                
         <tr>
          <td align="right">TRANSFER AGENT</td>

          <td colspan="4">
           <input class="norm" type="text" size="58" name="TA_Name" id="TA_Name" /></div></td>
         </tr>

         <tr>                  
          <td align="right">BIC (TA)</td>
                
          <td><input class="norm" type="text" name="TA_BIC" id="TA_BIC" /></div></td>
         </tr>
                
         <tr>
          <td align="right">CUSTODIAN A/C WITH T/A</td>

          <td><input class="norm" type="text" name="cust_ac_ta" id="cust_ac_ta" value=""/></td>
         </tr>
        </table>
       </fieldset>
      </div>
      
        <br />
                
        <div>
         <fieldset>
          <input style="float:center;" type="submit" value="GET FUND" name="button" onclick='return verify();'/>
         </fieldset>
        </div> 
      
        <br />       
        
        <div>
         <fieldset>
          <legend>IMPORTANT</legend>
           <center>FIELDS MARKED WITH AN ASTERISK * ARE MANDATORY<br />
          </fieldset>
         </div>

        <br />

        <div>
         <fieldset>
          <legend>ORDER STATUS</legend>
           <table>              
            <tr>
             <td align="right">SUBMITTED</td>

             <td><input class="norm" type="text" name="date" id="date" value=""/></td>

             <td align="right">SETTLED</td>
            
             <td><input class="norm" type="text" name="date" id="date" /></td>
            </tr>
           </table>
          </fieldset>
         </div>
        </form>
       </div> 

       <div id="right">
            <div class="menucontainer">
                <p class="menutitle">
                    TRADING / EXECUTION</p>
                <a class="menu" href="create.php?type=purchase" onfocus="blur()">SUBSCRIPTION ORDER</a>
                <a class="menu" href="create.php?type=sell" onfocus="blur()">REDEMPTION ORDER</a>
                <a class="menu" href="create.php?type=switch" onfocus="blur()">SWITCH ORDER</a>                
            </div>
            <div class="menucontainer">
                <p class="menutitle">
                    OPEN TRADE(S)</p>                
                <a class="menu" href="create.php?type=purchase" onfocus="blur()">SUBSCRIPTION ORDER</a>
                <a class="menu" href="create.php?type=sell" onfocus="blur()">REDEMPTION ORDER</a>
                <a class="menu" href="create.php?type=switch" onfocus="blur()">SWITCH ORDER</a>
            </div>
            <div class="menucontainer">
                <p class="menutitle">
                    EXECUTED TRADE(S)</p>
                <a class="menu" href="create.php?type=purchase" onfocus="blur()">SUBSCRIPTION ORDER</a>
                <a class="menu" href="create.php?type=sell" onfocus="blur()">REDEMPTION ORDER</a>
                <a class="menu" href="create.php?type=switch" onfocus="blur()">SWITCH ORDER</a>
            </div>
            <div class="menucontainer">
                <p class="menutitle">
                    HELP DESK / SUPPORT</p>
                <a class="menu" href=".html" onfocus="blur()">HELP DESK</a>
                <a class="menu" href="chat-client.html" onfocus="blur()">LIVE SUPPORT</a>   
                <a class="menu" href="shoutbox-client.html" onfocus="blur()">SHOUT BOX</a>
            </div>
            <div class="menucontainer">
                <p class="menutitle">
                    LOGOUT</p>
                <a class="menu" href="logout.php" target="_top" onfocus="blur()">LOGOUT</a>
            </div>
          </div>          
        </div>
      </div>
</body>
</html>