<?php

/* import.customers.step1.tpl */
class __TwigTemplate_e6e8a39a456e437ad279e7db5d5cb285 extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "<form enctype=\"multipart/form-data\" action=\"index.php?ToDo=importCustomers&Step=2\" onsubmit=\"return ValidateForm(CheckImportCustomerForm)\" id=\"frmImport\" method=\"post\">
<div class=\"BodyContainer\">
\t<table cellSpacing=\"0\" cellPadding=\"0\" width=\"100%\" style=\"margin-left: 4px; margin-top: 8px;\">
\t<tr>
\t\t<td class=\"Heading1\">";
        // line 5
        echo getLang("ImportCustomersStep1");
        echo "</td>
\t</tr>
\t<tr>
\t\t<td class=\"Intro\">
\t\t\t<p>";
        // line 9
        echo getLang("ImportCustomersStep1Desc");
        echo "</p>
\t\t\t";
        // line 10
        echo twig_safe_filter((isset($context['Message']) ? $context['Message'] : null));
        echo "
\t\t</td>
\t</tr>
\t<tr>
\t\t<td>
\t\t\t<div>
\t\t\t\t<input type=\"reset\" value=\"";
        // line 16
        echo getLang("Cancel");
        echo "\" class=\"FormButton\" onclick=\"ConfirmCancel()\" />
\t\t\t\t<input type=\"submit\" value=\"";
        // line 17
        echo getLang("Next");
        echo " &raquo;\" class=\"FormButton\" />
\t\t\t</div>
\t\t\t<br />
\t\t</td>
\t</tr>

\t<tr>
\t\t<td>
\t\t  <table class=\"Panel\">
\t\t\t<tr>
\t\t\t  <td class=\"Heading2\" colspan=2>";
        // line 27
        echo getLang("ImportDetails");
        echo "</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t<span class=\"Required\">&nbsp;</span>&nbsp;";
        // line 31
        echo getLang("ImportBulkEditCSV");
        echo "\t\t\t\t</td>
\t\t\t\t<td>
\t\t\t\t\t<label><input type=\"checkbox\" name=\"BulkEditTemplate\" id=\"BulkEditTemplate\" value=\"1\" /> ";
        // line 34
        echo getLang("ImportBulkEditCSVYes");
        echo "</label>
\t\t\t\t</td>
\t\t\t</tr>
\t\t\t<tr class=\"BulkImportRowHide\">
\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t<span class=\"Required\">&nbsp;</span>&nbsp;";
        // line 39
        echo getLang("ImportOverride");
        echo "\t\t\t\t</td>
\t\t\t\t<td>
\t\t\t\t\t<label><input type=\"checkbox\" name=\"OverrideDuplicates\" id=\"Override\" value=\"1\" /> ";
        // line 42
        echo getLang("YesImportOverride");
        echo "</label>
\t\t\t\t\t<img onmouseout=\"HideHelp('a2');\" onmouseover=\"ShowHelp('a2', '";
        // line 43
        echo getLang("ImportOverride");
        echo "', '";
        echo getLang("ImportOverrideDesc");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\">
\t\t\t\t\t<div style=\"display:none\" id=\"a2\"></div>
\t\t\t\t</td>
\t\t\t</tr>
\t\t</table>
\t\t  <table class=\"Panel\">
\t\t\t<tr>
\t\t\t  <td class=\"Heading2\" colspan=2>";
        // line 50
        echo getLang("ImportFileDetails");
        echo "</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t<span class=\"Required\">*</span>&nbsp;";
        // line 54
        echo getLang("ImportFile");
        echo ":
\t\t\t\t</td>
\t\t\t\t<td>
\t\t\t\t\t<div>
\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t<input id=\"CustomerImportUseUpload\" type=\"radio\" name=\"useserver\" value=\"0\" checked=\"checked\" onclick=\"ToggleSource();\" />
\t\t\t\t\t\t\t";
        // line 60
        echo getLang("ImportFileUpload");
        echo "\t\t\t\t\t\t\t";
        // line 61
        echo getLang("ImportMaxSize", array("maxSize" => (isset($context['ImportMaxSize']) ? $context['ImportMaxSize'] : null)));
        // line 63
        echo "\t\t\t\t\t\t</label>
\t\t\t\t\t\t<img onmouseout=\"HideHelp('d1');\" onmouseover=\"ShowHelp('d1', '";
        // line 65
        echo getLang("ImportFileUpload");
        echo "', '";
        echo getLang("ImportFileUploadDesc");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\">
