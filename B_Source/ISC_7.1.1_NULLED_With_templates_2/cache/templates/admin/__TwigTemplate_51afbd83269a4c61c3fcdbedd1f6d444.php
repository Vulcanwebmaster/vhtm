<?php

/* stats.products.tpl */
class __TwigTemplate_51afbd83269a4c61c3fcdbedd1f6d444 extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "
\t<form action=\"index.php?ToDo=viewProdStats\" name=\"frmStats\" id=\"frmStats\" method=\"post\">
\t<input id=\"currentTab\" name=\"currentTab\" value=\"0\" type=\"hidden\">
\t<div class=\"BodyContainer\">
\t<table cellSpacing=\"0\" cellPadding=\"0\" width=\"100%\" style=\"margin-left: 4px; margin-top: 8px;\">
\t<tr>
\t\t<td class=\"Heading1\">";
        // line 7
        echo getLang("ProductStatistics");
        echo "</td>
\t</tr>
\t<tr>
\t\t<td class=\"Intro\">
\t\t\t<p>";
        // line 11
        echo getLang("ProductStatsIntro");
        echo "</p>
\t\t\t";
        // line 12
        echo twig_safe_filter((isset($context['Message']) ? $context['Message'] : null));
        echo "
\t\t</td>
\t</tr>
\t<tr>
\t\t<td>
\t\t\t<ul id=\"tabnav\">
\t\t\t\t<li><a href=\"#\" class=\"active\" id=\"tab0\" onclick=\"ShowTab(0)\">";
        // line 18
        echo getLang("ProductsByNumberSold");
        echo "</a></li>
\t\t\t\t<li><a href=\"#\" id=\"tab1\" onclick=\"ShowTab(1)\">";
        // line 19
        echo getLang("MostViewedProducts");
        echo "</a></li>
\t\t\t\t<li style=\"display: ";
        // line 20
        echo twig_safe_filter((isset($context['HideInventoryTab']) ? $context['HideInventoryTab'] : null));
        echo ";\"><a href=\"#\" id=\"tab2\" onclick=\"ShowTab(2)\">";
        echo getLang("InventoryReport");
        echo "</a></li>
\t\t\t</ul>
\t\t</td>
\t</tr>
\t<tr>
\t\t<td>
\t\t\t<br />
\t\t\t<div id=\"introText\" style=\"padding:0px 0px 5px 10px\" class=\"Text\"></div>
\t\t\t<div id=\"dateBlock\" style=\"padding:5px 0px 5px 10px\" class=\"Text FloatLeft\">
\t\t\t\t<table border=0 cellspacing=0 cellpadding=0>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td style=\"background: #eee; padding: 3px 5px;\" width=\"1\" class=\"dateField\">
\t\t\t\t\t\t\t<img src=\"images/dateicon.gif\" />
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td style=\"background: #eee;\" class=\"dateField\">Date Range:</td>
\t\t\t\t\t\t<td style=\"background: #eee; padding: 3px 5px;\" width=\"1\" class=\"dateField\">
\t\t\t\t\t\t\t<select name=\"Calendar[DateType]\" id=\"Calendar\" class=\"CalendarSelect\" onchange=\"doCustomDate(this, 7)\">
\t\t\t\t\t\t\t\t<option value=\"Today\">";
        // line 37
        echo getLang("Today");
        echo "</option>
\t\t\t\t\t\t\t\t<option value=\"Yesterday\">";
        // line 38
        echo getLang("Yesterday");
        echo "</option>
\t\t\t\t\t\t\t\t<option value=\"Last24Hours\">";
        // line 39
        echo getLang("Last24Hours");
        echo "</option>
\t\t\t\t\t\t\t\t<option value=\"Last7Days\">";
        // line 40
        echo getLang("Last7Days");
        echo "</option>
\t\t\t\t\t\t\t\t<option value=\"Last30Days\">";
        // line 41
        echo getLang("Last30Days");
        echo "</option>
\t\t\t\t\t\t\t\t<option value=\"ThisMonth\">";
        // line 42
        echo getLang("ThisMonth");
        echo "</option>
