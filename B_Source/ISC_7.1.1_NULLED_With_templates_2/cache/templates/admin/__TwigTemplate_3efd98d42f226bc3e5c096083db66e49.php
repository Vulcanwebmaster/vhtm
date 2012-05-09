<?php

/* logs.administrator.row.tpl */
class __TwigTemplate_3efd98d42f226bc3e5c096083db66e49 extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "\t\t\t<tr class=\"GridRow\" onmouseover=\"this.className='GridRowOver'\" onmouseout=\"this.className='GridRow'\">
\t\t\t\t<td width=\"1\">
\t\t\t\t\t<input type=\"checkbox\" class=\"DeleteCheck\" name=\"delete[]\" value=\"";
        // line 3
        echo twig_safe_filter((isset($context['LogId']) ? $context['LogId'] : null));
        echo "\" />
\t\t\t\t</td>
\t\t\t\t<td width=\"1\">
\t\t\t\t\t<img src=\"images/log.gif\" alt=\"\" />
\t\t\t\t</td>
\t\t\t\t<td class=\"";
        // line 8
        echo twig_safe_filter((isset($context['SortedFieldNameClass']) ? $context['SortedFieldNameClass'] : null));
        echo "\">
\t\t\t\t\t";
        // line 9
        echo twig_safe_filter((isset($context['Username']) ? $context['Username'] : null));
        echo "
\t\t\t\t</td>
\t\t\t\t<td>
\t\t\t\t\t";
        // line 12
        echo twig_safe_filter((isset($context['Action']) ? $context['Action'] : null));
        echo "
\t\t\t\t</td>
\t\t\t\t<td width=\"150\" class=\"";
        // line 14
        echo twig_safe_filter((isset($context['SortedFieldDateClass']) ? $context['SortedFieldDateClass'] : null));
        echo "\">
\t\t\t\t\t";
        // line 15
        echo twig_safe_filter((isset($context['Date']) ? $context['Date'] : null));
        echo "
\t\t\t\t</td>
\t\t\t\t<td width=\"80\" nowrap=\"nowrap\" class=\"";
        // line 17
        echo twig_safe_filter((isset($context['SortedFieldIPClass']) ? $context['SortedFieldIPClass'] : null));
        echo "\">
\t\t\t\t\t";
        // line 18
        echo twig_safe_filter((isset($context['Ip']) ? $context['Ip'] : null));
        echo "
\t\t\t\t</td>
\t\t\t</tr>";
    }

}
