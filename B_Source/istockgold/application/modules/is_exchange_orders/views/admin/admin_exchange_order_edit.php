<div id="main"><div id="page_title"><h1>Exchange orders </h1></div>
<script language="JavaScript" type="text/javascript">
            var dtCh= "-";
            var minYear=1900;
            var maxYear=2100;

            function isInteger(s){
            	var i;
                for (i = 0; i < s.length; i++){   
                    // Check that current character is number.
                    var c = s.charAt(i);
                    if (((c < "0") || (c > "9"))) return false;
                }
                // All characters are numbers.
                return true;
            }

            function daysInFebruary (year){
            	// February has 29 days in any year evenly divisible by four,
                // EXCEPT for centurial years which are not also divisible by 400.
                return (((year % 4 == 0) && ( (!(year % 100 == 0)) || (year % 400 == 0))) ? 29 : 28 );
            }
            function DaysArray(n) {
            	for (var i = 1; i <= n; i++) {
            		this[i] = 31;
            		if (i==4 || i==6 || i==9 || i==11) {this[i] = 30;}
            		if (i==2) {this[i] = 29;}
               } 
               return this;
            }

            function isDate(dtStr){
            	var daysInMonth = DaysArray(12);
            	var pos1=dtStr.indexOf(dtCh);
            	var pos2=dtStr.indexOf(dtCh,pos1+1);
            	var strYear = dtStr.substring(0,pos1);
            	var strMonth=dtStr.substring(pos1+1,pos2);
				var pos3=dtStr.indexOf(" ",pos2+1);
            	var strDay=dtStr.substring(pos2+1,pos3);
				var pos4=dtStr.indexOf(":",pos3+1);
				var pos5=dtStr.indexOf(":",pos4+1);
				var strHour=dtStr.substring(pos3+1,pos4);
				var strMinute=dtStr.substring(pos4+1,pos5);
				var strSecond=dtStr.substring(pos5+1);
				
            	strYr=strYear;
            	if (strDay.charAt(0)=="0" && strDay.length>1) strDay=strDay.substring(1);
            	if (strMonth.charAt(0)=="0" && strMonth.length>1) strMonth=strMonth.substring(1);
            	for (var i = 1; i <= 3; i++) {
            		if (strYr.charAt(0)=="0" && strYr.length>1) strYr=strYr.substring(1);
            	}
            	month=parseInt(strMonth);
            	day=parseInt(strDay);
            	year=parseInt(strYr);
            	if (pos1==-1 || pos2==-1 || pos3==-1 || pos4==-1 || pos5==-1){
            		return false;
            	}
            	if (strMonth.length<1 || month<1 || month>12){
            		return false;
            	}
            	if (strDay.length<1 || day<1 || day>31 || (month==2 && day>daysInFebruary(year)) || day > daysInMonth[month]){
            		return false;
            	}
            	if (strYear.length != 4 || year==0 || year<minYear || year>maxYear){
            		return false;
            	}
            	if (strHour < 0 || strHour > 23)
                	return false;
            	if (strMinute < 0 || strMinute > 59)
                	return false;
            	if (strSecond < 0 || strSecond > 59)
                	return false;
            	return true;
            }

            function checkDate() 
            {
            	value1 = document.getElementById("date_src").value;
                if (value1 != "")
                	if (!isDate(value1)) return false;
                value2 = document.getElementById("date_dst").value;
				if (value2 != "")
                	if (!isDate(value2)) return false;
            	return true;
            }
            
            function CheckForm() {
                setLabelText("lbl_error", " ");
                if (!checkDate())
                {
                	mark_fileds("date_src"); mark_fileds("date_dst", "Please enter the valid date!");
                    return false;
                }
                if (isNaN(document.getElementById("amount_src").value))
                {
                	mark_fileds("amount_src", "Please enter the valid amount!");
                    return false;
                }
                if (isNaN(document.getElementById("amount_dst").value))
                {
                	mark_fileds("amount_dst", "Please enter the valid amount!");
                    return false;
                }  
                return true;
            }
