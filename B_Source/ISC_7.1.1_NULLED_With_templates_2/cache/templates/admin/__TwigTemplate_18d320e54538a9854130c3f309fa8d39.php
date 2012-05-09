<?php

/* stats.search.tpl */
class __TwigTemplate_18d320e54538a9854130c3f309fa8d39 extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "\t<form action=\"index.php?ToDo=viewSearchStats\" name=\"frmStats\" id=\"frmStats\" method=\"post\">
\t<input id=\"currentTab\" name=\"currentTab\" value=\"0\" type=\"hidden\">
\t<div class=\"BodyContainer\">
\t<table cellSpacing=\"0\" cellPadding=\"0\" width=\"100%\" style=\"margin-left: 4px; margin-top: 8px;\">
\t<tr>
\t\t<td class=\"Heading1\">Search Statistics</td>
\t</tr>
\t<tr>
\t\t<td class=\"Intro\">
\t\t\t<p>";
        // line 10
        echo getLang("StoreOverviewIntro");
        echo "</p>
\t\t\t";
        // line 11
        echo twig_safe_filter((isset($context['Message']) ? $context['Message'] : null));
        echo "
\t\t</td>
\t</tr>
\t<tr>
\t\t<td class=\"Intro\">
\t\t\t<div>
\t\t\t\t<input type=\"button\" name=\"clearSearchStats\" value=\"Delete Statistics\" onclick=\"clearStatsClick()\" class=\"SmallButton\" />
\t\t\t</div>
\t\t</td>
\t</tr>
\t<tr>
\t\t<td>
\t\t\t<ul id=\"tabnav\">
\t\t\t\t<li><a href=\"#\" class=\"active\" id=\"tab0\" onclick=\"ShowTab(0)\">";
        // line 24
        echo getLang("StatsOverview");
        echo "</a></li>
\t\t\t\t<li><a href=\"#\" id=\"tab1\" onclick=\"ShowTab(1)\">";
        // line 25
        echo getLang("SearchStatsKeywordsResults");
        echo "</a></li>
\t\t\t\t<li><a href=\"#\" id=\"tab2\" onclick=\"ShowTab(2)\">";
        // line 26
        echo getLang("SearchStatsKeywordsNoResults");
        echo "</a></li>
\t\t\t\t<li><a href=\"#\" id=\"tab3\" onclick=\"ShowTab(3)\">";
        // line 27
        echo getLang("SearchStatsBestPerforming");
        echo "</a></li>
\t\t\t\t<li><a href=\"#\" id=\"tab4\" onclick=\"ShowTab(4)\">";
        // line 28
        echo getLang("SearchStatsWorstPerforming");
        echo "</a></li>
\t\t\t\t<li><a href=\"#\" id=\"tab5\" onclick=\"ShowTab(5)\">";
        // line 29
        echo getLang("SearchStatsCorrections");
        echo "</a></li>
\t\t\t</ul>
\t\t</td>
\t</tr>
\t<tr>
\t\t<td>
\t\t\t<br />
\t\t\t<div id=\"introText\" style=\"padding:0px 0px 5px 10px\" class=\"Text\"></div>
\t\t\t<div style=\"padding:5px 0px 5px 10px\" class=\"Text FloatLeft\">
\t\t\t\t<table border=0 cellspacing=0 cellpadding=0>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td style=\"background: #eee; padding: 3px 5px;\" width=\"1\">
\t\t\t\t\t\t\t<img src=\"images/dateicon.gif\" />
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td style=\"background: #eee;\">Date Range:</td>
\t\t\t\t\t\t<td style=\"background: #eee; padding: 3px 5px;\" width=\"1\">
\t\t\t\t\t\t\t<select name=\"Calendar[DateType]\" id=\"Calendar\" class=\"CalendarSelect\" onchange=\"doCustomDate(this, 7)\">
\t\t\t\t\t\t\t\t<option value=\"Today\">";
        // line 46
        echo getLang("Today");
        echo "</option>
\t\t\t\t\t\t\t\t<option value=\"Yesterday\">";
        // line 47
        echo getLang("Yesterday");
        echo "</option>
