<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="de-ch" lang="de-ch">
<head>
    <title>Vurman Fund Services Ltd</title>
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
                    FUND SETTLEMENT</p>                    
                <a class="menu" href="transfer-rec.html" onfocus="blur()">RECEIVE INSTRUCTION</a>    
                <a class="menu" href="transfer-del.html" onfocus="blur()">DELIVERY INSTRUCTION</a>
                <a class="menu" href="stf.php" onfocus="blur()">STOCK TRANSFER FORM</a>
            </div>
            <div class="menucontainer">
                <p class="menutitle">
                    OPEN / SETTLED</p>                 
                <a class="menu" href="transfer-rec.html" onfocus="blur()">PENDING TRANSFER(S)</a>
                <a class="menu" href="transfer-del.html" onfocus="blur()">SETTLED TRANSFER(S)</a>                
            </div>
            <div class="menucontainer">
                <p class="menutitle">
                    TRADING / EXECUTION</p>
                <a class="menu" href="create.php?type=purchase" onfocus="blur()">SUBSCRIPTION ORDER</a>
                <a class="menu" href="create.php?type=sell" onfocus="blur()">REDEMPTION ORDER</a>
                <a class="menu" href="create.php?type=switch" onfocus="blur()">SWITCH ORDER</a>                
            </div>
            <div class="menucontainer">
                <p class="menutitle">
                    OPEN / SETTLED</p>                
                <a class="menu" href=".html" onfocus="blur()">PENDING TRADE(S)</a>
                <a class="menu" href=".html" onfocus="blur()">EXECUTED TRADE(S)</a>
            </div>
            <div class="menucontainer">
                <p class="menutitle">
                    FUND DATABASE</p>
                <a class="menu" href="fund-db.php" onfocus="blur()">FUND DATABASE</a>
            </div>
        </div>
      
        <div id="content">        

<center/>

<br />

<span id="error">MANDATORY FIELDS * ARE: CLIENT, A/C NUMBER, CURRENCY</span><br /><br />

