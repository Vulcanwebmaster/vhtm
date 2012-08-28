<!--                                                                           -->
<!-- OTRS: Copyright 2001-2009, OTRS Project. This Software is under the AGPL. -->
<!--          Web: http://otrs.org/ - Lists: http://lists.otrs.org/            -->
<!--  GNU AFFERO General Public License: http://www.gnu.org/licenses/agpl.txt  -->
<!--                                                                           -->

<html>
<head>
<link rel="Stylesheet" href="styles1.css" />
</head>

<body>

<!-- start login -->
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

<div id="main_center">
<div id="title">
<img src="ZEIT8.jpg" alt="" />
</div> 
       
<!--  Menü  -->
<div id="menu_t">
<a class="menu_t" href="index.html" target="_top">INDEX PAGE</a>
</div>
        
<center>

<p>
 <table border="0" cellspacing="0" cellpadding="3" width="300">
  <tr>
   <td align="center" class="singleboxhead">WELCOME TO OTRS</td>
  </tr>
  
  <tr>
   <td class="singleboxbody">
    <form action="/otrs/customer.pl" method="post" enctype="application/x-www-form-urlencoded" name="login">
     <input type="hidden" name="Action" value="Login"/>
     <input type="hidden" name="RequestedURL" value=""/>
     <input type="hidden" name="Lang" value="de"/>
     <input type="hidden" name="TimeOffset" value=""/>
     <table cellspacing="8" cellpadding="2">
      <tr>
       <td>USERNAME</td>
       <td><input type="text" name="User" value="" size="18"/></td>
      </tr>
      
      <tr>
       <td>PASSWORD</td>
       <td><input type="password" name="Password" size="18"/></td>
      </tr>
     </table>
     
       <input class="button" type="submit" value="Login" onclick="return submit_form();"/>
      </form>
     </td>
    </tr>
   </table>
  </p>

<!--start LostPassword-->
<p>
 <table border="0" cellspacing="0" cellpadding="3" width="300">
  <tr>
   <td class="singleboxhead">FORGOT YOUR PASSWORD? NO WORRIES...</td>
  </tr>
  
  <tr>
   <td class="singleboxbody">
    <form action="/otrs/customer.pl" method="post" enctype="application/x-www-form-urlencoded">
     <input type="hidden" name="Action" value="CustomerLostPassword"/>
     <input type="hidden" name="Lang" value="de"/>
     <table cellspacing="8" cellpadding="2">
      <tr>
       <td>USER</td>
       <td><input type="text" name="User" value="" size="18"/></td>
      </tr>
      
      <tr>
       <td colspan="2"><i class="small">(APPLY FOR A NEW PASSWORD)</i></td>
      </tr>
     </table>
     
       <input class="button" type="submit" value="submit"/>
      </form>
     </td>
    </tr>
   </table>
  </p>
<!--stop LostPassword -->

<p>
 <form action="/otrs/customer.pl" method="post" enctype="application/x-www-form-urlencoded">
  <input type="hidden" name="Action" value=""/>
  <input type="hidden" name="RequestedURL" value=""/>
  <table border="0" cellspacing="0" cellpadding="3" width="300">
   <tr>
    <td class="singleboxbody">
     <table cellspacing="8" cellpadding="2">
      <tr>
       <td>LANGUAGE</td>
       <td><select id="Lang" name="Lang"   onchange="submit()"  >
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

<!--start CreateAccount-->
 <p>
  <table border="0" cellspacing="0" cellpadding="3" width="300">
   <tr>
    <td class="singleboxhead">TO GAIN ACCESS</td>
   </tr>
   
   <tr>
    <td class="singleboxbody">
     <form action="/otrs/customer.pl" method="post" enctype="application/x-www-form-urlencoded">
      <input type="hidden" name="Action" value="CustomerCreateAccount"/>
      <input type="hidden" name="Lang" value="de"/>
      <table border="0" cellspacing="0" cellpadding="3">
       <tr>
        <td>FIRST NAME</td>
        <td> <input type="text" name="Firstname" value="" size="25" maxlength="50"/></td>
       </tr>
       
       <tr>
        <td>LAST NAME</td>
        <td> <input type="text" name="Lastname" value="" size="25" maxlength="50"/></td>
       </tr>
       
       <tr>
        <td>E-MAIL</td>
        <td> <input type="text" name="Email" value="" size="25" maxlength="50"/></td>
       </tr>
      </table>
      
        <input class="button" type="submit" value="submit"/>
       </form>
      </td>
     </tr>
    </table>
<!--stop CreateAccount -->

<!-- stop login -->

<table border="0" cellspacing="0" cellpadding="3">
 <tr>
  <td align="center" class="small">Powered by <a href="http://otrs.org/" class="small">OTRS 2.4.5</a></td>
 </tr>
</table>

</center>

 </body>
</html>