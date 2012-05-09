<?php

/* ebay.manage.tpl */
class __TwigTemplate_638950d871f2b63b6b936be2e216a4ba extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "\t<p class=\"HelpInfo\">";
        echo getLang("EbayHelp");
        echo "</p>
\t<div class=\"BodyContainer\">
\t\t<input id=\"currentTab\" name=\"currentTab\" value=\"0\" type=\"hidden\">
\t\t<input id=\"ebaystore\" name=\"EbayStore\" value=\"\" type=\"hidden\">
\t\t<table class=\"OuterPanel\">
\t\t<tr>
\t\t\t<td class=\"Heading1\">
\t\t\t\t";
        // line 8
        echo getLang("Ebay");
        echo "\t\t\t</td>
\t\t</tr>
\t\t<tr>
\t\t\t<td>
\t\t\t\t<table width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"Intro\">
\t\t\t\t\t\t\t";
        // line 16
        echo twig_safe_filter((isset($context['Message']) ? $context['Message'] : null));
        echo "
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t</table>
\t\t\t</td>
\t\t</tr>
\t\t<tr>
\t\t\t<td>
\t\t\t\t<ul id=\"tabnav\">
\t\t\t\t\t<li style=\"";
        // line 25
        echo twig_safe_filter((isset($context['ShowTab']) ? $context['ShowTab'] : null));
        echo "\"><a href=\"#\" id=\"tab0\" onclick=\"ShowTab(0);return false;\">";
        echo getLang("LiveEbayListing");
        echo "</a></li>
\t\t\t\t\t<li style=\"";
        // line 26
        echo twig_safe_filter((isset($context['ShowTab']) ? $context['ShowTab'] : null));
        echo "\"><a href=\"#\" id=\"tab1\" onclick=\"ShowTab(1);return false;\">";
        echo getLang("EbayListingTemplate");
        echo "</a></li>
\t\t\t\t\t<li><a href=\"#\" class=\"active\" id=\"tab2\" onclick=\"ShowTab(2);return false;\">";
        // line 27
        echo getLang("EbaySellingSettings");
        echo "</a></li>
\t\t\t\t</ul>
\t\t\t</td>
\t\t</tr>
\t\t<tr>
\t\t\t<td>
\t\t\t\t<div id=\"div0\" style=\"padding-top: 10px;";
        // line 33
        echo twig_safe_filter((isset($context['ShowTab']) ? $context['ShowTab'] : null));
        echo "\">
\t\t\t\t\t<table id=\"IntroTable\" cellspacing=\"0\" cellpadding=\"0\" width=\"100%\">
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td colspan=\"2\" class=\"Intro\">
\t\t\t\t\t\t\t\t";
        // line 37
        echo twig_safe_filter((isset($context['ManageEbayLiveListingIntro']) ? $context['ManageEbayLiveListingIntro'] : null));
        echo "
\t\t\t\t\t\t\t\t";
        // line 38
        echo twig_safe_filter((isset($context['EbayLiveListingMessage']) ? $context['EbayLiveListingMessage'] : null));
        echo "
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"Intro\" style=\"";
        // line 42
        echo twig_safe_filter((isset($context['ShowListingOptions']) ? $context['ShowListingOptions'] : null));
        echo "\">
\t\t\t\t\t\t\t\t<form id=\"ebaylistingaction\" method=\"post\">
\t\t\t\t\t\t\t\t\t<select class=\"Field250\" name=\"ListingActionSelect\" id=\"ListingActionSelect\" ";
        // line 44
        echo twig_safe_filter((isset($context['DisableListingActionDropdown']) ? $context['DisableListingActionDropdown'] : null));
        echo ">
\t\t\t\t\t\t\t\t\t\t<option value=\"\">";
        // line 45
        echo getLang("ChooseAnAction");
        echo "</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"removelistingref\">";
        // line 46
        echo getLang("RemoveListingsAction");
        echo "</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"endlistingfromebay\">";
        // line 47
        echo getLang("EndListingsFromEbayAction");
        echo "</option>
