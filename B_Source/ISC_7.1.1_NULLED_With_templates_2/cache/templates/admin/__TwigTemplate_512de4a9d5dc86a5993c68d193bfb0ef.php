<?php

/* stats.orders.byrevenuegrid.tpl */
class __TwigTemplate_512de4a9d5dc86a5993c68d193bfb0ef extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "<table width=\"100%\" border=0 cellspacing=1 cellpadding=5 class=\"text\">
\t<tr class=\"Heading3\">
\t\t<td nowrap align=\"left\">
\t\t\t";
        // line 4
        echo getLang("StatsRevenue");
        echo "\t\t</td>
\t\t<td nowrap align=\"left\">
\t\t\t";
        // line 7
        echo getLang("NumberOfOrders");
        echo "\t\t</td>
\t</tr>
\t";
        // line 10
        echo twig_safe_filter((isset($context['OrderGrid']) ? $context['OrderGrid'] : null));
        echo "
</table>
";
    }

}
