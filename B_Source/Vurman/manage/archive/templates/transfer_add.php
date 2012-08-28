<script>
function SetValues(id,number) 
{
var Ids = new Array(0,
<?php echo $isinCollection->getIdsProperty('id'); ?>
);
var Currency = new Array(0,
<?php echo $isinCollection->getIdsProperty('currency'); ?>
);
var Names = new Array(0,
<?php echo $isinCollection->getIdsProperty('name'); ?>
);
var Nav = new Array(0,
<?php echo $isinCollection->getIdsProperty('nav'); ?>
);
var Date_nav = new Array(0,
<?php echo $isinCollection->getIdsProperty('date_nav'); ?>
);

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

<?php if(count($result)){
    $show= 'Mandatory fields * are: '.implode($result,',');;
    echo '<span id="error">'.$show.'</span><br/><br/>';
} ?>

<form name="createT" method="post"  action="">
<input type='hidden' name='type' value='<?php echo trim($_REQUEST['type']); ?>'/>        
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
                            <input type="text" class="roundcorner_textbox" name="Currency" id="Currency" <?php echo show('Currency');?>/></div>
                    </label>
                </td>
            </tr>
            <?php if($_GET['type'] == 'purchase'){?>
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
                            <input type="text" size="65" class="roundcorner_textbox" name="Name" id="Name" <?php echo show('Name');?> /></div>
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
<option value='<?php echo $account['id'];?>'><?php echo $account['name'];?></option>
<?php } ?>
</select>

                    </label>
                </td>
            </tr>
            <tr>
                <td width="120px" align="right">
<?php echo CheckForError(strtoupper('T/D'),$result,'Trade Date').'<sup>*</sup>';  ?>
                </td>
                <td width="100px">
                    <label>
                        <div class="roundcorner_div">
                            <input type="text" class="roundcorner_textbox" name="Trade_Date" id="Trade_Date" <?php echo show('Trade_Date');?>/></div>
                    </label>
                </td>
                <td width="120px" align="right">
<?php echo CheckForError(strtoupper('S/D'),$result,'Settlement Date').'<sup>*</sup>';  ?>
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
        <legend><?php echo $_REQUEST['type']=='sell'?'Buyer':"Seller"; ?> Details </legend>
         <table>              
            <tr>
                <td width="120px" align="right">
                    <?php echo $_REQUEST['type']=='sell'?CheckForError('Buyer incl. BIC',$result,'Buyer'):CheckForError('Seller incl. BIC',$result,'Seller'); ?><sup>*</sup>
                </td>
                <td width="100px">
                    <label>
                        <div class="roundcorner_div">
                            <input type="text" class="roundcorner_textbox" name="Partner" id="Partner" <?php echo show('Partner');?>/></div>
                    </label>
                </td>
                <td width="120px" align="right">
<?php echo $_REQUEST['type']=='sell'?CheckForError('Buyer incl. BIC',$result,'BIC Code'):CheckForError('Seller incl. BIC',$result,'BIC Code'); ?><sup>*</sup>
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
<select name='Custody_ac_Partner' >
<?php foreach($accounts as $account){ ?>
<option value='<?php echo $account['id'];?>'><?php echo $account['name'];?></option>
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
<option value='<?php echo $account['id'];?>'><?php echo $account['name'];?></option>
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
                                    <input type="text" size="65" class="roundcorner_textbox" name="comment" id="comment" <?php echo show('comment');?>/></div>
                            
          </label>
          </td>
         </tr>
        </table>
       </fieldset>
      </div>
      
      <br />
        
      <div>
       <fieldset>
        <input style="float:center;" type="submit" value="Send" name="button" onclick='return verify();'/>
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