\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t<input type=\"button\" style=\"width: 40px;\" class=\"FormButton\" value=\"Go\" name=\"EbayLiveListingActionButton\" id=\"ebayLiveListingActionButton\" ";
        // line 49
        echo twig_safe_filter((isset($context['DisableListingActionDropdown']) ? $context['DisableListingActionDropdown'] : null));
        echo ">
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"SmallSearch\" align=\"right\">
\t\t\t\t\t\t\t\t<table id=\"Table16\" style=\"";
        // line 53
        echo twig_safe_filter((isset($context['DisplayListingSearch']) ? $context['DisplayListingSearch'] : null));
        echo "\">
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<form action=\"index.php?ToDo=viewEbay&currentTab=0";
        // line 55
        echo twig_safe_filter((isset($context['SortURL']) ? $context['SortURL'] : null));
        echo "\" method=\"get\" onsubmit=\"return ValidateForm(CheckSearchForm('listing'))\">
\t\t\t\t\t\t\t\t\t\t<td nowrap>
\t\t\t\t\t\t\t\t\t\t\t<select class=\"Field150\" name=\"listingType\" id=\"ListingType\">
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">";
        // line 58
        echo getLang("AllListingTypes");
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"FixedPriceItem\">";
        // line 59
        echo getLang("FixedPriceItem");
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Chinese\">";
        // line 60
        echo getLang("Chinese");
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td nowrap>
\t\t\t\t\t\t\t\t\t\t\t<select class=\"Field150\" name=\"listingStatus\" id=\"ListingStatus\">
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">";
        // line 65
        echo getLang("AllListingStatuses");
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"active\">";
        // line 66
        echo getLang("Active");
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"pending\">";
        // line 67
        echo getLang("Pending");
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"sold\">";
        // line 68
        echo getLang("Sold");
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"unsold\">";
        // line 69
        echo getLang("Unsold");
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"won\">";
        // line 70
        echo getLang("Won");
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td nowrap>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"ToDo\" value=\"viewEbay\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"currentTab\" value=\"0\">
\t\t\t\t\t\t\t\t\t\t\t<input name=\"searchQueryListing\" id=\"searchQueryListing\" type=\"text\" value=\"";
        // line 76
        echo twig_safe_filter((isset($context['ListingQuery']) ? $context['ListingQuery'] : null));
        echo "\" id=\"SearchQuery\" class=\"Button\" size=\"20\" />&nbsp;
\t\t\t\t\t\t\t\t\t\t\t<input type=\"image\" name=\"SearchButton\" id=\"SearchButton\" style=\"padding-left: 10px; vertical-align: top;\" src=\"images/searchicon.gif\" border=\"0\" />
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td align=\"right\" style=\"padding-right:55pt\" colspan=\"3\">
\t\t\t\t\t\t\t\t\t\t\t<a id=\"SearchClearButton\" href=\"index.php?ToDo=viewEbay&currentTab=0\">";
        // line 83
        echo getLang("ClearResults");
        echo "</a>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</table>
\t\t\t\t\t<form id=\"deleteebaylivelisting\" method=\"post\" action=\"index.php?ToDo=deleteLocalEbayListing\">
\t\t\t\t\t\t<div class=\"GridContainer\">
\t\t\t\t\t\t\t";
        // line 95
        echo twig_safe_filter((isset($context['EbayListingDataGrid']) ? $context['EbayListingDataGrid'] : null));
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t\t<div id=\"div1\" style=\"padding-top: 10px;";
        // line 99
        echo twig_safe_filter((isset($context['ShowTab']) ? $context['ShowTab'] : null));
        echo "\">
\t\t\t\t\t<table id=\"IntroTable\" cellspacing=\"0\" cellpadding=\"0\" width=\"100%\">
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td colspan=\"2\" class=\"Intro\" >
\t\t\t\t\t\t\t\t<div style=\"padding-bottom:5px;\">";
        // line 103
        echo getLang("ManageEbayTemplateIntro");
        echo "</div>