\t\t\t\t\t\t\t\t<option value=\"Last24Hours\">";
        // line 48
        echo getLang("Last24Hours");
        echo "</option>
\t\t\t\t\t\t\t\t<option value=\"Last7Days\">";
        // line 49
        echo getLang("Last7Days");
        echo "</option>
\t\t\t\t\t\t\t\t<option value=\"Last30Days\">";
        // line 50
        echo getLang("Last30Days");
        echo "</option>
\t\t\t\t\t\t\t\t<option value=\"ThisMonth\">";
        // line 51
        echo getLang("ThisMonth");
        echo "</option>
\t\t\t\t\t\t\t\t<option value=\"LastMonth\">";
        // line 52
        echo getLang("LastMonth");
        echo "</option>
\t\t\t\t\t\t\t\t<option value=\"AllTime\" SELECTED>";
        // line 53
        echo getLang("AllTime");
        echo "</option>
\t\t\t\t\t\t\t\t<option value=\"Custom\">";
        // line 54
        echo getLang("Custom");
        echo "</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td style=\"background: #eee;\">
\t\t\t\t\t\t\t<span id=customDate7 style=\"display:none\">&nbsp;
\t\t\t\t\t\t\t<select name=\"Calendar[From][Day]\" class=\"CalendarSelectSmall\" style=\"margin-bottom:3px\">
\t\t\t\t\t\t\t\t";
        // line 60
        echo twig_safe_filter((isset($context['OverviewFromDays']) ? $context['OverviewFromDays'] : null));
        echo "
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<select name=\"Calendar[From][Mth]\" class=\"CalendarSelectSmall\" style=\"margin-bottom:3px\">
\t\t\t\t\t\t\t\t";
        // line 63
        echo twig_safe_filter((isset($context['OverviewFromMonths']) ? $context['OverviewFromMonths'] : null));
        echo "
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<select name=\"Calendar[From][Yr]\" class=\"CalendarSelectSmall\" style=\"margin-bottom:3px\">
\t\t\t\t\t\t\t\t";
        // line 66
        echo twig_safe_filter((isset($context['OverviewFromYears']) ? $context['OverviewFromYears'] : null));
        echo "
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<span class=body>";
        // line 68
        echo getLang("To1");
        echo "</span>
\t\t\t\t\t\t\t<select name=\"Calendar[To][Day]\" class=\"CalendarSelectSmall\" style=\"margin-bottom:3px\">
\t\t\t\t\t\t\t\t";
        // line 70
        echo twig_safe_filter((isset($context['OverviewToDays']) ? $context['OverviewToDays'] : null));
        echo "
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<select name=\"Calendar[To][Mth]\" class=\"CalendarSelectSmall\" style=\"margin-bottom:3px\">
\t\t\t\t\t\t\t\t";
        // line 73
        echo twig_safe_filter((isset($context['OverviewToMonths']) ? $context['OverviewToMonths'] : null));
        echo "
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<select name=\"Calendar[To][Yr]\" class=\"CalendarSelectSmall\" style=\"margin-bottom:3px\">
\t\t\t\t\t\t\t\t";
        // line 76
        echo twig_safe_filter((isset($context['OverviewToYears']) ? $context['OverviewToYears'] : null));
        echo "
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</span>&nbsp;
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td style=\"background: #eee; padding: 3px 5px;\"><input type=\"submit\" value=\"Go\" class=\"Text\" /></td>
\t\t\t\t\t</tr>
\t\t\t\t</table>
\t\t\t</div>
\t\t\t<div id=\"div0\" style=\"padding-top:10px\">
\t\t\t\t<table width=\"100%\" border=\"0\" class=\"text\" style=\"padding-left:10px; clear: both;\">
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td valign=top width=\"250\" nowrap>
\t\t\t\t\t\t\t<div class=\"MidHeading\" style=\"width:100%\"><img src=\"images/order.gif\" align=\"absMiddle\">&nbsp;";
        // line 88
        echo getLang("OverviewSearchSummary");
        echo "</div>
