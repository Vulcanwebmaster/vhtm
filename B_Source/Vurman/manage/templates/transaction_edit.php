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
if(Ids[id])
if(number=='1'){
  document.getElementById('Currency2').value = Currency[id];
  document.getElementById('Name2').value = Names[id];
  }
if(id==0)
if(number=='1'){
  document.getElementById('Currency2').value = 'Select ISIN';
  document.getElementById('Name2').value = 'Select ISIN';
  }
}

function verify() 
{
  if((document.getElementById('amount1').value == parseInt(document.getElementById('amount1').value))&&(document.getElementById('amount2').value == parseInt(document.getElementById('amount2').value)))
    document.createT.submit();
  else{
    alert('AMOUNT MUST BE NUMERIC!');	
    return false;}
}
function switc(val) 
{
  document.getElementById('xxx').style.visibility = (val == 'switch') ? 'visible' : 'hidden';
  if(val!='switch')
    document.getElementById('amount2').value='0';

  return true;
}
</script>

<?php
if(!is_array($result))
  $result = array();
if(count($result)) { ?>
<br/><span id="error">Mandatory fields * are: <?php echo implode($result,',') ?> </span><br/>
<?php } ?>


<form name='createT' method='post' action=''>
<input type='hidden' name='types' value='<?php echo trim($_POST['types']); ?>'/>
<input type='hidden' name='id' value='<?php echo trim($_REQUEST['id']); ?>'/>        
<div>
<fieldset>
<legend>Fund Details <?php if($_REQUEST['type'] == 'switch'){ ?>Subscription<?php } ?></legend>
<table width="545px" border="0">
            <tr>
                <td width="120px" align="right">

<?php 
if($_REQUEST['type']=='purchase')
{ 
  echo (CheckForError('ISIN',$result,'Buy ISIN')).'<sup>*</sup>'; 
}
else 
{

  echo (CheckForError('ISIN',$result,'Sell ISIN')).'<sup>*</sup>';
}
?>
                </td>
                <td width="100px">
<select name='security1' onchange='SetValues(this.value,"0")'>
<option value='0'><?php echo 'Select ISIN';?></option>
<?php foreach($isins as $isin){ ?>
<option value='<?php echo $isin['id'];?>' <?php if(trim($_POST['security1']) == $isin['id']) echo"selected = 'selected'" ?>><?php echo $isin['code'];?></option>
<?php } ?>
</select>

                </td>
                <td width="80px" align="right">
                    Currency
                </td>
                <td width="100px">
                    <label>
                        <div class="roundcorner_div">
                            <input type="text" class="roundcorner_textbox" name="Currency" id="Currency" readonly="readonly" <?php echo show('Currency'); ?>/></div>
                    </label>
                </td>
            </tr>
            <?php if($_REQUEST['type'] == 'purchase'){?>
	    <tr>
                <td colspan="4">
                 <div class='notification'> I<?php echo ('f the ISIN is not in our database yet, just add it in the "Final Remarks" field')?> </div>
		</td>
	    </tr>
            <?php } ?>
            <tr>
                <td align="right">
                    Fund Name
                </td>
                <td colspan=3>
                    <label>
                        <div class="roundcorner_div" align="center">
                            <input type="text" name="Name" id="Name" readonly="readonly" size=72 <?php echo show('Name'); ?>/>
</div>
                    </label>
                </td>
            </tr>
            <tr>
                <td width="120px" align="right">
<?php echo CheckForError('Amount/Units',$result,'Units').'<sup>*</sup>';  ?>
                </td>
                <td width="100px">
                    <label>
                        <div class="roundcorner_div">
                            <input type="text" class="roundcorner_textbox" name="Units" id="Units" <?php echo show('Units'); ?>/></div>
                    </label>
                </td>
                <td width="120px" align="right">
<?php echo CheckForError('Amount/Units',$result,'Amount').'<sup>*</sup>';  ?>
                </td>
                <td width="100px">
                    <label>
                        <div class="roundcorner_div">
                            <input type="text" class="roundcorner_textbox" name="Amount" id="Amount" <?php echo show('Amount'); ?>/></div>
                    </label>
                </td>
            </tr>
                        <tr>
                <td width="120px" align="right">
                    Custody a/c
                </td>
                <td width="100px">
