<?php
if(!defined('OSTCLIENTINC')) die('Kwaheri rafiki!'); //Say bye to our friend..

$info=($_POST && $errors)?Format::input($_POST):array(); //on error...use the post data
?>
<div>
    <?if($errors['err']) {?>
        <p align="center" id="errormessage"><?=$errors['err']?></p>
    <?}elseif($msg) {?>
        <p align="center" id="infomessage"><?=$msg?></p>
    <?}elseif($warn) {?>
        <p id="warnmessage"><?=$warn?></p>
    <?}?>
</div>

<br />

<div><center>FIELDS MARKED WITH AN ASTERISK * ARE MANDATORY</center></div>
 
 <!-- Beginn Kontaktformular -->
  <FORM ACTION="/contact.php" METHOD="post">
   <div>
    <fieldset>
     <legend>&nbsp;</legend>
      <table class="contab">
       <tr>
        <td align="right">COMPANY*</td>  
         <td><input class="norm" type="text" name="company" id="company" value=""/></td>
          <td>&nbsp;</td>
           <td>&nbsp;</td>
          </tr>
             
       <tr>
        <td align="right">SALUTATION</td>
         <td><select name="salutation" id="salutation" class="dropdown">
          <option value="" selected=selected>select</option>
           <option value="Mr" >Mr.</option>
            <option value="Mrs" >Mrs.</option>
             </select></td>
              <td>&nbsp;</td>
               <td>&nbsp;</td>
              </tr>
           
       <tr>
        <td align="right">FIRST NAME*</td>
         <td><input class="norm"  type="text" name="firstname" id="firstname" value=""/></td>
          <td>&nbsp;</td>
           <td>&nbsp;</td>

        <td align="right">LAST NAME*</td>
         <td><input class="norm"  type="text" name="lastname" id="lastname" value=""/></td>
          <td>&nbsp;</td>
           <td>&nbsp;</td>
          </tr>
                               
       <tr>
        <td align="right">E-MAIL*</td>
         <td><input class="norm"  type="text" name="email" id="email" value=""/></td>
          <td>&nbsp;</td>
           <td>&nbsp;</td>
                
        <td align="right">PHONE*</td>
         <td><input class="norm"  type="text" name="telefon" id="telefon" value=""/></td>
        </tr>  
       </table>
      </fieldset>
     </div>

     <br />
                                                                 
    <div class="btngrp">
     <fieldset>
      <legend>MESSAGE TOPIC</legend>
       <input name="messagetopic" type="radio" value="funds_transfer" />&nbsp;FUNDS TRANSFER&nbsp;
       <input name="messagetopic" type="radio" value="fund_trading" />&nbsp;FUND TRADING&nbsp;
       <input name="messagetopic" type="radio" value="general_inquiry" />&nbsp;GENERAL INQUIRY&nbsp;
      </fieldset>
     </div>

     <br />
  
    <div>
     <fieldset>
      <legend>MESSAGE*</legend>
       <textarea id="message" name="message" rows="7" cols="4" wrap="soft" style="width:85%"></textarea>
      </fieldset>
     </div>

     <br />

     <div>
      <tr>
       <td>
        <input class="button" type="submit" name="submit_x" value="SEND">
        <input class="button" type="reset" value="RESET">
        <input class="button" type="button" name="cancel" value="CANCEL" onClick='window.location.href="index.php"'>    
       </td>
      </tr>
     </div>
    </table>
   </form>

   <br />      
   <br /> 

<form action="open.php" method="POST" enctype="multipart/form-data">

