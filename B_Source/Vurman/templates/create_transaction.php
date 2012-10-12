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

<?php //var_dump($result); ?>

<form name='createT' method='post' action='create.php'>
<input type='hidden' name='type' value='<?php echo trim($_REQUEST['type']); ?>'/>
<div>
 <fieldset>
  <legend>SUBSCRIPTION ORDER - DETAILS<?php if($_REQUEST['type'] == 'switch'){ ?><?php } ?></legend>

  <table class="contab">
   <tr>
    <td align="right">

<?php 
if($_REQUEST['type']=='purchase')
{ 
  echo (CheckForError('BUY ISIN',$result,'BUY ISIN*')).'<sup></sup>'; 
}
else 
{

  echo (CheckForError('SELL ISIN',$result,'SELL ISIN*')).'<sup></sup>';
}
?>
   </td>

   <td>
    <select name='security1' onchange='SetValues(this.value,"0")'>
     <option value='0'><?php echo 'select';?></option>

    <?php foreach($isins as $isin){ ?>
     <option value='<?php echo $isin['id'];?>' <?php if(trim($_POST['security1']) == $isin['id']) echo"selected = 'selected'" ?>><?php echo $isin['code'];?></option>

<?php } ?>
 </select>
  </td>

  <td align="right">
   <span style='color:#FF0000'>CURRENCY*</span></td>
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
  
    <?php if($_REQUEST['type'] == 'purchase'){?>

    <tr>
     <td colspan="4">
      <div class='notification'> I<?php echo ('F ISIN IS NOT IN THE DATABASE, JUST ADD IT IN THE "REMARKS" FIELD')?> 
     </div>
    </td>
   </tr>

   <?php } ?>

   <tr>
    <td align="right">FUND NAME</td>

    <td colspan="4">
     <input class="norm" type="text" size="58" name="Name" id="Name" readonly="readonly"<?php echo show('Name'); ?>/>
    </td>
   </tr>

   <tr>
    <td align="right"><span style='color:#FF0000'><?php echo CheckForError('UNITS or AMOUNT',$result,'UNIT(S)*').'<sup></sup>';  ?></span>
    </td>

    <td>
     <input class="norm" type="text" name="Units" id="Units" <?php echo show('UNIT(S)*'); ?>/>
    </td>

    <td align="right"><span style='color:#FF0000'><?php echo CheckForError('UNITS or AMOUNT',$result,'AMOUNT*').'<sup></sup>';  ?></span>
    </td>

    <td>
     <input class="norm" type="text" name="Amount" id="Amount" <?php echo show('AMOUNT*'); ?>/>
    </td>
   </tr>

   <tr>
     <td align="right"><span style='color:#FF0000'>CUSTODY A/C*</span></td>  
     <td><select name="client" id="client" class="dropdown">
      <option value="">select</option>
      <option value="1">S1-REGULAR</option>
      <option value='2'>S2-RESTRICTED</option>
      <option value='3'>S3-U.S. PERSON</option>                   
     </select>
    </td>
   </tr>

   <tr>
    <td align="right">REMARKS</td>
    
    <td colspan="4">
     <input class="norm" type="text" size="58" name="comment" id="Final-Remarks"<?php echo show('comment'); ?>/>
    </td>
   </tr>
                        
   <?php if($_REQUEST['type'] == 'switch'){ ?>

  </table>
 </fieldset>

 <fieldset>
  <legend>SUBSCRIPTION ORDER - DETAILS</legend>
   <table class="contab">
    <tr>
     <td align="right">
      <?php echo CheckForError('BUY ISIN',$result,'BUY ISIN*').'<sup></sup>';  ?>
     </td>

     <td>
      <select name='security2' onchange='SetValues(this.value,"1")'>
       <option value='0'><?php echo 'select';?></option>
        <?php foreach($isins as $isin){ ?>
         <option value='<?php echo $isin['id'];?>' <?php if(trim($_POST['security2']) == $isin['id']) echo"selected = 'selected'" ?>><?php echo $isin['code'];?></option>
        <?php } ?>
       </select>
      </td>

      <td align="right">
       <span style='color:#FF0000'>CURRENCY*</span></td>
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
          <div class='notification'> I<?php echo ('F ISIN IS NOT IN THE DATABASE, JUST ADD IT IN THE "REMARKS" FIELD')?></div>
         </td>
        </tr>

        <tr>
         <td align="right">FUND NAME</td>

         <td colspan="4">
          <input class="norm" type="text" size="58" name="Name2" id="Name2" readonly="readonly"<?php echo show('Name2'); ?>/>
         </td>
        </tr>

        <tr>
         <td align="right"><span style='color:#FF0000'><?php echo CheckForError('UNITS or AMOUNT',$result,'UNIT(S)*').'<sup></sup>';  ?></span>
         </td>

         <td>
          <input class="norm" type="text" name="Units2" id="Units2" <?php echo show('Units2'); ?>/>
         </td>

         <td align="right"><span style='color:#FF0000'><?php echo CheckForError('UNITS or AMOUNT',$result,'AMOUNT*').'<sup></sup>';  ?></span>
         </td>

         <td>
          <input class="norm" type="text" name="Amount2" id="Amount2" <?php echo show('Amount2'); ?>/>
         </td>
        </tr>

        <tr>
         <td align="right"><span style='color:#FF0000'>CUSTODY A/C*</span></td>  
          <td><select name="client" id="client" class="dropdown">
             <option value="">select</option>
             <option value="1">S1-REGULAR</option>
             <option value='2'>S2-RESTRICTED</option>
             <option value='3'>S3-U.S. PERSON</option>                   
            </select>
           </td>
          </tr>

         <tr>
          <td align="right">REMARKS</td>

          <td colspan="4">
           <input class="norm" type="text" size="58" name="comment2" id="Final-Remarks"<?php echo show('comment'); ?>/>
               </td>
              </tr>
             <?php }?>
            </table>
           </fieldset>
          </div>

   <br />

   <div>
    <fieldset>
     <input type='submit' name='button' value='SWITCH' onclick='return verify();'/>
    </fieldset>
   </div>

   <div>
    <fieldset>
     <legend>IMPORTANT</legend>
      <center>FIELDS MARKED WITH AN ASTERISK * ARE MANDATORY</center>
     </fieldset>
    </div>
   </form>
  </body>
 </html>