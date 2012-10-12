<?php
include('config.php');
include('functions.php');
include('classes/client.class.php');
include('classes/security.class.php');
include('classes/securitycollection.class.php');
include('classes/isin.class.php');
include('classes/isincollection.class.php');
include('classes/transactioncollection.class.php');
//check, if client is already logged in.
login();
if(!logged())
{
  include('login_header.php');
die();
}
  include("$templates/menu.html");


  if (strlen($errorText))
     echo "<span id='error'> $errorText </span>\n";
?>
<center/>
 <br>
<!-- Beginn Kontaktformular -->
<FORM ACTION="<?php echo $_SERVER['SCRIPT_NAME']; ?>" METHOD="post">
 <div>
  <fieldset>
   <legend>Account Information</legend>
    <table class="contab" width="545">
     <tr>
      <td>Number*</td>  
       <td><input class="norm" type="text" name="number" id="number" value="<?php echo $number; ?>"/></td>
      
      <td>Currency*</td>
       <td><select name="currency" id="currency" class="dropdown">
        <option value="" <?php if ($currency == "") echo "selected=selected"; ?>please select</option>
         <option value="EUR" <?php if ($currency == "EUR") echo "selected=selected"; ?>EUR</option>
          <option value="USD" <?php if ($currency == "USD") echo "selected=selected"; ?>USD</option>
           <option value="GBP" <?php if ($currency == "GBP") echo "selected=selected"; ?>GBP</option>
            <option value="JPY" <?php if ($currency == "JPY") echo "selected=selected"; ?>JPY</option>
             <option value="CHF" <?php if ($currency == "CHF") echo "selected=selected"; ?>CHF</option>
              </select>
               </td>
                </tr>
                        
       <tr>
        <td>Amount</td>
        <td><input class="norm"  type="text" name="amount" id="amount" value="<?php echo $amount; ?>"/></td>
       </tr>
                               
       <tr>
        <td>Credit</td>
        <td><input class="norm"  type="text" name="credit" id="credit" value="<?php echo $credit; ?>"/></td>
         
        <td>Value Date</td>
        <td><input class="norm"  type="text" name="valuec" id="valuec" value="<?php echo $valuec; ?>"/></td>
       </tr>
                                      
       <tr>
        <td>Debit</td>
        <td><input class="norm"  type="text" name="debit" id="debit" value="<?php echo $debit; ?>"/></td>
       
        <td>Value Date</td>
        <td><input class="norm"  type="text" name="valued" id="valued" value="<?php echo $valued; ?>"/></td>
       </tr>  
      </table>
     </fieldset>
    </div> 

    <br />      
      
    <div>
     <fieldset>
      <input style="float:center;" type="submit" value="Send" />
     </fieldset>
    </div>

    <br />
 
    <div>
     <fieldset>
      <legend>Important</legend>
      <center>Fields marked with an asterisk * are mandatory<br/>
     </fieldset>
    </div>
   </form>
<?php
  include("$templates/footer.html");
?>