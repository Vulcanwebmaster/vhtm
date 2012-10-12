<?php 

require_once('core/connect.php');

require_once('core/CoreClass.php');

require_once('BLL/IsinBLL.php');

require_once('BLL/CurrencyBLL.php');

require_once('BLL/Custody_ACBLL.php');

require_once('BLL/FundPortFolioBLL.php');

require_once('BLL/UserBLL.php');



$objISIN=new IsinClass($db);

$arrISIN=$objISIN->GetIsinUsingArray();



$objCurrency=new CurrencyClass($db);

$arrCurrency=$objCurrency->GetCurrencyUsingArray();



$fund_position=0;



if($_SESSION['usertype']=="user"){

	$userid = $_SESSION['login']; 

	$objUser=new UserClass($db);

	$objUser->id=$userid;

	$arrUser=$objUser->SearchUser();

	

	if(sizeof($arrUser)>0)

	{

		$client=$arrUser[0]['login_id'];

		$clientname=$arrUser[0]['first_name'];

	}

	

	$objCustodyAC=new Custody_ACClass($db);

	$objCustodyAC->id_client=$client;

	$arrCustodyAC=$objCustodyAC->SearchCustody_AC();

} 



if(isset($_POST['view_transaction']))

{

	if(isset($_POST['Client-ID']) && $_POST['Client-ID']!="")

	{

		$client=$_POST['Client-ID'];

		$clientname=$_POST['Client'];

		$fund_position=175;

		

		$objCustodyAC=new Custody_ACClass($db);

		$objCustodyAC->id_client=$client;

		$arrCustodyAC=$objCustodyAC->SearchCustody_AC();

		

		function GetCustodyACName($arrCustodyAC,$cust_id)

		{

			$custname="";

			for($i=0;$i<sizeof($arrCustodyAC);$i++)

			{

				if($arrCustodyAC[$i]['id']==$cust_id)

				{

					$custname=$arrCustodyAC[$i]['name'];

					break;

				}

			}

			

			return $custname;

		}

		

		$isin=$_POST['security1'];

		

		$objFundPortFolio=new FundPortfolioClass($db);

		$objFundPortFolio->id_client=$client;

		

		if($isin!="")
		{
			$objFundPortFolio->id_isin=$isin;
		}
		

		

		$arrFundPortFolio=$objFundPortFolio->SearchFundPortfolio();

		

		for($i=0;$i<sizeof($arrFundPortFolio);$i++)

		{

			if($arrFundPortFolio[$i]['credit']!=null && $arrFundPortFolio[$i]['credit']!="" && $arrFundPortFolio[$i]['credit']>=0)

			{

				$fund_position+=$arrFundPortFolio[$i]['credit'];

			}

			

			if($arrFundPortFolio[$i]['debit']!=null && $arrFundPortFolio[$i]['debit']!="" && $arrFundPortFolio[$i]['debit']>=0)

			{

				$fund_position-=$arrFundPortFolio[$i]['debit'];

			}

		}

		

		$allbookings=0;

		$arrFundPortFolio1=$objFundPortFolio->GetAllBookings();



		if($isin>0)

		{

			if($arrFundPortFolio1)

			{

				$row = mysql_fetch_row($arrFundPortFolio1);

				$tempdebit=$row[1];

				$tempcredit=$row[0];

				$allbookings=175+$tempcredit-$tempdebit;

			}

		}

		

	}

	else

		$msgError="Client is Blank.";

}



function formatdate($dt)

{

	$tempdt=explode(" ",$dt);

	return $tempdt[0];

}



?>



<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="de-ch" lang="de-ch">

<head>

    <title>Vurman - Spectrum Funds</title>

    <meta name="keywords" content="Fund Services, Fund Settlement, Hedge Funds, Offshore Funds, Subscription, Redemption">

    <meta name="description" content="Fund Services, Fund Settlement, Hedge Funds, Offshore Funds, Subscription, Redemption">

    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

    <link rel="Stylesheet" href="css/styles.css" />

    <link rel="stylesheet" href="css/redmond/jquery-ui-1.7.2.custom.css" />

	<script src="js/jquery-1.3.2.min.js" type="text/javascript"></script>

    <script src="js/common.js" type="text/javascript"></script>

	<script type="text/javascript" src="js/jquery-ui-1.7.2.custom.min.js"></script>

    <script type="text/javascript" src="js/portfolio_client.js"></script>

    <?php 

		echo $objISIN->GetISINJSON();

		echo $objCurrency->GetCurrencyJSON();

	?>

    <style type="text/css">

	.contab td

	{

		padding-left:5px;

		padding-right:5px;

		text-align:left;

	}
	div{
		padding-top:5px;
		padding-bottom:5px;
	}
	</style>

</head>

<body>

    <div id="main_cont">

        <div id="title">

            <img src="logo_client.jpg" alt="" /></div>

        <div id="left">

            <?php require_once('include/menu-left-client.php'); ?>

        </div>

      

        <div id="content">        