\t\t\t\t\t\t<div style=\"display: none;\" id=\"d1\"></div>
\t\t\t\t\t</div>
\t\t\t\t\t<div id=\"CustomerImportUploadField\" style=\"margin-left: 25px;\">
\t\t\t\t\t\t<input type=\"file\" name=\"importfile\" id=\"ImportFile\" class=\"Field250\" />
\t\t\t\t\t</div>

\t\t\t\t\t<div>
\t\t\t\t\t\t<label><input id=\"CustomerImportUseServer\" type=\"radio\" name=\"useserver\" value=\"1\" onclick=\"ToggleSource();\" /> ";
        // line 73
        echo getLang("ImportFileServer");
        echo "</label>
\t\t\t\t\t\t<img onmouseout=\"HideHelp('d2');\" onmouseover=\"ShowHelp('d2', '";
        // line 74
        echo getLang("ImportFileServer");
        echo "', '";
        echo getLang("ImportFileServerDesc");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\">
\t\t\t\t\t\t<div style=\"display: none;\" id=\"d2\"></div>
\t\t\t\t\t</div>
\t\t\t\t\t<div id=\"CustomerImportServerField\" style=\"margin-left: 25px; display: none;\">
\t\t\t\t\t\t<select name=\"serverfile\" id=\"ServerFile\" class=\"Field250\">
\t\t\t\t\t\t\t<option value=\"\">";
        // line 79
        echo getLang("ImportChooseFile");
        echo "</option>
\t\t\t\t\t\t\t";
        // line 80
        echo twig_safe_filter((isset($context['ServerFiles']) ? $context['ServerFiles'] : null));
        echo "
\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t\t<div id=\"CustomerImportServerNoList\" style=\"margin: 5px 0 0 25px; display: none; font-style: italic;\" class=\"Field250\">
\t\t\t\t\t\t";
        // line 84
        echo getLang("FieldNoServerFiles");
        echo "\t\t\t\t\t</div>
\t\t\t\t</td>
\t\t\t</tr>

\t\t\t<tr class=\"BulkImportRowHide\">
\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t<span class=\"Required\">*</span>&nbsp;";
        // line 91
        echo getLang("ImportContainsHeaders");
        echo "\t\t\t\t</td>
\t\t\t\t<td>
\t\t\t\t\t<label><input type=\"checkbox\" name=\"Headers\" id=\"Headers\" value=\"1\" /> ";
        // line 94
        echo getLang("YesImportContainsHeaders");
        echo "</label>
\t\t\t\t\t<img onmouseout=\"HideHelp('d3');\" onmouseover=\"ShowHelp('d3', '";
        // line 95
        echo getLang("ImportContainsHeaders");
        echo "', '";
        echo getLang("ImportContainsHeadersDesc");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\">
\t\t\t\t\t<div style=\"display:none\" id=\"d3\"></div>
\t\t\t\t</td>
\t\t\t</tr>

\t\t\t<tr class=\"BulkImportRowHide\">
\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t<span class=\"Required\">*</span>&nbsp;";
        // line 102
        echo getLang("ImportFieldSeparator");
        echo ":
\t\t\t\t</td>
\t\t\t\t<td>
\t\t\t\t\t<input type=\"text\" name=\"FieldSeparator\" id=\"FieldSeparator\" class=\"Field250\" value=\"";
        // line 105
        echo twig_safe_filter((isset($context['FieldSeparator']) ? $context['FieldSeparator'] : null));
        echo "\" />
\t\t\t\t\t<img onmouseout=\"HideHelp('d4');\" onmouseover=\"ShowHelp('d4', '";
        // line 106
        echo getLang("ImportFieldSeparator");
        echo "', '";
        echo getLang("ImportFieldSeparatorDesc");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\">
\t\t\t\t\t<div style=\"display:none\" id=\"d4\"></div>
\t\t\t\t</td>
\t\t\t</tr>

\t\t\t<tr class=\"BulkImportRowHide\">
\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t<span class=\"Required\">*</span>&nbsp;";
        // line 113
        echo getLang("ImportFieldEnclosure");
        echo ":
\t\t\t\t</td>
\t\t\t\t<td>
\t\t\t\t\t<input type=\"text\" name=\"FieldEnclosure\" id=\"FieldEnclosure\" class=\"Field250\" value='";
        // line 116
        echo twig_safe_filter((isset($context['FieldEnclosure']) ? $context['FieldEnclosure'] : null));
        echo "' />
\t\t\t\t\t<img onmouseout=\"HideHelp('d5');\" onmouseover=\"ShowHelp('d5', '";
        // line 117
        echo getLang("ImportFieldEnclosure");
        echo "', '";
        echo getLang("ImportFieldEnclosureDesc");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\">
