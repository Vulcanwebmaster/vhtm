<?php

/* returns.manage.tpl */
class __TwigTemplate_b137ff730a0c652656cf41383a8b05e2 extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "\t<div class=\"BodyContainer\">

\t<table id=\"Table13\" cellSpacing=\"0\" cellPadding=\"0\" width=\"100%\">
\t\t<tr>
\t\t\t<td class=\"Heading1\">
\t\t\t\t";
        // line 6
        echo getLang("View");
        echo ": <a href=\"#\" style=\"color:#005FA3\" id=\"ViewsMenuButton\" class=\"PopDownMenu\">";
        echo twig_safe_filter((isset($context['ViewName']) ? $context['ViewName'] : null));
        echo " <img width=\"8\" height=\"5\" src=\"images/arrow_blue.gif\" border=\"0\" /></a>
\t\t\t</td>
\t\t</tr>
\t\t<tr>
\t\t<td class=\"Intro\">
\t\t\t<p>";
        // line 11
        echo getLang("ManageReturnsIntro");
        echo "</p>
\t\t\t<div id=\"ReturnsStatus\">
\t\t\t\t";
        // line 13
        echo twig_safe_filter((isset($context['Message']) ? $context['Message'] : null));
        echo "
\t\t\t</div>
\t\t\t<table id=\"IntroTable\" cellspacing=\"0\" cellpadding=\"0\" width=\"100%\">
\t\t\t<tr>
\t\t\t<td class=\"Intro\" valign=\"top\">
\t\t\t\t<input type=\"button\" name=\"IndexDeleteButton\" value=\"";
        // line 18
        echo getLang("DeleteSelected");
        echo "\" id=\"IndexDeleteButton\" class=\"SmallButton\" onclick=\"ConfirmDeleteSelected()\" ";
        echo twig_safe_filter((isset($context['DisableDelete']) ? $context['DisableDelete'] : null));
        echo " />
\t\t\t</td>
\t\t\t<td class=\"SmallSearch\" align=\"right\">
\t\t\t\t<table id=\"Table16\" style=\"display:";
        // line 21
        echo twig_safe_filter((isset($context['DisplaySearch']) ? $context['DisplaySearch'] : null));
        echo "\">
\t\t\t\t<form name=\"frmReturns\" id=\"frmReturns\" action=\"index.php?ToDo=viewReturns";
        // line 22
        echo twig_safe_filter((isset($context['SortURL']) ? $context['SortURL'] : null));
        echo "\" method=\"get\">
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"text\" nowrap align=\"right\">
\t\t\t\t\t\t<input name=\"ToDo\" id=\"ToDo\" type=\"hidden\" value=\"viewReturns\" />
\t\t\t\t\t\t<input name=\"searchQuery\" id=\"searchQuery\" type=\"text\" value=\"";
        // line 26
        echo twig_safe_filter((isset($context['Query']) ? $context['Query'] : null));
        echo "\" id=\"SearchQuery\" class=\"SearchBox\" style=\"width:150px\" />&nbsp;
\t\t\t\t\t\t<select name=\"returnStatus\" id=\"returnStatus\">
\t\t\t\t\t\t\t<option value=\"0\">";
        // line 28
        echo getLang("AllStatuses");
        echo "</option>
\t\t\t\t\t\t\t";
        // line 29
        echo twig_safe_filter((isset($context['ReturnStatusList']) ? $context['ReturnStatusList'] : null));
        echo "
\t\t\t\t\t\t<input type=\"image\" name=\"SearchButton\" id=\"SearchButton\" src=\"images/searchicon.gif\" border=\"0\" style=\"padding-left: 10px; vertical-align: top;\" />
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td nowrap>
\t\t\t\t\t\t<a href=\"index.php?ToDo=searchReturns\">";
        // line 35
        echo getLang("AdvancedSearch");
        echo "</a>
\t\t\t\t\t\t<span style=\"display:";
        // line 36
        echo twig_safe_filter((isset($context['HideClearResults']) ? $context['HideClearResults'] : null));
        echo "\">| <a id=\"SearchClearButton\" href=\"index.php?ToDo=viewReturns\">";
        echo getLang("ClearResults");
        echo "</a></span>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t</form>
\t\t\t\t</table>
\t\t\t</td>
\t\t\t</tr>
\t\t\t</table>
\t\t</td>
\t\t</tr>
\t\t<tr>
\t\t<td style=\"display: ";
        // line 47
        echo twig_safe_filter((isset($context['DisplayGrid']) ? $context['DisplayGrid'] : null));
        echo "\">
