<?php

/* customers.search.tpl */
class __TwigTemplate_012b14ed3dd313dec733966bbcea67ae extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "
\t<form enctype=\"multipart/form-data\" action=\"index.php\" id=\"frmSearch\" method=\"get\" onsubmit=\"return ValidateForm(CheckSearchForm)\">
\t<input type=\"hidden\" name=\"ToDo\" value=\"searchCustomersRedirect\" />
\t<div class=\"BodyContainer\">
\t<table class=\"OuterPanel\">
\t  <tr>
\t\t<td class=\"Heading1\" id=\"tdHeading\">";
        // line 7
        echo getLang("SearchCustomers");
        echo "</td>
\t\t</tr>
\t\t<tr>
\t\t<td class=\"Intro\">
\t\t\t<p>";
        // line 11
        echo getLang("SearchCustomersIntro");
        echo "</p>
\t\t\t";
        // line 12
        echo twig_safe_filter((isset($context['Message']) ? $context['Message'] : null));
        echo "
\t\t\t<p><input type=\"submit\" name=\"SubmitButton1\" value=\"";
        // line 13
        echo getLang("Search");
        echo "\" class=\"FormButton\">&nbsp; <input type=\"button\" name=\"CancelButton1\" value=\"";
        echo getLang("Cancel");
        echo "\" class=\"FormButton\" onclick=\"ConfirmCancel()\"></p>
