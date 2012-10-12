<div id="dialog" title="Trade Details">
<fieldset>
      <legend>CLIENT DETAILS</legend>
       <table width="530">
        <tr>
         <th width="150" align="right"><span>CLIENT NAME</span></th>
         <td width="150" align="left"><span name="id_client" id="id_client"> </span></td>         
         <th width="120" align="right"><span >REFERENCE</span></th>
         <td width="150" align="left"><span name="id_reference" id="id_reference" > </span></td>
        </tr>
        <tr>
          <th width="150" align="right">STATUS</th>
          <td width="150" align="left"><span id="id_status" name="id_status"></span></td>
          <th width="120" align="right">TYPES</th>
          <td width="150" align="left"><span id="id_type" name="id_type"></span>
          <input id="trade_id" name="trade_id" type="hidden" value="" />
          </td>
        </tr>
       </table>
      </fieldset>
      <fieldset id="fieldsetFundDetails" >
   <legend>REDEMPTION ORDER DETAILS</legend>
    <table width="530">    
     <tr><th width="150" align="right"><span>ISIN</span></th>
       <td width="150" align="left"><span id="id_isin"></span></td>
       <th width="120" align="right"><span >CURRENCY</span></th>
       <td width="150" align="left"><span id="id_currency"></span>
         </td>
     </tr>
             
    <tr>
      <th width="150" align="right">FUND NAME</th>        
      <td colspan="3" align="left"><span name="id_fundname" id="id_fundname" ></span></td>
    </tr>

    <tr>
      <th width="150" align="right"><span >QUANTITY</span></th>
      <td width="150" align="left"><span name="id_quantity" id="id_quantity" ></span></td>
      <th width="120" align="right"><span >CUSTODY A/C</span></th>
      <td width="150" align="left"><span id="id_custodian"></span>
        </td>
    </tr>
    <tr>
      <th align="right">TRADE DATE</th>
      <td align="left"><span id="trade_date"></span></td>
      <th align="right">VALUE DATE</th>
      <td align="left"><span id="value_date"></span></td>
    </tr>
                  
     <tr>
      <th width="150" align="right"><span >REMARKS TO VFS</span></th>

       <td colspan="3" align="left"><span id="id_vfs"></span></td>
       <tr>
         <th align="right">TRADE REMARKS</th>
         <td colspan="3" align="left"><span id="id_trade"></span></td>
       </table>
      </fieldset>
</div>