\t\t\t<form name=\"frmReturns1\" id=\"frmReturns1\" method=\"post\" action=\"index.php?ToDo=deleteReturns\">
\t\t\t\t<div class=\"GridContainer\">
\t\t\t\t\t";
        // line 50
        echo twig_safe_filter((isset($context['ReturnsDataGrid']) ? $context['ReturnsDataGrid'] : null));
        echo "
\t\t\t\t</div>
\t\t\t</form>
\t\t</td></tr>
\t</table>
\t</div>
\t\t<div id=\"ViewsMenu\" class=\"DropDownMenu DropShadow\" style=\"display: none; width:200px\">
\t\t\t\t<ul>
\t\t\t\t\t";
        // line 58
        echo twig_safe_filter((isset($context['CustomSearchOptions']) ? $context['CustomSearchOptions'] : null));
        echo "
\t\t\t\t</ul>
\t\t\t\t<hr />
\t\t\t\t<ul>
\t\t\t\t\t<li><a href=\"index.php?ToDo=createReturnView\" style=\"background-image:url('images/view_add.gif'); background-repeat:no-repeat; background-position:5px 5px; padding-left:28px\">";
        // line 62
        echo getLang("CreateANewView");
        echo "</a></li>
\t\t\t\t\t<li style=\"display:";
        // line 63
        echo twig_safe_filter((isset($context['HideDeleteViewLink']) ? $context['HideDeleteViewLink'] : null));
        echo "\"><a onclick=\"\$('#ViewsMenu').hide(); ConfirmDeleteCustomSearch('";
        echo twig_safe_filter((isset($context['CustomSearchId']) ? $context['CustomSearchId'] : null));
        echo "')\" href=\"javascript:void(0)\" style=\"background-image:url('images/view_del.gif'); background-repeat:no-repeat; background-position:5px 5px; padding-left:28px\">";
        echo getLang("DeleteThisView");
        echo "</a></li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t\t</div>
\t\t</div>
\t</div>

