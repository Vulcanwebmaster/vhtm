<?php

/* customers.notes.popup.tpl */
class __TwigTemplate_58606d133163b97f752c2567627ccde8 extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "<div class=\"ModalTitle\">
\t";
        // line 2
        echo getLang("CustomerNotesPopupHeading");
        echo "</div>
<div class=\"ModalContent\">
\t<p class=\"MessageBox MessageBoxInfo\">
\t\t";
        // line 6
        echo getLang("CustomerNotesPopupIntro");
        echo "\t</p>

\t<form action=\"\" id=\"notesForm\">
\t\t<input type=\"hidden\" id=\"customerId\" name=\"customerId\" value=\"";
        // line 10
        echo twig_safe_filter((isset($context['CustomerId']) ? $context['CustomerId'] : null));
        echo "\" />
\t\t<textarea id=\"custnotes\" name=\"custnotes\" rows=\"8\" style=\"width:98%;\">";
        // line 11
        echo twig_safe_filter((isset($context['CustomerNotes']) ? $context['CustomerNotes'] : null));
        echo "</textarea>
\t</form>
</div>
<div class=\"ModalButtonRow\">
\t<div class=\"FloatLeft\">
\t\t<img src=\"images/loading.gif\" alt=\"\" style=\"vertical-align: middle; display: none;\" class=\"LoadingIndicator\" />
\t\t<input type=\"button\" class=\"CloseButton FormButton\" value=\"";
        // line 17
        echo getLang("Cancel");
        echo "\" onclick=\"\$.modal.close();\" />
\t</div>
\t<input type=\"button\" class=\"Submit\" value=\"";
        // line 19
        echo getLang("Save");
        echo "\" name=\"SaveNotesButton\" onclick=\"Customers.SaveNotes()\" />
</div>";
    }

}
