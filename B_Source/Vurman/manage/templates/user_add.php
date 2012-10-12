<?php 
if(!is_array($result))
  $result = array();
if(count($result)) { ?>
<br/><span id="error">Mandatory fields * are: <?php echo implode($result,',') ?> </span><br/>
<?php } ?>

<FORM ACTION="" METHOD="post">
 <div>
  <fieldset>
   <legend>User Information</legend>
    <table class="contab" width="545">
                        
       <tr>
         <td><?php echo (CheckForError('Login',$result,'Login')).'<sup>*</sup>';?></td>
        <td><input class="norm"  type="text" name="login" id="login" value="<?php echo $_POST['login']; ?>"/></td>
       <td><?php echo (CheckForError('Password',$result,'Password')).'<sup>*</sup>';?></td>
        <td><input class="norm"  type="text" name="password" id="password" value="<?php echo $_POST['password']; ?>"/></td>
       </tr>

       <tr>
        <td>Email</td>
        <td><input class="norm"  type="text" name="email" id="credit" value="<?php echo $_POST['email']; ?>"/></td>
         
        <td>Name</td>
        <td><input class="norm"  type="text" name="name" id="valuec" value="<?php echo $_POST['name']; ?>"/></td>
       </tr>
                                      
      </table>
     </fieldset>
    </div>       
<br/>      
    <div>
     <fieldset>
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