\t\t\t\t\t\t\t\t<option value=\"LastMonth\">";
        // line 43
        echo getLang("LastMonth");
        echo "</option>
\t\t\t\t\t\t\t\t<option value=\"AllTime\" SELECTED>";
        // line 44
        echo getLang("AllTime");
        echo "</option>
\t\t\t\t\t\t\t\t<option value=\"Custom\">";
        // line 45
        echo getLang("Custom");
        echo "</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td style=\"background: #eee;\" class=\"dateField\">
\t\t\t\t\t\t\t<span id=customDate7 style=\"display:none\">&nbsp;
\t\t\t\t\t\t\t<select name=\"Calendar[From][Day]\" class=\"CalendarSelectSmall\" style=\"margin-bottom:3px\">
\t\t\t\t\t\t\t\t";
        // line 51
        echo twig_safe_filter((isset($context['OverviewFromDays']) ? $context['OverviewFromDays'] : null));
        echo "
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<select name=\"Calendar[From][Mth]\" class=\"CalendarSelectSmall\" style=\"margin-bottom:3px\">
\t\t\t\t\t\t\t\t";
        // line 54
        echo twig_safe_filter((isset($context['OverviewFromMonths']) ? $context['OverviewFromMonths'] : null));
        echo "
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<select name=\"Calendar[From][Yr]\" class=\"CalendarSelectSmall\" style=\"margin-bottom:3px\">
\t\t\t\t\t\t\t\t";
        // line 57
        echo twig_safe_filter((isset($context['OverviewFromYears']) ? $context['OverviewFromYears'] : null));
        echo "
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<span class=body>";
        // line 59
        echo getLang("To1");
        echo "</span>
\t\t\t\t\t\t\t<select name=\"Calendar[To][Day]\" class=\"CalendarSelectSmall\" style=\"margin-bottom:3px\">
\t\t\t\t\t\t\t\t";
        // line 61
        echo twig_safe_filter((isset($context['OverviewToDays']) ? $context['OverviewToDays'] : null));
        echo "
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<select name=\"Calendar[To][Mth]\" class=\"CalendarSelectSmall\" style=\"margin-bottom:3px\">
\t\t\t\t\t\t\t\t";
        // line 64
        echo twig_safe_filter((isset($context['OverviewToMonths']) ? $context['OverviewToMonths'] : null));
        echo "
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<select name=\"Calendar[To][Yr]\" class=\"CalendarSelectSmall\" style=\"margin-bottom:3px\">
\t\t\t\t\t\t\t\t";
        // line 67
        echo twig_safe_filter((isset($context['OverviewToYears']) ? $context['OverviewToYears'] : null));
        echo "
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</span>&nbsp;
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td style=\"background: #eee; padding: 3px 5px; ";
        // line 71
        echo twig_safe_filter((isset($context['HideVendorList']) ? $context['HideVendorList'] : null));
        echo "\" width=\"1\">
\t\t\t\t\t\t\t<img src=\"images/vendor.gif\" />
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td style=\"background: #eee; ";
        // line 74
        echo twig_safe_filter((isset($context['HideVendorList']) ? $context['HideVendorList'] : null));
        echo "\">";
        echo getLang("Vendor");
        echo ":</td>
\t\t\t\t\t\t<td class=\"VendorSelect\" style=\"background: #eee; padding: 3px 5px; ";
        // line 75
        echo twig_safe_filter((isset($context['HideVendorList']) ? $context['HideVendorList'] : null));
        echo "\" width=\"1\">