<span id="error" style="display:none; color:#F00;">PLEASE ENTER ISIN</span><br />



<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" >

 <div align="left">

  <fieldset>

   <legend >SEARCH FUND POSITION</legend>

    <table class="contab" align="center">

     <tr>

      <td align="right" style="text-align:right"><span style='color:#FF0000'>CLIENT *</span></td>

       <td align="left"><input class="norm" type="text" <?php if($_SESSION['usertype']=="user"){ echo "value='".$client."' readonly='readonly'";} ?> name="Client-ID" id="Client-ID" style="width:80px;" onChange="getClientName();" /></td>

       <td align="right" style="text-align:right">CUSTODY A/C</td>

       <td align="center">

       <select name="custody-ac" id="custody-ac" class="dropdown">

         <?php 

		 	if($_SESSION['usertype']=="user"){

				echo "<option>select</option>";

				for($i=0;$i<sizeof($arrCustodyAC);$i++)

				{

					echo "<option value='".$arrCustodyAC[$i]['id']."'>".$arrCustodyAC[$i]['name']."</option>";

				}

			}

		 ?>

       </select></td>

       </tr>

                

     <tr>

      <td align="right" style="text-align:right">CLIENT NAME</td>  

      <td colspan="3" align="left"><input name="Client" type="text" class="norm" <?php if($_SESSION['usertype']=="user"){ echo "value='".$clientname."' readonly='readonly'";} ?> id="Client" style="width:242px;" size="62" readonly="readonly" /></td>

          

      

     </tr>

            

     <tr>

       <td align="right" style="text-align:right"><span style='color:#FF0000'>ISIN *</span></td>

       <td align="left"><input type="text" id="security1" class="norm" style="width:105px;" name="security1" /></td>

       

       <td align="right" style="text-align:right">CREDIT / DEBIT</td>

       <td align="left"><select name="credit_debit" id="credit_debit" class="dropdown">

         <option value="0" selected="selected">select</option>

         <option value="1">CREDIT</option>

         <option value="2">DEBIT</option>

       </select></td>

     </tr>

     <tr>

       <td align="right" style="text-align:right">DATE RANGE FROM </td>

       <td align="left"><input class="norm" type="text"  name="fromdt" id="fromdt" style="width:80px;" /></td>

       <td align="right" style="text-align:right">TO</td>

       <td align="left"><input class="norm" type="text" name="todt" id="todt" style="width:80px;" /></td>

     </tr>

     </table>

    </fieldset>

   </div>
    

      

    <div style="clear:both;">

     <fieldset>

      <input style="float:center; font-size:11px;" name="view_transaction" type="submit" value="VIEW TRANSACTION(S)" onclick="return check();" />

     </fieldset>

    </div>

	<?php 

	if(isset($_POST['view_transaction']))

	{

	?>


    <div align="left">

    <fieldset>

	    <legend>FUND POSITION</legend>

        <table width="575" align="center" class="ui-widget ui-widget-content contab">

        <tr class="ui-widget-header ">

          <th align="center" style="width:125px; text-align:center" >TOTAL POSITION</th>

          <th align="center" style="text-align:center" >ISIN </th>

          <th align="center" style="text-align:center" >FUND NAME</th>

        </tr>

        <tr >

          <td align="center" style="text-align:center"><?php echo $fund_position; ?></td>

          <td align="center" style="text-align:center"><?php echo stripslashes($isin); ?></td>

          <td align="center" style="text-align:center"><?php echo $arrFundPortFolio[0]['fund_name']; ?></td>

        </tr>

      </table>

    </fieldset>
	</div>
    

    <div align="left">

    <fieldset >

	    <legend>CUSTODY A/C</legend>

        

         <?php 

		if(isset($arrCustodyAC) && sizeof($arrCustodyAC)>0)

		{

			for($i=0;$i<sizeof($arrCustodyAC);$i++)

			{

				$temp_position=0;

				$custody_name=$arrCustodyAC[$i]['name'];

				if(strpos($custody_name,"REG") || strpos($custody_name,"S1"))

					$temp_position=100;

				else if(strpos($custody_name,"US")|| strpos($custody_name,"U.S.") || strpos($custody_name,"S3"))

					$temp_position=50;

				else if(strpos($custody_name,"RES") || strpos($custody_name,"S2"))

					$temp_position=25;

					

				for($j=0;$j<sizeof($arrFundPortFolio);$j++)

				{

					if($arrCustodyAC[$i]['id']==$arrFundPortFolio[$j]['custody_ac'] )

					{

						if($arrFundPortFolio[$j]['debit']!=null && $arrFundPortFolio[$j]['debit']!="" && $arrFundPortFolio[$j]['debit']>=0)

						{

							$temp_position-=$arrFundPortFolio[$j]['debit'];

						}

						

						if($arrFundPortFolio[$j]['credit']!=null && $arrFundPortFolio[$j]['credit']!="" && $arrFundPortFolio[$j]['credit']>=0)

						{

							$temp_position+=$arrFundPortFolio[$j]['credit'];

						}

					}

				}

		?>

        <table align="left"  class="ui-widget ui-widget-content contab" style="margin-left:5px; width:188px" >

	      <tr  class="ui-widget-header ">

	         <th style="text-align:center"><?php echo $custody_name; ?></th>

          </tr>

          <tr>

        	 <td style="text-align:center" align="center"><?php echo $temp_position; ?></td>

          </tr>

        </table>

        <?php

			}

		}

		?>

        

    </fieldset>
	</div>


    <?php 

		if(isset($_POST['fromdt']) && $_POST['fromdt']!="")

			$objFundPortFolio->fromdt=$_POST['fromdt'];

		if(isset($_POST['todt']) && $_POST['todt']!="")

			$objFundPortFolio->todt=$_POST['todt'];

		

		if(isset($_POST['custody-ac']) && $_POST['custody-ac']>0)

		{

			

			$objFundPortFolio->custody_ac=$_POST['custody-ac'];

		}

		$arrFundPortFolio=$objFundPortFolio->SearchFundPortfolio();

	?>

    <?php 

	if(isset($_POST['credit_debit'])&& ($_POST['credit_debit']==0 || $_POST['credit_debit']==1) )

	{

	?>
	<div align="left">
    <fieldset>

	    <legend>CREDIT</legend>

        <table width="575" align="center" class="ui-widget ui-widget-content">

        <tr class="ui-widget-header ">

          <th align="center" width="20%" style="font-weight:normal">CREDIT(S)</th>

          <th align="center" width="30%" style="font-weight:normal">CUSTODY A/C</th>

          <th align="center" width="25%" style="font-weight:normal">REFERENCE</th>

          <th align="center" width="25%" style="font-weight:normal">VALUE DATE</th>

        </tr>

       	<?php 

		

		for($i=0;$i<sizeof($arrFundPortFolio);$i++)

		{

			if($arrFundPortFolio[$i]['credit']!=null && $arrFundPortFolio[$i]['credit']!="" && $arrFundPortFolio[$i]['credit']>=0)

			{

				

		?>

        <tr>

          <td align="right" ><?php echo $arrFundPortFolio[$i]['credit']; ?></td>

          <td align="center" ><?php echo GetCustodyACName($arrCustodyAC,$arrFundPortFolio[$i]['custody_ac']); ?></td>

          <td align="center" ><?php echo $arrFundPortFolio[$i]['credit_ref']; ?></td>

          <td align="center" ><?php echo formatdate($arrFundPortFolio[$i]['credit_date']); ?></td>

        </tr>

        <?php 

			}

		}

		?>

        </table>

    </fieldset>
	</div>

    <?php 

	}

	?>

    <?php 

	if(isset($_POST['credit_debit'])&& ($_POST['credit_debit']==0 || $_POST['credit_debit']==2) )

	{

	?>
	<div align="left">
    <fieldset>

	    <legend>DEBIT</legend>

	    <table width="575" align="center" class="ui-widget ui-widget-content">

	      <tr class="ui-widget-header ">

	        <th align="center" width="20%" style="font-weight:normal">DEBIT(S)</th>

            <th align="center" width="30%" style="font-weight:normal" >CUSTODY A/C</th>

	        <th align="center" width="25%" style="font-weight:normal">REFERENCE</th>

	        <th align="center" width="25%" style="font-weight:normal">VALUE DATE</th>

          </tr>

          <?php 

		  for($i=0;$i<sizeof($arrFundPortFolio);$i++)

			{

				

				if($arrFundPortFolio[$i]['debit']!=null && $arrFundPortFolio[$i]['debit']!="" && $arrFundPortFolio[$i]['debit']>=0)

				{

					$fund_position-=$arrFundPortFolio[$i]['debit'];

		  ?>

	     <tr >

          <td align="right" ><?php echo $arrFundPortFolio[$i]['debit']; ?></td>

          <td align="center" ><?php echo GetCustodyACName($arrCustodyAC,$arrFundPortFolio[$i]['custody_ac']); ?></td>

          <td align="center" ><?php echo $arrFundPortFolio[$i]['debit_ref']; ?></td>

          <td align="center" ><?php echo formatdate($arrFundPortFolio[$i]['debit_date']); ?></td>

        </tr>

          <?php 

				}

			}

		  ?>

        </table>

    </fieldset>
	</div>
    

 	<?php 

	}

	?>


    <?php 

	}

	?>

    <div align="left" >

      

     <fieldset>

      <legend>IMPORTANT</legend>

      <div style="text-align:center">FIELDS MARKED WITH AN ASTERISK * ARE MANDATORY</div>

     </fieldset>

    </div>

   </form>

  </div>

      

        <div id="right">

            <?php require_once('include/menu-right-client.php'); ?>

          </div>          

        </div>

      </div>

</body>

</html>