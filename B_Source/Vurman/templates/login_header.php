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
<?php
date_default_timezone_set('UTC');
$gmtdate=gmdate('M d Y h:i A');
$str=strtotime($gmtdate);
//echo $gmtdate;

$newyorkstr= strtotime("-4 hour",$str);
$londonstr= strtotime("now",$str);
$tokyostr= strtotime("+8 hour",$str);
$aucklandstr= strtotime("+12 hour",$str);

$newyorktime=date('h:i:s A', $newyorkstr);
$londontime=date('h:i:s A', $londonstr);
$tokyotime=date('h:i:s A', $tokyostr);
$aucklandtime=date('h:i:s A', $aucklandstr);

$newyorkArr=explode(" ",$newyorktime);
$newyorkArr1=explode(":",$newyorkArr[0]);
$newyorkap=$newyorkArr[1];
$newyorkhr=$newyorkArr1[0];
$newyorkmin=$newyorkArr1[1];
$newyorksec=$newyorkArr1[2];

$londonArr=explode(" ",$londontime);
$londonArr1=explode(":",$londonArr[0]);
$londonap=$londonArr[1];
$londonhr=$londonArr1[0];
$londonmin=$londonArr1[1];
$londonsec=$londonArr1[2];

$tokyoArr=explode(" ",$tokyotime);
$tokyoArr1=explode(":",$tokyoArr[0]);
$tokyoap=$tokyoArr[1];
$tokyohr=$tokyoArr1[0];
$tokyomin=$tokyoArr1[1];
$tokyosec=$tokyoArr1[2];

$aucklandArr=explode(" ",$aucklandtime);
$aucklandArr1=explode(":",$aucklandArr[0]);
$aucklandap=$aucklandArr[1];
$aucklandhr=$aucklandArr1[0];
$aucklandmin=$aucklandArr1[1];
$aucklandsec=$aucklandArr1[2];
?>
<script type="text/javascript" language="javascript">

/*var nyhours = parseInt("<?php echo $newyorkhr; ?>");
var nyminutes =	parseInt("<?php echo $newyorkmin; ?>");
var nyseconds = parseInt("<?php echo $newyorksec; ?>");
var nyap = "<?php echo $newyorkap; ?>";
var nyhours1="";var nyseconds1="";var nyminutes1="11";

var ldhours = parseInt("<?php echo $londonhr; ?>");
var ldminutes =	parseInt("<?php echo $londonmin; ?>");
var ldseconds = parseInt("<?php echo $londonsec; ?>");
var ldap = "<?php echo $londonap; ?>";
var ldhours1="";var ldseconds1="";var ldminutes1="";

var tkhours = parseInt("<?php echo $tokyohr; ?>");
var tkminutes =	parseInt("<?php echo $tokyomin; ?>");
var tkseconds = parseInt("<?php echo $tokyosec; ?>");
var tkap = "<?php echo $tokyoap; ?>";
var tkhours1=""; var tkseconds1=""; var tkminutes1="";

var akhours = parseInt("<?php echo $aucklandhr; ?>");
var akminutes =	parseInt("<?php echo $aucklandmin; ?>");
var akseconds = parseInt("<?php echo $aucklandsec; ?>");
var akap = "<?php echo $aucklandap; ?>";
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

<div align="center" style=" padding:10px; padding-bottom:30px; text-transform:uppercase;">
	<!--<div style="width:650px; font-size:1.1em; color:#605C88; font-weight:bold;">Being inspired, improve each day and have some fun - that's us!</div>-->
</div>


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