\t\t\t\t\t\t\t<select name=\"vendorId\">
\t\t\t\t\t\t\t\t";
        // line 77
        echo twig_safe_filter((isset($context['VendorSelect']) ? $context['VendorSelect'] : null));
        echo "
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"GoButton\" style=\"background: #eee; padding: 3px 5px;\"><input type=\"submit\" value=\"Go\" class=\"Text\" /></td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<div id=\"ShowHideVariationsButtonContainer\">
\t\t\t\t\t\t\t\t<input id=\"ShowHideVariationsButton\" type=\"button\" class=\"Text\" onclick=\"ChangeProductsByInventoryVariations();return false;\" value=\"";
        // line 83
        echo getLang("HideVariations");
        echo "\" />
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t</table>
\t\t\t</div>
\t\t\t<div id=\"div0\" style=\"padding-top:10px; padding-left:10px\" class=\"text\">
\t\t\t\t<div id=\"productsByNumSoldGrid\">
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div id=\"div1\" style=\"padding-top:10px; padding-left:10px\" class=\"text\">
\t\t\t\t<div id=\"productsByNumViewsGrid\">
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div id=\"div2\" style=\"padding-top:10px; padding-left:10px; display: ";
        // line 97
        echo twig_safe_filter((isset($context['HideInventoryTab']) ? $context['HideInventoryTab'] : null));
        echo ";\" class=\"text\">
\t\t\t\t<div id=\"productsByInventoryGrid\">
\t\t\t\t</div>
\t\t\t</div>
\t\t\t</form>
\t\t</td>
\t</tr>
\t</table>
\t</div>

\t<script type=\"text/javascript\">

\t\tvar productsPerPage = 20;

\t\tvar productsByNumSoldCurrentPage = 1;
\t\tvar productsByNumSoldLoaded = false;
\t\tvar productsByNumSoldSortField = '';
\t\tvar productsByNumSoldSortOrder = '';

\t\tvar productsByNumViewsCurrentPage = 1;
\t\tvar productsByNumViewsLoaded = false;
\t\tvar productsByNumViewsSortField = '';
\t\tvar productsByNumViewsSortOrder = '';

\t\tvar productsByInventoryVariations = 1;
\t\tvar productsByInventoryCurrentPage = 1;
\t\tvar productsByInventoryLoaded = false;
\t\tvar productsByInventorySortField = '';
\t\tvar productsByInventorySortOrder = '';

\t\tvar showProductInventory = '";
        // line 127
        echo twig_safe_filter((isset($context['ShowInventoryGrid']) ? $context['ShowInventoryGrid'] : null));
        echo "';

