<?php

/* Snippets/OptimizerRow.html */
class __TwigTemplate_4d0d221009fc9d86c1596f8517bb5c28 extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "<tr class=\"GridRow\" style=\"height:30px;\">
<td>";
        // line 2
        echo twig_safe_filter((isset($context['ModuleName']) ? $context['ModuleName'] : null));
        echo "</td>
<td>
\t<div class=\"ConfiguredIcon_";
        // line 4
        echo twig_safe_filter((isset($context['ModuleId']) ? $context['ModuleId'] : null));
        echo "\">
\t\t<img border=\"0\" src=\"images/";
        // line 5
        echo twig_safe_filter((isset($context['ConfiguredIcon']) ? $context['ConfiguredIcon'] : null));
        echo ".gif\"/>
\t</div>
</td>
<td><span  id=\"ConfigDate_";
        // line 8
        echo twig_safe_filter((isset($context['ModuleId']) ? $context['ModuleId'] : null));
        echo "\">";
        echo twig_safe_filter((isset($context['ConfiguredDate']) ? $context['ConfiguredDate'] : null));
        echo "</span></td>
<td>
\t<a id=\"OptimizerConfig_";
        // line 10
        echo twig_safe_filter((isset($context['ModuleId']) ? $context['ModuleId'] : null));
        echo "\" onclick=\"Optimizer.LoadConfigForm('";
        echo twig_safe_filter((isset($context['ModuleId']) ? $context['ModuleId'] : null));
        echo "'); return false\" href = \"#\">";
        echo getLang("Configure");
        echo "</a>

\t<a id=\"OptimizerReset_";
        // line 12
        echo twig_safe_filter((isset($context['ModuleId']) ? $context['ModuleId'] : null));
        echo "\" class=\"";
        echo twig_safe_filter((isset($context['ActiveReset']) ? $context['ActiveReset'] : null));
        echo "\" onclick=\"Optimizer.ResetModule('";
        echo twig_safe_filter((isset($context['ModuleId']) ? $context['ModuleId'] : null));
        echo "');\">";
        echo getLang("Reset");
        echo "</a>

</td>
</tr>";
    }

}
