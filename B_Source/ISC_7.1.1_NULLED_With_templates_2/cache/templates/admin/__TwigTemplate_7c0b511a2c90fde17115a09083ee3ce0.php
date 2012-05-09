<?php

/* stats.orders.salestax.tpl */
class __TwigTemplate_7c0b511a2c90fde17115a09083ee3ce0 extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "<a name=\"productsByInventoryAnchor\"></a>
<div style=\"text-align:right\">
\t<div style=\"padding-bottom:10px\">
\t\t";
        // line 4
        echo getLang("ItemsPerPage");
        echo ":
\t\t<select onchange=\"ChangeTaxByDatePerPage(this.options[this.selectedIndex].value)\">
\t\t\t<option ";
        // line 6
        echo twig_safe_filter((isset($context['IsShowPerPage5']) ? $context['IsShowPerPage5'] : null));
        echo " value=\"5\">5</option>
\t\t\t<option ";
        // line 7
        echo twig_safe_filter((isset($context['IsShowPerPage10']) ? $context['IsShowPerPage10'] : null));
        echo " value=\"10\">10</option>
\t\t\t<option ";
        // line 8
        echo twig_safe_filter((isset($context['IsShowPerPage20']) ? $context['IsShowPerPage20'] : null));
        echo " value=\"20\">20</option>
\t\t\t<option ";
        // line 9
        echo twig_safe_filter((isset($context['IsShowPerPage30']) ? $context['IsShowPerPage30'] : null));
        echo " value=\"30\">30</option>
\t\t\t<option ";
        // line 10
        echo twig_safe_filter((isset($context['IsShowPerPage50']) ? $context['IsShowPerPage50'] : null));
        echo " value=\"50\">50</option>
\t\t\t<option ";
        // line 11
        echo twig_safe_filter((isset($context['IsShowPerPage100']) ? $context['IsShowPerPage100'] : null));
        echo " value=\"100\">100</option>
\t\t</select>
\t</div>
\t";
        // line 14
        echo twig_safe_filter((isset($context['Paging']) ? $context['Paging'] : null));
        echo "
</div>
<br />
<table width=\"100%\" border=0 cellspacing=1 cellpadding=5 class=\"text\">
\t<tr class=\"Heading3\">
\t\t<td align=\"left\">
\t\t\t";
        // line 20
        echo getLang("Period");
        echo " &nbsp;
\t\t\t";
        // line 21
        echo twig_safe_filter((isset($context['SortLinksPeriod']) ? $context['SortLinksPeriod'] : null));
        echo "
\t\t</td>
\t\t<td align=\"left\">
\t\t\t";
        // line 24
        echo getLang("TaxType");
        echo " &nbsp;
\t\t\t";
        // line 25
        echo twig_safe_filter((isset($context['SortLinksTaxType']) ? $context['SortLinksTaxType'] : null));
        echo "
\t\t</td>
\t\t<td align=\"center\">
\t\t\t";
        // line 28
        echo getLang("Rate");
        echo " &nbsp;
\t\t\t";
        // line 29
        echo twig_safe_filter((isset($context['SortLinksTaxRate']) ? $context['SortLinksTaxRate'] : null));
        echo "
\t\t</td>
\t\t<td align=\"center\">
\t\t\t";
        // line 32
        echo getLang("NumberOfOrders");
        echo " &nbsp;
\t\t\t";
        // line 33
        echo twig_safe_filter((isset($context['SortLinksNumOrders']) ? $context['SortLinksNumOrders'] : null));
        echo "
\t\t</td>
\t\t<td align=\"left\" width=\"100\">
\t\t\t";
        // line 36
        echo getLang("TaxAmount");
        echo " &nbsp;
\t\t\t";
        // line 37
        echo twig_safe_filter((isset($context['SortLinksTaxAmount']) ? $context['SortLinksTaxAmount'] : null));
        echo "
\t\t</td>
\t</tr>
\t";
        // line 40
        echo twig_safe_filter((isset($context['TaxGrid']) ? $context['TaxGrid'] : null));
        echo "
</table>";
    }

}
