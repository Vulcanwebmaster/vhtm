<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
 <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="de-ch" lang="de-ch">

<head>
 <title>Vurman - Spectrum Funds</title>
  <meta name="keywords" content="Fund Services, Fund Settlement, Hedge Funds, Offshore Funds, Subscription, Redemption">
  <meta name="description" content="Fund Services, Fund Settlement, Hedge Funds, Offshore Funds, Subscription, Redemption">
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

<style type="text/css">

p { font-family:Arial,Verdana,Helvetica,sans-serif; font-size:11pt; color:#605C88 }

body
{
 font-family:Arial,Verdana,Helvetica,sans-serif;
 background-color:#FFFFFF;
 text-align:justify;
 margin:0px;
 color:#605C88;
 font-size:12px;
}

/* Fuer Quellcode-Beispiele im Text */
code
{
 font-size:14px;
 color:#605C88;
}

/* Der Kasten mit dem Quellcode */
pre
{
 font-size:14px;
 color:#605C88;
}

a:link, a:visited, a:active, a:hover
{
  text-decoration:none;
  color:#FF0000;
  font-size:12px;
}

a:active, a:hover
{
  color:#FF0000;
}

a.menu:link, a.menu:visited
{
  color:#FF0000;
}

a.menu:active, a.menu:hover
{
  color:#FF0000;
}

/* Das Menu */
#menu {
color:#FFFFFF;
text-align:center;
padding:10px 0px;
clear:right;
}

/* Der Inhalt */
#content {
background-color:#FFFFFF;
text-align:justify;
width:605px;
padding:0px;
}

table, table td, table th
{
	border-collapse:collapse;
}

//--></style>

<script type="text/javascript" language="javascript">

/*var nyhours = parseInt("04");
var nyminutes =	parseInt("00");
var nyseconds = parseInt("00");
var nyap = "AM";
var nyhours1="";var nyseconds1="";var nyminutes1="11";

var ldhours = parseInt("08");
var ldminutes =	parseInt("00");
var ldseconds = parseInt("00");
var ldap = "AM";
var ldhours1="";var ldseconds1="";var ldminutes1="";

var tkhours = parseInt("04");
var tkminutes =	parseInt("00");
var tkseconds = parseInt("00");
var tkap = "PM";
var tkhours1=""; var tkseconds1=""; var tkminutes1="";

var akhours = parseInt("08");
var akminutes =	parseInt("00");
var akseconds = parseInt("00");
var akap = "PM";
var akhours1=""; var akseconds1=""; var akminutes1="";
*/
/*function updateClock() 
{
				//New York
                nyseconds++;
				
				if(nyseconds>59)	{nyminutes++; nyseconds=0;}
				if(nyminutes>59)	{nyhours++;	nyminutes=0;}
				
				if(nyap=="PM" && nyhours>11)
				{
					nyhours=0;	nyap="AM";
				}
				else if(nyhours>12)
				{
					nyhours=1;	if(nyap=="AM") nyap="PM";
				}
 
                // Format hours, minutes and seconds
                if (nyhours < 10)	nyhours1 = "0" + nyhours;
				else				nyhours1 =  nyhours;
				
                if (nyminutes < 10) nyminutes1 = "0" + nyminutes;
				else				nyminutes1 = nyminutes;
					
                if (nyseconds < 10) nyseconds1 = "0" + nyseconds;
				else				nyseconds1 = nyseconds;
				
				var nyelem = document.getElementById('nyclock');
 				nyelem.innerHTML = nyhours1 + ':' + nyminutes1 + " "+nyap;
						
				//London
				ldseconds++;
				
				if(ldseconds>59)	{ldminutes++; ldseconds=0;			}
				if(ldminutes>59)	{ldhours++;	ldminutes=0;}
				
				if(ldap=="PM" && ldhours>11)
				{
					ldhours=0;	ldap="AM";
				}
				else if(ldhours>12)
				{
					ldhours=1;	if(ldap=="AM") ldap="PM";
				}
 
                // Format hours, minutes and seconds
                if (ldhours < 10)	ldhours1 = "0" + ldhours;
				else				ldhours1 =  ldhours;
				
                if (ldminutes < 10) ldminutes1 = "0" + ldminutes;
				else				ldminutes1 = ldminutes;
					
                if (ldseconds < 10) ldseconds1 = "0" + ldseconds;
				else				ldseconds1 = ldseconds;
				
				var ldelem = document.getElementById('ldclock');
 				ldelem.innerHTML = ldhours1 + ':' + ldminutes1 +" "+ldap;
				
				//Tokyo
				tkseconds++;
				
				if(tkseconds>59)	{tkminutes++; tkseconds=0;			}
				if(tkminutes>59)	{tkhours++;	tkminutes=0;}
				
				if(tkap=="PM" && tkhours>11)
				{
					tkhours=0;	tkap="AM";
				}
				else if(tkhours>12)
				{
					tkhours=1;	if(tkap=="AM") tkap="PM";
				}
 
                // Format hours, minutes and seconds
                if (tkhours < 10)	tkhours1 = "0" + tkhours;
				else				tkhours1 =  tkhours;
				
                if (tkminutes < 10) tkminutes1 = "0" + tkminutes;
				else				tkminutes1 = tkminutes;
					
                if (tkseconds < 10) tkseconds1 = "0" + tkseconds;
				else				tkseconds1 = tkseconds;
				
				var tkelem = document.getElementById('tkclock');
 				tkelem.innerHTML = tkhours1 + ':' + tkminutes1 +" "+tkap;
				
				//Auck Land
				akseconds++;
				
				if(akseconds>59)	{akminutes++; akseconds=0;			}
				if(akminutes>59)	{akhours++;	akminutes=0;}
				
				if(akap=="PM" && akhours>11)
				{
					akhours=0;	akap="AM";
				}
				else if(akhours>11)
				{
					akhours=1;	if(akap=="AM") akap="PM";
				}
 
                // Format hours, minutes and seconds
                if (akhours < 10)	akhours1 = "0" + akhours;
				else				akhours1 =  akhours;
				
                if (akminutes < 10) akminutes1 = "0" + akminutes;
				else				akminutes1 = akminutes;
					
                if (akseconds < 10) akseconds1 = "0" + akseconds;
				else				akseconds1 = akseconds;
				
				var akelem = document.getElementById('akclock');
 				akelem.innerHTML = akhours1 + ':' + akminutes1 +" "+akap;
}*/