\t\t\t\t\t\t\t\t";
        // line 104
        echo twig_safe_filter((isset($context['EbayListingTemplateMessage']) ? $context['EbayListingTemplateMessage'] : null));
        echo "
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<input type=\"button\" name=\"IndexAddButton\" value=\"";
        // line 109
        echo getLang("AddEbayTemplate");
        echo "\" id=\"IndexCreateButton\" class=\"SmallButton\" onclick=\"document.location.href='index.php?ToDo=addEbayTemplate'\" /> &nbsp;
\t\t\t\t\t\t\t\t<input type=\"button\" name=\"IndexDeleteButton\" value=\"";
        // line 110
        echo getLang("DeleteSelected");
        echo "\" id=\"IndexDeleteButton\" class=\"SmallButton\" ";
        echo twig_safe_filter((isset($context['DisableTemplateDelete']) ? $context['DisableTemplateDelete'] : null));
        echo " />
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"SmallSearch\" align=\"right\">
\t\t\t\t\t\t\t\t<table id=\"Table16\" style=\"";
        // line 113
        echo twig_safe_filter((isset($context['DisplayTemplateSearch']) ? $context['DisplayTemplateSearch'] : null));
        echo "\">
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<form action=\"index.php?ToDo=viewEbay&currentTab=1";
        // line 115
        echo twig_safe_filter((isset($context['SortURL']) ? $context['SortURL'] : null));
        echo "\" method=\"get\" onsubmit=\"return ValidateForm(CheckSearchForm('Template'))\">
\t\t\t\t\t\t\t\t\t\t<td nowrap>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"ToDo\" value=\"viewEbay\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"currentTab\" value=\"1\">
\t\t\t\t\t\t\t\t\t\t\t<input name=\"searchQueryTemplate\" id=\"searchQueryTemplate\" type=\"text\" value=\"";
        // line 119
        echo twig_safe_filter((isset($context['TemplateQuery']) ? $context['TemplateQuery'] : null));
        echo "\" id=\"SearchQuery\" class=\"Button\" size=\"20\" />&nbsp;
\t\t\t\t\t\t\t\t\t\t\t<input type=\"image\" name=\"SearchButton\" id=\"SearchButton\" style=\"padding-left: 10px; vertical-align: top;\" src=\"images/searchicon.gif\" border=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t&nbsp;<a id=\"SearchClearButton\" href=\"index.php?ToDo=viewEbay&currentTab=1\" style=\"position:relative; top:-3px\">";
        // line 121
        echo getLang("ClearResults");
        echo "</a>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</table>
\t\t\t\t\t<form id=\"deleteebaytemplate\" action=\"index.php?ToDo=DeleteEbayTemplate\" method=\"post\">
\t\t\t\t\t\t<div class=\"GridContainer\">
\t\t\t\t\t\t\t";
        // line 131
        echo twig_safe_filter((isset($context['EbayTemplateDataGrid']) ? $context['EbayTemplateDataGrid'] : null));
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t\t<div id=\"div2\" style=\"padding-top: 10px;\">
\t\t\t\t\t<form action=\"index.php?ToDo=";
        // line 136
        echo twig_safe_filter((isset($context['FormActionEbayConf']) ? $context['FormActionEbayConf'] : null));
        echo "\" method=\"post\" onsubmit=\"return Ebay.CheckManageEbayForm();\">
\t\t\t\t\t\t<table width=\"100%\" class=\"IntroTable\">
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td class=\"Intro\">
\t\t\t\t\t\t\t\t\t";
        // line 140
        echo getLang("EbaySettingsIntro");
        echo "\t\t\t\t\t\t\t\t\t";
        // line 141
        echo twig_safe_filter((isset($context['EbayConfigMessage']) ? $context['EbayConfigMessage'] : null));
        echo "
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td style=\"padding-top: 3px;\">

