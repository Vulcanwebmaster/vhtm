<?php

/* Snippets/EditorTinyMCEGzip.html */
class __TwigTemplate_d6ac06947f3ce3b77aba7ad254e0a3c0 extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "<script type=\"text/javascript\" src=\"";
        echo twig_safe_filter((isset($context['AppPath']) ? $context['AppPath'] : null));
        echo "/javascript/tinymce/tiny_mce_gzip.js?";
        echo twig_escape_filter($this->env, (isset($context['JSCacheToken']) ? $context['JSCacheToken'] : null), "1");
        echo "\"></script>
<script type=\"text/javascript\">
tinyMCE_GZ.init({
\tplugins : 'safari,pagebreak,style,layer,table,save,interspireimg,linker,advlink,media,searchreplace,print,contextmenu,paste,fullscreen,visualchars,nonbreaking,xhtmlxtras,template,inlinepopups,mediaservice',
\tthemes : 'advanced',
\tlanguages : 'en',
\tdisk_cache : true,
\tdebug : false
});
</script>
";
        // line 11
        echo twig_safe_filter((isset($context['EditorTinyMCECommon']) ? $context['EditorTinyMCECommon'] : null));
    }

}
