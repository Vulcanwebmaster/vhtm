<?php

/* formfield.frontend.html */
class __TwigTemplate_fe1001503ee2377d3e410c0df3beab94 extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "<dt>
\t<span class=\"Required FormFieldRequired\" style=\"visibility: ";
        // line 2
        echo twig_safe_filter((isset($context['FormFieldRequiredVisable']) ? $context['FormFieldRequiredVisable'] : null));
        echo "\">*</span> <span class=\"FormFieldLabel\">";
        echo twig_safe_filter((isset($context['FormFieldLabel']) ? $context['FormFieldLabel'] : null));
        echo "</span>
</dt>
<dd>
\t";
        // line 5
        echo twig_safe_filter((isset($context['FormFieldExtraHidden']) ? $context['FormFieldExtraHidden'] : null));
        echo "
\t";
        // line 6
        echo twig_safe_filter((isset($context['FormFieldFieldData']) ? $context['FormFieldFieldData'] : null));
        echo "
</dd>";
    }

}
