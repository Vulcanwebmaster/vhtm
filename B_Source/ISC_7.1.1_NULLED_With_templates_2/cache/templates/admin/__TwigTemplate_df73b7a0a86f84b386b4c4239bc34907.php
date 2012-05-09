<?php

/* logs.administrator.grid.tpl */
class __TwigTemplate_df73b7a0a86f84b386b4c4239bc34907 extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "<form method=\"post\" id=\"AdminLogForm\" action=\"index.php?ToDo=systemLog\" onsubmit=\"return SearchAdminLog(this)\">
\t\t<input type=\"hidden\" name=\"AdminSortURL\" id=\"AdminSortURL\" value=\"index.php?ToDo=administratorLogGrid";
        // line 2
        echo twig_safe_filter((isset($context['SortURL']) ? $context['SortURL'] : null));
        echo "\" />
\t\t<input type=\"hidden\" name=\"CurrentTab\" id=\"CurrentTab2\" value=\"";
        // line 3
        echo twig_safe_filter((isset($context['CurrentTab']) ? $context['CurrentTab'] : null));
        echo "\" />
\t\t<table id=\"AdminLogOptions\" class=\"IntroTable\" cellspacing=\"0\" cellpadding=\"0\" width=\"100%\">
\t\t\t<tr>
\t\t\t\t<td class=\"Intro\" style=\"padding-top: 10px;\">
\t\t\t\t\t<input type=\"button\" name=\"IndexDeleteButton\" value=\"";
        // line 7
        echo getLang("DeleteSelected");
        echo "\" id=\"IndexDeleteButton\" class=\"SmallButton\" onclick=\"ConfirmDeleteSelectedAdmin()\" ";
        echo twig_safe_filter((isset($context['DisableDelete']) ? $context['DisableDelete'] : null));
        echo "  />
\t\t\t\t\t<input type=\"button\" name=\"DeleteAll\" value=\"";
        // line 8
        echo getLang("DeleteAll");
        echo "\" class=\"SmallButton\" onclick=\"ConfirmDeleteAllAdmin()\" ";
        echo twig_safe_filter((isset($context['DisableDelete']) ? $context['DisableDelete'] : null));
        echo "  />
\t\t\t\t</td>
\t\t\t\t<td align=\"right\" nowrap=\"nowrap\" style=\"padding-top: 10px;\">
\t\t\t\t\t<select name=\"userid\" id=\"adminUserId\" onchange=\"SearchAdminLog(this)\">
\t\t\t\t\t\t<option value=\"0\">";
        // line 12
        echo getLang("AllAdministrators");
        echo "</option>
\t\t\t\t\t\t";
        // line 13
        echo twig_safe_filter((isset($context['AdministratorList']) ? $context['AdministratorList'] : null));
        echo "
\t\t\t\t\t</select>
\t\t\t\t</td>
\t\t\t\t<td width=\"1\" style=\"padding-left: 5px; padding-top: 10px;\">
\t\t\t\t\t<input id=\"SearchButton\" type=\"image\" border=\"0\" style=\"vertical-align: middle;\" src=\"images/searchicon.gif\" name=\"SearchButton\"/>
\t\t\t\t</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<td>&nbsp;</td>
\t\t\t\t<td align=\"right\">
\t\t\t\t\t<a href=\"index.php?ToDo=systemLog&amp;CurrentTab=1\" onclick=\"ClearAdminSearchResults(this); return false;\" style=\"display: ";
        // line 23
        echo twig_safe_filter((isset($context['HideClearAdminResults']) ? $context['HideClearAdminResults'] : null));
        echo "\" id=\"AdminSearchClearButton\">";
        echo getLang("ClearResults");
        echo "</a>
\t\t\t\t</td>
\t\t\t\t<td>&nbsp;</td>
\t\t\t</tr>
\t\t</table>
\t\t<table class=\"GridPanel SortableGrid\" cellspacing=\"1\" cellpadding=\"2\" border=\"0\" id=\"AdminLogGrid\" style=\"width:100%;\">
\t\t\t<tr align=\"right\">
\t\t\t\t<td colspan=\"6\" style=\"padding:6px 0px 6px 0px\" class=\"PagingNav\">
\t\t\t\t\t";
        // line 31
        echo twig_safe_filter((isset($context['Nav']) ? $context['Nav'] : null));
        echo "
\t\t\t\t</td>
\t\t\t</tr>

\t\t\t<tr class=\"Heading3\">
\t\t\t\t<td align=\"center\" width=\"1\"><input type=\"checkbox\" onclick=\"\$(this).parents('form').find('input[type=checkbox]').attr('checked', this.checked);\"></td>
\t\t\t\t<td>&nbsp;</td>
\t\t\t\t<td>
\t\t\t\t\t";
        // line 39
        echo getLang("Username");
        echo "\t\t\t\t\t";
        // line 40
        echo twig_safe_filter((isset($context['SortLinksName']) ? $context['SortLinksName'] : null));
        echo "
\t\t\t\t</td>
\t\t\t\t<td>
\t\t\t\t\t";
        // line 43
        echo getLang("Action");
        echo "\t\t\t\t</td>
\t\t\t\t<td>
\t\t\t\t\t";
        // line 46
        echo getLang("Date");
        echo "\t\t\t\t\t";
        // line 47
        echo twig_safe_filter((isset($context['SortLinksDate']) ? $context['SortLinksDate'] : null));
        echo "
\t\t\t\t</td>
\t\t\t\t<td nowrap=\"nowrap\">
\t\t\t\t\t";
        // line 50
        echo getLang("IPAddress");
        echo "\t\t\t\t\t";
        // line 51
        echo twig_safe_filter((isset($context['SortLinksIP']) ? $context['SortLinksIP'] : null));
        echo "
\t\t\t\t</td>
\t\t\t</tr>
\t\t\t";
        // line 54
        echo twig_safe_filter((isset($context['LogGrid']) ? $context['LogGrid'] : null));
        echo "
\t\t\t<tr align=\"right\">
\t\t\t\t<td colspan=\"6\" style=\"padding:6px 0px 6px 0px\" class=\"PagingNav\">
\t\t\t\t\t";
        // line 57
        echo twig_safe_filter((isset($context['Nav']) ? $context['Nav'] : null));
        echo "
\t\t\t\t</td>
\t\t\t</tr>
\t\t</table>
</form>";
    }

}