\t\t\t\t\t\t\t<ul class=\"Text\">
\t\t\t\t\t\t\t\t<li>";
        // line 90
        echo getLang("OverviewNoSearches");
        echo ": ";
        echo twig_safe_filter((isset($context['OverviewNumSearches']) ? $context['OverviewNumSearches'] : null));
        echo "</li>
\t\t\t\t\t\t\t\t<li>";
        // line 91
        echo getLang("OverviewMostSearchesDay");
        echo ": ";
        echo twig_safe_filter((isset($context['OverviewMostSearchesDay']) ? $context['OverviewMostSearchesDay'] : null));
        echo "</li>
\t\t\t\t\t\t\t\t<li>";
        // line 92
        echo getLang("OverviewAvgSearchesDay");
        echo ": ";
        echo twig_safe_filter((isset($context['OverviewAverageSearchesDay']) ? $context['OverviewAverageSearchesDay'] : null));
        echo "</li>
\t\t\t\t\t\t\t\t<li>";
        // line 93
        echo getLang("OverviewPopularTermsResults");
        echo ": ";
        echo twig_safe_filter((isset($context['OverviewMostPopularTerms']) ? $context['OverviewMostPopularTerms'] : null));
        echo "</li>
\t\t\t\t\t\t\t\t<li>";
        // line 94
        echo getLang("OverviewPopularTermsNoResults");
        echo ": ";
        echo twig_safe_filter((isset($context['OverviewMostPopularTermsNoResults']) ? $context['OverviewMostPopularTermsNoResults'] : null));
        echo "</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td width=\"100%\" align=\"center\">
\t\t\t\t\t\t\t<div style=\"display: ";
        // line 98
        echo twig_safe_filter((isset($context['HideChart']) ? $context['HideChart'] : null));
        echo "\">
\t\t\t\t\t\t\t\t<strong>";
        // line 99
        echo twig_safe_filter((isset($context['ChartTitle']) ? $context['ChartTitle'] : null));
        echo "</strong>
\t\t\t\t\t\t\t\t<div id=\"flashcontent\" style=\"clear: both; width: 100%;\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<script type=\"text/javascript\" src=\"includes/amcharts/swfobject.js?";
        // line 102
        echo twig_escape_filter($this->env, (isset($context['JSCacheToken']) ? $context['JSCacheToken'] : null), "1");
        echo "\"></script>
