<?php 
if(!is_array($result))
  $result = array();
if(count($result)) { ?>
<br/><span id="error">Mandatory fields * are: <?php echo implode($result,',') ?> </span><br/>
<?php } ?>

<FORM ACTION="" METHOD="post">
 <div>
  <fieldset>
   <legend>Custody Account Information</legend>
    <table class="contab" width="545">
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
       <td><?php echo (CheckForError('Account name',$result,'Name')).'<sup>*</sup>';?></td>
        <td><input class="norm"  type="text" name="aname" id="aname" value="<?php echo $_POST['aname']; ?>"/></td>
       </tr>

                               
      </table>
     </fieldset>
    </div>       
      
    <div>
     <fieldset>
      <legend></legend>
       <input style="float:center;" type="submit" value="Create" name="add"/>
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