<FORM ACTION="" METHOD="post">
 <div>
  <fieldset>
   <legend>A/C MANAGEMENT SYSTEM</legend>
    <table class="contab">
     <tr>
      <td align="right">
       <span style='color:#FF0000'>CLIENT*</span></td>
       <td><select name="client" id="client" class="dropdown">
        <option value="">&nbsp;selection</option>
        <option value="0">BANK XYZ</option>
       </select>
      </td>          
       
       <td align="right">
        <span style='color:#FF0000'>A/C NUMBER*</span></td>  
        <td><input class="norm" type="text" name="number" id="number" value=""/></td>
       </tr>
       
      <tr>
       <td align="right">
        <span style='color:#FF0000'>CURRENCY*</span></td>
        <td><select name="currency" id="currency" class="dropdown">
         <option value="">USD</option>
         <option value='1'>EUR</option>
         <option value='2'>GBP</option>
         <option value='3'>JPY</option>
         <option value='4'>CHF</option>
        </select>
       </td>
                              
       <td align="right">A/C BALANCE</td>
        <td><input class="norm"  type="text" name="amount" id="amount" value=""/></td>
       </tr>
       
      <tr>
        <td align="right">CREDIT A/C&nbsp;</td>
        <td><input class="norm"  type="text" name="credit" id="credit" value=""/></td>
         
        <td align="right">VALUE DATE&nbsp;</td>
        <td><input class="norm"  type="text" name="valuec" id="valuec" value=""/></td>
       </tr>
       
       <tr>
        <td align="right">REF.</td>
        <td><input class="norm"  type="text" name="reference" id="reference" value=""/></td>
       </tr>
                                      
       <tr>
        <td align="right">DEBIT A/C&nbsp;</td>
        <td><input class="norm"  type="text" name="debit" id="debit" value=""/></td>
       
        <td align="right">VALUE DATE&nbsp;</td>
        <td><input class="norm"  type="text" name="valued" id="valued" value=""/></td>
       </tr>

       <tr>
        <td align="right">REF.</td>
        <td><input class="norm"  type="text" name="reference" id="reference" value=""/></td>
       </tr>
      </table>
     </fieldset>
    </div>
   
   <br />
   
  <div>
   <fieldset>
    <input style="float:center;" type="submit" value="MONEY TRANSFER" />
   </fieldset>
  </div>
  
   <br />  
     
  <div>
   <fieldset>
    <legend>SHOW BOOKINGS ONLY</legend>
     <table class="contab">
      <tr>
      <td align="right">
       <span style='color:#FF0000'>CLIENT*</span></td>
       <td><select name="client" id="client" class="dropdown">
        <option value="">&nbsp;selection</option>
        <option value="0">BANK XYZ</option>
       </select>
      </td>          
       
       <td align="right">
        <span style='color:#FF0000'>A/C NUMBER*</span></td>  
       <td><input class="norm" type="text" name="number" id="number" value=""/></td>
      </tr>
       
      <tr>
       <td align="right">
        <span style='color:#FF0000'>CURRENCY*</span></td>
         <td><select name="currency" id="currency" class="dropdown">
          <option value="">USD</option>
          <option value='1'>EUR</option>
          <option value='2'>GBP</option>
          <option value='3'>JPY</option>
          <option value='4'>CHF</option>
         </select>
        </td>
                              
       <td align="right">A/C BALANCE</td>
        <td><input class="norm"  type="text" name="amount" id="amount" value=""/></td>
       </tr>
     
      <tr>      
       <td align="right">ALL BOOKINGS</td>
       <td><input class="norm"  type="text" name="bookings" id="bookings" value=""/></td>
      
       <td align="right">REF.</td>
       <td><input class="norm"  type="text" name="reference" id="reference" value=""/></td>
      </tr>
       
      <tr>  
       <td align="right">FROM DATE</td>
       <td><input class="norm"  type="text" name="valuecdf" id="valuecdf" value=""/></td>
        
       <td align="right">TO DATE</td>
       <td><input class="norm"  type="text" name="valuecdt" id="valuecdt" value=""/></td>
      </tr>
     </table>
    </fieldset>
   </div>

    <br />

   <div>
    <fieldset>
     <table>                          
      <tr>
       <td align="right">ONLY CREDIT(S)</td>
       <td><input class="norm"  type="text" name="credit" id="credit" value=""/></td>
      
       <td align="right">REF.</td>
       <td><input class="norm"  type="text" name="reference" id="reference" value=""/></td>
      </tr>
       
      <tr>  
       <td align="right">FROM DATE</td>
       <td><input class="norm"  type="text" name="valuecf" id="valuecf" value=""/></td>
        
       <td align="right">TO DATE</td>
       <td><input class="norm"  type="text" name="valuect" id="valuect" value=""/></td>
      </tr>
     </table>
    </fieldset>
   </div>

    <br />

   <div>
    <fieldset>
     <table>
      <tr>
       <td align="right">ONLY DEBIT(S)</td>
       <td><input class="norm"  type="text" name="debit" id="debit" value=""/></td>
      
       <td align="right">REF.</td>
       <td><input class="norm"  type="text" name="reference" id="reference" value=""/></td>
      </tr>
       
      <tr>
       <td align="right">FROM DATE</td>
       <td><input class="norm"  type="text" name="valuedf" id="valuedf" value=""/></td>
        
       <td align="right">TO DATE</td>
       <td><input class="norm"  type="text" name="valuedt" id="valuedt" value=""/></td>
      </tr>  
     </table>
    </fieldset>
   </div> 

    <br />      
      
    <div>
     <fieldset>
      <input style="float:center;" type="submit" value="VIEW TRANSACTION(S)" />
     </fieldset>
    </div>

    <br />
 
    <div>
     <fieldset>
      <legend>IMPORTANT</legend>
      <center>FIELDS MARKED WITH AN ASTERISK * ARE MANDATORY<br/>
     </fieldset>
    </div>
   </form>
  </div>
      
        <div id="right">
            <div class="menucontainer">
                <p class="menutitle">
                    USER MANAGEMENT</p>
                <a class="menu" href=".html" onfocus="blur()">USER MANAGEMENT</a>
            </div>    
            <div class="menucontainer">
                <p class="menutitle">
                    CASH MANAGEMENT</p>
                <a class="menu" href="manage-ac.php" onfocus="blur()">CASH MANAGEMENT</a>                
            </div>
            <div class="menucontainer">
                <p class="menutitle">
                    FUND MANAGEMENT</p>
                <a class="menu" href=".html" onfocus="blur()">FUND MANAGEMENT</a>
                <a class="menu" href=".html" onfocus="blur()">FUND PORTFOLIO</a>                
            </div>           
            <div class="menucontainer">
                <p class="menutitle">
                    HELP DESK / SUPPORT</p>
                <a class="menu" href=".html" onfocus="blur()">HELP DESK</a>
                <a class="menu" href="chat.html" onfocus="blur()">LIVE SUPPORT</a>
                <a class="menu" href="shoutbox.html" onfocus="blur()">SHOUT BOX</a>
            </div>
            <div class="menucontainer">
                <p class="menutitle">
                    LOGOUT</p>
                <a class="menu" href="logout.php" target="_top" onfocus="blur()">LOGOUT</a>
            </div>
        </div>
    </div>
</body>
</html>