<?php

/* optimizer.manage.tpl */
class __TwigTemplate_112f726bf3a4b3368db9269dae6cf0c0 extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "<script type=\"text/javascript\" src=\"script/optimizer.js?";
        echo twig_escape_filter($this->env, (isset($context['JSCacheToken']) ? $context['JSCacheToken'] : null), "1");
        echo "\"></script>

<div class=\"BodyContainer\">

<h2 class=\"Heading1\">";
        // line 5
        echo getLang("GoogleWebsiteOptimizer");
        echo "</h2>
<p>";
        // line 6
        echo getLang("GoogleWebsiteOptimizerIntro");
        echo "</p>

<div id=\"MainMessage\">
\t";
        // line 9
        echo twig_safe_filter((isset($context['Message']) ? $context['Message'] : null));
        echo "
</div>

<table class=\"GridPanel OptimizerTable\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" style=\"width:100%;\">
\t<tr  class=\"Heading3\" >
\t\t<td>";
        // line 14
        echo getLang("TestName");
        echo "</td>
\t\t<td>";
        // line 15
        echo getLang("Configured");
        echo "?</td>
\t\t<td>";
        // line 16
        echo getLang("LastConfigured");
        echo "</td>
\t\t<td>";
        // line 17
        echo getLang("Actions");
        echo "</td>
\t</tr>
\t";
        // line 19
        echo twig_safe_filter((isset($context['OptimizerRow']) ? $context['OptimizerRow'] : null));
        echo "
</table>
</div>
<script type=\"text/javascript\">
lang.ResetModuleFail = \"";
        // line 23
        echo getLang("ResetModuleFail");
        echo "\";
lang.ConfirmResetOptimizer = \"";
        // line 24
        echo getLang("ConfirmResetOptimizer");
        echo "\";
</script>";
    }

}