</script>

</head>

<body onload="setInterval('updateClock()', 1000);">

<div align="center" style="width:100%; margin:0px; top:0px; padding-top:50px;">

<div align="center" style="margin:0px; background-image:url(images/map1.png); width:500px; height:285px; background-repeat:no-repeat; padding:0px; padding-bottom:20px; clear:both; border:0px solid #333; margin-bottom:0px;">

<div style="position:relative; top:80px; border:0px solid #ccc; width:100px; left:-125px; color:red; clear:both; " >

<a href="http://24timezones.com/world_directory/current_new_york_time.php" style="text-decoration: none" target="_BLANK" title="local time New York"></a> <span id="tzTimeSpan_ee4e7dc2c49a935"></span>

<script type="text/javascript" src="http://24timezones.com/js/en/time_12_0_0.js"></script>

<script src="http://24timezones.com/timescript/gettime.js.php?city=179&hourtype=12&showdate=0&showseconds=0&id=435814&elem=ee4e7dc2c49a935" language="javascript"></script>

<br/>New York

</div>


<div style="position:relative; top:45px; border:0px solid #ccc; width:100px; left:0px; color:red; clear:both; " >

<a href="http://24timezones.com/world_directory/current_london_time.php" style="text-decoration: none" target="_BLANK" title="local time London"></a> <span id="tzTimeSpan_ee4e7dc5dd26efe"></span>

<script src="http://24timezones.com/timescript/gettime.js.php?city=136&hourtype=12&showdate=0&showseconds=0&id=435821&elem=ee4e7dc5dd26efe" language="javascript"></script>

<br/>London

</div>


<div style="position:relative; top:30px; border:0px solid #ccc; width:100px; left:190px; color:red; clear:both; " >

<a href="http://24timezones.com/world_directory/current_tokyo_time.php" style="text-decoration: none" target="_BLANK" title="local time Tokyo"></a><span id="tzTimeSpan_ee4e7dc3df50e7b"></span>

<script src="http://24timezones.com/timescript/gettime.js.php?city=248&hourtype=12&showdate=0&showseconds=0&id=435819&elem=ee4e7dc3df50e7b" language="javascript"></script>

<br/>Tokyo

</div>