\t\t\t\t\t<div style=\"display:none\" id=\"d5\"></div>
\t\t\t\t</td>
\t\t\t</tr>
\t\t</table>
\t\t<table border=\"0\" cellspacing=\"0\" cellpadding=\"2\" width=\"100%\" class=\"PanelPlain\">
\t\t\t<tr>
\t\t\t\t<td width=\"200\" class=\"FieldLabel\">
\t\t\t\t\t&nbsp;
\t\t\t\t</td>
\t\t\t\t<td>
\t\t\t\t\t<input type=\"reset\" value=\"";
        // line 128
        echo getLang("Cancel");
        echo "\" class=\"FormButton\" onclick=\"ConfirmCancel()\" />
\t\t\t\t\t<input type=\"submit\" value=\"";
        // line 129
        echo getLang("Next");
        echo " &raquo;\" class=\"FormButton\" />
\t\t\t\t</td>
\t\t\t</tr>
\t\t</table>
\t\t</td>
\t</tr>
\t</table>
</div>
</form>

<script type=\"text/javascript\">
\tfunction ConfirmCancel()
\t{
\t\tif(confirm('";
        // line 142
        echo getLang("ConfirmCancelImport");
        echo "'))
\t\t\twindow.location = 'index.php?ToDo=manageCustomers';
\t}

\tfunction CheckImportCustomerForm()
\t{
\t\tvar f = document.getElementById('CustomerImportUseUpload');
\t\tif(f.checked == true)
\t\t{
\t\t\tvar f = document.getElementById('ImportFile');
\t\t\tif(f.value == '')
\t\t\t{
\t\t\t\talert('";
        // line 154
        echo getLang("NoImportFile");
        echo "');
\t\t\t\tf.focus();
\t\t\t\treturn false;
\t\t\t}
\t\t}
\t\telse
\t\t{
\t\t\tvar f = document.getElementById('ServerFile');
\t\t\tif(f.value < 1)
\t\t\t{
\t\t\t\talert('";
        // line 164
        echo getLang("NoImportFile");
        echo "');
\t\t\t\tf.focus();
\t\t\t\treturn false;
\t\t\t}
\t\t}

\t\tvar f = document.getElementById('FieldSeparator');
\t\tif(f.value == '')
\t\t{
\t\t\talert('";
        // line 173
        echo getLang("NoImportFieldSeparator");
        echo "');
\t\t\tf.focus();
\t\t\treturn false;
\t\t}

\t\tvar f = document.getElementById('FieldEnclosure');
\t\tif(f.value == '')
\t\t{
\t\t\talert('";
        // line 181
        echo getLang("NoImportFieldEnclosure");
        echo "');
\t\t\tf.focus();
\t\t\treturn false;
\t\t}
\t\treturn true;
\t}

\tfunction ToggleSource()
\t{
\t\tvar file = document.getElementById('CustomerImportUseUpload');
\t\tif(file.checked == true)
\t\t{
\t\t\tdocument.getElementById('CustomerImportUploadField').style.display = '';
\t\t\tdocument.getElementById('CustomerImportServerField').style.display = 'none';
\t\t\tdocument.getElementById('CustomerImportServerNoList').style.display = 'none';
\t\t}
\t\telse
\t\t{
\t\t\tdocument.getElementById('CustomerImportUploadField').style.display = 'none';
\t\t\tif(document.getElementById('CustomerImportServerField').getElementsByTagName('SELECT')[0].options.length == 1)
\t\t\t{
\t\t\t\tdocument.getElementById('CustomerImportServerNoList').style.display = '';
\t\t\t}
\t\t\telse
\t\t\t{
\t\t\t\tdocument.getElementById('CustomerImportServerField').style.display = '';
\t\t\t}
\t\t}
\t}

\t\$(\"#BulkEditTemplate\").change(function() {
\t\tvar disabled = '';
\t\tif (\$(this).attr('checked')) {
\t\t\tdisabled = 'disabled';
\t\t}

\t\t\$(\"#Headers\").attr({
\t\t\t'checked': \$(this).attr('checked'),
\t\t\t'disabled': disabled

\t\t});

\t\t\$(\"#Override\").attr({
\t\t\t'checked': \$(this).attr('checked'),
\t\t\t'disabled': disabled
\t\t});

\t\t\$(\"#Override\").change();

\t\t\$(\".BulkImportRowHide\").toggle();
\t});
</script>
";
    }

}