\t\t\t\t\t\t\t\t<script type=\"text/javascript\">
\t\t\t\t\t\t\t\t\t\$(document).ready(function() {
\t\t\t\t\t\t\t\t\t\tvar so = new SWFObject(\"";
        // line 105
        echo twig_safe_filter((isset($context['ShopPath']) ? $context['ShopPath'] : null));
        echo "/admin/includes/amcharts/ampie.swf\", \"ampie\", \"100%\", \"430\", \"8\", \"#FFFFFF\");
\t\t\t\t\t\t\t\t\t\tso.addVariable(\"path\", \"";
        // line 106
        echo twig_safe_filter((isset($context['ShopPath']) ? $context['ShopPath'] : null));
        echo "/admin/includes/amcharts/\");
\t\t\t\t\t\t\t\t\t\tso.addVariable(\"settings_file\", escape(\"";
        // line 107
        echo twig_safe_filter((isset($context['ShopPath']) ? $context['ShopPath'] : null));
        echo "/admin/includes/amcharts/searchoverview.xml\"));
\t\t\t\t\t\t\t\t\t\tso.addVariable(\"data_file\", escape(\"";
        // line 108
        echo twig_safe_filter((isset($context['ShopPath']) ? $context['ShopPath'] : null));
        echo "/admin/index.php?ToDo=searchStatsOverviewData&from=";
        echo twig_safe_filter((isset($context['OverviewFromStamp']) ? $context['OverviewFromStamp'] : null));
        echo "&to=";
        echo twig_safe_filter((isset($context['OverviewToStamp']) ? $context['OverviewToStamp'] : null));
        echo "\"));
\t\t\t\t\t\t\t\t\t\tso.addVariable(\"preloader_color\", \"#000000\");
\t\t\t\t\t\t\t\t\t\tso.write(\"flashcontent\");
\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t</table>
\t\t\t</div>
\t\t\t<div id=\"div1\" style=\"padding-top:10px; padding-left:10px\" class=\"text\">
\t\t\t\t<div id=\"keywordsWithResultsGrid\">
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div id=\"div2\" style=\"padding-top:10px; padidng-left:10px\" class=\"text\">
\t\t\t\t<div id=\"keywordsWithoutResultsGrid\">
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div id=\"div3\" style=\"padding-top:10px; padding-left:10px\" class=\"text\">
\t\t\t\t<div id=\"bestPerformingKeywordsGrid\">
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div id=\"div4\" style=\"padding-top:10px; padding-left:10px\" class=\"text\">
\t\t\t\t<div id=\"worstPerformingKeywordsGrid\">
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div id=\"div5\" style=\"padding-top:10px; padding-left:10px\" class=\"text\">
\t\t\t\t<div id=\"searchCorrectionsGrid\">
\t\t\t\t</div>
\t\t\t</div>
\t\t\t</form>
\t\t</td>
\t</tr>
\t</table>
\t</div>

\t<script type=\"text/javascript\">

\tvar resultsPerPage = 20;

\tvar keywordsWithResultsLoaded = false;
\tvar keywordsWithResultsFromLink = false;
\tvar keywordsWithResultsCurrentPage = 1;
\tvar keywordsWithResultsSortField = '';
\tvar keywordsWithResultsSortOrder = '';

\tvar keywordsWithoutResultsLoaded = false;
\tvar keywordsWithoutResultsFromLink = false;
\tvar keywordsWithoutResultsCurrentPage = 1;
\tvar keywordsWithoutResultsSortField = '';
\tvar keywordsWithoutResultsSortOrder = '';

\tvar bestPerformingKeywordsLoaded = false;
\tvar bestPerformingKeywordsFromLink = false;
\tvar bestPerformingKeywordsCurrentPage = 1;
\tvar bestPerformingKeywordsSortField = '';
\tvar bestPerformingKeywordsSortOrder = '';

\tvar worstPerformingKeywordsLoaded = false;
\tvar worstPerformingKeywordsFromLink = false;
\tvar worstPerformingKeywordsCurrentPage = 1;
\tvar worstPerformingKeywordsSortField = '';
\tvar worstPerformingKeywordsSortOrder = '';

\tvar searchCorrectionsLoaded = false;
\tvar searchCorrectionsFromLink = false;
\tvar searchCorrectionsCurrentPage = 1;
\tvar searchCorrectionsSortField = '';
\tvar searchCorrectionsSortOrder = '';

\tfunction ShowTab(T) {

\t\ti = 0;

\t\twhile (document.getElementById(\"tab\" + i) != null) {
\t\t\tdocument.getElementById(\"div\" + i).style.display = \"none\";
\t\t\tdocument.getElementById(\"tab\" + i).className = \"\";
\t\t\ti++;
\t\t}

\t\tdocument.getElementById(\"div\" + T).style.display = \"\";
\t\tdocument.getElementById(\"tab\" + T).className = \"active\";
\t\tdocument.getElementById(\"currentTab\").value = T;

\t\t// What should the intro text be?
\t\tswitch(T) {
\t\t\tcase 0: {
\t\t\t\t\$('#introText').html('";
        // line 195
        echo getLang("StatsSearchOverviewIntro1");
        echo "');
\t\t\t\tbreak;
\t\t\t}
\t\t\tcase 1: {
\t\t\t\t\$('#introText').html('";
        // line 199
        echo getLang("StatsSearchOverviewIntro2");
        echo "');

\t\t\t\tif(!keywordsWithResultsLoaded) {
\t\t\t\t\tLoadKeywordsWithResultsGrid();
\t\t\t\t\tkeywordsWithResultsLoaded = true;
\t\t\t\t}
\t\t\t\tbreak;
\t\t\t}
\t\t\tcase 2: {
\t\t\t\t\$('#introText').html('";
        // line 208
        echo getLang("StatsSearchOverviewIntro3");
        echo "');

\t\t\t\tif(!keywordsWithoutResultsLoaded) {
\t\t\t\t\tLoadKeywordsWithoutResultsGrid();
\t\t\t\t\tkeywordsWithoutResultsLoaded = true;
\t\t\t\t}
\t\t\t\tbreak;
\t\t\t}
\t\t\tcase 3: {
\t\t\t\t\$('#introText').html('";
        // line 217
        echo getLang("StatsSearchOverviewIntro4");
        echo "');

\t\t\t\tif(!bestPerformingKeywordsLoaded) {
\t\t\t\t\tLoadBestPerformingKeywordsGrid();
\t\t\t\t\tbestPerformingKeywordsLoaded = true;
\t\t\t\t}
\t\t\t\tbreak;
\t\t\t}
\t\t\tcase 4: {
\t\t\t\t\$('#introText').html('";
        // line 226
        echo getLang("StatsSearchOverviewIntro5");
        echo "');

\t\t\t\tif(!worstPerformingKeywordsLoaded) {
\t\t\t\t\tLoadWorstPerformingKeywordsGrid();
\t\t\t\t\tworstPerformingKeywordsLoaded = true;
\t\t\t\t}
\t\t\t\tbreak;
\t\t\t}
\t\t\tcase 5: {
\t\t\t\t\$('#introText').html('";
        // line 235
        echo getLang("StatsSearchOverviewIntro6");
        echo "');

\t\t\t\tif(!searchCorrectionsLoaded) {
\t\t\t\t\tLoadSearchCorrectionsGrid();
\t\t\t\t\tsearchCorrectionsLoaded = true;
\t\t\t\t}
\t\t\t\tbreak;
\t\t\t}
\t\t}
\t}

\tfunction ChangeKeywordsWithResultsPerPage(ResultsPerPage) {
\t\t// Change how many results are shown per page
\t\tresultsPerPage = ResultsPerPage;
\t\tkeywordsWithResultsCurrentPage = 1;
\t\tkeywordsWithResultsFromLink = true;
\t\tLoadKeywordsWithResultsGrid();
\t}

\tfunction ChangeKeywordsWithResultsPage(Page) {
\t\t// Change which page of results we're viewing
\t\tkeywordsWithResultsCurrentPage = Page;
\t\tkeywordsWithResultsFromLink = true;
\t\tLoadKeywordsWithResultsGrid();
\t}

\tfunction SortKeywordsWithResults(field, order) {
\t\tkeywordsWithResultsSortField = field;
\t\tkeywordsWithResultsSortOrder = order;
\t\tkeywordsWithResultsFromLink = true;
\t\tLoadKeywordsWithResultsGrid();
\t}

\tfunction LoadKeywordsWithResultsGrid() {
\t\t// Load the search keywords with results and jump to a specific page
\t\tjQuery.ajax({url: 'index.php?ToDo=searchStatsWithResultsGrid&FromLink='+keywordsWithResultsFromLink+'&From=";
        // line 270
        echo twig_safe_filter((isset($context['FromStamp']) ? $context['FromStamp'] : null));
        echo "&To=";
        echo twig_safe_filter((isset($context['ToStamp']) ? $context['ToStamp'] : null));
        echo "&Page='+keywordsWithResultsCurrentPage+'&Show='+resultsPerPage+'&SortBy='+keywordsWithResultsSortField+'&SortOrder='+keywordsWithResultsSortOrder,
\t\t\t     success: function(data) {
\t\t\t\t\$('#keywordsWithResultsGrid').html(data)
\t\t\t     }
\t\t\t}
\t\t);
\t}

\tfunction ChangeKeywordsWithoutResultsPerPage(ResultsPerPage) {
\t\t// Change how many results are shown per page
\t\tresultsPerPage = ResultsPerPage;
\t\tkeywordsWithoutResultsCurrentPage = 1;
\t\tkeywordsWithoutResultsFromLink = true;
\t\tLoadKeywordsWithoutResultsGrid();
\t}

\tfunction ChangeKeywordsWithoutResultsPage(Page) {
\t\t// Change which page of results we're viewing
\t\tkeywordsWithoutResultsCurrentPage = Page;
\t\tkeywordsWithoutResultsFromLink = true;
\t\tLoadKeywordsWithoutResultsGrid();
\t}

\tfunction SortKeywordsWithoutResults(field, order) {
\t\tkeywordsWithoutResultsSortField = field;
\t\tkeywordsWithoutResultsSortOrder = order;
\t\tkeywordsWithoutResultsFromLink = true;
\t\tLoadKeywordsWithoutResultsGrid();
\t}

\tfunction LoadKeywordsWithoutResultsGrid() {
\t\t// Load the search keywords without results and jump to a specific page
\t\tjQuery.ajax({url: 'index.php?ToDo=searchStatsWithoutResultsGrid&FromLink='+keywordsWithoutResultsFromLink+'&From=";
        // line 302
        echo twig_safe_filter((isset($context['FromStamp']) ? $context['FromStamp'] : null));
        echo "&To=";
        echo twig_safe_filter((isset($context['ToStamp']) ? $context['ToStamp'] : null));
        echo "&Page='+keywordsWithoutResultsCurrentPage+'&Show='+resultsPerPage+'&SortBy='+keywordsWithoutResultsSortField+'&SortOrder='+keywordsWithoutResultsSortOrder,
\t\t\t     success: function(data) {
\t\t\t\t\$('#keywordsWithoutResultsGrid').html(data)
\t\t\t     }
\t\t\t}
\t\t);
\t}

\tfunction ChangeBestPerformingKeywordsPerPage(ResultsPerPage) {
\t\t// Change how many results are shown per page
\t\tresultsPerPage = ResultsPerPage;
\t\tbestPerformingKeywordsCurrentPage = 1;
\t\tbestPerformingKeywordsFromLink = true;
\t\tLoadBestPerformingKeywordsGrid();
\t}

\tfunction ChangeBestPerformingKeywordsPage(Page) {
\t\t// Change which page of results we're viewing
\t\tbestPerformingKeywordsCurrentPage = Page;
\t\tbestPerformingKeywordsFromLink = true;
\t\tLoadBestPerformingKeywordsGrid();
\t}

\tfunction SortBestPerformingKeywords(field, order) {
\t\tbestPerformingKeywordsSortField = field;
\t\tbestPerformingKeywordsSortOrder = order;
\t\tbestPerformingKeywordsFromLink = true;
\t\tLoadBestPerformingKeywordsGrid();
\t}

\tfunction LoadBestPerformingKeywordsGrid() {
\t\t// Load the best performing search keywords and jump to a specific page
\t\tjQuery.ajax({url: 'index.php?ToDo=searchStatsBestPerformingGrid&FromLink='+bestPerformingKeywordsFromLink+'&From=";
        // line 334
        echo twig_safe_filter((isset($context['FromStamp']) ? $context['FromStamp'] : null));
        echo "&To=";
        echo twig_safe_filter((isset($context['ToStamp']) ? $context['ToStamp'] : null));
        echo "&Page='+bestPerformingKeywordsCurrentPage+'&Show='+resultsPerPage+'&SortBy='+bestPerformingKeywordsSortField+'&SortOrder='+bestPerformingKeywordsSortOrder,
\t\t\t     success: function(data) {
\t\t\t\t\$('#bestPerformingKeywordsGrid').html(data)
\t\t\t     }
\t\t\t}
\t\t);
\t}

\tfunction ChangeWorstPerformingKeywordsPerPage(ResultsPerPage) {
\t\t// Change how many results are shown per page
\t\tresultsPerPage = ResultsPerPage;
\t\tworstPerformingKeywordsCurrentPage = 1;
\t\tworstPerformingKeywordsFromLink = true;
\t\tLoadWorstPerformingKeywordsGrid();
\t}

\tfunction ChangeWorstPerformingKeywordsPage(Page) {
\t\t// Change which page of results we're viewing
\t\tworstPerformingKeywordsCurrentPage = Page;
\t\tworstPerformingKeywordsFromLink = true;
\t\tLoadWorstPerformingKeywordsGrid();
\t}

\tfunction SortWorstPerformingKeywords(field, order) {
\t\tworstPerformingKeywordsSortField = field;
\t\tworstPerformingKeywordsSortOrder = order;
\t\tworstPerformingKeywordsFromLink = true;
\t\tLoadWorstPerformingKeywordsGrid();
\t}

\tfunction LoadWorstPerformingKeywordsGrid() {
\t\t// Load the worst performing search keywords and jump to a specific page
\t\tjQuery.ajax({url: 'index.php?ToDo=searchStatsWorstPerformingGrid&FromLink='+worstPerformingKeywordsFromLink+'&From=";
        // line 366
        echo twig_safe_filter((isset($context['FromStamp']) ? $context['FromStamp'] : null));
        echo "&To=";
        echo twig_safe_filter((isset($context['ToStamp']) ? $context['ToStamp'] : null));
        echo "&Page='+worstPerformingKeywordsCurrentPage+'&Show='+resultsPerPage+'&SortBy='+worstPerformingKeywordsSortField+'&SortOrder='+worstPerformingKeywordsSortOrder,
\t\t\t     success: function(data) {
\t\t\t\t\$('#worstPerformingKeywordsGrid').html(data)
\t\t\t     }
\t\t\t}
\t\t);
\t}

\tfunction ChangeSearchCorrectionsPerPage(ResultsPerPage) {
\t\t// Change how many results are shown per page
\t\tresultsPerPage = ResultsPerPage;
\t\tsearchCorrectionsCurrentPage = 1;
\t\tsearchCorrectionsFromLink = true;
\t\tLoadSearchCorrectionsGrid();
\t}

\tfunction ChangeSearchCorrectionsPage(Page) {
\t\t// Change which page of results we're viewing
\t\tsearchCorrectionsCurrentPage = Page;
\t\tsearchCorrectionsFromLink = true;
\t\tLoadSearchCorrectionsGrid();
\t}

\tfunction SortSearchCorrections(field, order) {
\t\tsearchCorrectionsSortField = field;
\t\tsearchCorrectionsSortOrder = order;
\t\tsearchCorrectionsFromLink = true;
\t\tLoadSearchCorrectionsGrid();
\t}


\tfunction LoadSearchCorrectionsGrid() {
\t\t// Load the search corrections grid for the page we're viewing
\t\tjQuery.ajax({url: 'index.php?ToDo=searchStatsCorrectionsGrid&FromLink='+searchCorrectionsFromLink+'&From=";
        // line 399
        echo twig_safe_filter((isset($context['FromStamp']) ? $context['FromStamp'] : null));
        echo "&To=";
        echo twig_safe_filter((isset($context['ToStamp']) ? $context['ToStamp'] : null));
        echo "&Page='+searchCorrectionsCurrentPage+'&Show='+resultsPerPage+'&SortBy='+searchCorrectionsSortField+'&SortOrder='+searchCorrectionsSortOrder,
\t\t\t     success: function(data) {
\t\t\t\t\$('#searchCorrectionsGrid').html(data)
\t\t\t     }
\t\t\t}
\t\t);
\t}


\t\$(document).ready(function() {

\t\tShowTab(";
        // line 410
        echo twig_safe_filter((isset($context['CurrentTab']) ? $context['CurrentTab'] : null));
        echo ");

\t\t// Which date range is selected?
\t\tvar current_date = '";
        // line 413
        echo twig_safe_filter((isset($context['CurrentDate']) ? $context['CurrentDate'] : null));
        echo "';
\t\tvar Calendar = g('Calendar');

\t\tfor(i = 0; i < Calendar.options.length; i++) {
\t\t\tif(Calendar.options[i].value == current_date) {
\t\t\t\tCalendar.options[i].selected = true;
\t\t\t\tbreak;
\t\t\t}
\t\t}

\t\t// Is it custom? If so, show the custom date ranges
\t\tif(current_date == 'Custom') {
\t\t\tdoCustomDate(g('Calendar'), 7);
\t\t}
\t});

\tfunction clearStatsClick()
\t{
\t\tif(confirm('";
        // line 431
        echo getLang("ConfirmDeleteSearchStats");
        echo "'))
\t\t\twindow.location = 'index.php?ToDo=clearSearchStats';
\t}

\t</script>
";
    }

}
