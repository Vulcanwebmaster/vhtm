<fieldset>
   	     <legend>Search Criteria</legend>
           <table width="100%" border="0" cellspacing="0" cellpadding="0" style="border-collapse:collapse;">
             <tr>
               <th width="55" align="right">CLIENT-ID</th>
               <td width="70"><input name="client_id" type="text" id="client_id" size="10"></td>
               <th width="55" align="right">CURRENCY</th>
               <td width="100">
               	   <select name="currency" id="currency" class="dropdown">
                    <option value="" selected>select</option>
                    <?php 
                        if(isset($arrCurrency))
                        {
                            for($i=0;$i<sizeof($arrCurrency);$i++)
                            {
                                echo "<option value=\"".$arrCurrency[$i]['id']."\">".$arrCurrency[$i]['abbreviation']."</option>";
                            }
                        }
                    ?>
                  </select> 
                </td>
               <th width="50" align="right">ISIN</th>
               <td width="100"><select name='security1' id="security1" onchange='GetFundName()' style="text-align:center;">
                  <option value='0' >select</option>
                  <?php 
                    if(isset($arrISIN))
                    {
                        for($i=0;$i<sizeof($arrISIN);$i++)
                        {
                            echo "<option style=\"text-align:left;\" value=\"".$arrISIN[$i]['id']."\">".$arrISIN[$i]['code']."</option>";
                        }
                    }
                    ?>
                 </select>
       		   </td>
             </tr>
             <tr>
               <th align="right">QUANTITY</th>
               <td><input name="quantity" type="text" id="quantity" size="10"></td>
               <th align="right">FROM</th>
               <td><label for="from_date"></label>
                 <input name="from_date" type="text" id="from_date" size="10"></td>
               <th align="right">TO</th>
               <td><input name="to_date" type="text" id="to_date" size="10"></td>
             </tr>
             <tr>
               <td colspan="6" align="right"><input type="submit" name="Search" id="Search" value="Search"></td>
             </tr>
           </table>
        </fieldset>