\t\t\t\t\t\t\t\t\t\t<input type=\"submit\" name=\"SubmitButton1\" value=\"";
        // line 147
        echo getLang("Save");
        echo "\" class=\"FormButton\" />&nbsp;
\t\t\t\t\t\t\t\t\t\t<input type=\"button\" name=\"CancelButton1\" value=\"";
        // line 148
        echo getLang("Cancel");
        echo "\" class=\"FormButton\" />

\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</table>
\t\t\t\t\t\t<table width=\"100%\" class=\"Panel\">
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td class=\"Heading2\" colspan=\"2\">";
        // line 155
        echo getLang("Ebay");
        echo "</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t\t\t<span class=\"Required\">*</span>&nbsp;";
        // line 159
        echo getLang("EbayDevId");
        echo ":
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"ebaydevid\" name=\"EbayDevId\" class=\"Field250\" value=\"";
        // line 162
        echo twig_safe_filter((isset($context['EbayDevId']) ? $context['EbayDevId'] : null));
        echo "\">
\t\t\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('d0');\" onmouseover=\"ShowHelp('d0', '";
        // line 163
        echo getLang("EbayDevId");
        echo "', '";
        echo getLang("EbayDevIdHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" style=\"margin-top: 5px;\" />
\t\t\t\t\t\t\t\t\t<div style=\"display:none\" id=\"d0\"></div>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t\t\t<span class=\"Required\">*</span>&nbsp;";
        // line 169
        echo getLang("EbayAppId");
        echo ":
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"ebayappid\" name=\"EbayAppId\" class=\"Field250\" value=\"";
        // line 172
        echo twig_safe_filter((isset($context['EbayAppId']) ? $context['EbayAppId'] : null));
        echo "\">
\t\t\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('d1');\" onmouseover=\"ShowHelp('d1', '";
        // line 173
        echo getLang("EbayAppId");
        echo "', '";
        echo getLang("EbayAppIdHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" style=\"margin-top: 5px;\" />
\t\t\t\t\t\t\t\t\t<div style=\"display:none\" id=\"d1\"></div>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t\t\t<span class=\"Required\">*</span>&nbsp;";
        // line 179
        echo getLang("EbayCertId");
        echo ":
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"ebaycertid\" name=\"EbayCertId\" class=\"Field250\" value=\"";
        // line 182
        echo twig_safe_filter((isset($context['EbayCertId']) ? $context['EbayCertId'] : null));
        echo "\">
\t\t\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('d2');\" onmouseover=\"ShowHelp('d2', '";
        // line 183
        echo getLang("EbayCertId");
        echo "', '";
        echo getLang("EbayCertIdHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" style=\"margin-top: 5px;\" />
\t\t\t\t\t\t\t\t\t<div style=\"display:none\" id=\"d2\"></div>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t\t\t<span class=\"Required\">*</span>&nbsp;";
        // line 189
        echo getLang("EbayUserToken");
        echo ":
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"ebayusertoken\" name=\"EbayUserToken\" class=\"Field250\" value=\"";
        // line 192
        echo twig_safe_filter((isset($context['EbayUserToken']) ? $context['EbayUserToken'] : null));
        echo "\">
\t\t\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('d3');\" onmouseover=\"ShowHelp('d3', '";
        // line 193
        echo getLang("EbayUserToken");
        echo "', '";
        echo getLang("EbayUserTokenHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" style=\"margin-top: 5px;\" />
\t\t\t\t\t\t\t\t\t<div style=\"display:none\" id=\"d3\"></div>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t\t\t<span class=\"Required\">*</span>&nbsp;";
        // line 199
        echo getLang("EbayDefaultSite");
        echo ":
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<select name=\"EbayDefaultSite\" id=\"ebaydefaultsite\" class=\"Field250\">
\t\t\t\t\t\t\t\t\t\t";
        // line 203
        echo twig_safe_filter((isset($context['EbayDefaultSite']) ? $context['EbayDefaultSite'] : null));
        echo "
\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('d4');\" onmouseover=\"ShowHelp('d4', '";
        // line 205
        echo getLang("EbayDefaultSite");
        echo "', '";
        echo getLang("EbayDefaultSiteHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" style=\"margin-top: 5px;\" />
\t\t\t\t\t\t\t\t\t<div style=\"display:none\" id=\"d4\"></div>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t\t\t<span class=\"Required\">*</span>&nbsp;";
        // line 211
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "EbayTestMode", array(), "any"), "1");
        echo ":
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<select name=\"EbayTestMode\" id=\"EbayTestMode\" class=\"Field250\">
\t\t\t\t\t\t\t\t\t\t<option id=\"productionSite\" ";
        // line 215
        echo twig_safe_filter((isset($context['DisableProd']) ? $context['DisableProd'] : null));
        echo " value=\"production\" ";
        if ((isset($context['EbayTestMode']) ? $context['EbayTestMode'] : null) == "production") {
            echo "selected=\"selected\"";
        }
        echo ">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "EbayModeProduction", array(), "any"), "1");
        echo "</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"sandbox\" ";
        // line 216
        if ((isset($context['EbayTestMode']) ? $context['EbayTestMode'] : null) == "sandbox") {
            echo "selected=\"selected\"";
        }
        echo ">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "EbayModeSandbox", array(), "any"), "1");
        echo "</option>
\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('d4');\" onmouseover=\"ShowHelp('d4', '";
        // line 218
        echo Interspire_Template_Extension::jsFilter(getLang("EbayTestMode"), "'");
        echo "', '";
        echo Interspire_Template_Extension::jsFilter(getLang("EbayTestModeHelp"), "'");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" style=\"margin-top: 5px;\" />
\t\t\t\t\t\t\t\t\t<div style=\"display:none\" id=\"d4\"></div>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t\t\t&nbsp;&nbsp;&nbsp;";
        // line 224
        echo getLang("EbayStore");
        echo ":
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t";
        // line 227
        echo twig_safe_filter((isset($context['EbayStoreDisplay']) ? $context['EbayStoreDisplay'] : null));
        echo "
\t\t\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('d5');\" onmouseover=\"ShowHelp('d5', '";
        // line 228
        echo getLang("EbayStore");
        echo "', '";
        echo getLang("EbayStoreHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" style=\"margin-top: 5px;\" />
\t\t\t\t\t\t\t\t\t<div style=\"display:none\" id=\"d5\"></div>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td class=\"Gap\"></td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</table>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</td>
\t\t</tr>
\t</table>
</div>
</form>
<script type=\"text/javascript\" src=\"../javascript/jquery/plugins/disabled/jquery.disabled.js?";
        // line 243
        echo twig_escape_filter($this->env, (isset($context['JSCacheToken']) ? $context['JSCacheToken'] : null), "1");
        echo "\"></script>
<script type=\"text/javascript\" src=\"../javascript/fsm.js?";
        // line 244
        echo twig_escape_filter($this->env, (isset($context['JSCacheToken']) ? $context['JSCacheToken'] : null), "1");
        echo "\"></script>
<script type=\"text/javascript\" src=\"script/ebay.js?";
        // line 245
        echo twig_escape_filter($this->env, (isset($context['JSCacheToken']) ? $context['JSCacheToken'] : null), "1");
        echo "\"></script>
<script type=\"text/javascript\" src=\"script/ebay.endlisting.js?";
        // line 246
        echo twig_escape_filter($this->env, (isset($context['JSCacheToken']) ? $context['JSCacheToken'] : null), "1");
        echo "\"></script>
<script type=\"text/javascript\">//<![CDATA[
\$(document).ready(function() {
\tShowTab(";
        // line 249
        echo twig_safe_filter((isset($context['CurrentTab']) ? $context['CurrentTab'] : null));
        echo ");

\t\$('#checkstore').click(function() {
\t\tEbay.GetEbayStore();
\t\treturn false;
\t});

\t\$('#IndexDeleteButton').click(function() {
\t\tif (\$('.EbayTemplate:checked').length < 1) {
\t\t\talert (\"";
        // line 258
        echo getLang("ChooseTemplate");
        echo "\")
\t\t\treturn false;
\t\t}

\t\tif (confirm(\"";
        // line 262
        echo getLang("ConfirmDeleteTemplate");
        echo "\")) {
\t\t\t\$('#deleteebaytemplate').submit();
\t\t}
\t});
\t\$(\"#ListingType\").val('";
        // line 266
        echo twig_escape_filter($this->env, (isset($context['ListingType']) ? $context['ListingType'] : null), "1");
        echo "');
\t\$(\"#ListingStatus\").val('";
        // line 267
        echo twig_escape_filter($this->env, (isset($context['ListingStatus']) ? $context['ListingStatus'] : null), "1");
        echo "');


\t";
        // line 270
        if ((isset($context['updateCache']) ? $context['updateCache'] : null)) {
            echo "\t\tEbay.StartAjaxEbayUpdate();
\t";
        }
        // line 272
        echo "});

Ebay.EventsInit();

lang.EbayEnterDevId = '";
        // line 277
        echo Interspire_Template_Extension::jsFilter(getLang("EbayEnterDevId"), "'");
        echo "';
lang.EbayEnterAppID = '";
        // line 278
        echo Interspire_Template_Extension::jsFilter(getLang("EbayEnterAppID"), "'");
        echo "';
lang.EbayEnterCertID = '";
        // line 279
        echo Interspire_Template_Extension::jsFilter(getLang("EbayEnterCertID"), "'");
        echo "';
lang.EbayEnterUserToken = '";
        // line 280
        echo Interspire_Template_Extension::jsFilter(getLang("EbayEnterUserToken"), "'");
        echo "';
lang.EbayEnterDefaultSiteId = '";
        // line 281
        echo Interspire_Template_Extension::jsFilter(getLang("EbayEnterDefaultSiteId"), "'");
        echo "';
lang.ChooseActionFirst = '";
        // line 282
        echo Interspire_Template_Extension::jsFilter(getLang("ChooseActionFirst"), "'");
        echo "';
lang.LoadDialogFailed = '";
        // line 283
        echo Interspire_Template_Extension::jsFilter(getLang("LoadDialogFailed"), "'");
        echo "';
lang.UnknownErrorRetrieveData = '";
        // line 284
        echo Interspire_Template_Extension::jsFilter(getLang("UnknownErrorRetrieveData"), "'");
        echo "';
lang.ChooseListing = '";
        // line 285
        echo Interspire_Template_Extension::jsFilter(getLang("ChooseListing"), "'");
        echo "';
lang.ConfirmRemoveListing = '";
        // line 286
        echo Interspire_Template_Extension::jsFilter(getLang("ConfirmRemoveListing"), "'");
        echo "';
lang.ConfirmRemoveListings = '";
        // line 287
        echo Interspire_Template_Extension::jsFilter(getLang("ConfirmRemoveListings"), "'");
        echo "';
lang.ConfirmEndListing = '";
        // line 288
        echo Interspire_Template_Extension::jsFilter(getLang("ConfirmEndListing"), "'");
        echo "';
lang.ConfirmCancelEbaySettings = '";
        // line 289
        echo getLang("ConfirmCancelEbaySettings");
        echo "';
lang.SelectAllEndReason = '";
        // line 290
        echo Interspire_Template_Extension::jsFilter(getLang("SelectAllEndReason"), "'");
        echo "';
lang.EbaySandboxOnly = '";
        // line 291
        echo Interspire_Template_Extension::jsFilter(getLang("EbaySandboxOnly"), "'");
        echo "';

function CheckSearchForm(section) {
\tif (\$('#searchQuery' + section).val() == '') {
\t\talert(\"";
        // line 295
        echo getLang("EnterSearchTerm");
        echo "\");
\t\t\$('#searchQuery' + section).focus()
\t\treturn false;
\t}
\treturn true;
}
//]]></script>";
    }

}