</script>
<div id="status_box">
<div id="head">Edit Exchange Order #<?php echo $order['order_code']?></div>
	<form name="signup" id="signup" method="post" action="<?php echo base_url();?>index.php/is_exchange_orders/admin/edit/<?php echo $order['order_id'];?>" onsubmit="return CheckForm();">
	<label id="lbl_error" class="ErrorMessage"></label>
	<table width="99%" cellspacing="4" cellpadding="4" border="0">
	  <tbody>
		<tr>
			<td>Order Id</td>
			<td><?php echo $order['order_id']?></td>
		</tr>
		<tr>
			<td><strong>Source Currency </strong>:</td>
			<td>
				<select style="width:205px" name="src_cid" onchange="" id="src_cid">
					<option value="1" <?php if ($order['c_src'] == "LR") echo 'selected="selected"'?>>LibertyReserve Usd</option>
					<option value="2" <?php if ($order['c_src'] == "WR") echo 'selected="selected"'?>>WesternUnion Usd</option>
				</select>
			</td>
		</tr>
		<tr>
			<td><strong>Source Amount</strong>:</td>
			<td><input style="width:200px" value="<?php echo $order['amount_src'] ?>" id="src_amount" name="src_amount"></td>
		</tr>
		<tr>
			<td>Source Date:</td>
			<td><input style="width:200px" value="<?php echo $order['date_src'] ?>" id="date_src" name="date_src"></td>
		</tr>
		<tr>
			<td><strong>Source Status</strong>:</td>
			<td>
				<select style="width:205px" id="status_src" name="status_src">
					<?php 
					if(count($order_status))
					{
						foreach($order_status as $key => $list)
						{
							if($list['id'] == $order['status_src'])
								echo "<option selected=\"\" value=\"".$list['id']."\">".$list['value']."</option>";
							else
							echo "<option value=\"".$list['id']."\">".$list['value']."</option>";
						}
					}
					?>
				</select>
			</td>
		</tr>
		<tr>
			<td style="height:10px" colspan="2"><div id="head"></div></td>
		</tr>
      
		<tr>
			<td><strong>Destination Currency </strong>:</td>
			<td> 
				<select style="width:205px" name="dst_cid" onchange="" id="dst_cid">
					<option value="1" <?php if ($order['c_src'] == "LR") echo 'selected="selected"'?>>LibertyReserve Usd</option>
					<option value="2" <?php if ($order['c_src'] == "WR") echo 'selected="selected"'?>>WesternUnion Usd</option>
				</select>
			</td>
		</tr>
		<tr>
			<td><strong>Destination Amount</strong>:</td>
			<td><input style="width:200px" value="<?php echo $order['amount_dst'] ?>" id="amount_dst" name="amount_dst"></td>
		</tr>
		<tr>
			<td>Destination Date:</td>
			<td><input style="width:200px" value="<?php echo $order['date_dst'] ?>" id="date_dst" name="date_dst"></td>
		</tr>
		<tr>
			<td><strong>Destination Account</strong>:</td>
			<td><input style="width:200px" value="<?php echo $order['account_dst'] ?>" id="account_dst" name="account_dst"></td>
		</tr>
		<tr>
			<td><strong>Order Status</strong>:</td>
			<td>
				<select style="width:205px" name="status_dst" id="status_dst">
					<?php 
					if(count($order_status))
					{
						foreach($order_status as $key => $list)
						{
							if($list['id'] == $order['status_dst'])
								echo "<option selected=\"\" value=\"".$list['id']."\">".$list['value']."</option>";
							else
							echo "<option value=\"".$list['id']."\">".$list['value']."</option>";
						}
					}
					?>
				</select>
			</td>
		</tr>
		<tr>
			<td style="height:10px" colspan="2"><div id="head"></div></td>
		</tr>
		<tr>
			<td>Email Address:</td>
			<td><?php echo $order['email'] ?></td>
		</tr>
		<tr>
			<td valign="top"><strong>Exchange Note</strong>:</td>
			<td><textarea id="note" rows="3" cols="60" name="note"><?php echo $order['note'] ?></textarea></td>
		</tr>
		<tr>
			<td> </td>
			<td colspan="2">
				<input type="submit" value="Update" class="btn" name="submit">
				<input type="reset" onclick="" class="btn" value="Cancel" id="button" name="cancel">
			</td>
		</tr>
  </tbody>
  </table>
  </form>
</div>
</div>