\t\t</td>
\t  </tr>
\t\t<tr>
\t\t\t<td>
\t\t\t  <table class=\"Panel\">
\t\t\t\t<tr>
\t\t\t\t  <td class=\"Heading2\" colspan=2>";
        // line 20
        echo getLang("AdvancedSearch");
        echo "</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t&nbsp;&nbsp;&nbsp;";
        // line 24
        echo getLang("SearchKeywords");
        echo ":
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<input type=\"text\" id=\"searchQuery\" name=\"searchQuery\" class=\"Field250\">
\t\t\t\t\t\t<img onmouseout=\"HideHelp('d1');\" onmouseover=\"ShowHelp('d1', '";
        // line 28
        echo getLang("SearchKeywords");
        echo "', '";
        echo getLang("SearchKeywordsCustHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\">
\t\t\t\t\t\t<div style=\"display:none\" id=\"d1\"></div>
\t\t\t\t\t</td>
\t\t\t\t</tr>

\t\t\t\t<tr>
\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t&nbsp;&nbsp;&nbsp;";
        // line 35
        echo getLang("CustPhone");
        echo ":
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<input type=\"text\" id=\"phone\" name=\"phone\" class=\"Field250\">
\t\t\t\t\t</td>
\t\t\t\t</tr>

\t\t\t\t<tr>
\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t&nbsp;&nbsp;&nbsp;";
        // line 44
        echo getLang("CustCountry");
        echo ":
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<select name=\"country\" id=\"country\" class=\"Field250\" onchange=\"GetStates(this, 'state', 'state_1')\">
\t\t\t\t\t\t\t<option value=\"\">";
        // line 48
        echo getLang("ChooseCustCountry");
        echo "</option>
\t\t\t\t\t\t\t";
        // line 49
        echo twig_safe_filter((isset($context['CountryList']) ? $context['CountryList'] : null));
        echo "
\t\t\t\t\t\t</select>
\t\t\t\t\t</td>
\t\t\t\t</tr>

\t\t\t\t<tr>
\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t&nbsp;&nbsp;&nbsp;";
        // line 56
        echo getLang("CustState");
        echo ":
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<select style=\"display:";
        // line 59
        echo twig_safe_filter((isset($context['HideStateList']) ? $context['HideStateList'] : null));
        echo "\" name=\"state\" id=\"state\" class=\"Field250\">
\t\t\t\t\t\t\t";
        // line 60
        echo twig_safe_filter((isset($context['StateList']) ? $context['StateList'] : null));
        echo "
\t\t\t\t\t\t</select>
\t\t\t\t\t\t<input style=\"display:";
        // line 62
        echo twig_safe_filter((isset($context['HideStateBox']) ? $context['HideStateBox'] : null));
        echo "\" type=\"text\" name=\"state_1\" id=\"state_1\" value=\"";
        echo twig_safe_filter((isset($context['AddressState']) ? $context['AddressState'] : null));
        echo "\" class=\"Field250\" />
\t\t\t\t\t</td>
\t\t\t\t</tr>

\t\t\t\t<tr><td class=\"Gap\" colspan=\"2\"></td></tr>
\t\t\t </table>
\t\t\t</td>
\t\t</tr>
\t\t<tr>
\t\t\t<td>
\t\t\t  <table class=\"Panel\">
\t\t\t\t<tr>
\t\t\t\t  <td class=\"Heading2\" colspan=2>";
        // line 74
        echo getLang("SearchByRange");
        echo "</td>
\t\t\t\t</tr>

\t\t\t\t<tr>
\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t&nbsp;&nbsp;&nbsp;";
        // line 79
        echo getLang("CustomerID");
        echo ":
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t";
        // line 82
        echo getLang("SearchFrom");
        echo " &nbsp;&nbsp;<input type=\"text\" id=\"idFrom\" name=\"idFrom\" class=\"Field50\"> ";
        echo getLang("SearchTo");
        echo "\t\t\t\t\t\t &nbsp;&nbsp;<input type=\"text\" id=\"idTo\" name=\"idTo\" class=\"Field50\">
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t&nbsp;&nbsp;&nbsp;";
        // line 88
        echo getLang("NumberOfOrders");
        echo ":
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t";
        // line 91
        echo getLang("SearchFrom");
        echo " &nbsp;&nbsp;<input type=\"text\" id=\"ordersFrom\" name=\"ordersFrom\" class=\"Field50\"> ";
        echo getLang("SearchTo");
        echo "\t\t\t\t\t\t &nbsp;&nbsp;<input type=\"text\" id=\"ordersTo\" name=\"ordersTo\" class=\"Field50\">
\t\t\t\t\t</td>
\t\t\t\t</tr>

\t\t\t\t<tr style=\"display: ";
        // line 96
        echo twig_safe_filter((isset($context['HideStoreCredit']) ? $context['HideStoreCredit'] : null));
        echo "\">
\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t&nbsp;&nbsp;&nbsp;";
        // line 98
        echo getLang("StoreCredit");
        echo ":
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t";
        // line 101
        echo getLang("SearchFrom");
        echo " ";
        echo twig_safe_filter((isset($context['CurrencyTokenLeft']) ? $context['CurrencyTokenLeft'] : null));
        echo "<input type=\"text\" id=\"storeCreditFrom\" name=\"storeCreditFrom\" class=\"Field50\" /> ";
        echo twig_safe_filter((isset($context['CurrencyTokenRight']) ? $context['CurrencyTokenRight'] : null));
        echo "
\t\t\t\t\t\t";
        // line 102
        echo getLang("SearchTo");
        echo " ";
        echo twig_safe_filter((isset($context['CurrencyTokenLeft']) ? $context['CurrencyTokenLeft'] : null));
        echo "<input type=\"text\" id=\"storeCreditTo\" name=\"storeCreditTo\" class=\"Field50\" /> ";
        echo twig_safe_filter((isset($context['CurrencyTokenRight']) ? $context['CurrencyTokenRight'] : null));
        echo "
\t\t\t\t\t</td>
\t\t\t\t</tr>

\t\t\t\t<tr><td class=\"Gap\" colspan=\"2\"></td></tr>
\t\t\t </table>
\t\t\t</td>
\t\t</tr>
\t\t<tr>
\t\t\t<td>
\t\t\t  <table class=\"Panel\">
\t\t\t\t<tr>
\t\t\t\t  <td class=\"Heading2\" colspan=2>";
        // line 114
        echo getLang("SearchByDate");
        echo "</td>
\t\t\t\t</tr>
\t\t\t\t<tr><td class=\"Gap\"></td></tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t&nbsp;&nbsp;&nbsp;";
        // line 119
        echo getLang("DateJoined");
        echo ":
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<select name=\"dateRange\" id=\"dateRange\" onchange=\"ToggleRange()\" class=\"Field250\">
\t\t\t\t\t\t\t<option value=\"\">";
        // line 123
        echo getLang("ChooseRegDate");
        echo "</option>
\t\t\t\t\t\t\t<option value=\"today\">";
        // line 124
        echo getLang("Today");
        echo "</option>
\t\t\t\t\t\t\t<option value=\"yesterday\">";
        // line 125
        echo getLang("Yesterday");
        echo "</option>
\t\t\t\t\t\t\t<option value=\"day\">";
        // line 126
        echo getLang("Last24Hours");
        echo "</option>
\t\t\t\t\t\t\t<option value=\"week\">";
        // line 127
        echo getLang("Last7Days");
        echo "</option>
\t\t\t\t\t\t\t<option value=\"month\">";
        // line 128
        echo getLang("Last30Days");
        echo "</option>
\t\t\t\t\t\t\t<option value=\"this_month\">";
        // line 129
        echo getLang("ThisMonth");
        echo "</option>
\t\t\t\t\t\t\t<option value=\"this_year\">";
        // line 130
        echo getLang("ThisYear");
        echo "</option>
\t\t\t\t\t\t\t<option value=\"custom\">";
        // line 131
        echo getLang("CustomPeriod");
        echo "</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t\t<div id=\"dateRangeCustom\" style=\"margin-left: 30px; margin-top: 10px;\">
\t\t\t\t\t\t\t";
        // line 134
        echo getLang("SearchFrom");
        echo " <input class=\"plain\" name=\"fromDate\" id=\"dc1\" size=\"12\" onfocus=\"this.blur()\" readonly><a href=\"javascript:void(0)\" onclick=\"if(self.gfPop)gfPop.fStartPop(document.getElementById('dc1'),document.getElementById('dc2'));return false;\" HIDEFOCUS><img name=\"popcal\" align=\"absmiddle\" src=\"images/calbtn.gif\" width=\"34\" height=\"22\" border=\"0\" alt=\"\"></a>
\t\t\t\t\t\t\t";
        // line 135
        echo getLang("SearchTo");
        echo " <input class=\"plain\" name=\"toDate\" id=\"dc2\" size=\"12\" onfocus=\"this.blur()\" readonly><a href=\"javascript:void(0)\" onclick=\"if(self.gfPop)gfPop.fEndPop(document.getElementById('dc1'),document.getElementById('dc2'));return false;\" HIDEFOCUS><img name=\"popcal\" align=\"absmiddle\" src=\"images/calbtn.gif\" width=\"34\" height=\"22\" border=\"0\" alt=\"\"></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr><td class=\"Gap\" colspan=\"2\"></td></tr>
\t\t\t </table>
\t\t\t</td>
\t\t</tr>
\t\t<tr style=\"display: ";
        // line 143
        echo twig_safe_filter((isset($context['HideCustomerGroups']) ? $context['HideCustomerGroups'] : null));
        echo "\">
\t\t\t<td>
\t\t\t  <table class=\"Panel\">
\t\t\t\t<tr>
\t\t\t\t  <td class=\"Heading2\" colspan=2>";
        // line 147
        echo getLang("SearchByGroup");
        echo "</td>
\t\t\t\t</tr>
\t\t\t\t<tr><td class=\"Gap\"></td></tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t&nbsp;&nbsp;&nbsp;";
        // line 152
        echo getLang("CustomerGroup");
        echo ":
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<select name=\"custGroupId\" id=\"custGroupId\" class=\"Field250\">
\t\t\t\t\t\t\t<option value=\"\">";
        // line 156
        echo getLang("ChooseACustomerGroup");
        echo "</option>
\t\t\t\t\t\t\t";
        // line 157
        echo twig_safe_filter((isset($context['CustomerGroups']) ? $context['CustomerGroups'] : null));
        echo "
\t\t\t\t\t\t</select>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr><td class=\"Gap\" colspan=\"2\"></td></tr>
\t\t\t </table>
\t\t\t</td>
\t\t</tr>
\t\t<tr>
\t\t\t<td>
\t\t\t  <table class=\"Panel\">
\t\t\t\t<tr>
\t\t\t\t  <td class=\"Heading2\" colspan=2>";
        // line 169
        echo getLang("SortOrder");
        echo "</td>
\t\t\t\t</tr>
\t\t\t\t<tr><td class=\"Gap\"></td></tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t&nbsp;&nbsp;&nbsp;";
        // line 174
        echo getLang("SortOrder");
        echo ":
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<select name=\"sortField\" class=\"Field120\">
\t\t\t\t\t\t\t<option value=\"customerid\">";
        // line 178
        echo getLang("CustID");
        echo "</option>
\t\t\t\t\t\t\t<option value=\"custconlastname\">";
        // line 179
        echo getLang("CustLastName");
        echo "</option>
\t\t\t\t\t\t\t<option value=\"custconfirstname\">";
        // line 180
        echo getLang("CustFirstName");
        echo "</option>
\t\t\t\t\t\t\t<option value=\"custconemail\">";
        // line 181
        echo getLang("Email");
        echo "</option>
\t\t\t\t\t\t\t<option value=\"custconphone\">";
        // line 182
        echo getLang("Phone");
        echo "</option>
\t\t\t\t\t\t\t<option value=\"custconcompany\">";
        // line 183
        echo getLang("CustCompany");
        echo "</option>
\t\t\t\t\t\t\t<option value=\"custdatejoined\">";
        // line 184
        echo getLang("CustDateCreated");
        echo "</option>
\t\t\t\t\t\t\t<option value=\"numorders\">";
        // line 185
        echo getLang("NumOrders");
        echo "</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t\tin&nbsp;
\t\t\t\t\t\t<select name=\"sortOrder\" class=\"Field110\">
\t\t\t\t\t\t<option value=\"asc\">";
        // line 189
        echo getLang("AscendingOrder");
        echo "</option>
\t\t\t\t\t\t<option value=\"desc\">";
        // line 190
        echo getLang("DescendingOrder");
        echo "</option>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"Gap\">&nbsp;</td>
\t\t\t\t\t<td class=\"Gap\"><input type=\"submit\" name=\"SubmitButton1\" value=\"";
        // line 195
        echo getLang("Search");
        echo "\" class=\"FormButton\">&nbsp; <input type=\"button\" name=\"CancelButton1\" value=\"";
        echo getLang("Cancel");
        echo "\" class=\"FormButton\" onclick=\"ConfirmCancel()\">
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t </table>
\t\t\t</td>
\t\t</tr>
\t</table>
\t<iframe width=132 height=142 name=\"gToday:contrast:agenda.js\" id=\"gToday:contrast:agenda.js\" src=\"calendar/ipopeng.htm\" scrolling=\"no\" frameborder=\"0\" style=\"visibility:visible; z-index:999; position:absolute; left:-500px; top:0px;\"></iframe>
\t</div>
\t</form>

\t<script type=\"text/javascript\" src=\"";
        // line 206
        echo twig_safe_filter((isset($context['ShopPath']) ? $context['ShopPath'] : null));
        echo "/javascript/callback.js\"></script>

\t<script type=\"text/javascript\">
\t\tfunction GetStates(selObj, dest, stateTextBox)
\t\t{
\t\t\tvar country = selObj.options[selObj.selectedIndex].value;

\t\t\tselDest = document.getElementById(dest);
\t\t\totherBox = document.getElementById(stateTextBox);
\t\t\tDoCallback(\"w=countryStates&c=\"+country);
\t\t}

\t\tfunction ResetStates(ShowChoose)
\t\t{
\t\t\tselDest.options.length = 0;

\t\t\tif(ShowChoose)
\t\t\t\tselDest.options[selDest.options.length] = new Option(\"";
        // line 223
        echo getLang("ChooseState");
        echo "\", \"\");
\t\t}

\t\tfunction ProcessData(html)
\t\t{
\t\t\tResetStates(true);
\t\t\tstates = html.split(\"~\");
\t\t\tnumStates = 0;

\t\t\tfor(i = 0; i < states.length; i++)
\t\t\t{
\t\t\t\tvals = states[i].split(\"|\");

\t\t\t\tif(states[i].length > 0) {
\t\t\t\t\tselDest.options[selDest.options.length] = new Option(vals[0], vals[1]);
\t\t\t\t\tnumStates++;
\t\t\t\t}
\t\t\t}

\t\t\t// If there are no states then hide the state dropdown list
\t\t\tif(numStates == 0) {
\t\t\t\tselDest.style.display = \"none\";
\t\t\t\totherBox.style.display = \"\";
\t\t\t}
\t\t\telse {
\t\t\t\tselDest.style.display = \"\";
\t\t\t\totherBox.style.display = \"none\";
\t\t\t}
\t\t}

\t\tfunction ToggleRange()
\t\t{
\t\t\tvar range = document.getElementById('dateRange');
\t\t\tif(range.options[range.selectedIndex].value == \"custom\")
\t\t\t{
\t\t\t\tdocument.getElementById('dateRangeCustom').style.display = '';
\t\t\t}
\t\t\telse
\t\t\t{
\t\t\t\tdocument.getElementById('dateRangeCustom').style.display = 'none';
\t\t\t}
\t\t}

\t\tToggleRange();

\t\tfunction ConfirmCancel() {
\t\t\tif(confirm(\"";
        // line 269
        echo getLang("ConfirmCancelSearch");
        echo "\"))
\t\t\t\tdocument.location.href = \"index.php?ToDo=viewCustomers\";
\t\t}

\t\tfunction CheckSearchForm() {
\t\t\tvar ordersFrom = document.getElementById(\"ordersFrom\");
\t\t\tvar ordersTo = document.getElementById(\"ordersTo\");

\t\t\tif(ordersFrom.value != \"\" && isNaN(ordersFrom.value)) {
\t\t\t\talert(\"";
        // line 278
        echo getLang("SearchEnterValidordersId");
        echo "\");
\t\t\t\tordersFrom.focus();
\t\t\t\tordersFrom.select();
\t\t\t\treturn false;
\t\t\t}

\t\t\tif(ordersTo.value != \"\" && isNaN(ordersTo.value)) {
\t\t\t\talert(\"";
        // line 285
        echo getLang("SearchEnterValidordersId");
        echo "\");
\t\t\t\tordersTo.focus();
\t\t\t\tordersTo.select();
\t\t\t\treturn false;
\t\t\t}

\t\t\tvar storeCreditFrom = document.getElementById(\"storeCreditFrom\");
\t\t\tvar storeCreditTo = document.getElementById(\"storeCreditTo\");

\t\t\tif(storeCreditFrom.value != \"\" && isNaN(priceFormat(storeCreditFrom.value))) {
\t\t\t\talert(\"";
        // line 295
        echo getLang("SearchEnterValidStoreCredit");
        echo "\");
\t\t\t\tstoreCreditFrom.focus();
\t\t\t\tstoreCreditFrom.select();
\t\t\t\treturn false;
\t\t\t}

\t\t\tif(storeCreditTo.value != \"\" && isNaN(priceFormat(storeCreditTo.value))) {
\t\t\t\talert(\"";
        // line 302
        echo getLang("SearchEnterValidStoreCredit");
        echo "\");
\t\t\t\tstoreCreditTo.focus();
\t\t\t\tstoreCreditTo.select();
\t\t\t\treturn false;
\t\t\t}

\t\t\treturn true;
\t\t}

\t</script>
";
    }

}
