<script>
function SetValues(id,number) 
{
var Ids = new Array();
var Currency = new Array();
var Names = new Array();
<?php
echo  $isinCollection->formProperJavascript();
?>

if(Ids[id])
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

<?php
if(!is_array($result))
  $result = array();
if(count($result)) { ?>
<br/><span id="error">Mandatory fields * are: <?php echo implode($result,',') ?> </span><br/>
<?php } ?>
<form name="createT" method="post"  action="">
<input type='hidden' name='types' value='<?php echo trim($_POST['types']); ?>'/>
<input type='hidden' name='id' value='<?php echo trim($_REQUEST['id']); ?>'/>        
    <div>
     <fieldset>
      <legend>Fund Details</legend>
       <table border=0>    
          <tr>
                <td width="120px" align="right">
<?php echo CheckForError('ISIN',$result,'ISIN').'<sup>*</sup>';  ?>
                   
                </td>
                <td width="100px">
                    <label>
                        <div class="roundcorner_div">
<!--                            <input type="text" class="roundcorner_textbox" name="ISIN" id="ISIN" /></div>
-->
<select name='security1' onchange='SetValues(this.value,"0")'>
<option value='0'><?php echo 'Select ISIN';?></option>
<?php foreach($isins as $isin){ ?>
<option value='<?php echo $isin['id'];?>' <?php if(trim($_POST['security1']) == $isin['id']) echo"selected = 'selected'" ?>><?php echo $isin['code'];?></option>
<?php } ?>
</select>

                    </label>
                </td>
                <td width="120px" align="right">
                    Currency
                </td>
                <td width="100px">
                    <label>
                        <div class="roundcorner_div">
                            <input type="text" class="roundcorner_textbox" name="Currency" id="Currency" readonly="readonly" <?php echo show('Currency');?>/></div>
                    </label>
                </td>
            </tr>
            <?php if($_POST['types'] == 'purchase'){?>
	    <tr>
                <td colspan="4">
                 <div class='notification'> I<?php echo ('f the ISIN is not in our database yet, just add it in the "Final Remarks" field')?> </div>
		</td>
	    </tr>
<?php } ?>
            <tr>
                <td width="120px" align="right">
                    Fund Name
                </td>
                <td colspan="3">
                    <label>
                        <div class="roundcorner_div">
                            <input type="text" size="65" readonly="readonly" class="roundcorner_textbox" name="Name" id="Name" <?php echo show('Name');?> /></div>
                    </label>
                </td>
            </tr>
            <tr>
                <td width="120px" align="right">
<?php echo CheckForError('Quantity',$result,'Quantity').'<sup>*</sup>';  ?>
                </td>
                <td width="100px">
                    <label>
                        <div class="roundcorner_div">
                            <input type="text" class="roundcorner_textbox" name="Quantity" id="Quantity" <?php echo show('Quantity');?>/></div>
                    </label>
                </td>
                <td width="120px" align="right">
                    Custody a/c
                </td>
                <td width="100px">
                    <label>
                        <div class="roundcorner_div">
<!--                            <input type="text" class="roundcorner_textbox" name="Custody" id="Custody" /></div>
-->
<select name='account1' >
<?php foreach($accounts as $account){ ?>
<option value='<?php echo $account['id'];?>' <?php if(trim($_POST['account1']) == $account['id']) echo 'selected = "selected"'?> ><?php echo $account['name'];?></option>
<?php } ?>
</select>

                    </label>
                </td>
            </tr>
            <tr>
                <td width="120px" align="right">
<?php echo CheckForError('Trade Date',$result,'Trade Date').'<sup>*</sup>';  ?>
                </td>
                <td width="100px">
                    <label>
                        <div class="roundcorner_div">
                            <input type="text" class="roundcorner_textbox" name="Trade_Date" id="Trade_Date" <?php echo show('Trade_Date');?>/></div>
                    </label>
                </td>
                <td width="120px" align="right">
<?php echo CheckForError('Settlement Date',$result,'Settlement Date').'<sup>*</sup>';  ?>
                </td>
                <td width="100px">
                    <label>
                        <div class="roundcorner_div">
                            <input type="text" class="roundcorner_textbox" name="Settlement_Date" id="Settlement_Date" <?php echo show('Settlement_Date');?>/></div>

          </label>
         </td>
        </table>
       </fieldset>
      </div>
      
      <br />
      
      <div>
       <fieldset>
        <legend><?php echo $_POST['types']=='sell'?'Buyer':"Seller"; ?> Details </legend>
         <table>              
            <tr>
                <td width="120px" align="right">
                    <?php echo $_POST['types']=='sell'?CheckForError('Buyer incl. BIC',$result,'Buyer'):CheckForError('Seller incl. BIC',$result,'Seller'); ?><sup>*</sup>
                </td>
                <td width="100px">
                    <label>
                        <div class="roundcorner_div">
                            <input type="text" class="roundcorner_textbox" name="Partner" id="Partner" <?php echo show('Partner');?>/></div>
                    </label>
                </td>
                <td width="120px" align="right">
<?php echo $_POST['types']=='sell'?CheckForError('Buyer incl. BIC',$result,'BIC Code'):CheckForError('Seller incl. BIC',$result,'BIC Code'); ?><sup>*</sup>
                </td>
                <td width="100px">
                    <label>
                        <div class="roundcorner_div">
                            <input type="text" class="roundcorner_textbox" name="BIC_Partner" id="BIC_Partner" <?php echo show('BIC_Partner');?>/></div>
                    </label>
                </td>
            </tr>
            <tr>
                <td width="120px" align="right">
<?php echo CheckForError(('Custodian incl. BIC'),$result,'Custodian').'<sup>*</sup>';  ?>
                </td>
                <td width="100px">
                    <label>
                        <div class="roundcorner_div">
                            <input type="text" class="roundcorner_textbox" name="Custodian" id="Custodian" <?php echo show('Custodian');?>/></div>
                    </label>
                </td>
                <td width="120px" align="right">
<?php echo CheckForError(('Custodian incl. BIC'),$result,'BIC Code').'<sup>*</sup>';  ?>
                </td>
                <td width="100px">
                    <label>
                        <div class="roundcorner_div">
                            <input type="text" class="roundcorner_textbox" name="Custodian_BIC" id="Custodian_BIC" <?php echo show('Custodian_BIC');?>/></div>
                    </label>
                </td>
            </tr>
            <tr>
                <td width="120px" align="right">
                    Custody a/c
                </td>
                <td width="100px">
                    <label>
                        <div class="roundcorner_div">
<!--                            <input type="text" class="roundcorner_textbox" name="Custody-ac-Seller" id="Custody-ac-Seller" /></div>
-->
<select name='account2' >
<?php foreach($accounts as $account){ ?>
<option value='<?php echo $account['id'];?>' <?php if(trim($_POST['account2']) == $account['id']) echo 'selected = "selected"'?>><?php echo $account['name'];?></option>
<?php } ?>
</select>

                    </label>
                </td>
            </tr>
            <tr>
                <td width="120px" align="right">
                    Transfer Agent
                </td>
                <td width="100px">
                    <label>
                        <div class="roundcorner_div">
                            <input type="text" class="roundcorner_textbox" name="TA_Name" id="TA_Name" <?php echo show('TA_Name');?>/></div>
                    </label>
                </td>
                <td width="120px" align="right">
                    BIC Code
                </td>
                <td width="100px">
                    <label>
                        <div class="roundcorner_div">
                            <input type="text" class="roundcorner_textbox" name="TA_BIC" id="TA_BIC" <?php echo show('TA_BIC');?>/></div>
                    </label>
                </td>
                <tr>
                    <tr>
                        <td width="120px" align="right">
                            Custody a/c
                        </td>
                        <td width="100px">
                            <label>
                                <div class="roundcorner_div">
<select name='account3' >
<?php foreach($accounts as $account){ ?>
<option value='<?php echo $account['id'];?>' <?php if(trim($_POST['account3']) == $account['id']) echo 'selected = "selected"'?>><?php echo $account['name'];?></option>
<?php } ?>
</select>

                            </label>
                        </td>
                    </tr>
                    <tr>
                        <td width="120px" align="right">
                            Final Remarks
                        </td>
                        <td colspan="4">
                            <label>
                                <div class="roundcorner_div">
                                    <input type="text" size="65" readonly="readonly" class="roundcorner_textbox" name="comment" id="comment" <?php echo show('comment');?>/></div>
                            
          </label>
          </td>
         </tr>
        </table>
       </fieldset>
      </div>
      
      <br />
        
      <div>
       <fieldset>
<legend>Transfer status</legend>
<select name='status'>
<option value='pending' <?php if($_POST['status'] == 'pending') echo "selected = 'selected'"?> >Pending</option>
<option value='completed' <?php if($_POST['status'] == 'completed') echo "selected = 'selected'"?>>Completed</option>
<option value='cancelled' <?php if($_POST['status'] == 'cancelled') echo "selected = 'selected'"?>>Cancelled</option>
</select>
</fieldset>
<br/>
<fieldset>
        <input style="float:center;" type="submit" value="Update" name="button" onclick='return verify();'/>
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