\t\tfunction ShowTab(T) {

\t\t\ti = 0;

\t\t\twhile (document.getElementById(\"tab\" + i) != null) {
\t\t\t\tdocument.getElementById(\"div\" + i).style.display = \"none\";
\t\t\t\tdocument.getElementById(\"tab\" + i).className = \"\";
\t\t\t\ti++;
\t\t\t}

\t\t\tdocument.getElementById(\"div\" + T).style.display = \"\";
\t\t\tdocument.getElementById(\"tab\" + T).className = \"active\";
\t\t\tdocument.getElementById(\"currentTab\").value = T;

\t\t\t// What should the intro text be?
\t\t\tswitch(T) {
\t\t\t\tcase 0: {
\t\t\t\t\t\$('#introText').html('";
        // line 146
        echo getLang("ProductsByNumSoldIntro");
        echo "');
\t\t\t\t\t\$('#dateBlock .dateField').show();
\t\t\t\t\t\$('#dateBlock .GoButton').show();
\t\t\t\t\t\$('#ShowHideVariationsButtonContainer').hide();
\t\t\t\t\tif(!productsByNumSoldLoaded) {
\t\t\t\t\t\tLoadProductsByNumSoldGrid();
\t\t\t\t\t\tproductsByNumSoldLoaded = true;
\t\t\t\t\t}
\t\t\t\t\tbreak;
\t\t\t\t}
\t\t\t\tcase 1: {
\t\t\t\t\t\$('#introText').html('";
        // line 157
        echo getLang("ProductsByNumViewsIntro");
        echo "');
\t\t\t\t\t\$('#dateBlock .dateField').hide();
\t\t\t\t\t\$('#ShowHideVariationsButtonContainer').hide();
\t\t\t\t\tif(\$('#dateBlock .VendorSelect').css('display') != 'none') {
\t\t\t\t\t\t\$('#dateBlock .GoButton').show();
\t\t\t\t\t}
\t\t\t\t\telse {
\t\t\t\t\t\t\$('#dateBlock .GoButton').hide();
\t\t\t\t\t}
\t\t\t\t\tif(!productsByNumViewsLoaded) {
\t\t\t\t\t\tLoadProductsByNumViewsGrid();
\t\t\t\t\t\tproductsByNumViewsLoaded = true;
\t\t\t\t\t}
\t\t\t\t\tbreak;
\t\t\t\t}
\t\t\t\tcase 2: {
\t\t\t\t\tif (showProductInventory !== '1') {
\t\t\t\t\t\tbreak;
\t\t\t\t\t}
\t\t\t\t\t\$('#ShowHideVariationsButtonContainer').show();
\t\t\t\t\t\$('#introText').html('";
        // line 177
        echo getLang("ProductsByInventoryIntro");
        echo "');
\t\t\t\t\t\$('#dateBlock .dateField').hide();
\t\t\t\t\tif(\$('#dateBlock .VendorSelect').css('display') != 'none') {
\t\t\t\t\t\t\$('#dateBlock .GoButton').show();
\t\t\t\t\t}
\t\t\t\t\telse {
\t\t\t\t\t\t\$('#dateBlock .GoButton').hide();
\t\t\t\t\t}
\t\t\t\t\tif(!productsByInventoryLoaded) {
\t\t\t\t\t\tLoadProductsByInventoryGrid();
\t\t\t\t\t\tproductsByInventoryLoaded = true;
\t\t\t\t\t}
\t\t\t\t\tbreak;
\t\t\t\t}
\t\t\t}
\t\t}

\t\tfunction ChangeProductsByNumSoldPerPage(ProductsPerPage) {
\t\t\t// Change how many products are shown per page
\t\t\tproductsPerPage = ProductsPerPage;
\t\t\tproductsByNumSoldCurrentPage = 1;
\t\t\tLoadProductsByNumSoldGrid();
\t\t}

\t\tfunction ChangeProductsByNumSoldPage(Page) {
\t\t\t// Change which page of orders we're viewing
\t\t\tproductsByNumSoldCurrentPage = Page;
\t\t\tLoadProductsByNumSoldGrid();
\t\t}

\t\tfunction SortProductsByNumSold(field, order) {
\t\t\tproductsByNumSoldSortField = field;
\t\t\tproductsByNumSoldSortOrder = order;
\t\t\tLoadProductsByNumSoldGrid();
\t\t}

\t\tfunction ChangeProductsByNumViewsPerPage(ProductsPerPage) {
\t\t\t// Change how many products are shown per page
\t\t\tproductsPerPage = ProductsPerPage;
\t\t\tproductsByNumViewsCurrentPage = 1;
\t\t\tLoadProductsByNumViewsGrid();
\t\t}

\t\tfunction ChangeProductsByNumViewsPage(Page) {
\t\t\t// Change which page of orders we're viewing
\t\t\tproductsByNumViewsCurrentPage = Page;
\t\t\tLoadProductsByNumViewsGrid();
\t\t}

\t\tfunction SortProductsByNumViews(field, order) {
\t\t\tproductsByNumViewsSortField = field;
\t\t\tproductsByNumViewsSortOrder = order;
\t\t\tLoadProductsByNumViewsGrid();
\t\t}

\t\tfunction ChangeProductsByInventoryPerPage(ProductsPerPage) {
\t\t\t// Change how many products are shown per page
\t\t\tproductsPerPage = ProductsPerPage;
\t\t\tproductsByInventoryCurrentPage = 1;
\t\t\tLoadProductsByInventoryGrid();
\t\t}

\t\tfunction ChangeProductsByInventoryVariations() {
\t\t\tproductsByInventoryVariations = productsByInventoryVariations ? 0 : 1;

\t\t\tvar buttonText = '";
        // line 242
        echo getLang("ShowVariations");
        echo "';
\t\t\tif (productsByInventoryVariations) {
\t\t\t\tbuttonText = '";
        // line 244
        echo getLang("HideVariations");
        echo "';
\t\t\t}
\t\t\t\$('#ShowHideVariationsButton').val(buttonText);

\t\t\tproductsByInventoryCurrentPage = 1;
\t\t\tLoadProductsByInventoryGrid();
\t\t}

\t\tfunction ChangeProductsByInventoryPage(Page) {
\t\t\t// Change which page of orders we're viewing
\t\t\tproductsByInventoryCurrentPage = Page;
\t\t\tLoadProductsByInventoryGrid();
\t\t}

\t\tfunction SortProductsByInventory(field, order) {
\t\t\tproductsByInventorySortField = field;
\t\t\tproductsByInventorySortOrder = order;
\t\t\tLoadProductsByInventoryGrid();
\t\t}

\t\tfunction LoadProductsByNumSoldGrid() {
\t\t\tjQuery.ajax({url: 'index.php?ToDo=prodStatsByNumSoldGrid&vendorId=";
        // line 265
        echo twig_safe_filter((isset($context['VendorId']) ? $context['VendorId'] : null));
        echo "&From=";
        echo twig_safe_filter((isset($context['FromStamp']) ? $context['FromStamp'] : null));
        echo "&To=";
        echo twig_safe_filter((isset($context['ToStamp']) ? $context['ToStamp'] : null));
        echo "&Page='+productsByNumSoldCurrentPage+'&Show='+productsPerPage+'&SortBy='+productsByNumSoldSortField+'&SortOrder='+productsByNumSoldSortOrder,
\t\t\t\t\t success: function(data) {
\t\t\t\t\t\$('#productsByNumSoldGrid').html(data);
\t\t\t\t\t }
\t\t\t\t}
\t\t\t);
\t\t}

\t\tfunction LoadProductsByNumViewsGrid() {
\t\t\tjQuery.ajax({url: 'index.php?ToDo=prodStatsByNumViewsGrid&vendorId=";
        // line 274
        echo twig_safe_filter((isset($context['VendorId']) ? $context['VendorId'] : null));
        echo "&Page='+productsByNumViewsCurrentPage+'&Show='+productsPerPage+'&SortBy='+productsByNumViewsSortField+'&SortOrder='+productsByNumViewsSortOrder,
\t\t\t\t\t success: function(data) {
\t\t\t\t\t\$('#productsByNumViewsGrid').html(data);
\t\t\t\t\t }
\t\t\t\t}
\t\t\t);
\t\t}

\t\tfunction LoadProductsByInventoryGrid() {
\t\t\tif (showProductInventory !== '1') {
\t\t\t\treturn;
\t\t\t}

\t\t\tjQuery.ajax({url: 'index.php?ToDo=prodStatsByInventoryGrid&vendorId=";
        // line 287
        echo twig_safe_filter((isset($context['VendorId']) ? $context['VendorId'] : null));
        echo "&Variations='+productsByInventoryVariations+'&Page='+productsByInventoryCurrentPage+'&Show='+productsPerPage+'&SortBy='+productsByInventorySortField+'&SortOrder='+productsByInventorySortOrder,
\t\t\t\t\t success: function(data) {
\t\t\t\t\t\$('#productsByInventoryGrid').html(data);
\t\t\t\t\t }
\t\t\t\t}
\t\t\t);
\t\t}

\t\t\$(document).ready(function() {

\t\t\tShowTab(";
        // line 297
        echo twig_safe_filter((isset($context['CurrentTab']) ? $context['CurrentTab'] : null));
        echo ");

\t\t\t// Which date range is selected?
\t\t\tvar current_date = '";
        // line 300
        echo twig_safe_filter((isset($context['CurrentDate']) ? $context['CurrentDate'] : null));
        echo "';
\t\t\tvar Calendar = g('Calendar');

\t\t\tfor(i = 0; i < Calendar.options.length; i++) {
\t\t\t\tif(Calendar.options[i].value == current_date) {
\t\t\t\t\tCalendar.options[i].selected = true;
\t\t\t\t\tbreak;
\t\t\t\t}
\t\t\t}

\t\t\t// Is it custom? If so, show the custom date ranges
\t\t\tif(current_date == 'Custom') {
\t\t\t\tdoCustomDate(g('Calendar'), 7);
\t\t\t}

\t\t});

\t</script>
";
    }

}
