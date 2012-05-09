<?php

/* returns.manage.grid.tpl */
class __TwigTemplate_636881463a5197a86d6e9f051cc7748b extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "\t\t\t<table class=\"GridPanel SortableGrid AutoExpand\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" id=\"IndexGrid\" style=\"width:100%;\">
\t\t\t\t<tr align=\"right\">
\t\t\t\t\t<td colspan=\"11\" style=\"padding:6px 0px 6px 0px\" class=\"PagingNav\">
\t\t\t\t\t\t";
        // line 4
        echo twig_safe_filter((isset($context['Nav']) ? $context['Nav'] : null));
        echo "
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t<tr class=\"Heading3\">
\t\t\t\t<td align=\"center\"><input type=\"checkbox\" onclick=\"\$(this).parents('form').find('input[type=checkbox]').attr('checked', this.checked);\"></td>
\t\t\t\t<td>&nbsp;</td>
\t\t\t\t<td>&nbsp;</td>
\t\t\t\t<td width=\"100\">
\t\t\t\t\t";
        // line 12
        echo getLang("ReturnId");
        echo " &nbsp;
\t\t\t\t\t";
        // line 13
        echo twig_safe_filter((isset($context['SortLinksId']) ? $context['SortLinksId'] : null));
        echo "
\t\t\t\t</td>
\t\t\t\t<td width=\"200\">
\t\t\t\t\t";
        // line 16
        echo getLang("ReturnItem");
        echo " &nbsp;
\t\t\t\t\t";
        // line 17
        echo twig_safe_filter((isset($context['SortLinksReturnItem']) ? $context['SortLinksReturnItem'] : null));
        echo "
\t\t\t\t</td>
\t\t\t\t<td nowrap=\"nowrap\">
\t\t\t\t\t";
        // line 20
        echo getLang("OrderNo");
        echo " &nbsp;
\t\t\t\t\t";
        // line 21
        echo twig_safe_filter((isset($context['SortLinksOrder']) ? $context['SortLinksOrder'] : null));
        echo "
\t\t\t\t</td>
\t\t\t\t<td width=\"200\">
\t\t\t\t\t";
        // line 24
        echo getLang("Customer");
        echo " &nbsp;
\t\t\t\t\t";
        // line 25
        echo twig_safe_filter((isset($context['SortLinksCust']) ? $context['SortLinksCust'] : null));
        echo "
\t\t\t\t</td>
\t\t\t\t<td nowrap=\"nowrap\">
\t\t\t\t\t";
        // line 28
        echo getLang("Date");
        echo " &nbsp;
\t\t\t\t\t";
        // line 29
        echo twig_safe_filter((isset($context['SortLinksDate']) ? $context['SortLinksDate'] : null));
        echo "
\t\t\t\t</td>
\t\t\t\t<td>
\t\t\t\t\t";
        // line 32
        echo getLang("Status");
        echo " &nbsp;
\t\t\t\t\t";
        // line 33
        echo twig_safe_filter((isset($context['SortLinksStatus']) ? $context['SortLinksStatus'] : null));
        echo "
\t\t\t\t</td>
\t\t\t\t<td style=\"width:120px\">
\t\t\t\t\t";
        // line 36
        echo getLang("Action");
        echo "\t\t\t\t</td>
\t\t\t</tr>
\t\t\t";
        // line 39
        echo twig_safe_filter((isset($context['ReturnGrid']) ? $context['ReturnGrid'] : null));
        echo "
\t\t\t<tr align=\"right\">
\t\t\t\t<td colspan=\"11\" style=\"padding:6px 0px 6px 0px\" class=\"PagingNav\">
\t\t\t\t\t";
        // line 42
        echo twig_safe_filter((isset($context['Nav']) ? $context['Nav'] : null));
        echo "
\t\t\t\t</td>
\t\t\t</tr>
\t\t</table>";
    }

}
