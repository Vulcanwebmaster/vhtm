<?php

/* customers.groups.discount.grid.tpl */
class __TwigTemplate_95c3a01b62a2ee52629dfbfc54c11999 extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "\t\t\t<table class=\"GridPanel SortableGrid\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" style=\"width:100%;\">
\t\t\t<tr align=\"right\" style=\"display:";
        // line 2
        echo twig_safe_filter((isset($context['HidePagingNav']) ? $context['HidePagingNav'] : null));
        echo "\">
\t\t\t\t<td style=\"padding:6px\" class=\"PagingNav\">
\t\t\t\t\t";
        // line 4
        echo twig_safe_filter((isset($context['Nav']) ? $context['Nav'] : null));
        echo "
\t\t\t\t</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<td id=\"";
        // line 8
        echo twig_safe_filter((isset($context['Type']) ? $context['Type'] : null));
        echo "DataGridContainer\">";
        echo twig_safe_filter((isset($context['CustomerGroupDiscountGrid']) ? $context['CustomerGroupDiscountGrid'] : null));
        echo "</td>
\t\t\t</tr>
\t\t\t<tr align=\"right\" style=\"display:";
        // line 10
        echo twig_safe_filter((isset($context['HidePagingNav']) ? $context['HidePagingNav'] : null));
        echo "\">
\t\t\t\t<td style=\"padding:6px\" class=\"PagingNav\">
\t\t\t\t\t";
        // line 12
        echo twig_safe_filter((isset($context['Nav']) ? $context['Nav'] : null));
        echo "
\t\t\t\t</td>
\t\t\t</tr>
\t\t</table>";
    }

}
