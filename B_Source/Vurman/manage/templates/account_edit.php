<?php 
if(!is_array($result))
  $result = array();
if(count($result)) { ?>
<br/><span id="error">Mandatory fields * are: <?php echo implode($result,',') ?> </span><br/>
<?php } ?>

<FORM ACTION="" METHOD="post">
 <input type='hidden' name='id_account' value='<?php echo $_POST['id_account']?>' />
  <div>
   <fieldset>
    <legend>Account Information</legend>
     <table class="contab" width="545" >
      <tr>
      
       <td><?php echo (CheckForError('Currency',$result,'Currency')).'<sup>*</sup>';?></td>
        <td><select name="currency" id="currency" class="dropdown">
         <option value=""> please select</option>
          <?php foreach ($currencies as $currency): ?>
         <option value='<?php echo $currency['id'];?>' <?php if(trim($_POST['currency']) == $currency['id']) echo"selected = 'selected'" ?> ><?php echo $currency['cuname'];?></option>
        <?php endforeach; ?>
       </select>
      </td>

      <td>&nbsp;</td>
       <td align='right'><a href='account_history.php?id=<?php echo $_GET['id'] ?>'>Account history</a></td>
     </tr>
                        
     <tr>
     <tr>
      
      <td><?php echo (CheckForError('Client',$result,'Client')).'<sup>*</sup>';?></td>
       <td><select name="client" id="currency" class="dropdown">
        <option value=""> please select</option>
         <?php foreach ($clients as $client): ?>
        <option value='<?php echo $client['id'];?>' <?php if(trim($_POST['client']) == $client['id']) echo"selected = 'selected'" ?>><?php echo $client['name'];?></option>
       <?php endforeach; ?>
      </select>
     </td>
    </tr>
                        
    <tr>
     <td><?php echo (CheckForError('Amount',$result,'Amount')).'<sup>*</sup>';?></td>
      <td><input class="norm"  type="text" name="amount" id="amount" value="<?php echo $_POST['amount']; ?>"/></td>
       <td><?php echo (CheckForError('Account name',$result,'Name')).'<sup>*</sup>';?></td>
        <td><input class="norm"  type="text" name="aname" id="aname" value="<?php echo $_POST['aname']; ?>"/></td>
   </tr>


   <tr>
    <td>Credit</td>
     <td><input class="norm"  type="text" name="credit" id="credit" value="<?php echo $_POST['credit']; ?>"/></td>
         
    <td>Value Date</td>
     <td><input class="norm"  type="text" name="valuec" id="valuec" value="<?php echo $_POST['valuec']; ?>"/></td>
   </tr>
                                      
   <tr>
    <td>Debit</td>
     <td><input class="norm"  type="text" name="debit" id="debit" value="<?php echo $_POST['debit']; ?>"/></td>
       
    <td>Value Date</td>
     <td><input class="norm"  type="text" name="valued" id="valued" value="<?php echo $_POST['valued']; ?>"/></td>
   </tr>  
  </table>
 </fieldset>
</div>       
      
<div>
 <fieldset>
  <legend></legend>
   <input style="float:center;" type="submit" value="Update" name="add"/>
  </fieldset>
 <span style="clear:both;"></span>
</div>
 
<div>
 <fieldset>
  <legend>Important</legend>
   <center>Fields marked with an asterisk * are mandatory<br/>
  </fieldset>
 </div>
</form>
