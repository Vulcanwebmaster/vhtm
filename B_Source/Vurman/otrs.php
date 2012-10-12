<?php
include('config.php');
include($templates.'menu.html');
?>
         
<center>




<script language="JavaScript" type="text/javascript">
<!--
function submit_form() {

    now = new Date();
    Diff = now.getTimezoneOffset();
    document.login.TimeOffset.value = Diff;

    return true;
}
//-->
</script>
        
<p>
 <form action="/otrs/index.pl" method="post" enctype="application/x-www-form-urlencoded" name="login">
  <input type="hidden" name="Action" value="Login"/>
  <input type="hidden" name="RequestedURL" value=""/>
  <input type="hidden" name="Lang" value="de"/>
  <input type="hidden" name="TimeOffset" value=""/>
  <table border="0" cellspacing="0" cellpadding="3" width="280">
   <tr>
    <td align="center" class="singleboxhead">WELCOME TO OTRS</td>
   </tr>
   
 <tr>
  <td align="center" class="singleboxbody">
   <table cellspacing="8" cellpadding="2">
    <tr>
     <td class="singleboxkey">USERNAME</td>
     <td class="singleboxvalue"><input type="text" name="User" value="" size="18"/></td>
    </tr>
    
    <tr>
     <td class="singleboxkey">PASSWORD</td>
     <td class="singleboxvalue"><input type="password" name="Password" size="18"/></td>
    </tr>
   </table>
   
     <input class="button" type="submit" value="Login" onclick="return submit_form();"/>
    </form> 
   </td>
  </tr>
 </table>
</p> 
  
<p>
 <form action="/otrs/index.pl" method="post" enctype="application/x-www-form-urlencoded">
  <input type="hidden" name="Action" value=""/>
  <input type="hidden" name="RequestedURL" value=""/>
  <table border="0" cellspacing="0" cellpadding="3" width="280">
   <tr>
    <td align="center" class="singleboxhead">&nbsp;</td>
   </tr>
   
   <tr>
    <td align="center" class="singleboxbody">
     <table cellspacing="8" cellpadding="2">
      <tr>
       <td class="singleboxkey">LANGUAGE</td>
       <td class="singleboxvalue"><select id="Lang" name="Lang" onchange="submit()"  >
       <option selected value="de">Deutsch&nbsp;</option>
       <option value="en">English&nbsp;</option>    
      </select><a id="AJAXImageLang"></a></td>
     </tr>
    </table>
    
      <input class="button" type="submit" value="submit"/>
     </form> 
    </td>
   </tr>
  </table>
 </p>

<!--start LostPassword-->
<p>

<center>
  
<table border="0" cellspacing="0" cellpadding="3" width="280">
 <tr>
  <td align="center" class="singleboxhead">FORGOT YOUR PASSWORD? NO WORRIES...</td>
 </tr>
 
 <tr>
  <td align="center" class="singleboxbody">
   <i class="small">(APPLY FOR A NEW PASSWORD)</i>
    <form action="/otrs/index.pl" method="post" enctype="application/x-www-form-urlencoded">
     <input type="hidden" name="Action" value="LostPassword"/>
     <input type="hidden" name="Lang" value="de"/>
      <table cellspacing="8" cellpadding="2">
       <tr>
        <td class="singleboxkey">USER</td>
        <td class="singleboxvalue"><input type="text" name="User" value="" size="18"/></td>
       </tr>
      </table>
      
        <input class="button" type="submit" value="submit"/>
       </form> 
      </td>
     </tr>
    </table>
   </p>
<!--stop LostPassword -->

<table border="0" cellspacing="0" cellpadding="3">
 <tr>
  <td align="center" class="small">Powered by <a href="http://otrs.org/" class="small">OTRS 2.4.5</a></td>
 </tr>
</table>

</center>

<?php
include($templates.'footer.html');
?>

