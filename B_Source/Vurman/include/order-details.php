<div id="dialog" title="Transfer Details">
<fieldset>
      <legend>CLIENT DETAILS</legend>
       <table width="550">
        <tr>
         <th width="150" align="right"><span>CLIENT NAME</span></th>
         <td width="150" align="left"><span name="id_client" id="id_client"> </span></td>         
         <th width="110" align="right"><span >REFERENCE</span></th>
         <td width="130" align="left"><span name="id_reference" id="id_reference" > </span></td>
        </tr>
        <tr>
          <th width="150" align="right">STATUS</th>
          <td width="150" align="left"><span id="id_status" name="id_status"></span></td>
          <th width="110" align="right">TYPES</th>
          <td width="130" align="left"><span id="id_type" name="id_type"></span></td>
        </tr>
        <tr>
          <th width="150" align="right">TRANS TYPE</th>
          <td width="150" align="left"><span id="id_trans_type" name="id_trans_type"></span></td>
          <th width="110" align="right"><input id="transfer_id" name="transfer_id" type="hidden" value=""></th>
          <td width="130" align="left">&nbsp;</td>
        </tr>
</table>
      </fieldset>
      <fieldset id="fieldsetFundDetails" >
   <legend>FUND DETAILS</legend>
    <table width="550">    
     <tr><th width="150" align="right"><span>ISIN</span></th>
       <td width="150" align="left"><span id="id_isin"></span></td>
       <th width="110" align="right"><span >CURRENCY</span></th>
       <td width="130" align="left"><span id="id_currency"></span>
         </td>
     </tr>
             
    <tr>
      <th width="150" align="right">FUND NAME</th>        
      <td colspan="3" align="left"><span name="id_fundname" id="id_fundname" ></span></td>
    </tr>

    <tr>
     <th width="150" align="right">UNKNOWN ISIN</th>                
     <td width="150" align="left"><span name="id_comment" id="id_comment"></span></td>
     <th colspan="2" align="right"></th>
    </tr>
              
    <tr>
     <th width="150" align="right"><span >QUANTITY</span></th>
      <td width="150" align="left"><span name="id_quantity" id="id_quantity" ></span></td>
      <th width="110" align="right"><span >CUSTODY A/C</span></th>
       <td width="130" align="left"><span id="id_custodian"></span>
      </td>
     </tr>
                  
     <tr>
      <th width="150" align="right"><span >TRADE DATE</span></th>

       <td width="150" align="left">
        <span name="Trade_Date" id="Trade_Date" ></span>
       </td>
                
       <th width="110" align="right"><span >VALUE DATE</span></th>
        <td width="130" align="left">
         <span name="Settlement_Date" id="Settlement_Date"></span>
        </td>
       </table>
      </fieldset>
      <fieldset id="fieldsetSellerDetails" >
       <legend>SELLER DETAILS</legend>
        <table width="550">           
         <tr>
          <th width="150" align="right"><span >SELLER</span></th>

          <td colspan="4" align="left">
           <span name="id_seller" id="id_seller" ></span>
          </td>
         </tr>
          
         <tr>
          <th width="150" align="right">BIC (SELLER)</th>
            
          <td align="left"  colspan="4">
           <span name="id_bic_seller" id="id_bic_seller" ></span>
          </td>
         </tr>
                
         <tr>
          <th width="150" align="right"><span >CUSTODIAN</span></th>
              
          <td colspan="4" align="left">
           <span name="id_custodian1" id="id_custodian1" ></span>
          </td>
         </tr>

         <tr>    
          <th width="150" align="right">BIC (CUSTODIAN)</th>
                
          <td align="left">
           <span name="id_custodian_bic" id="id_custodian_bic" ></span>
          </td>
         </tr>
               
         <tr>
          <th width="150" align="right">SELLER A/C WITH CUST.</th>

          <td align="left"><span name="client_ac_cust" id="client_ac_cust"></span><input type="text" name="client_ac_cust_txt" id="client_ac_cust_txt"  /></td>
         </tr>
                
         <tr>
          <th width="150" align="right">TRANSFER AGENT</th>

          <td colspan="4" align="left">
           <span name="TA_Name" id="TA_Name" ></span> <input type="text" name="TA_Name_txt" id="TA_Name_txt" value=""  /></td>
          </tr>

          <tr>                  
           <th width="150" align="right">BIC (TA)</th>
                
           <td align="left"><span name="TA_BIC" id="TA_BIC" ></span><input type="text" name="TA_BIC_txt" id="TA_BIC_txt" value=""   /></td>
          </tr>
                
          <tr>
           <th width="150" align="right">CUST. A/C WITH T/A</th>

           <td align="left"><span name="cust_ac_ta" id="cust_ac_ta" ></span><input type="text" name="cust_ac_ta_txt" id="cust_ac_ta_txt" value=""  /></td>
          </tr>
         </table>
        </fieldset>
</div>