<select name='account' >
<?php foreach($accounts as $account){ ?>
<option value='<?php echo $account['id'];?>' <?php if(trim($_POST['account']) == $account['id']) echo"selected = 'selected'" ?>><?php echo $account['name'];?></option>
<?php } ?>
</select>

                </td>
            </tr>
            <tr>
                <td width="120px" align="right">
                    Final Remarks
                </td>
                <td colspan="3">
                    <label>
                        <div class="roundcorner_div">
                            <input type="text" size="72" class="roundcorner_textbox" readonly="readonly" name="comment" id="Final-Remarks" <?php echo show('comment'); ?>/></div>
                    </label>
                </td>
            </tr>

                        
<?php if($_REQUEST['type'] == 'switch'){ ?>

        </table>
</fieldset>
<fieldset>
<legend>Fund Details Redemption</legend>
<table width="545" border="0">
            <tr>
                <td width="120px" align="right">
<?php echo CheckForError('Buy ISIN',$result,'Buy ISIN').'<sup>*</sup>';  ?>

                </td>
                <td width="100px">
<select name='security2' onchange='SetValues(this.value,"1")'>
<option value='0'><?php echo 'Select ISIN';?></option>
<?php foreach($isins as $isin){ ?>
<option value='<?php echo $isin['id'];?>' <?php if(trim($_POST['security2']) == $isin['id']) echo"selected = 'selected'" ?>><?php echo $isin['code'];?></option>
<?php } ?>
</select>

                </td>
                <td width="120px" align="right">
                    Currency
                </td>
                <td width="100px">
                    <label>
                        <div class="roundcorner_div">
                            <input type="text" class="roundcorner_textbox" name="Currency2" id="Currency2" readonly="readonly" <?php echo show('Currency2'); ?>/></div>
                    </label>
                </td>
            </tr>
	    <tr>
                <td colspan="4">
                 <div class='notification'> I<?php echo ('f the ISIN is not in our database yet, just add it in the "Final Remarks" field')?> </div>
		</td>
	    </tr>
            <tr>
                <td align="right">
                    Fund Name
                </td>
                <td colspan=3>
                    <label>
                        <div class="roundcorner_div" align="center">
                            <input type="text" name="Name2" id="Name2" readonly="readonly" size=71 <?php echo show('Name2'); ?>/>
</div>
                    </label>
                </td>
            </tr>
            <tr>
                <td width="120px" align="right">
<?php echo CheckForError('Units or Amount',$result,'Units').'<sup>*</sup>';  ?>
                </td>
                <td width="100px">
                    <label>
                        <div class="roundcorner_div">
                            <input type="text" class="roundcorner_textbox" name="Units2" id="Units2" <?php echo show('Units2'); ?>/></div>
                    </label>
                </td>
                <td width="120px" align="right">
<?php echo CheckForError('Units or Amount',$result,'Amount').'<sup>*</sup>';  ?>
                </td>
                <td width="100px">
                    <label>
                        <div class="roundcorner_div">
                            <input type="text" class="roundcorner_textbox" name="Amount2" id="Amount2" <?php echo show('Amount2'); ?>/></div>
                    </label>
                </td>
            </tr>
                        <tr>
                <td width="120px" align="right">
                    Custody a/c
                </td>
                <td width="100px">
<select name='account2'>
<?php foreach($accounts as $account){ ?>
<option value='<?php echo $account['id'];?>'><?php echo $account['name'];?></option>
<?php } ?>
</select>

                </td>
            </tr>
            <tr>
                <td width="120px" align="right">
                    Final Remarks
                </td>
                <td colspan="3">
                    <label>
                        <div class="roundcorner_div">
                            <input type="text" size="72" class="roundcorner_textbox" name="comment2" id="Final-Remarks" <?php echo show('comment'); ?>/></div>
                    </label>
                </td>
            </tr>

<?php }?>
        </table>
</fieldset>
</div>
        <br>
<div>
       <fieldset>
<legend>Transfer status</legend>
<select name='status'>
<option value='pending' <?php if($_POST['status'] == 'pending') echo "selected = 'selected'"?> >Pending</option>
<option value='completed' <?php if($_POST['status'] == 'completed') echo "selected = 'selected'"?>>Completed</option>
<option value='cancelled' <?php if($_POST['status'] == 'cancelled') echo "selected = 'selected'"?>>Cancelled</option>
</select>
</fieldset>

<fieldset>
<input type='submit' name='button' value='Send' onclick='return verify();'/>
</fieldset>
</div>
<div>
<fieldset>
<legend>Important</legend>
<center>
Fields marked with an asterisk * are mandatory
<br/>
</center>
</fieldset>
</div>
</form>