<table align="left" cellpadding=2 cellspacing=1 width="90%">
 <tr>
  <th width="20%">NAME</th>
   <td>
    <?if ($thisclient && ($name=$thisclient->getName())) {
       ?>
        <input type="hidden" name="name" value="<?=$name?>"><?=$name?>
         <?}else {?>
          <input type="text" name="name" size="25" value="<?=$info['name']?>">
	   <?}?>
            &nbsp;<font class="error">*&nbsp;<?=$errors['name']?></font>
           </td>
          </tr>

          <tr>
           <th nowrap >E-MAIL</th>
            <td>
             <?if ($thisclient && ($email=$thisclient->getEmail())) {
                ?>
                 <input type="hidden" name="email" size="25" value="<?=$email?>"><?=$email?>
                  <?}else {?>             
                   <input type="text" name="email" size="25" value="<?=$info['email']?>">
                    <?}?>
                     &nbsp;<font class="error">*&nbsp;<?=$errors['email']?></font>
                    </td>
                   </tr>

          <tr>
           <td>PHONE</td>
            <td><input type="text" name="phone" size="25" value="<?=$info['phone']?>">
             &nbsp;EXT.&nbsp;<input type="text" name="phone_ext" size="6" value="<?=$info['phone_ext']?>">
              &nbsp;<font class="error">&nbsp;<?=$errors['phone']?></font>
             </td>
            </tr>

          <tr height=2px>
           <td align="left" colspan=2 >&nbsp;</td</tr>

          <tr>
           <th>HELP TOPIC</th>
            <td>
             <select name="topicId">
              <option value="" selected >select</option>
               <?
                $services= db_query('SELECT topic_id,topic FROM '.TOPIC_TABLE.' WHERE isactive=1 ORDER BY topic');
                 if($services && db_num_rows($services)) {
                  while (list($topicId,$topic) = db_fetch_row($services)){
                   $selected = ($info['topicId']==$topicId)?'selected':''; ?>
                    <option value="<?=$topicId?>"<?=$selected?>><?=$topic?></option>
                     <?
                     }
                      }else{?>
                       <option value="0" >GENERAL INQUIRY</option>
                        <?}?>
                       </select>
                      &nbsp;<font class="error">*&nbsp;<?=$errors['topicId']?></font>
                     </td>
                    </tr>

          <tr>
           <th>SUBJECT</th>
            <td>
             <input type="text" name="subject" size="35" value="<?=$info['subject']?>">
            &nbsp;<font class="error">*&nbsp;<?=$errors['subject']?></font>
           </td>
          </tr>

          <tr>
           <th valign="top">MESSAGE</th>
            <td>
             <? if($errors['message']) {?> <font class="error"><b>&nbsp;<?=$errors['message']?></b></font><br/><?}?>
              <textarea name="message" cols="35" rows="8" wrap="soft" style="width:85%"><?=$info['message']?></textarea></td>
             </tr>

    <?
     if($cfg->allowPriorityChange() ) {
      $sql='SELECT priority_id,priority_desc FROM '.TICKET_PRIORITY_TABLE.' WHERE ispublic=1 ORDER BY priority_urgency DESC';
       if(($priorities=db_query($sql)) && db_num_rows($priorities)){ ?>
        <tr>
         <td>Priority:</td>
          <td>
           <select name="pri">
            <?
             $info['pri']=$info['pri']?$info['pri']:$cfg->getDefaultPriorityId(); //use system's default priority.
              while($row=db_fetch_array($priorities)){ ?>
               <option value="<?=$row['priority_id']?>" <?=$info['pri']==$row['priority_id']?'selected':''?> ><?=$row['priority_desc']?></option>
                <?}?>
               </select>
              </td>
             </tr>
            <? }
             }?>

    <?if(($cfg->allowOnlineAttachments() && !$cfg->allowAttachmentsOnlogin())  
     || ($cfg->allowAttachmentsOnlogin() && ($thisclient && $thisclient->isValid()))){
        
      ?>
    <tr>
     <td>ATTACHMENT</td>
      <td>
       <input type="file" name="attachment"><font class="error">&nbsp;<?=$errors['attachment']?></font>
      </td>
     </tr>

    <?}?>
     <?if($cfg && $cfg->enableCaptcha() && (!$thisclient || !$thisclient->isValid())) {
      if($_POST && $errors && !$errors['captcha'])
       $errors['captcha']='Please re-enter the text again';
       ?>

    <tr>
     <th valign="top">CAPTCHA TEXT</th>
      <td><img src="captcha.php" border="0" align="left">
       <span>&nbsp;&nbsp;<input type="text" name="captcha" size="7" value="">&nbsp;<i>Enter the text shown on the image.</i></span><br/>
        <font class="error">&nbsp;<?=$errors['captcha']?></font>
       </td>
      </tr>

     <?}?>
    <tr height=2px><td align="left" colspan=2 >&nbsp;</td</tr>

    <tr>
     <td></td>
      <td>
       <input class="button" type="submit" name="submit_x" value="SEND">
        <input class="button" type="reset" value="RESET">
         <input class="button" type="button" name="cancel" value="CANCEL" onClick='window.location.href="index.php"'>    
        </td>
       </tr>
      </table>
     </form>
