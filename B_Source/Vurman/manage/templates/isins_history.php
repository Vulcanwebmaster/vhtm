<?php include('isin_style.css'); ?>
<?php 
$number = $_GET['number'];
$id= $_GET['id'];
if(!$number)
  $number=0; 
if(!is_array($result))
  $result = array();

 ?>

  <fieldset class="fldset">
   <legend>Identification of Fund</legend><br>
    <table width="590px" border="0">
     <tr>
      <td class="fieldset"><div class="tbl_lbl">ISIN</div><div class="tbl_input"><input size="57"  name="ISIN" id="ISIN" value="<?=$instance[ISIN]?>"></div></td>
     </tr>

     <tr>
      <td class="fieldset"><div class="tbl_lbl">Currency</div><div class="tbl_input">
<?php echo $instance['cuname'];?> 
      </div></td>
     </tr>
 
     <tr>
      <td class="fieldset"><div class="tbl_lbl">Fund Name</div><div class="tbl_input"><input size="57"  name="fund_name" id="fund_name" value="<?echo $instance['fund_name']?>"></div></td>
     </tr>
 
     <tr>
      <td class="fieldset"><div class="tbl_lbl">Fund Company</div><div class="tbl_input"><input size="57"  name="fund_company" id="fund_company" value="<?=$instance['fund_company']?>"></div></td>
     </tr>
 
     <tr>
      <td class="fieldset"><div class="tbl_lbl">Fund Category</div><div class="tbl_input"><input size="57"  name="fund_category" id="fund_category" value="<?=$instance['fund_category']?>"></div></td>
     </tr>
 
     <tr>
      <td class="fieldset"><div class="tbl_lbl">Fund Status</div><div class="tbl_input"><input size="57"  name="fund_status" id="fund_status" value="<?=$instance['fund_status']?>"></div></td>
     </tr>
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl">Domicile</div><div class="tbl_input"><input size="57"  name="domicile" id="domicile" value="<?=$instance['domicile']?>"></div></td>
     </tr>
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl">N.A.V.</div><div class="tbl_input"><input size="57"  name="nav_value" id="nav_value" value="<?=$instance['nav_value']?>"></div></td>
     </tr>
 
     <tr>
      <td class="fieldset"><div class="tbl_lbl">N.A.V. Date</div><div class="tbl_input"><input size="57"  name="nav_date" id="nav_date" value="<?=$instance['nav_date']?>"></div></td>
     </tr>
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl">Fund Strategy</div><div class="tbl_input"><input size="57"  name="fund_strategy" id="fund_strategy" value="<?=$instance['fund_strategy']?>"></div></td>
     </tr>
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl">Primary Strategy</div><div class="tbl_input"><input size="57"  name="primary_strategy" id="primary_strategy" value="<?=$instance['primary_strategy']?>"></div></td>
     </tr>
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl">Secondary Strategy</div><div class="tbl_input"><input size="57"  name="secondary_strategy" id="secondary_strategy" value="<?=$instance['secondary_strategy']?>"></div></td>
     </tr>
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl">Investment Objectives</div><div class="tbl_input"><input size="57"  name="investment_objectives_a" id="investment_objectives_a" value="<?=$instance['investment_objectives_a']?>"></div></td>
     </tr>
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl">Investment Objectives</div><div class="tbl_input"><input size="57"  name="investment_objectives_b" id="investment_objectives_b" value="<?=$instance['investment_objectives_b']?>"></div></td>
     </tr>
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl">Investment Objectives</div><div class="tbl_input"><input size="57"  name="investment_objectives_c" id="investment_objectives_c" value="<?=$instance['investment_objectives_c']?>"></div></td>
     </tr>
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl">Unique Feature</div><div class="tbl_input"><input size="57"  name="unique_feature_a" id="unique_feature_a" value="<?=$instance['unique_feature_a']?>"></div></td>
     </tr>
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl">Unique Feature</div><div class="tbl_input"><input size="57"  name="unique_feature_b" id="unique_feature_b" value="<?=$instance['unique_feature_b']?>"></div></td>
     </tr>
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl">Inception Date</div><div class="tbl_input"><input size="57"  name="inception_date" id="inception_date" value="<?=$instance['inception_date']?>"></div></td>
     </tr>
 
     <tr>
      <td class="fieldset"><div class="tbl_lbl">Current Assets</div><div class="tbl_input"><input size="57"  name="current_assets" id="current_assets" value="<?=$instance['current_assets']?>"></div></td>
     </tr>     
 
     <tr> 
      <td class="fieldset"><div class="tbl_lbl">Benchmark</div><div class="tbl_input"><input size="57"  name="benchmark" id="benchmark" value="<?=$instance['benchmark']?>"></div></td>
     </tr>
 
     <tr>
      <td class="fieldset"><div class="tbl_lbl">Risk Appetite</div><div class="tbl_input"><input size="57"  name="risk_appetite" id="risk_appetite" value="<?=$instance['risk_appetite']?>"></div></td>
     </tr>
 
     <tr>
      <td class="fieldset"><div class="tbl_lbl">Geographical Exposure</div><div class="tbl_input"><input size="57"  name="geographical_exposure" id="geographical_exposure" value="<?=$instance['geographical_exposure']?>"></div></td>
     </tr>     
 
     <tr>
      <td class="fieldset"><div class="tbl_lbl">Last Audit</div><div class="tbl_input"><input size="57"  name="last_audit" id="last_audit" value="<?=$instance['last_audit']?>"></div></td>
     </tr>
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl">Additional Information</div><div class="tbl_input"><input size="57"  name="add_info_a" id="add_info_a" value="<?=$instance['add_info_a']?>"></div></td>
     </tr>
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl">Additional Information</div><div class="tbl_input"><input size="57"  name="add_info_b" id="add_info_b" value="<?=$instance['add_info_b']?>"></div></td>
     </tr>
      </table>
    </fieldset>
<table width='100%' border=0><tr>
<td width='25%'>
      <?php if($number > 0){?>
       <a href='isins_history.php?id=<?php echo $id ?>&number=0'>Current</a>
      <?php } ?>
</td>
<td width='25%'>
      <?php if($number > 0){?>
       <a href='isins_history.php?id=<?php echo $id ?>&number=<?php echo ($number-1) ?>'>Next</a>
      <?php } ?>
</td>
<td width='25%'>
      <?php if($number < $total){?>
       <a href='isins_history.php?id=<?php echo $id ?>&number=<?php echo ($number+1) ?>'>Previous</a>
      <?php } ?>
</td>
<td width='25%'>
      <?php if($number < $total){?>
       <a href='isins_history.php?id=<?php echo $id ?>&number=<?php echo $total ?>'>Very first</a>
      <?php } ?>
</td>
</tr></table>