\t<script type=\"text/javascript\">
\t\tfunction ConfirmDeleteSelected()
\t\t{
\t\t\tif(\$('.DeleteCheck:checked').length == 0) {
\t\t\t\talert('";
        // line 75
        echo Interspire_Template_Extension::jsFilter(getLang("ChooseReturnsToDelete"), "'");
        echo "');
\t\t\t}
\t\t\telse {
\t\t\t\tif(confirm('";
        // line 78
        echo Interspire_Template_Extension::jsFilter(getLang("ConfirmDeleteReturns"), "'");
        echo "')) {
\t\t\t\t\t\$('#frmReturns1').submit();
\t\t\t\t}
\t\t\t}
\t\t}

\t\t\$(function(){
\t\t\t\$('.returnStatusSelect').each(function(){
\t\t\t\t// on dom ready, store the initial value of each return status select
\t\t\t\t\$(this).data('initialValue', \$(this).val());
\t\t\t}).live('change', function(){
\t\t\t\t// this replaces the ONCHANGE= that used to be on each select in manage.row template
\t\t\t\tvar \$\$ = \$(this),
\t\t\t\t\treturnId = \$\$.attr('id').replace('status_', '');

\t\t\t\tif (!returnId) {
\t\t\t\t\treturn false;
\t\t\t\t}

\t\t\t\tvar statusId = \$\$.val();
\t\t\t\tvar statusText = \$\$.find(':selected').text();
\t\t\t\tUpdateReturnStatus(returnId, statusId, statusText, \$\$.data('initialValue'))
\t\t\t});
\t\t});

\t\tfunction UpdateReturnStatus(returnid, statusid, statustext, initialstatus) {
\t\t\t// this fn could use rewriting to make better use of \$.data -- leaving alone for now and adding the .live() binding instead

\t\t\tif(confirm('";
        // line 106
        echo Interspire_Template_Extension::jsFilter(getLang("ConfirmReturnStatusChange"), "'");
        echo "' + ' ' + statustext.toLowerCase() + \"?\")) {
\t\t\t\t\$('#ajax_status_'+returnid).show();
\t\t\t\t\$.ajax({
\t\t\t\t\turl: 'remote.php?w=updateReturnStatus&returnId='+returnid+'&status='+statusid,
\t\t\t\t\tsuccess: function(response) {
\t\t\t\t\t\t\$('#ajax_status_'+returnid).hide();
\t\t\t\t\t\tif(response == 0) {
\t\t\t\t\t\t\talert('";
        // line 113
        echo Interspire_Template_Extension::jsFilter(getLang("FailedUpdateReturnStatus"), "'");
        echo "');
\t\t\t\t\t\t}
\t\t\t\t\t},
\t\t\t\t\terror: function() {
\t\t\t\t\t\talert('";
        // line 117
        echo Interspire_Template_Extension::jsFilter(getLang("FailedUpdateReturnStatus"), "'");
        echo "');
\t\t\t\t\t}
\t\t\t\t});
\t\t\t\t\$('#status_'+returnid).attr('lastStatus', statusid);
\t\t\t}
\t\t\telse {
\t\t\t\tif(\$('#status_'+returnid).attr('lastStatus')) {
\t\t\t\t\t\$('#status_'+returnid).val(\$('#status_'+returnid).attr('lastStatus'));
\t\t\t\t}
\t\t\t\telse {
\t\t\t\t\t\$('#status_'+returnid).val(initialstatus);
\t\t\t\t}
\t\t\t}
\t\t}

\t\tfunction ConfirmDeleteCustomSearch(id) {
\t\t\tif(confirm('";
        // line 133
        echo Interspire_Template_Extension::jsFilter(getLang("ConfirmDeleteCustomSearch"), "'");
        echo "')) {
\t\t\t\tdocument.location.href = \"index.php?ToDo=deleteCustomReturnSearch&searchId=\"+id;
\t\t\t}
\t\t}

\t\tfunction QuickReturnView(id) {
\t\t\tvar tr = document.getElementById(\"tr\"+id);
\t\t\tvar trQ = document.getElementById(\"trQ\"+id);
\t\t\tvar tdQ = document.getElementById(\"tdQ\"+id);
\t\t\tvar img = document.getElementById(\"expand\"+id);

\t\t\tif(img.src.indexOf(\"plus.gif\") > -1)
\t\t\t{
\t\t\t\timg.src = \"images/minus.gif\";

\t\t\t\tfor(i = 0; i < tr.childNodes.length; i++)
\t\t\t\t{
\t\t\t\t\tif(tr.childNodes[i].style != null)
\t\t\t\t\t\ttr.childNodes[i].style.backgroundColor = \"#dbf3d1\";
\t\t\t\t}

\t\t\t\ttrQ.style.display = \"\";
\t\t\t\t\$(trQ).find('.QuickView').load('remote.php?w=returnQuickView&returnId='+id, {}, function() {
\t\t\t\t\ttrQ.style.display = \"\";
\t\t\t\t});
\t\t\t}
\t\t\telse
\t\t\t{
\t\t\t\timg.src = \"images/plus.gif\";

\t\t\t\tfor(i = 0; i < tr.childNodes.length; i++)
\t\t\t\t{
\t\t\t\t\tif(tr.childNodes[i].style != null)
\t\t\t\t\t\ttr.childNodes[i].style.backgroundColor = \"\";
\t\t\t\t}
\t\t\t\ttrQ.style.display = \"none\";
\t\t\t}
\t\t}

\t\tfunction UpdateReturnNotes(id) {
\t\t\tvar returnNotes = \$('#ReturnNotes' + id),
\t\t\t\tsubmitButton = returnNotes.find('input[type=button]');

\t\t\tsubmitButton
\t\t\t\t.attr('disabled', 'disabled');

\t\t\t\$.ajax({
\t\t\t\turl: 'remote.php?w=updateReturnNotes',
\t\t\t\ttype: 'POST',
\t\t\t\tdata: {
\t\t\t\t\treturnId: id,
\t\t\t\t\treturnNotes: returnNotes.find('textarea[name=returnNotes]').val()
\t\t\t\t},
\t\t\t\tcomplete: function() {
\t\t\t\t\tsubmitButton.removeAttr('disabled');
\t\t\t\t},
\t\t\t\tsuccess: function(msg) {
\t\t\t\t\tif (msg == 1) {
\t\t\t\t\t\tdisplay_success('ReturnsStatus', '";
        // line 191
        echo Interspire_Template_Extension::jsFilter(getLang("ReturnNotesUpdated"), "'");
        echo "');
\t\t\t\t\t\treturn;
\t\t\t\t\t}

\t\t\t\t\talert('";
        // line 195
        echo Interspire_Template_Extension::jsFilter(getLang("ReturnNotesUpdateError"), "'");
        echo "');
\t\t\t\t},
\t\t\t\terror: function() {
\t\t\t\t\tdisplay_error('ReturnsStatus', '";
        // line 198
        echo Interspire_Template_Extension::jsFilter(getLang("ReturnNotesUpdateError"), "'");
        echo "');
\t\t\t\t}
\t\t\t});
\t\t}

\t\tfunction ConfirmIssueCredit(amount) {
\t\t\tif(confirm('";
        // line 204
        echo Interspire_Template_Extension::jsFilter(getLang("ConfirmReturnIssueCredit"), "'");
        echo "'.replace('%s', amount))) {
\t\t\t\treturn true;
\t\t\t}
\t\t\treturn false;
\t\t}
</script>
";
    }

}
