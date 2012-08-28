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

?>

    
<form name="search_form" method="post"  action="">
        
    <div>
     <fieldset>
      <legend>Fund Position</legend>
       <table size="545" border="0">
          <tr>
                <td width="120px" align="right">
                    ISIN*
                </td>
                <td width="100px">
                    <label>
                        <div class="roundcorner_div">
                            <input type="text" class="roundcorner_textbox" name="ISIN" id="ISIN" /></div>
                    </label>
                </td>
                <td width="120px" align="right">
                    Currency
                </td>
                <td width="100px">
                    <label>
                        <div class="roundcorner_div">
                            <input type="text" class="roundcorner_textbox" name="currency" id="currency" /></div>
                    </label>
                </td>
            </tr>
            <tr>
                <td width="120px" align="right">
                    Fund Name
                </td>
                <td colspan="4">
                    <label>
                        <div class="roundcorner_div">
                            <input type="text" size="65" class="roundcorner_textbox" name="fund-name" id="fund-name" /></div>
                    </label>
                </td>
            </tr>
            <tr>
                <td width="120px" align="right">
                    Total Units
                </td>
                <td width="100px">
                    <label>
                        <div class="roundcorner_div">
                            <input type="text" class="roundcorner_textbox" name="quantity" id="quantity" /></div>
                    </label>
                </td>
            </tr>    
            <tr>
                <td width="120px" align="right">
                    Quantity
                </td>
                <td width="100px">
                    <label>
                        <div class="roundcorner_div">
                            <input type="text" class="roundcorner_textbox" name="quantity" id="quantity" /></div>
                    </label>
                </td>
                <td width="120px" align="right">
                    Custody a/c
                </td>
                <td width="100px">
                    <label>
                        <div class="roundcorner_div">
                            <input type="text" class="roundcorner_textbox" name="custody" id="custody" /></div>
                    </label>
                </td>                
            </tr>
            <tr>
                <td width="120px" align="right">
                    Quantity
                </td>
                <td width="100px">
                    <label>
                        <div class="roundcorner_div">
                            <input type="text" class="roundcorner_textbox" name="quantity" id="quantity" /></div>
                    </label>
                </td>
                <td width="120px" align="right">
                    Custody a/c
                </td>
                <td width="100px">
                    <label>
                        <div class="roundcorner_div">
                            <input type="text" class="roundcorner_textbox" name="custody" id="custody" /></div>
                    </label>
                </td>                
            </tr>
            <tr>
                <td width="120px" align="right">
                    Quantity
                </td>
                <td width="100px">
                    <label>
                        <div class="roundcorner_div">
                            <input type="text" class="roundcorner_textbox" name="quantity" id="quantity" /></div>
                    </label>
                </td>
                <td width="120px" align="right">
                    Custody a/c
                </td>
                <td width="100px">
                    <label>
                        <div class="roundcorner_div">
                            <input type="text" class="roundcorner_textbox" name="custody" id="custody" /></div>
                    </label>
                </td>                
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
        <center>Fields marked with an asterisk * are mandatory<br />
       </fieldset>
      </div>
     </form>

<?php
  include("$templates/footer.html");