<div style="position:relative; top:135px; border:0px solid #ccc; width:100px; left:235px; color:red; clear:both; " >

<a href="http://24timezones.com/world_directory/current_auckland_time.php" style="text-decoration: none" target="_BLANK" title="local time Auckland"></a> <span id="tzTimeSpan_ee4e7dc3385ae5f"></span>

<script src="http://24timezones.com/timescript/gettime.js.php?city=22&hourtype=12&showdate=0&showseconds=0&id=435817&elem=ee4e7dc3385ae5f" language="javascript"></script>

<br/>Auckland

</div>
<!-- <img src="images/map1.png" style="clear:both"  />-->
</div>
</div>


<div id="menu_t">
 <a class="menu_t"></a>
</div>

<div align="center" style="width:auto;margin:auto;">
 <span id="idTabstripContent_Body">... INTERESTED IN JOINING OUR NETWORK? CLICK<a href="contact.php" target="_blank" style="font-size:12px"> HERE</a> FOR THE CONTACT FORM.</span>
</div>

 <br />
 <br />

 <table border="1" cellspacing="5" cellpadding="5" bordercolor="lightgrey" align="center">
  <tr>
   <td>
   </td>
  </tr>
 </table>


 <table border="0" cellspacing="0" cellpadding="05" bordercolor="lightgrey" frame="below">
  <tr>
   <td width="320" bgcolor="#FFFFFF" align="center">
    <img src="key.jpg" align="middle" alt="" /><font color="#605C88">ACCESS YOUR ACCOUNT ONLINE</font>
   </td>
  </tr>
 </table>

 <table border="0" cellspacing="0" cellpadding="0" bordercolor="lightgrey">
  <tr>
   <td width="320" bgcolor="#FFFFFF">
    <form action='' method='post'>
     <font color="#605C88">
   </td>
  </tr>
 </table>
         
 <table border="0" cellspacing="0" cellpadding="0">
  <tr>
   <td>
    <input type="hidden" name='sid' value='' />
    <input type="hidden" name='kunde' value='' />
    <input type="hidden" name='domain' value='' />
    <input type="hidden" name='menu' value='' />
    <font size="-2"></font>
   </td>
  </tr>

  <tr>
   <td width="100" valign="baseline">USERNAME</td>
   <td width="15"></td>
   <td valign="baseline" nowrap="nowrap">
    <input type="text" name='username' value='' style="width:150px;" size='30' maxlength='30' />
   </td>
  </tr>

  <tr>
   <td width="100" nowrap="nowrap" valign="baseline">PASSWORD</td>
   <td width="15"></td>
   <td valign="baseline" nowrap="nowrap">
    <input type="password" name='password' value='' style="width:150px;" size='30' maxlength='30' />
   </td>
  </tr>

  <tr>
   <td style="padding:10px; padding-left:0px;">
    <input type="submit" value='Login' name='button' style="text-transform:uppercase; font-size:12px;" />
    <input type="hidden" name='zone' value='' />
    <input type="hidden" name='menu' value='' />
    <input type="hidden" name='domain' value='' />
    <input type="hidden" name='record' value='' />
    <input type="hidden" name='bill' value='' />
    <input type="hidden" name='kunde' value='' />
    <input type="hidden" name='newdom' value='' />
   </td>
  </tr>
 </table>   
	 
    <div style="width:805px; margin:30px auto;">
     <fieldset>
      <p style="padding:5px; margin:10px auto; text-align:justify;">Welcome to Vurman Fund Services Limited<br /><br />We are glad that you are interested in learning more about our services.<br /><br />Vurman Fund Services (Vurman - Spectrum Funds) is a New Zealand Limited Company and registered Financial Service Provider.<br /><br />As a client you are offered fund administration and custody services. A highly motivated and dedicated team not only takes care of potential fund settlement problems in a timely and professional manner, but also excels in support for transfers, subscriptions and redemptions to alternative funds. In addition, you will have access to an extensive fund database.<br /><br />An experienced team of IT-professionals is committed to become your long-term and trusted partner for innovative programming solutions and outsourcing services.<br /><br />A personal meeting is the best way to become acquainted with one another, and it provides an opportunity for answering any questions - please feel free to contact us via the prepared contact form, in order to arrange an appointment.</p>
     </fieldset>
    </div>
   </div>
  </div>
 </body>
</html>