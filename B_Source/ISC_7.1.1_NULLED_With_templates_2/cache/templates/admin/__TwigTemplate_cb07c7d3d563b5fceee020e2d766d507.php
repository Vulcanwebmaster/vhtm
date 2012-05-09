<?php

/* settings.manage.tpl */
class __TwigTemplate_cb07c7d3d563b5fceee020e2d766d507 extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        $context['util'] = $this->env->loadTemplate("macros/util.tpl", true);
        // line 2
        $context['form'] = $this->env->loadTemplate("macros/forms.tpl", true);
        echo "<form enctype=\"multipart/form-data\" action=\"index.php?ToDo=saveUpdatedSettings\" name=\"frmSettings\" id=\"frmSettings\" method=\"post\">
\t<input id=\"currentTab\" name=\"currentTab\" value=\"0\" type=\"hidden\" />
\t<div class=\"BodyContainer\">
\t<table cellSpacing=\"0\" cellPadding=\"0\" width=\"100%\" style=\"margin-left: 4px; margin-top: 8px;\">
\t<tr>
\t\t<td class=\"Heading1\">";
        // line 8
        echo getLang("StoreSettings");
        echo "</td>
\t</tr>
\t<tr>
\t\t<td class=\"Intro\" style=\"padding-bottom:10px\">
\t\t\t<p>";
        // line 12
        echo getLang("SettingsIntro");
        echo "</p>
\t\t\t";
        // line 13
        echo twig_safe_filter((isset($context['Message']) ? $context['Message'] : null));
        echo "
\t\t\t<p>
\t\t\t\t<input type=\"submit\" disabled=\"disabled\" value=\"";
        // line 15
        echo getLang("Save");
        echo "\" class=\"FormButton\" />
\t\t\t\t<input type=\"reset\" value=\"";
        // line 16
        echo getLang("Cancel");
        echo "\" class=\"FormButton\" onclick=\"ConfirmCancel()\" />
\t\t\t</p>
\t\t</td>
\t</tr>
\t<tr>
\t\t<td>
\t\t\t<ul id=\"tabnav\">
\t\t\t\t<li><a href=\"#\" class=\"active\" id=\"tab0\" onclick=\"ShowTab(0)\">";
        // line 23
        echo getLang("WebsiteSettingsTab");
        echo "</a></li>
\t\t\t\t<li><a href=\"#\" id=\"tab1\" onclick=\"ShowTab(1)\">";
        // line 24
        echo getLang("LocalizationSettingsTab");
        echo "</a></li>
\t\t\t\t<li><a href=\"#\" id=\"tab8\" onclick=\"ShowTab(8)\">";
        // line 25
        echo getLang("ImageSettings");
        echo "</a></li>
\t\t\t\t<li><a href=\"#\" id=\"tab2\" onclick=\"ShowTab(2)\">";
        // line 26
        echo getLang("DisplaySettingsTab");
        echo "</a></li>
\t\t\t\t<li style=\"display: ";
        // line 27
        echo twig_safe_filter((isset($context['HideBackupSettings']) ? $context['HideBackupSettings'] : null));
        echo "\"><a href=\"#\" id=\"tab3\" onclick=\"ShowTab(3)\">";
        echo getLang("BackupSettingsTab");
        echo "</a></li>
\t\t\t\t<li><a href=\"#\" id=\"tab4\" onclick=\"ShowTab(4)\">";
        // line 28
        echo getLang("SearchSettingsTab");
        echo "</a></li>
\t\t\t\t<li><a href=\"#\" id=\"tab5\" onclick=\"ShowTab(5)\" style=\"";
        // line 29
        echo twig_safe_filter((isset($context['HideLoggingSettingsTab']) ? $context['HideLoggingSettingsTab'] : null));
        echo "\" >";
        echo getLang("LoggingSettingsTab");
        echo "</a></li>
\t\t\t\t<li><a href=\"#\" id=\"tab6\" onclick=\"ShowTab(6)\" style=\"";
        // line 30
        echo twig_safe_filter((isset($context['HideVendorOptions']) ? $context['HideVendorOptions'] : null));
        echo "\">";
        echo getLang("VendorSettingsTab");
        echo "</a></li>
\t\t\t\t<li><a href=\"#\" id=\"tab7\" onclick=\"ShowTab(7)\">";
        // line 31
        echo getLang("MiscellaneousSettingsTab");
        echo "</a></li>
\t\t\t</ul>
\t\t</td>
\t</tr>
\t<tr>
\t\t<td>
\t\t\t<div id=\"div0\" style=\"padding-top: 10px;\">
\t\t\t\t<table width=\"100%\" class=\"Panel\">
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"Heading2\" colspan=\"2\">";
        // line 40
        echo getLang("SiteSettings");
        echo "</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t<span class=\"Required\">*</span> <label for=\"StoreName\">";
        // line 44
        echo getLang("StoreName");
        echo ":</label>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<input type=\"text\" name=\"StoreName\" id=\"StoreName\" value=\"";
        // line 47
        echo twig_safe_filter((isset($context['StoreName']) ? $context['StoreName'] : null));
        echo "\" class=\"Field250\" />
\t\t\t\t\t\t<img onmouseout=\"HideHelp('d1');\" onmouseover=\"ShowHelp('d1', '";
        // line 48
        echo getLang("StoreName");
        echo "', '";
        echo getLang("StoreNameHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t<div style=\"display:none\" id=\"d1\"></div>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t<span class=\"Required\">*</span> <label for=\"StoreName\">";
        // line 54
        echo getLang("StoreAddress");
        echo ":</label>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<textarea name=\"StoreAddress\" id=\"StoreAddress\" class=\"Field250\" rows=\"4\">";
        // line 57
        echo twig_safe_filter((isset($context['StoreAddress']) ? $context['StoreAddress'] : null));
        echo "</textarea>
\t\t\t\t\t\t<img onmouseout=\"HideHelp('d38');\" onmouseover=\"ShowHelp('d38', '";
        // line 58
        echo getLang("StoreAddress");
        echo "', '";
        echo getLang("StoreAddressHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t<div style=\"display:none\" id=\"d38\"></div>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t&nbsp;&nbsp; <label for=\"StoreName\">";
        // line 64
        echo getLang("DownForMaintenance");
        echo "?</label>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<input type=\"checkbox\" name=\"DownForMaintenance\" id=\"DownForMaintenance\" value=\"ON\" ";
        // line 67
        echo twig_safe_filter((isset($context['IsDownForMaintenance']) ? $context['IsDownForMaintenance'] : null));
        echo " /> <label for=\"DownForMaintenance\">";
        echo getLang("YesDownForMaintenance");
        echo "</label>
\t\t\t\t\t\t<img onmouseout=\"HideHelp('dmaintenance');\" onmouseover=\"ShowHelp('dmaintenance', '";
        // line 68
        echo getLang("DownForMaintenance");
        echo "', '";
        echo getLang("DownForMaintenanceHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t<div style=\"display:none\" id=\"dmaintenance\"></div>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr id=\"DownForMaintenanceMessageRow\" style=\"display:none; \">
\t\t\t\t\t<td class=\"FieldLabel\">

\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<textarea name=\"DownForMaintenanceMessage\" id=\"DownForMaintenanceMessage\" class=\"Field250\" rows=\"4\">";
        // line 77
        echo twig_safe_filter((isset($context['DownForMaintenanceMessage']) ? $context['DownForMaintenanceMessage'] : null));
        echo "</textarea>
\t\t\t\t\t\t<img onmouseout=\"HideHelp('d38');\" onmouseover=\"ShowHelp('d38', '";
        // line 78
        echo getLang("StoreAddress");
        echo "', '";
        echo getLang("StoreAddressHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t<div style=\"display:none\" id=\"d38\"></div>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td colspan=\"2\" class=\"EmptyRow\">
\t\t\t\t\t\t&nbsp;
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"Heading2\" colspan=\"2\">";
        // line 88
        echo getLang("SiteSecuritySettings");
        echo "</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t&nbsp;&nbsp; <label for=\"StoreName\">";
        // line 92
        echo getLang("UseSSLDuringCheckout");
        echo "?</label>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<label for=\"NoSSL\"><input type=\"radio\" name=\"UseSSL\" id=\"NoSSL\" value=\"0\" ";
        // line 95
        echo twig_safe_filter((isset($context['NoSSLChecked']) ? $context['NoSSLChecked'] : null));
        echo " /> ";
        echo getLang("DontUseSSL");
        echo "</label>
\t\t\t\t\t\t<img onmouseout=\"HideHelp('d37');\" onmouseover=\"ShowHelp('d37', '";
        // line 96
        echo getLang("UseSSLDuringCheckout");
        echo "', '";
        echo getLang("UseSSLDuringCheckoutHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t<div style=\"display:none\" id=\"d37\"></div>
\t\t\t\t\t\t<br />
\t\t\t\t\t\t<label for=\"UseNormalSSL\"><input type=\"radio\" name=\"UseSSL\" id=\"UseNormalSSL\" value=\"1\" ";
        // line 99
        echo twig_safe_filter((isset($context['UseNormalSSLChecked']) ? $context['UseNormalSSLChecked'] : null));
        echo " /> ";
        echo getLang("UseInstalledSSL");
        echo "</label>
\t\t\t\t\t\t<img onmouseout=\"HideHelp('sslhelp');\" onmouseover=\"ShowHelp('sslhelp', '";
        // line 100
        echo getLang("SSL");
        echo "', '";
        echo getLang("UseInstalledSSLHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t<div style=\"display:none\" id=\"sslhelp\"></div>
\t\t\t\t\t\t<br />
\t\t\t\t\t\t<label for=\"UseSharedSSL\"><input type=\"radio\" name=\"UseSSL\" id=\"UseSharedSSL\" value=\"2\" ";
        // line 103
        echo twig_safe_filter((isset($context['UseSharedSSLChecked']) ? $context['UseSharedSSLChecked'] : null));
        echo " /> ";
        echo getLang("UseSharedSSL");
        echo "</label>
\t\t\t\t\t\t<img onmouseout=\"HideHelp('sharedsslhelp');\" onmouseover=\"ShowHelp('sharedsslhelp', '";
        // line 104
        echo getLang("SharedSSL");
        echo "', '";
        echo getLang("UseSharedSSLHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t<div style=\"display:none\" id=\"sharedsslhelp\"></div>
\t\t\t\t\t\t<div class=\"NodeJoin\">
\t\t\t\t\t\t\t<img src=\"images/nodejoin.gif\" alt=\"\" /> <input type=\"text\" class=\"Field250\" id=\"SharedSSLPath\" name=\"SharedSSLPath\" value=\"";
        // line 107
        echo twig_safe_filter((isset($context['SharedSSLPath']) ? $context['SharedSSLPath'] : null));
        echo "\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<br />
\t\t\t\t\t\t<label for=\"UseSubdomainSSL\"><input type=\"radio\" name=\"UseSSL\" id=\"UseSubdomainSSL\" value=\"3\" ";
        // line 110
        echo twig_safe_filter((isset($context['UseSubdomainSSLChecked']) ? $context['UseSubdomainSSLChecked'] : null));
        echo " /> ";
        echo getLang("UseSubdomainSSL");
        echo "</label>
\t\t\t\t\t\t<img onmouseout=\"HideHelp('subdomainsslhelp');\" onmouseover=\"ShowHelp('subdomainsslhelp', '";
        // line 111
        echo getLang("SubdomainSSL");
        echo "', '";
        echo getLang("UseSubdomainSSLHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t<div style=\"display:none\" id=\"subdomainsslhelp\"></div>
\t\t\t\t\t\t<div class=\"NodeJoin\">
\t\t\t\t\t\t\t<img src=\"images/nodejoin.gif\" alt=\"\" /> <input type=\"text\" class=\"Field250\" id=\"SubdomainSSLPath\" name=\"SubdomainSSLPath\" value=\"";
        // line 114
        echo twig_safe_filter((isset($context['SubdomainSSLPath']) ? $context['SubdomainSSLPath'] : null));
        echo "\"/>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<br />
\t\t\t\t\t\t<div style='display:inline; padding-left:20px'><font size=1><a href='javascript:void(0)' onclick='TestSSL()' style='color:gray'>How do I know if my website supports SSL?</a></font></div>
\t\t\t\t\t\t<div style=\"margin-top:3px; padding-left:20px\"><a style=\"color:gray\" href=\"#\" onclick=\"LaunchHelp(715)\">";
        // line 119
        echo getLang("SSLWontLoad");
        echo "</a></div>
\t\t\t\t\t</td>
\t\t\t\t</tr>

\t\t\t\t<tr>
\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t&nbsp;&nbsp; <label for=\"StoreName\">";
        // line 125
        echo getLang("UseControlPanelSSL");
        echo "?</label>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<input type=\"checkbox\" name=\"ForceControlPanelSSL\" id=\"UseControlPanelSSL\" value=\"ON\" ";
        // line 128
        echo twig_safe_filter((isset($context['IsControlPanelSSLEnabled']) ? $context['IsControlPanelSSLEnabled'] : null));
        echo " /> <label for=\"UseControlPanelSSL\">";
        echo getLang("YesUseControlPanelSSL");
        echo "</label>
\t\t\t\t\t\t<img onmouseout=\"HideHelp('dadminssl');\" onmouseover=\"ShowHelp('dadminssl', '";
        // line 129
        echo getLang("UseControlPanelSSL");
        echo "', '";
        echo Interspire_Template_Extension::jsFilter(getLang("UseControlPanelSSLHelp"), "'");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t<div style=\"display:none\" id=\"dadminssl\"></div>
\t\t\t\t\t</td>
\t\t\t\t</tr>

\t\t\t\t<tr>
\t\t\t\t\t<td colspan=\"2\" class=\"EmptyRow\">
\t\t\t\t\t\t&nbsp;
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"Heading2\" colspan=\"2\">";
        // line 140
        echo getLang("AdvancedStoreSettings");
        echo "</td>
\t\t\t\t</tr>
\t\t\t\t<tr style=\"";
        // line 142
        echo twig_safe_filter((isset($context['HideStoreUrlField']) ? $context['HideStoreUrlField'] : null));
        echo "\">
\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t<span class=\"Required\">*</span> <label for=\"ShopPath\">";
        // line 144
        echo getLang("ShopPath");
        echo ":</label>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<input type=\"text\" name=\"ShopPath\" id=\"ShopPath\" value=\"";
        // line 147
        echo twig_safe_filter((isset($context['ShopPathNormal']) ? $context['ShopPathNormal'] : null));
        echo "\" class=\"Field250\" />
\t\t\t\t\t\t<img onmouseout=\"HideHelp('d2');\" onmouseover=\"ShowHelp('d2', '";
        // line 148
        echo getLang("ShopPath");
        echo "', '";
        echo getLang("ShopPathHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t<div style=\"display:none\" id=\"d2\"></div>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t<span class=\"Required\">*</span> <label for=\"CharacterSet\">";
        // line 154
        echo getLang("CharacterSet");
        echo ":</label>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<select id=\"CharacterSet\" name=\"CharacterSet\" class=\"Field250\">
\t\t\t\t\t\t\t<option value=\"UTF-8\" ";
        // line 158
        echo twig_safe_filter((isset($context['CharacterSet_Selected_utf8']) ? $context['CharacterSet_Selected_utf8'] : null));
        echo ">";
        echo getLang("SettingsCharset_utf8");
        echo "</option>
\t\t\t\t\t\t\t<option value=\"ISO-8859-1\" ";
        // line 159
        echo twig_safe_filter((isset($context['CharacterSet_Selected_iso88591']) ? $context['CharacterSet_Selected_iso88591'] : null));
        echo ">";
        echo getLang("SettingsCharset_iso88591");
        echo "</option>
\t\t\t\t\t\t\t<option value=\"ISO-8859-15\" ";
        // line 160
        echo twig_safe_filter((isset($context['CharacterSet_Selected_iso885915']) ? $context['CharacterSet_Selected_iso885915'] : null));
        echo ">";
        echo getLang("SettingsCharset_iso885915");
        echo "</option>
\t\t\t\t\t\t\t<option value=\"cp866\" ";
        // line 161
        echo twig_safe_filter((isset($context['CharacterSet_Selected_cp866']) ? $context['CharacterSet_Selected_cp866'] : null));
        echo ">";
        echo getLang("SettingsCharset_cp866");
        echo "</option>
\t\t\t\t\t\t\t<option value=\"cp1251\" ";
        // line 162
        echo twig_safe_filter((isset($context['CharacterSet_Selected_cp1251']) ? $context['CharacterSet_Selected_cp1251'] : null));
        echo ">";
        echo getLang("SettingsCharset_cp1251");
        echo "</option>
\t\t\t\t\t\t\t<option value=\"cp1252\" ";
        // line 163
        echo twig_safe_filter((isset($context['CharacterSet_Selected_cp1252']) ? $context['CharacterSet_Selected_cp1252'] : null));
        echo ">";
        echo getLang("SettingsCharset_cp1252");
        echo "</option>
\t\t\t\t\t\t\t<option value=\"KOI8-R\" ";
        // line 164
        echo twig_safe_filter((isset($context['CharacterSet_Selected_koi8r']) ? $context['CharacterSet_Selected_koi8r'] : null));
        echo ">";
        echo getLang("SettingsCharset_koi8r");
        echo "</option>
\t\t\t\t\t\t\t<option value=\"Shift_JIS\" ";
        // line 165
        echo twig_safe_filter((isset($context['CharacterSet_Selected_shiftjis']) ? $context['CharacterSet_Selected_shiftjis'] : null));
        echo ">";
        echo getLang("SettingsCharset_shiftjis");
        echo "</option>
\t\t\t\t\t\t\t<option value=\"EUC-JP\" ";
        // line 166
        echo twig_safe_filter((isset($context['CharacterSet_Selected_eucjp']) ? $context['CharacterSet_Selected_eucjp'] : null));
        echo ">";
        echo getLang("SettingsCharset_eucjp");
        echo "</option>
\t\t\t\t\t\t</select>

\t\t\t\t\t\t<img onmouseout=\"HideHelp('d3');\" onmouseover=\"ShowHelp('d3', '";
        // line 169
        echo getLang("CharacterSet");
        echo "', '";
        echo getLang("CharacterSetHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t<div style=\"display:none\" id=\"d3\"></div>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr style=\"";
        // line 173
        echo twig_safe_filter((isset($context['HidePathFields']) ? $context['HidePathFields'] : null));
        echo "\">
\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t<span class=\"Required\">*</span> <label for=\"DownloadDirectory\">";
        // line 175
        echo getLang("DownloadDirectory");
        echo ":</label>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<input type=\"text\" name=\"DownloadDirectory\" id=\"DownloadDirectory\" value=\"";
        // line 178
        echo twig_safe_filter((isset($context['DownloadDirectory']) ? $context['DownloadDirectory'] : null));
        echo "\" class=\"Field250\" />
\t\t\t\t\t\t<img onmouseout=\"HideHelp('d6');\" onmouseover=\"ShowHelp('d6', '";
        // line 179
        echo getLang("DownloadDirectory");
        echo "', '";
        echo getLang("DownloadDirectoryHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t<div style=\"display:none\" id=\"d6\"></div>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr style=\"";
        // line 183
        echo twig_safe_filter((isset($context['HidePathFields']) ? $context['HidePathFields'] : null));
        echo "\">
\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t<span class=\"Required\">*</span> <label for=\"ImageDirectory\">";
        // line 185
        echo getLang("ImageDirectory");
        echo ":</label>
\t\t\t\t\t</td>
\t\t\t\t\t<td class=\"PanelBottom\">
\t\t\t\t\t\t<input type=\"text\" name=\"ImageDirectory\" id=\"ImageDirectory\" value=\"";
        // line 188
        echo twig_safe_filter((isset($context['ImageDirectory']) ? $context['ImageDirectory'] : null));
        echo "\" class=\"Field250\" />
\t\t\t\t\t\t<img onmouseout=\"HideHelp('d7');\" onmouseover=\"ShowHelp('d7', '";
        // line 189
        echo getLang("ImageDirectory");
        echo "', '";
        echo getLang("ImageDirectoryHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t<div style=\"display:none\" id=\"d7\"></div>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t&nbsp;&nbsp; <label for=\"StoreName\">";
        // line 195
        echo getLang("AllowPurchasing");
        echo "?</label>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<input type=\"checkbox\" name=\"AllowPurchasing\" id=\"AllowPurchasing\" value=\"ON\" ";
        // line 198
        echo twig_safe_filter((isset($context['IsPurchasingEnabled']) ? $context['IsPurchasingEnabled'] : null));
        echo " /> <label for=\"AllowPurchasing\">";
        echo getLang("YesAllowPurchasing");
        echo "</label>
\t\t\t\t\t\t<img onmouseout=\"HideHelp('dpurchasing');\" onmouseover=\"ShowHelp('dpurchasing', '";
        // line 199
        echo getLang("AllowPurchasing");
        echo "', '";
        echo getLang("AllowPurchasingHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t<div style=\"display:none\" id=\"dpurchasing\"></div>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td colspan=\"2\" class=\"EmptyRow\">
\t\t\t\t\t\t&nbsp;
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr style=\"";
        // line 208
        echo twig_safe_filter((isset($context['HideLicenseKey']) ? $context['HideLicenseKey'] : null));
        echo "\">
\t\t\t\t\t<td class=\"Heading2\" colspan=\"2\">";
        // line 209
        echo getLang("LicenseSettings");
        echo "</td>
\t\t\t\t</tr>
\t\t\t\t<tr style=\"";
        // line 211
        echo twig_safe_filter((isset($context['HideLicenseKey']) ? $context['HideLicenseKey'] : null));
        echo "\">
\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t<span class=\"Required\">*</span> <label for=\"serverStamp\">";
        // line 213
        echo getLang("LicenseKey");
        echo ":</label>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<input type=\"text\" name=\"serverStamp\" id=\"serverStamp\" value=\"cctvvs\" class=\"Field250\" />
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr style=\"";
        // line 219
        echo twig_safe_filter((isset($context['HideLicenseKey']) ? $context['HideLicenseKey'] : null));
        echo "\">
\t\t\t\t\t<td colspan=\"2\" class=\"EmptyRow\">
\t\t\t\t\t\t&nbsp;
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"Heading2\" colspan=\"2\">";
        // line 225
        echo getLang("EmailSettings");
        echo "</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t<span class=\"Required\">*</span> <label for=\"AdminEmail\">";
        // line 229
        echo getLang("AdminEmail");
        echo ":</label>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<input type=\"text\" name=\"AdminEmail\" id=\"AdminEmail\" value=\"";
        // line 232
        echo twig_safe_filter((isset($context['AdminEmail']) ? $context['AdminEmail'] : null));
        echo "\" class=\"Field250\" />
\t\t\t\t\t\t<img onmouseout=\"HideHelp('d8');\" onmouseover=\"ShowHelp('d8', '";
        // line 233
        echo getLang("AdminEmail1");
        echo "', '";
        echo getLang("AdminEmailHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t<div style=\"display:none\" id=\"d8\"></div>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t<span class=\"Required\">*</span> <label for=\"OrderEmail\">";
        // line 239
        echo getLang("OrderEmail");
        echo ":</label>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<input type=\"text\" name=\"OrderEmail\" id=\"OrderEmail\" value=\"";
        // line 242
        echo twig_safe_filter((isset($context['OrderEmail']) ? $context['OrderEmail'] : null));
        echo "\" class=\"Field250\" />
\t\t\t\t\t\t<img onmouseout=\"HideHelp('d9');\" onmouseover=\"ShowHelp('d9', '";
        // line 243
        echo getLang("OrderEmail");
        echo "', '";
        echo getLang("OrderEmailHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t<div style=\"display:none\" id=\"d9\"></div>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"FieldLabel\" valign=\"top\">
\t\t\t\t\t\t<span class=\"Required\">&nbsp;</span> <label for=\"LowInventoryEmails\">";
        // line 249
        echo getLang("LowInventoryEmails");
        echo ":</label>
\t\t\t\t\t</td>
\t\t\t\t\t<td class=\"PanelBottom\">
\t\t\t\t\t\t<label> <input type=\"checkbox\" name=\"LowInventoryEmails\" onclick=\"if(this.checked) { \$('.LowInventoryNotificationToggle').show(); } else { \$('.LowInventoryNotificationToggle').hide(); }\" value=\"1\" ";
        // line 252
        echo twig_safe_filter((isset($context['LowInventoryEmailsEnabledCheck']) ? $context['LowInventoryEmailsEnabledCheck'] : null));
        echo " /> ";
        echo getLang("YesEnableLowInventoryEmails");
        echo "</label>
\t\t\t\t\t\t<img onmouseout=\"HideHelp('lowinventory');\" onmouseover=\"ShowHelp('lowinventory', '";
        // line 253
        echo getLang("LowInventoryEmails");
        echo "', '";
        echo getLang("LowInventoryEmailsHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t<div style=\"display:none\" id=\"lowinventory\"></div>
\t\t\t\t\t\t<div style=\"margin-top: 3px; display: ";
        // line 255
        echo twig_safe_filter((isset($context['HideLowInventoryNotification']) ? $context['HideLowInventoryNotification'] : null));
        echo "\" class=\"LowInventoryNotificationToggle\">
\t\t\t\t\t\t\t<img src=\"images/nodejoin.gif\" style=\"vertical-align: middle;\" />
\t\t\t\t\t\t\t";
        // line 257
        echo getLang("EmailAddress");
        echo ": <input type=\"text\" name=\"LowInventoryNotificationAddress\" id=\"LowInventoryNotificationAddress\" class=\"Field250\" value=\"";
        echo twig_safe_filter((isset($context['LowInventoryNotificationAddress']) ? $context['LowInventoryNotificationAddress'] : null));
        echo "\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\" valign=\"top\">
\t\t\t\t\t\t\t<span class=\"Required\">&nbsp;</span> <label for=\"ForwardInvoiceEmails\">";
        // line 263
        echo getLang("ForwardInvoiceEmails");
        echo ":</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"PanelBottom\">
\t\t\t\t\t\t\t<label> <input type=\"checkbox\" name=\"ForwardInvoiceEmailsCheck\" onclick=\"if(this.checked) { \$('.ForwardInvoiceEmailsToggle').show(); } else { \$('.ForwardInvoiceEmailsToggle').hide(); }\" value=\"1\" ";
        // line 266
        echo twig_safe_filter((isset($context['ForwardInvoiceEmailsCheck']) ? $context['ForwardInvoiceEmailsCheck'] : null));
        echo " /> ";
        echo getLang("YesEnableForwardInvoiceEmails");
        echo "</label>
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('invoiceemailshelp');\" onmouseover=\"ShowHelp('invoiceemailshelp', '";
        // line 267
        echo getLang("ForwardInvoiceEmails");
        echo "', '";
        echo getLang("ForwardInvoiceEmailsHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t\t<div style=\"display:none\" id=\"invoiceemailshelp\"></div>
\t\t\t\t\t\t\t<div style=\"margin-top: 3px; display: ";
        // line 269
        echo twig_safe_filter((isset($context['HideForwardInvoiceEmails']) ? $context['HideForwardInvoiceEmails'] : null));
        echo "\" class=\"ForwardInvoiceEmailsToggle\">
\t\t\t\t\t\t\t\t<img src=\"images/nodejoin.gif\" style=\"vertical-align: middle;\" />
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"ForwardInvoiceEmails\" id=\"ForwardInvoiceEmails\" class=\"Field250\" value=\"";
        // line 271
        echo twig_safe_filter((isset($context['ForwardInvoiceEmails']) ? $context['ForwardInvoiceEmails'] : null));
        echo "\" /><br />
\t\t\t\t\t\t\t\t<span class=\"Disabled\" style='text-decoration: none; padding-left: 25px;'>";
        // line 272
        echo getLang("ForwardOrderInvoicesDesc");
        echo "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t<span class=\"Required\">&nbsp;</span>
\t\t\t\t\t\t\t";
        // line 279
        echo getLang("UseSMTPServer");
        echo ":
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<label for=\"MailUsePHP\">
\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"MailUseSMTP\" id=\"MailUsePHP\" value=\"0\" onclick=\"ToggleMailSettings()\" ";
        // line 283
        echo twig_safe_filter((isset($context['MailUsePHPChecked']) ? $context['MailUsePHPChecked'] : null));
        echo " />
\t\t\t\t\t\t\t\t";
        // line 284
        echo getLang("UseDefaultMailSettings");
        echo "\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('ssK6vhkyjO');\" onmouseover=\"ShowHelp('ssK6vhkyjO', '";
        // line 286
        echo getLang("UseDefaultMailSettings");
        echo "', '";
        echo getLang("UseDefaultMailSettingsHelp");
        echo "');\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\"><div style=\"display:none\" id=\"ssK6vhkyjO\"></div>
\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t<label for=\"MailUseSMTP\">
\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"MailUseSMTP\" id=\"MailUseSMTP\" onclick=\"ToggleMailSettings()\" value=\"1\" ";
        // line 289
        echo twig_safe_filter((isset($context['MailUseSMTPChecked']) ? $context['MailUseSMTPChecked'] : null));
        echo " />
\t\t\t\t\t\t\t\t";
        // line 290
        echo getLang("SpecifyOwnSMTPDetails");
        echo "\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('ssv0NUivAU');\" onmouseover=\"ShowHelp('ssv0NUivAU', '";
        // line 292
        echo getLang("SpecifyOwnSMTPDetails");
        echo "', '";
        echo getLang("SpecifyOwnSMTPDetailsHelp");
        echo "');\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" /><div style=\"display:none\" id=\"ssv0NUivAU\"></div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr class=\"SMTPOptions\" style=\"display: ";
        // line 295
        echo twig_safe_filter((isset($context['HideMailSMTPSettings']) ? $context['HideMailSMTPSettings'] : null));
        echo "\">
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t<span class=\"Required\">*</span>
\t\t\t\t\t\t\t";
        // line 298
        echo getLang("SMTPHostname");
        echo ":
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<img width=\"20\" height=\"20\" src=\"images/nodejoin.gif\"/>
\t\t\t\t\t\t\t<input type=\"text\" name=\"MailSMTPServer\" id=\"MailSMTPServer\" value=\"";
        // line 302
        echo twig_safe_filter((isset($context['MailSMTPServer']) ? $context['MailSMTPServer'] : null));
        echo "\" class=\"Field250 smtpSettings\"> <img onmouseout=\"HideHelp('ssdR2a1s2Y');\" onmouseover=\"ShowHelp('ssdR2a1s2Y', '";
        echo getLang("SMTPHostname");
        echo "', '";
        echo getLang("SMTPHostnameHelp");
        echo "');\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" /><div style=\"display:none\" id=\"ssdR2a1s2Y\"></div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>

\t\t\t\t\t<tr class=\"SMTPOptions\" style=\"display: ";
        // line 306
        echo twig_safe_filter((isset($context['HideMailSMTPSettings']) ? $context['HideMailSMTPSettings'] : null));
        echo "\">
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t<span class=\"Required\">&nbsp;</span>
\t\t\t\t\t\t\t";
        // line 309
        echo getLang("SMTPUsername");
        echo ":
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<img width=\"20\" height=\"20\" src=\"images/blank.gif\"/>
\t\t\t\t\t\t\t<input type=\"text\" name=\"MailSMTPUsername\" id=\"MailSMTPUsername\" value=\"";
        // line 313
        echo twig_safe_filter((isset($context['MailSMTPUsername']) ? $context['MailSMTPUsername'] : null));
        echo "\" class=\"Field250 smtpSettings\"> <img onmouseout=\"HideHelp('ssL1nZ3ajD');\" onmouseover=\"ShowHelp('ssL1nZ3ajD', '";
        echo getLang("SMTPUsername");
        echo "', '";
        echo getLang("SMTPUsernameHelp");
        echo "');\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" /><div style=\"display:none\" id=\"ssL1nZ3ajD\"></div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr class=\"SMTPOptions\" style=\"display: ";
        // line 316
        echo twig_safe_filter((isset($context['HideMailSMTPSettings']) ? $context['HideMailSMTPSettings'] : null));
        echo "\">
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t<span class=\"Required\">&nbsp;</span>
\t\t\t\t\t\t\t";
        // line 319
        echo getLang("SMTPPassword");
        echo ":
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<img width=\"20\" height=\"20\" src=\"images/blank.gif\"/>
\t\t\t\t\t\t\t<input type=\"password\" autocomplete=\"off\" name=\"MailSMTPPassword\" id=\"MailSMTPPassword\" value=\"";
        // line 323
        echo twig_safe_filter((isset($context['MailSMTPPassword']) ? $context['MailSMTPPassword'] : null));
        echo "\" class=\"Field250 smtpSettings\"> <img onmouseout=\"HideHelp('ss7ELh2UVn');\" onmouseover=\"ShowHelp('ss7ELh2UVn', '";
        echo getLang("SMTPPassword");
        echo "', '";
        echo getLang("SMTPPasswordHelp");
        echo "');\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" /><div style=\"display:none\" id=\"ss7ELh2UVn\"></div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr class=\"SMTPOptions\" style=\"display: ";
        // line 326
        echo twig_safe_filter((isset($context['HideMailSMTPSettings']) ? $context['HideMailSMTPSettings'] : null));
        echo "\">
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t<span class=\"Required\">&nbsp;</span>
\t\t\t\t\t\t\t";
        // line 329
        echo getLang("SMTPPort");
        echo ":
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<img width=\"20\" height=\"20\" src=\"images/blank.gif\"/>
\t\t\t\t\t\t\t<input type=\"text\" name=\"MailSMTPPort\" id=\"MailSMTPPort\" value=\"";
        // line 333
        echo twig_safe_filter((isset($context['MailSMTPPort']) ? $context['MailSMTPPort'] : null));
        echo "\" class=\"Field250 smtpSettings\"> <img onmouseout=\"HideHelp('ssKz8SUyDX');\" onmouseover=\"ShowHelp('ssKz8SUyDX', '";
        echo getLang("SMTPPort");
        echo "', '";
        echo getLang("SMTPPortHelp");
        echo "');\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" /><div style=\"display:none\" id=\"ssKz8SUyDX\"></div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr class=\"SMTPOptions\" style=\"display: ";
        // line 336
        echo twig_safe_filter((isset($context['HideMailSMTPSettings']) ? $context['HideMailSMTPSettings'] : null));
        echo "\">
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<img width=\"20\" height=\"20\" src=\"images/blank.gif\"/>
\t\t\t\t\t\t\t<input type=\"button\" name=\"cmdTestSMTP\" value=\"";
        // line 342
        echo getLang("TestSMTPSettings");
        echo "\" id=\"TestSMTPSettings\" class=\"SmallButton\" onclick=\"startSMTPTest();\" style=\"width: 150px;\" />
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td colspan=\"2\" class=\"EmptyRow\">
\t\t\t\t\t\t&nbsp;
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"Heading2\" colspan=\"2\">";
        // line 351
        echo getLang("SearchEngineOptimization");
        echo "</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t<span class=\"Required\">&nbsp;</span>  <label for=\"MetaDesc\">";
        // line 355
        echo getLang("SearchEngineFriendlyURLs");
        echo ":</label>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<select name=\"EnableSEOUrls\" id=\"EnableSEOUrls\" class=\"Field250\">
\t\t\t\t\t\t\t<option value=\"2\" ";
        // line 359
        echo twig_safe_filter((isset($context['IsEnableSEOUrlsAuto']) ? $context['IsEnableSEOUrlsAuto'] : null));
        echo ">";
        echo getLang("SearchEngineFriendlyURLsAuto");
        echo "</option>
\t\t\t\t\t\t\t<option value=\"1\" ";
        // line 360
        echo twig_safe_filter((isset($context['IsEnableSEOUrlsEnabled']) ? $context['IsEnableSEOUrlsEnabled'] : null));
        echo ">";
        echo getLang("SearchEngineFriendlyURLsEnabled");
        echo "</option>
\t\t\t\t\t\t\t<option value=\"0\" ";
        // line 361
        echo twig_safe_filter((isset($context['IsEnableSEOUrlsDisabled']) ? $context['IsEnableSEOUrlsDisabled'] : null));
        echo ">";
        echo getLang("SearchEngineFriendlyURLsDisabled");
        echo "</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t\t<img onmouseout=\"HideHelp('seo1');\" onmouseover=\"ShowHelp('seo1', '";
        // line 363
        echo getLang("SearchEngineFriendlyURLs");
        echo ":', '";
        echo getLang("SearchEngineFriendlyURLsHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t<div style=\"display:none\" id=\"seo1\"></div>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t<span class=\"Required\">&nbsp;</span>  <label for=\"redirectWWW\">";
        // line 369
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "RedirectWWW", array(), "any"), "1");
        echo ":</label>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<select name=\"RedirectWWW\" id=\"RedirectWWW\" class=\"Field250\">
\t\t\t\t\t\t\t<option value=\"1\" ";
        // line 373
        echo twig_safe_filter((isset($context['RedirectToWWWSelected']) ? $context['RedirectToWWWSelected'] : null));
        echo ">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "RedirectToWWW", array(), "any"), "1");
        echo "</option>
\t\t\t\t\t\t\t<option value=\"2\" ";
        // line 374
        echo twig_safe_filter((isset($context['RedirectToNoWWWSelected']) ? $context['RedirectToNoWWWSelected'] : null));
        echo ">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "RedirectToNoWWW", array(), "any"), "1");
        echo "</option>
\t\t\t\t\t\t\t<option value=\"0\" ";
        // line 375
        echo twig_safe_filter((isset($context['RedirectNoPreferenceSelected']) ? $context['RedirectNoPreferenceSelected'] : null));
        echo ">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "RedirectNoPreference", array(), "any"), "1");
        echo "</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t\t";
        // line 377
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['util']) ? $context['util'] : null), "tooltip", array("RedirectWWW", "RedirectWWWHelp", ), "method"), "1");
        echo "
\t\t\t\t\t</td>
\t\t\t\t</td>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t<span class=\"Required\">&nbsp;</span> ";
        // line 382
        echo getLang("HomePagePageTitle");
        echo ":
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<input type=\"text\" id=\"HomePagePageTitle\" name=\"HomePagePageTitle\" class=\"Field250\" value=\"";
        // line 385
        echo twig_safe_filter((isset($context['HomePagePageTitle']) ? $context['HomePagePageTitle'] : null));
        echo "\" />
\t\t\t\t\t\t<img onmouseout=\"HideHelp('pagetitle');\" onmouseover=\"ShowHelp('pagetitle', '";
        // line 386
        echo getLang("HomePagePageTitle");
        echo "', '";
        echo getLang("HomePagePageTitleHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\">
\t\t\t\t\t\t<div style=\"display:none\" id=\"pagetitle\"></div>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t<span class=\"Required\">&nbsp;</span>  <label for=\"MetaKeywords\">";
        // line 392
        echo getLang("MetaKeywords");
        echo ":</label>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<input type=\"text\" name=\"MetaKeywords\" id=\"MetaKeywords\" value=\"";
        // line 395
        echo twig_safe_filter((isset($context['MetaKeywords']) ? $context['MetaKeywords'] : null));
        echo "\" class=\"Field250\" />
\t\t\t\t\t\t<img onmouseout=\"HideHelp('d4');\" onmouseover=\"ShowHelp('d4', '";
        // line 396
        echo getLang("MetaKeywords");
        echo "', '";
        echo getLang("SettingsMetaKeywordsHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t<div style=\"display:none\" id=\"d4\"></div>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t<span class=\"Required\">&nbsp;</span>  <label for=\"MetaDesc\">";
        // line 402
        echo getLang("MetaDescription");
        echo ":</label>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<input type=\"text\" name=\"MetaDesc\" id=\"MetaDesc\" value=\"";
        // line 405
        echo twig_safe_filter((isset($context['MetaDesc']) ? $context['MetaDesc'] : null));
        echo "\" class=\"Field250\" />
\t\t\t\t\t\t<img onmouseout=\"HideHelp('d5');\" onmouseover=\"ShowHelp('d5', '";
        // line 406
        echo getLang("MetaDescription");
        echo "', '";
        echo getLang("SettingsMetaDescriptionHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t<div style=\"display:none\" id=\"d5\"></div>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td colspan=\"2\" class=\"EmptyRow\">
\t\t\t\t\t\t&nbsp;
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr style=\"";
        // line 415
        echo twig_safe_filter((isset($context['HideDatabaseDetails']) ? $context['HideDatabaseDetails'] : null));
        echo "\">
\t\t\t\t\t<td class=\"Heading2\" colspan=\"2\">";
        // line 416
        echo getLang("DatabaseSettings");
        echo "</td>
\t\t\t\t</tr>
\t\t\t\t<tr style=\"";
        // line 418
        echo twig_safe_filter((isset($context['HideDatabaseDetails']) ? $context['HideDatabaseDetails'] : null));
        echo "\">
\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t<span class=\"Required\">&nbsp;</span> ";
        // line 420
        echo getLang("DatabaseType");
        echo ":
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<input type=\"text\" value=\"";
        // line 423
        echo twig_safe_filter((isset($context['dbType']) ? $context['dbType'] : null));
        echo "\" class=\"Field250\" disabled readonly />
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr style=\"";
        // line 426
        echo twig_safe_filter((isset($context['HideDatabaseDetails']) ? $context['HideDatabaseDetails'] : null));
        echo "\">
\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t<span class=\"Required\">&nbsp;</span> ";
        // line 428
        echo getLang("DatabaseUser");
        echo ":
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<input type=\"text\" value=\"";
        // line 431
        echo twig_safe_filter((isset($context['dbUser']) ? $context['dbUser'] : null));
        echo "\" class=\"Field250\" disabled readonly />
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr style=\"";
        // line 434
        echo twig_safe_filter((isset($context['HideDatabaseDetails']) ? $context['HideDatabaseDetails'] : null));
        echo "\">
\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t<span class=\"Required\">&nbsp;</span> ";
        // line 436
        echo getLang("DatabasePassword");
        echo ":
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<input type=\"text\" value=\"\" class=\"Field250\" disabled readonly />
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr style=\"";
        // line 442
        echo twig_safe_filter((isset($context['HideDatabaseDetails']) ? $context['HideDatabaseDetails'] : null));
        echo "\">
\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t<span class=\"Required\">&nbsp;</span> ";
        // line 444
        echo getLang("DatabaseHostname");
        echo ":
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<input type=\"text\" value=\"";
        // line 447
        echo twig_safe_filter((isset($context['dbServer']) ? $context['dbServer'] : null));
        echo "\" class=\"Field250\" disabled readonly />
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr style=\"";
        // line 450
        echo twig_safe_filter((isset($context['HideDatabaseDetails']) ? $context['HideDatabaseDetails'] : null));
        echo "\">
\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t<span class=\"Required\">&nbsp;</span> ";
        // line 452
        echo getLang("DatabaseTablePrefix");
        echo ":
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<input type=\"text\" value=\"";
        // line 455
        echo twig_safe_filter((isset($context['tablePrefix']) ? $context['tablePrefix'] : null));
        echo "\" class=\"Field250\" disabled readonly />
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr style=\"";
        // line 458
        echo twig_safe_filter((isset($context['HideDatabaseDetails']) ? $context['HideDatabaseDetails'] : null));
        echo "\">
\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t<span class=\"Required\">&nbsp;</span> ";
        // line 460
        echo getLang("DatabaseVersion");
        echo ":
\t\t\t\t\t</td>
\t\t\t\t\t<td class=\"PanelBottom\">
\t\t\t\t\t\t";
        // line 463
        echo twig_safe_filter((isset($context['dbVersion']) ? $context['dbVersion'] : null));
        echo "
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t</table>
\t\t\t</div>
\t\t\t<div id=\"div1\" style=\"padding-top: 10px;\">
\t\t\t\t<table width=\"100%\" class=\"Panel\">
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"Heading2\" colspan=\"2\">";
        // line 471
        echo getLang("LanguageSettings");
        echo "</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t<span class=\"Required\">*</span> <label for=\"Lanauge\">";
        // line 475
        echo getLang("Language");
        echo ":</label>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<select name=\"Language\" id=\"Lanauge\" class=\"Field100\">
\t\t\t\t\t\t\t";
        // line 479
        echo twig_safe_filter((isset($context['LanguageOptions']) ? $context['LanguageOptions'] : null));
        echo "
\t\t\t\t\t\t</select>
\t\t\t\t\t\t<img onmouseout=\"HideHelp('lang_setting');\" onmouseover=\"ShowHelp('lang_setting', '";
        // line 481
        echo getLang("Language");
        echo "', '";
        echo getLang("LanguageHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t<div style=\"display:none\" id=\"lang_setting\"></div>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td colspan=\"2\" class=\"EmptyRow\">
\t\t\t\t\t\t&nbsp;
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"Heading2\" colspan=\"2\">";
        // line 491
        echo getLang("PhysicalDimensionSettings");
        echo "</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t<span class=\"Required\">*</span> <label for=\"WeightMeasurement\">";
        // line 495
        echo getLang("WeightMeasurement");
        echo ":</label>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<select name=\"WeightMeasurement\" id=\"WeightMeasurement\" class=\"Field100\">
\t\t\t\t\t\t\t<option value=\"LBS\" ";
        // line 499
        echo twig_safe_filter((isset($context['IsPounds']) ? $context['IsPounds'] : null));
        echo ">";
        echo getLang("Pounds");
        echo "</option>
\t\t\t\t\t\t\t<option value=\"Ounces\" ";
        // line 500
        echo twig_safe_filter((isset($context['IsOunces']) ? $context['IsOunces'] : null));
        echo ">";
        echo getLang("Ounces");
        echo "</option>
\t\t\t\t\t\t\t<option value=\"KGS\" ";
        // line 501
        echo twig_safe_filter((isset($context['IsKilos']) ? $context['IsKilos'] : null));
        echo ">";
        echo getLang("Kilograms");
        echo "</option>
\t\t\t\t\t\t\t<option value=\"Grams\" ";
        // line 502
        echo twig_safe_filter((isset($context['IsGrams']) ? $context['IsGrams'] : null));
        echo ">";
        echo getLang("Grams");
        echo "</option>
\t\t\t\t\t\t\t<option value=\"Tonnes\" ";
        // line 503
        echo twig_safe_filter((isset($context['IsTonnes']) ? $context['IsTonnes'] : null));
        echo ">";
        echo getLang("Tonnes");
        echo "</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t\t<img onmouseout=\"HideHelp('d17');\" onmouseover=\"ShowHelp('d17', '";
        // line 505
        echo getLang("WeightMeasurement");
        echo "', '";
        echo getLang("WeightMeasurementHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t<div style=\"display:none\" id=\"d17\"></div>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t<span class=\"Required\">*</span> <label for=\"LengthMeasurement\">";
        // line 511
        echo getLang("LengthMeasurement");
        echo ":</label>
\t\t\t\t\t</td>
\t\t\t\t\t<td class=\"PanelBottom\">
\t\t\t\t\t\t<select name=\"LengthMeasurement\" id=\"LengthMeasurement\" class=\"Field100\">
\t\t\t\t\t\t\t<option value=\"Inches\" ";
        // line 515
        echo twig_safe_filter((isset($context['IsInches']) ? $context['IsInches'] : null));
        echo ">";
        echo getLang("Inches");
        echo "</option>
\t\t\t\t\t\t\t<option value=\"Centimeters\" ";
        // line 516
        echo twig_safe_filter((isset($context['IsCentimeters']) ? $context['IsCentimeters'] : null));
        echo ">";
        echo getLang("Centimeters");
        echo "</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t\t<img onmouseout=\"HideHelp('d18');\" onmouseover=\"ShowHelp('d18', '";
        // line 518
        echo getLang("LengthMeasurement");
        echo "', '";
        echo getLang("LengthMeasurementHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t<div style=\"display:none\" id=\"d18\"></div>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t<span class=\"Required\">*</span> <label for=\"DimensionsDecimalToken\">";
        // line 524
        echo getLang("DimensionsDecimalToken");
        echo ":</label>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<input type=\"text\" name=\"DimensionsDecimalToken\" value=\"";
        // line 527
        echo twig_escape_filter($this->env, (isset($context['DimensionsDecimalToken']) ? $context['DimensionsDecimalToken'] : null), "1");
        echo "\" id=\"DimensionsDecimalToken\" class=\"Field40\" maxlenght=\"1\" />
\t\t\t\t\t\t<img onmouseout=\"HideHelp('decimaltoken');\" onmouseover=\"ShowHelp('decimaltoken', '";
        // line 528
        echo getLang("DimensionsDecimalToken");
        echo "', '";
        echo getLang("DimensionsDecimalTokenHelp");
        echo "');\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t<div style=\"display: none;\" id=\"decimaltoken\"></div>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t<span class=\"Required\">*</span> <label for=\"DimensionsThousandsToken\">";
        // line 534
        echo getLang("DimensionsThousandsToken");
        echo ":</label>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<input type=\"text\" name=\"DimensionsThousandsToken\" value=\"";
        // line 537
        echo twig_escape_filter($this->env, (isset($context['DimensionsThousandsToken']) ? $context['DimensionsThousandsToken'] : null), "1");
        echo "\" id=\"DimensionsThousandsToken\" class=\"Field40\" maxlenght=\"1\" />
\t\t\t\t\t\t<img onmouseout=\"HideHelp('thousandstoken');\" onmouseover=\"ShowHelp('thousandstoken', '";
        // line 538
        echo getLang("DimensionsThousandsToken");
        echo "', '";
        echo getLang("DimensionsThousandsTokenHelp");
        echo "');\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t<div style=\"display: none;\" id=\"thousandstoken\"></div>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t<span class=\"Required\">*</span> <label for=\"DimensionsDecimalPlaces\">";
        // line 544
        echo getLang("DimensionsDecimalPlaces");
        echo ":</label>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<input type=\"text\" name=\"DimensionsDecimalPlaces\" value=\"";
        // line 547
        echo twig_safe_filter((isset($context['DimensionsDecimalPlaces']) ? $context['DimensionsDecimalPlaces'] : null));
        echo "\" id=\"DimensionsDecimalPlaces\" class=\"Field40\" maxlenght=\"1\" />
\t\t\t\t\t\t<img onmouseout=\"HideHelp('decimalplaces');\" onmouseover=\"ShowHelp('decimalplaces', '";
        // line 548
        echo getLang("DimensionsDecimalPlaces");
        echo "', '";
        echo getLang("DimensionsDecimalPlacesHelp");
        echo "');\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t<div style=\"display: none;\" id=\"decimalplaces\"></div>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t<span class=\"Required\">*</span> <label for=\"ShippingFactoringDimension\">";
        // line 554
        echo getLang("ShippingFactoringDimension");
        echo ":</label>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<select name=\"ShippingFactoringDimension\" id=\"ShippingFactoringDimension\" class=\"Field120\">
\t\t\t\t\t\t\t<option value=\"depth\" ";
        // line 558
        echo twig_safe_filter((isset($context['ShippingFactoringDimensionDepthSelected']) ? $context['ShippingFactoringDimensionDepthSelected'] : null));
        echo ">";
        echo getLang("ShippingFactoringDimensionDepth");
        echo "</option>
\t\t\t\t\t\t\t<option value=\"height\" ";
        // line 559
        echo twig_safe_filter((isset($context['ShippingFactoringDimensionHeightSelected']) ? $context['ShippingFactoringDimensionHeightSelected'] : null));
        echo ">";
        echo getLang("ShippingFactoringDimensionHeight");
        echo "</option>
\t\t\t\t\t\t\t<option value=\"width\" ";
        // line 560
        echo twig_safe_filter((isset($context['ShippingFactoringDimensionWidthSelected']) ? $context['ShippingFactoringDimensionWidthSelected'] : null));
        echo ">";
        echo getLang("ShippingFactoringDimensionWidth");
        echo "</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t\t<img onmouseout=\"HideHelp('dshipfactdimension');\" onmouseover=\"ShowHelp('dshipfactdimension', '";
        // line 562
        echo getLang("ShippingFactoringDimension");
        echo "', '";
        echo getLang("ShippingFactoringDimensionHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\">
\t\t\t\t\t\t<div style=\"display:none\" id=\"dshipfactdimension\"></div>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td colspan=\"2\" class=\"EmptyRow\">
\t\t\t\t\t\t&nbsp;
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"Heading2\" colspan=\"2\">";
        // line 572
        echo getLang("DateSettings");
        echo "</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t<span class=\"Required\">*</span> <label for=\"StoreTimezone\">";
        // line 576
        echo getLang("StoreTimeZone");
        echo ":</label><a name=\"StoreTimezone\" />
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<select name=\"StoreTimeZone\" id=\"StoreTimeZone\" class=\"Field300\">
\t\t\t\t\t\t\t";
        // line 580
        echo twig_safe_filter((isset($context['TimeZoneOptions']) ? $context['TimeZoneOptions'] : null));
        echo "
\t\t\t\t\t\t</select>
\t\t\t\t\t\t<img onmouseout=\"HideHelp('tz_h');\" onmouseover=\"ShowHelp('tz_h', '";
        // line 582
        echo getLang("StoreTimeZone");
        echo "', '";
        echo getLang("StoreTimeZoneHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t<div style=\"display:none\" id=\"tz_h\"></div>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t&nbsp;&nbsp; ";
        // line 588
        echo getLang("EnableDSTCorrection");
        echo "?
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<label for=\"StoreDSTCorrection\"><input ";
        // line 591
        echo twig_safe_filter((isset($context['IsDSTCorrectionEnabled']) ? $context['IsDSTCorrectionEnabled'] : null));
        echo " type=\"checkbox\" name=\"StoreDSTCorrection\" id=\"StoreDSTCorrection\" value=\"1\" />";
        echo getLang("YesEnableDSTCorrection");
        echo "</label>
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('dst');\" onmouseover=\"ShowHelp('dst', '";
        // line 592
        echo getLang("EnableDSTCorrection");
        echo "?', '";
        echo getLang("EnableDSTCorrectionHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t\t<div style=\"display:none\" id=\"dst\"></div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t<span class=\"Required\">*</span> <label for=\"DisplayDateFormat\">";
        // line 598
        echo getLang("DisplayDateFormat");
        echo ":</label>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<input type=\"text\" name=\"DisplayDateFormat\" id=\"DisplayDateFormat\" value=\"";
        // line 601
        echo twig_safe_filter((isset($context['DisplayDateFormat']) ? $context['DisplayDateFormat'] : null));
        echo "\" class=\"Field100\" />
\t\t\t\t\t\t<img onmouseout=\"HideHelp('d19');\" onmouseover=\"ShowHelp('d19', '";
        // line 602
        echo getLang("DisplayDateFormat");
        echo "', '";
        echo getLang("DisplayDateFormatHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t<div style=\"display:none\" id=\"d19\"></div>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t<span class=\"Required\">*</span> <label for=\"ExportDateFormat\">";
        // line 608
        echo getLang("ExportDateFormat");
        echo ":</label>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<input type=\"text\" name=\"ExportDateFormat\" id=\"ExportDateFormat\" value=\"";
        // line 611
        echo twig_safe_filter((isset($context['ExportDateFormat']) ? $context['ExportDateFormat'] : null));
        echo "\" class=\"Field100\" />
\t\t\t\t\t\t<img onmouseout=\"HideHelp('d20');\" onmouseover=\"ShowHelp('d20', '";
        // line 612
        echo getLang("ExportDateFormat");
        echo "', '";
        echo getLang("ExportDateFormatHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t<div style=\"display:none\" id=\"d20\"></div>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t<span class=\"Required\">*</span> <label for=\"ExtendedDisplayDateFormat\">";
        // line 618
        echo getLang("ExtendedDisplayDateFormat");
        echo ":</label>
\t\t\t\t\t</td>
\t\t\t\t\t<td class=\"PanelBottom\">
\t\t\t\t\t\t<input type=\"text\" name=\"ExtendedDisplayDateFormat\" id=\"ExtendedDisplayDateFormat\" value=\"";
        // line 621
        echo twig_safe_filter((isset($context['ExtendedDisplayDateFormat']) ? $context['ExtendedDisplayDateFormat'] : null));
        echo "\" class=\"Field100\" />
\t\t\t\t\t\t<img onmouseout=\"HideHelp('d21');\" onmouseover=\"ShowHelp('d21', '";
        // line 622
        echo getLang("ExtendedDisplayDateFormat");
        echo "', '";
        echo getLang("ExtendedDisplayDateFormatHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t<div style=\"display:none\" id=\"d21\"></div>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t</table>
\t\t\t</div>

\t\t\t<div id=\"div8\" style=\"padding-top: 10px;\">
\t\t\t<input type=\"hidden\" name=\"AutoResizeImages\" id=\"AutoResizeImages\" value=\"no\" />
\t\t\t\t<table width=\"100%\" class=\"Panel\">
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"Heading2\" colspan=\"2\">";
        // line 633
        echo getLang("ProductThumbnailSizes");
        echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t<span class=\"Required\">*</span> ";
        // line 637
        echo getLang("StorewideThumbnail");
        echo ":
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<input type=\"text\" name=\"ProductImagesStorewideThumbnail_width\" id=\"ProductImagesStorewideThumbnail_width\" value=\"";
        // line 640
        echo twig_safe_filter((isset($context['ProductImagesStorewideThumbnail_width']) ? $context['ProductImagesStorewideThumbnail_width'] : null));
        echo "\" class=\"Field40 SetOriginalImageSizeValue\" />&nbsp;x&nbsp;&nbsp;<input type=\"text\" name=\"ProductImagesStorewideThumbnail_height\" id=\"ProductImagesStorewideThumbnail_height\" value=\"";
        echo twig_safe_filter((isset($context['ProductImagesStorewideThumbnail_height']) ? $context['ProductImagesStorewideThumbnail_height'] : null));
        echo "\" class=\"Field40 SetOriginalImageSizeValue\" />
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('productimage_storewidethumbnail');\" onmouseover=\"ShowHelp('productimage_storewidethumbnail', '";
        // line 641
        echo getLang("StorewideThumbnail");
        echo "', '";
        echo getLang("StorewideThumbnailHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t\t<div style=\"display:none\" id=\"productimage_storewidethumbnail\"></div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>

\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t<span class=\"Required\">*</span> ";
        // line 648
        echo getLang("ProductPageImage");
        echo ":
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<input type=\"text\" name=\"ProductImagesProductPageImage_width\" id=\"ProductImagesProductPageImage_width\" value=\"";
        // line 651
        echo twig_safe_filter((isset($context['ProductImagesProductPageImage_width']) ? $context['ProductImagesProductPageImage_width'] : null));
        echo "\" class=\"Field40 SetOriginalImageSizeValue\" />&nbsp;x&nbsp;&nbsp;<input type=\"text\" name=\"ProductImagesProductPageImage_height\" id=\"ProductImagesProductPageImage_height\" value=\"";
        echo twig_safe_filter((isset($context['ProductImagesProductPageImage_height']) ? $context['ProductImagesProductPageImage_height'] : null));
        echo "\" class=\"Field40 SetOriginalImageSizeValue\" />
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('productimage_productpageimage');\" onmouseover=\"ShowHelp('productimage_productpageimage', '";
        // line 652
        echo getLang("ProductPageImage");
        echo "', '";
        echo getLang("ProductPageImageHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t\t<div style=\"display:none\" id=\"productimage_productpageimage\"></div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>

\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t<span class=\"Required\">*</span> ";
        // line 659
        echo getLang("ProductPageGalleryThumbnail");
        echo ":
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<input type=\"text\" name=\"ProductImagesGalleryThumbnail_width\" id=\"ProductImagesGalleryThumbnail_width\" value=\"";
        // line 662
        echo twig_safe_filter((isset($context['ProductImagesGalleryThumbnail_width']) ? $context['ProductImagesGalleryThumbnail_width'] : null));
        echo "\" class=\"Field40 SetOriginalImageSizeValue\" />&nbsp;x&nbsp;&nbsp;<input type=\"text\" name=\"ProductImagesGalleryThumbnail_height\" id=\"ProductImagesGalleryThumbnail_height\" value=\"";
        echo twig_safe_filter((isset($context['ProductImagesGalleryThumbnail_height']) ? $context['ProductImagesGalleryThumbnail_height'] : null));
        echo "\" class=\"Field40 SetOriginalImageSizeValue\" />
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('productimage_productpagegallerythumbnail');\" onmouseover=\"ShowHelp('productimage_productpagegallerythumbnail', '";
        // line 663
        echo getLang("ProductPageGalleryThumbnail");
        echo "', '";
        echo getLang("ProductPageGalleryThumbnailHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t\t<div style=\"display:none\" id=\"productimage_productpagegallerythumbnail\"></div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>

\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t<span class=\"Required\">*</span> ";
        // line 670
        echo getLang("ProductPageZoomImage");
        echo ":
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<input type=\"text\" name=\"ProductImagesZoomImage_width\" id=\"ProductImagesZoomImage_width\" value=\"";
        // line 673
        echo twig_safe_filter((isset($context['ProductImagesZoomImage_width']) ? $context['ProductImagesZoomImage_width'] : null));
        echo "\" class=\"Field40 SetOriginalImageSizeValue\" />&nbsp;x&nbsp;&nbsp;<input type=\"text\" name=\"ProductImagesZoomImage_height\" id=\"ProductImagesZoomImage_height\" value=\"";
        echo twig_safe_filter((isset($context['ProductImagesZoomImage_height']) ? $context['ProductImagesZoomImage_height'] : null));
        echo "\" class=\"Field40 SetOriginalImageSizeValue\" />
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('productimage_zoomimage');\" onmouseover=\"ShowHelp('productimage_zoomimage', '";
        // line 674
        echo getLang("ProductPageZoomImage");
        echo "', '";
        echo getLang("ProductPageZoomImageHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t\t<div style=\"display:none\" id=\"productimage_zoomimage\"></div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t&nbsp;&nbsp; ";
        // line 680
        echo getLang("ReprocessImages");
        echo "\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"#\" id=\"ReprocessImages\">";
        // line 683
        echo getLang("ReprocessImagesLink");
        echo "</a>
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('productimage_reprocessimages');\" onmouseover=\"ShowHelp('productimage_reprocessimages', '";
        // line 684
        echo getLang("ReprocessImages");
        echo "', '";
        echo getLang("ReprocessImagesHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t\t<div style=\"display:none\" id=\"productimage_reprocessimages\"></div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>

\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t&nbsp;&nbsp; ";
        // line 691
        echo getLang("ShowTinyThumbnails");
        echo "\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t<input type=\"checkbox\" name=\"ProductImagesTinyThumbnailsEnabled\" id=\"ProductImagesTinyThumbnailsEnabled\" value=\"ON\" ";
        // line 694
        echo twig_safe_filter((isset($context['IsProductImagesTinyThumbnailsEnabled']) ? $context['IsProductImagesTinyThumbnailsEnabled'] : null));
        echo " /> <label for=\"ProductImagesTinyThumbnailsEnabled\">";
        echo getLang("YesShowTinyThumbnails");
        echo "</label>
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('productimage_tinythumbnailsenabled');\" onmouseover=\"ShowHelp('productimage_tinythumbnailsenabled', '";
        // line 695
        echo getLang("ShowTinyThumbnails");
        echo "', '";
        echo getLang("ShowTinyThumbnailsHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t\t<div style=\"display:none\" id=\"productimage_tinythumbnailsenabled\"></div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>

\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t&nbsp;&nbsp; ";
        // line 702
        echo getLang("EnableImageZoom");
        echo "\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t<input type=\"checkbox\" name=\"ProductImagesImageZoomEnabled\" id=\"ProductImagesImageZoomEnabled\" value=\"ON\" ";
        // line 705
        echo twig_safe_filter((isset($context['IsProductImagesImageZoomEnabled']) ? $context['IsProductImagesImageZoomEnabled'] : null));
        echo " /> <label for=\"ProductImagesImageZoomEnabled\">";
        echo getLang("YesEnableImageZoom");
        echo "</label>
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('productimage_enableimagezoom');\" onmouseover=\"ShowHelp('productimage_enableimagezoom', '";
        // line 706
        echo getLang("EnableImageZoom");
        echo "', '";
        echo getLang("EnableImageZoomHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t\t<div style=\"display:none\" id=\"productimage_enableimagezoom\"></div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>

<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t&nbsp;&nbsp; <label for=\"ProductImageMode\">";
        // line 713
        echo getLang("ProductImageMode");
        echo ":</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"PanelBottom\">
\t\t\t\t\t\t\t<select name=\"ProductImageMode\" id=\"ProductImageMode\" class=\"Field300\">
\t\t\t\t\t\t\t\t<option value=\"popup\" ";
        // line 717
        echo twig_safe_filter((isset($context['ProductImageModePopup']) ? $context['ProductImageModePopup'] : null));
        echo ">";
        echo getLang("ProductImageModePopup");
        echo "</option>
\t\t\t\t\t\t\t\t<option value=\"lightbox\" ";
        // line 718
        echo twig_safe_filter((isset($context['ProductImageModeLightbox']) ? $context['ProductImageModeLightbox'] : null));
        echo ">";
        echo getLang("ProductImageModeLightbox");
        echo "</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('imagemodehelp');\" onmouseover=\"ShowHelp('imagemodehelp', '";
        // line 720
        echo getLang("ProductImageMode");
        echo "', '";
        echo getLang("ProductImageModeHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t\t<div style=\"display:none\" id=\"imagemodehelp\"></div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>

\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t<span class=\"Required\">*</span> Default Product Image:
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"PanelBottom\">
\t\t\t\t\t\t\t<label><input type=\"radio\" class=\"DefaultProductImage\" name=\"DefaultProductImage\" value=\"none\" ";
        // line 730
        echo twig_safe_filter((isset($context['DefaultProductImageNoneChecked']) ? $context['DefaultProductImageNoneChecked'] : null));
        echo " /> ";
        echo getLang("DefaultProductImageNone");
        echo "</label>
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('DefaultProductImageHelp');\" onmouseover=\"ShowHelp('DefaultProductImageHelp', '";
        // line 731
        echo getLang("DefaultProductImage");
        echo "', '";
        echo getLang("DefaultProductImageHelp");
        echo "')\" src=\"images/help.gif\" />
\t\t\t\t\t\t\t<div style=\"display:none\" id=\"DefaultProductImageHelp\"></div>
\t\t\t\t\t\t\t<label style=\"display: block;\"><input type=\"radio\" class=\"DefaultProductImage\" name=\"DefaultProductImage\" value=\"template\" ";
        // line 733
        echo twig_safe_filter((isset($context['DefaultProductImageTemplateChecked']) ? $context['DefaultProductImageTemplateChecked'] : null));
        echo " />  ";
        echo getLang("DefaultProductImageTemplate");
        echo " (<a href=\"";
        echo twig_safe_filter((isset($context['AppPath']) ? $context['AppPath'] : null));
        echo "/templates/";
        echo twig_safe_filter((isset($context['template']) ? $context['template'] : null));
        echo "/images/ProductDefault.gif\" target=\"_blank\">templates/";
        echo twig_safe_filter((isset($context['template']) ? $context['template'] : null));
        echo "/images/ProductDefault.gif</a>)</label>
\t\t\t\t\t\t\t<label style=\"display: block;\"><input type=\"radio\" class=\"DefaultProductImage\" name=\"DefaultProductImage\" value=\"custom\" ";
        // line 734
        echo twig_safe_filter((isset($context['DefaultProductImageCustomChecked']) ? $context['DefaultProductImageCustomChecked'] : null));
        echo " /> ";
        echo getLang("DefaultProductImageCustom");
        echo "</label>
\t\t\t\t\t\t\t<div id=\"DefaultProductImageCustomContainer\" style=\"margin-top: 5px;\">
\t\t\t\t\t\t\t\t<img src=\"images/nodejoin.gif\" alt=\"\" style=\"vertical-align: top;\" /> <input type=\"file\" name=\"DefaultProductImageCustom\" id=\"DefaultProductImageCustom\" />
\t\t\t\t\t\t\t\t<span style=\"";
        // line 737
        echo twig_safe_filter((isset($context['HideCurrentDefaultProductImage']) ? $context['HideCurrentDefaultProductImage'] : null));
        echo "\" id=\"DefaultProductImageCustomCurrent\">&nbsp;&nbsp;&nbsp; ";
        echo getLang("CurrentDefaultImage");
        echo ": <a href=\"";
        echo twig_safe_filter((isset($context['AppPath']) ? $context['AppPath'] : null));
        echo "/";
        echo twig_safe_filter((isset($context['DefaultProductImage']) ? $context['DefaultProductImage'] : null));
        echo "\" target=\"_blank\">";
        echo twig_safe_filter((isset($context['DefaultProductImage']) ? $context['DefaultProductImage'] : null));
        echo "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>

\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"Heading2\" colspan=\"2\">";
        // line 743
        echo getLang("CategoryAndBrandImages");
        echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t<span class=\"Required\">*</span> <label for=\"CategoryPerRow\">";
        // line 747
        echo getLang("CatItemPerRow");
        echo ":</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<input type=\"text\" name=\"CategoryPerRow\" id=\"CategoryPerRow\" value=\"";
        // line 750
        echo twig_safe_filter((isset($context['CategoryPerRow']) ? $context['CategoryPerRow'] : null));
        echo "\" class=\"Field40\" />
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('d_catper');\" onmouseover=\"ShowHelp('d_catper', '";
        // line 751
        echo getLang("CatItemPerRow");
        echo "', '";
        echo getLang("CatItemPerRowHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t\t<div style=\"display:none\" id=\"d_catper\"></div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t<span class=\"Required\">*</span> <label for=\"BrandPerRow\">";
        // line 757
        echo getLang("BrandItemPerRow");
        echo ":</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<input type=\"text\" name=\"BrandPerRow\" id=\"BrandPerRow\" value=\"";
        // line 760
        echo twig_safe_filter((isset($context['BrandPerRow']) ? $context['BrandPerRow'] : null));
        echo "\" class=\"Field40\" />
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('d_brandper');\" onmouseover=\"ShowHelp('d_brandper', '";
        // line 761
        echo getLang("BrandItemPerRow");
        echo "', '";
        echo getLang("BrandItemPerRowHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t\t<div style=\"display:none\" id=\"d_brandper\"></div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t<span class=\"Required\">*</span> <label for=\"CategoryImageWidth\">";
        // line 767
        echo getLang("CatImageDimSetting");
        echo ":</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<input type=\"text\" name=\"CategoryImageWidth\" id=\"CategoryImageWidth\" value=\"";
        // line 770
        echo twig_safe_filter((isset($context['CategoryImageWidth']) ? $context['CategoryImageWidth'] : null));
        echo "\" class=\"Field40\" /> x <input type=\"text\" name=\"CategoryImageHeight\" id=\"CategoryImageHeight\" value=\"";
        echo twig_safe_filter((isset($context['CategoryImageHeight']) ? $context['CategoryImageHeight'] : null));
        echo "\" class=\"Field40\" />
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('d_catdim');\" onmouseover=\"ShowHelp('d_catdim', '";
        // line 771
        echo getLang("CatImageDimSetting");
        echo "', '";
        echo getLang("CatImageDimSettingHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t\t<div style=\"display:none\" id=\"d_catdim\"></div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t<span class=\"Required\">*</span> <label for=\"BrandImageWidth\">";
        // line 777
        echo getLang("BrandImageDimSetting");
        echo ":</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<input type=\"text\" name=\"BrandImageWidth\" id=\"BrandImageWidth\" value=\"";
        // line 780
        echo twig_safe_filter((isset($context['BrandImageWidth']) ? $context['BrandImageWidth'] : null));
        echo "\" class=\"Field40\" /> x <input type=\"text\" name=\"BrandImageHeight\" id=\"BrandImageHeight\" value=\"";
        echo twig_safe_filter((isset($context['BrandImageHeight']) ? $context['BrandImageHeight'] : null));
        echo "\" class=\"Field40\" />
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('d_branddim');\" onmouseover=\"ShowHelp('d_branddim', '";
        // line 781
        echo getLang("BrandImageDimSetting");
        echo "', '";
        echo getLang("BrandImageDimSettingHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t\t<div style=\"display:none\" id=\"d_branddim\"></div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t&nbsp;&nbsp; <label for=\"CategoryDefaultImage\">";
        // line 787
        echo getLang("CatImageDefaultSetting");
        echo ":</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<input type=\"file\" id=\"CategoryDefaultImage\" name=\"CategoryDefaultImage\" class=\"Field\" />
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('d_catdimg');\" onmouseover=\"ShowHelp('d_catdimg', '";
        // line 791
        echo getLang("CatImageDefaultSetting");
        echo "', '";
        echo getLang("CatImageDefaultSettingHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t\t<div style=\"display:none\" id=\"d_catdimg\"></div>";
        // line 792
        echo twig_safe_filter((isset($context['CatImageDefaultSettingMessage']) ? $context['CatImageDefaultSettingMessage'] : null));
        echo "
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t&nbsp;&nbsp; <label for=\"BrandDefaultImage\">";
        // line 797
        echo getLang("BrandImageDefaultSetting");
        echo ":</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<input type=\"file\" id=\"BrandDefaultImage\" name=\"BrandDefaultImage\" class=\"Field\" />
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('d_brandimg');\" onmouseover=\"ShowHelp('d_brandimg', '";
        // line 801
        echo getLang("BrandImageDefaultSetting");
        echo "', '";
        echo getLang("BrandImageDefaultSettingHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t\t<div style=\"display:none\" id=\"d_brandimg\"></div>";
        // line 802
        echo twig_safe_filter((isset($context['BrandImageDefaultSettingMessage']) ? $context['BrandImageDefaultSettingMessage'] : null));
        echo "
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>

\t\t\t\t</table>
\t\t\t</div>

\t\t\t<div id=\"div2\" style=\"padding-top: 10px;\">
\t\t\t\t<table width=\"100%\" class=\"Panel\">
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"Heading2\" colspan=\"2\">";
        // line 812
        echo getLang("DisplaySettings");
        echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t<span class=\"Required\">*</span> <label for=\"HomeFeaturedProducts\">";
        // line 816
        echo getLang("HomeFeaturedProducts");
        echo ":</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<input type=\"text\" name=\"HomeFeaturedProducts\" id=\"HomeFeaturedProducts\" value=\"";
        // line 819
        echo twig_safe_filter((isset($context['HomeFeaturedProducts']) ? $context['HomeFeaturedProducts'] : null));
        echo "\" class=\"Field40\" />
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('d23');\" onmouseover=\"ShowHelp('d23', '";
        // line 820
        echo getLang("HomeFeaturedProducts");
        echo "', '";
        echo getLang("HomeFeaturedProductsHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t\t<div style=\"display:none\" id=\"d23\"></div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t<span class=\"Required\">*</span> <label for=\"HomeNewProducts\">";
        // line 826
        echo getLang("HomeNewProducts");
        echo ":</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<input type=\"text\" name=\"HomeNewProducts\" id=\"HomeNewProducts\" value=\"";
        // line 829
        echo twig_safe_filter((isset($context['HomeNewProducts']) ? $context['HomeNewProducts'] : null));
        echo "\" class=\"Field40\" />
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('d25');\" onmouseover=\"ShowHelp('d25', '";
        // line 830
        echo getLang("HomeNewProducts");
        echo "', '";
        echo getLang("HomeNewProductsHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t\t<div style=\"display:none\" id=\"d25\"></div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t<span class=\"Required\">*</span> <label for=\"HomeBlogPosts\">";
        // line 836
        echo getLang("HomeBlogPosts");
        echo ":</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<input type=\"text\" name=\"HomeBlogPosts\" id=\"HomeBlogPosts\" value=\"";
        // line 839
        echo twig_safe_filter((isset($context['HomeBlogPosts']) ? $context['HomeBlogPosts'] : null));
        echo "\" class=\"Field40\" />
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('d27');\" onmouseover=\"ShowHelp('d27', '";
        // line 840
        echo getLang("HomeBlogPosts");
        echo "', '";
        echo getLang("HomeBlogPostsHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t\t<div style=\"display:none\" id=\"d27\"></div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t<span class=\"Required\">*</span> <label for=\"CategoryProductsPerPage\">";
        // line 846
        echo getLang("CategoryProductsPerPage");
        echo ":</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<input type=\"text\" name=\"CategoryProductsPerPage\" id=\"CategoryProductsPerPage\" value=\"";
        // line 849
        echo twig_safe_filter((isset($context['CategoryProductsPerPage']) ? $context['CategoryProductsPerPage'] : null));
        echo "\" class=\"Field40\" />
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('d28');\" onmouseover=\"ShowHelp('d28', '";
        // line 850
        echo getLang("CategoryProductsPerPage");
        echo "', '";
        echo getLang("CategoryProductsPerPageHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t\t<div style=\"display:none\" id=\"d28\"></div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr style=\"";
        // line 854
        echo twig_escape_filter($this->env, (isset($context['HideIfReviewsDisabled']) ? $context['HideIfReviewsDisabled'] : null), "1");
        echo "\">
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t<span class=\"Required\">*</span> <label for=\"ProductReviewsPerPage\">";
        // line 856
        echo getLang("ProductReviewsPerPage");
        echo ":</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<input type=\"text\" name=\"ProductReviewsPerPage\" id=\"ProductReviewsPerPage\" value=\"";
        // line 859
        echo twig_safe_filter((isset($context['ProductReviewsPerPage']) ? $context['ProductReviewsPerPage'] : null));
        echo "\" class=\"Field40\" />
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('d30');\" onmouseover=\"ShowHelp('d30', '";
        // line 860
        echo getLang("ProductReviewsPerPage");
        echo "', '";
        echo getLang("ProductReviewsPerPageHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t\t<div style=\"display:none\" id=\"d30\"></div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t&nbsp;&nbsp; <label for=\"TagCartQuantityBoxes\">";
        // line 866
        echo getLang("CartQuantityBoxes");
        echo ":</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<select name=\"TagCartQuantityBoxes\" id=\"TagCartQuantityBoxes\" class=\"Field200\">
\t\t\t\t\t\t\t\t<option value=\"dropdown\"  ";
        // line 870
        echo twig_safe_filter((isset($context['IsDropdown']) ? $context['IsDropdown'] : null));
        echo ">";
        echo getLang("DropdownList");
        echo "</option>
\t\t\t\t\t\t\t\t<option value=\"textbox\"  ";
        // line 871
        echo twig_safe_filter((isset($context['IsTextbox']) ? $context['IsTextbox'] : null));
        echo ">";
        echo getLang("TextBox");
        echo "</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('d32');\" onmouseover=\"ShowHelp('d32', '";
        // line 873
        echo getLang("CartQuantityBoxes");
        echo "', '";
        echo getLang("CartQuantityBoxesHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t\t<div style=\"display:none\" id=\"d32\"></div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t&nbsp;&nbsp; <label for=\"FastCartAction\">";
        // line 879
        echo getLang("FastCartLabel");
        echo ":</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<select name=\"FastCartAction\" id=\"FastCartAction\" class=\"Field200\">
\t\t\t\t\t\t\t\t<option value=\"popup\" ";
        // line 883
        echo twig_safe_filter((isset($context['IsShowPopWindow']) ? $context['IsShowPopWindow'] : null));
        echo ">";
        echo getLang("FastCartOption1ShowPopWindow");
        echo "</option>
\t\t\t\t\t\t\t\t<option value=\"cart\" ";
        // line 884
        echo twig_safe_filter((isset($context['IsShowCartPage']) ? $context['IsShowCartPage'] : null));
        echo ">";
        echo getLang("FastCartOption2ShowCartPage");
        echo "</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('FastCartHelp');\" onmouseover=\"ShowHelp('FastCartHelp', '";
        // line 886
        echo Interspire_Template_Extension::jsFilter(getLang("FastCartLabel"), "'");
        echo "', '";
        echo Interspire_Template_Extension::jsFilter(getLang("FastCartHelp"), "'");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t\t<div style=\"display:none\" id=\"FastCartHelp\"></div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t&nbsp;&nbsp; <label for=\"ProductBreadcrumbs\">";
        // line 892
        echo getLang("ProductBreadcrumbs");
        echo ":</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t";
        // line 895
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['form']) ? $context['form'] : null), "select", array("ProductBreadcrumbs", (isset($context['ProductBreadcrumbOptions']) ? $context['ProductBreadcrumbOptions'] : null), (isset($context['ProductBreadcrumbs']) ? $context['ProductBreadcrumbs'] : null), array(), ), "method"), "1");
        echo "
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('ProductBreadcrumbsHelp');\" onmouseover=\"ShowHelp('ProductBreadcrumbsHelp', '";
        // line 896
        echo getLang("ProductBreadcrumbs");
        echo "', '";
        echo getLang("ProductBreadcrumbsHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t\t<div style=\"display:none\" id=\"ProductBreadcrumbsHelp\"></div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t&nbsp;&nbsp; <label for=\"ShowAddToCartQtyBox\">";
        // line 902
        echo getLang("ShowAddToCartQtyBox");
        echo ":</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"ShowAddToCartQtyBox\" id=\"ShowAddToCartQtyBox\" value=\"ON\" ";
        // line 905
        echo twig_safe_filter((isset($context['IsShownAddToCartQtyBox']) ? $context['IsShownAddToCartQtyBox'] : null));
        echo " /> <label for=\"ShowAddToCartQtyBox\">";
        echo getLang("YesShowAddToCartQtyBox");
        echo "</label>
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('d31');\" onmouseover=\"ShowHelp('d31', '";
        // line 906
        echo getLang("ShowAddToCartQtyBox");
        echo "', '";
        echo getLang("ShowAddToCartQtyBoxHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t\t<div style=\"display:none\" id=\"d31\"></div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>

\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t&nbsp;&nbsp; <label for=\"TagCloudsEnabled\">";
        // line 913
        echo getLang("TagCloudsEnabled");
        echo "</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"TagCloudsEnabled\" id=\"TagCloudsEnabled\" value=\"ON\" ";
        // line 916
        echo twig_safe_filter((isset($context['IsTagCloudsEnabled']) ? $context['IsTagCloudsEnabled'] : null));
        echo " /> <label for=\"TagCloudsEnabled\">";
        echo getLang("YesTagCloudsEnabled");
        echo "</label>
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('d31');\" onmouseover=\"ShowHelp('d31', '";
        // line 917
        echo getLang("TagCloudsEnabled");
        echo "', '";
        echo getLang("TagCloudsEnabledHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t\t<div style=\"display:none\" id=\"d31\"></div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t&nbsp;&nbsp; <label for=\"CaptchaEnabled\">";
        // line 923
        echo getLang("CaptchaEnabled");
        echo "</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"CaptchaEnabled\" id=\"CaptchaEnabled\" value=\"ON\" ";
        // line 926
        echo twig_safe_filter((isset($context['IsCaptchaEnabled']) ? $context['IsCaptchaEnabled'] : null));
        echo " /> <label for=\"CaptchaEnabled\">";
        echo getLang("YesCaptchaEnabled");
        echo "</label>
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('d32');\" onmouseover=\"ShowHelp('d32', '";
        // line 927
        echo getLang("CaptchaEnabled");
        echo "', '";
        echo getLang("CaptchaEnabledHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t\t<div style=\"display:none\" id=\"d32\"></div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t&nbsp;&nbsp; <label for=\"SearchSuggest\">";
        // line 933
        echo getLang("EnableSearchSuggest");
        echo "</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"PanelBottom\">
\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"SearchSuggest\" id=\"SearchSuggest\" value=\"ON\" ";
        // line 936
        echo twig_safe_filter((isset($context['IsSearchSuggest']) ? $context['IsSearchSuggest'] : null));
        echo " /> <label for=\"SearchSuggest\">";
        echo getLang("YesSearchSuggest");
        echo "</label>
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('d35');\" onmouseover=\"ShowHelp('d35', '";
        // line 937
        echo getLang("SearchSuggest");
        echo "', '";
        echo getLang("SearchSuggestHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t\t<div style=\"display:none\" id=\"d35\"></div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t&nbsp;&nbsp; <label for=\"ShowThumbsInCart\">";
        // line 943
        echo getLang("ShowThumbsInCart");
        echo "</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"PanelBottom\">
\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"ShowThumbsInCart\" id=\"ShowThumbsInCart\" value=\"ON\" ";
        // line 946
        echo twig_safe_filter((isset($context['IsShowThumbsInCart']) ? $context['IsShowThumbsInCart'] : null));
        echo " /> <label for=\"ShowThumbsInCart\">";
        echo getLang("YesShowThumbsInCart");
        echo "</label>
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('d33');\" onmouseover=\"ShowHelp('d33', '";
        // line 947
        echo getLang("ShowThumbsInCart");
        echo "', '";
        echo getLang("ShowThumbsInCartHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t\t<div style=\"display:none\" id=\"d33\"></div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t&nbsp;&nbsp; <label for=\"ShowCartSuggestions\">";
        // line 953
        echo getLang("ShowCartSuggestions");
        echo "</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"ShowCartSuggestions\" id=\"ShowCartSuggestions\" value=\"ON\" ";
        // line 956
        echo twig_safe_filter((isset($context['IsShowCartSuggestions']) ? $context['IsShowCartSuggestions'] : null));
        echo " /> <label for=\"ShowCartSuggestions\">";
        echo getLang("YesShowCartSuggestions");
        echo "</label>
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('d34');\" onmouseover=\"ShowHelp('d34', '";
        // line 957
        echo getLang("ShowCartSuggestions");
        echo "', '";
        echo getLang("ShowCartSuggestionsHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t\t<div style=\"display:none\" id=\"d34\"></div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr style=\"";
        // line 961
        echo twig_escape_filter($this->env, (isset($context['HideIfReviewsDisabled']) ? $context['HideIfReviewsDisabled'] : null), "1");
        echo "\">
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t&nbsp;&nbsp; <label for=\"AutoApproveReviews\">";
        // line 963
        echo getLang("AutoApproveReviews");
        echo "</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"AutoApproveReviews\" id=\"AutoApproveReviews\" value=\"ON\" ";
        // line 966
        echo twig_safe_filter((isset($context['IsAutoApproveReviews']) ? $context['IsAutoApproveReviews'] : null));
        echo " /> <label for=\"AutoApproveReviews\">";
        echo getLang("YesAutoApproveReviews");
        echo "</label>
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('AutoApproveRevHelp');\" onmouseover=\"ShowHelp('AutoApproveRevHelp', '";
        // line 967
        echo getLang("AutoApproveReviews");
        echo "', '";
        echo getLang("AutoApproveReviewsHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t\t<div style=\"display:none\" id=\"AutoApproveRevHelp\"></div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t&nbsp;&nbsp; <label for=\"EnableCustomersAlsoViewed\">";
        // line 973
        echo getLang("EnableCustomersAlsoViewed");
        echo "?</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"EnableCustomersAlsoViewed\" id=\"EnableCustomersAlsoViewed\" value=\"ON\" ";
        // line 976
        echo twig_safe_filter((isset($context['IsCustomersAlsoViewedEnabled']) ? $context['IsCustomersAlsoViewedEnabled'] : null));
        echo " onclick=\"if(this.checked) { \$('.HideIfCustomersAlsoViewedDisabled').show(); } else { \$('.HideIfCustomersAlsoViewedDisabled').hide(); }\" /> <label for=\"EnableCustomersAlsoViewed\">";
        echo getLang("YesEnableCustomersAlsoViewed");
        echo "</label>
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('EnableCustomersAlsoViewedHelp');\" onmouseover=\"ShowHelp('EnableCustomersAlsoViewedHelp', '";
        // line 977
        echo Interspire_Template_Extension::jsFilter(getLang("EnableCustomersAlsoViewed"), "'");
        echo "', '";
        echo Interspire_Template_Extension::jsFilter(getLang("EnableCustomersAlsoViewedHelp"), "'");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t\t<div style=\"display:none\" id=\"EnableCustomersAlsoViewedHelp\"></div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr class=\"HideIfCustomersAlsoViewedDisabled\">
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t&nbsp;&nbsp; <label for=\"CustomersAlsoViewedCount\">";
        // line 983
        echo getLang("CustomersAlsoViewedCount");
        echo ":</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<input type=\"text\" name=\"CustomersAlsoViewedCount\" id=\"CustomersAlsoViewedCount\" value=\"";
        // line 986
        echo twig_escape_filter($this->env, (isset($context['CustomersAlsoViewedCount']) ? $context['CustomersAlsoViewedCount'] : null), "1");
        echo "\" class=\"Field40\" />
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('CustomersAlsoViewedCountHelp');\" onmouseover=\"ShowHelp('CustomersAlsoViewedCountHelp', '";
        // line 987
        echo Interspire_Template_Extension::jsFilter(getLang("CustomersAlsoViewedCount"), "'");
        echo "', '";
        echo Interspire_Template_Extension::jsFilter(getLang("CustomersAlsoViewedCountHelp"), "'");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t\t<div style=\"display:none\" id=\"CustomersAlsoViewedCountHelp\"></div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t&nbsp;&nbsp; <label for=\"QuickSearch\">";
        // line 993
        echo getLang("EnableQuickSearch");
        echo "</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"QuickSearch\" id=\"QuickSearch\" value=\"ON\" ";
        // line 996
        echo twig_safe_filter((isset($context['IsQuickSearch']) ? $context['IsQuickSearch'] : null));
        echo " /> <label for=\"QuickSearch\">";
        echo getLang("YesQuickSearch");
        echo "</label>
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('d43');\" onmouseover=\"ShowHelp('d43', '";
        // line 997
        echo getLang("EnableQuickSearch");
        echo "', '";
        echo getLang("QuickSearchHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t\t<div style=\"display:none\" id=\"d43\"></div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t&nbsp;&nbsp; <label for=\"ShowInventory\">";
        // line 1003
        echo getLang("ShowInventory");
        echo "</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"PanelBottom\">
\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"ShowInventory\" id=\"ShowInventory\" value=\"ON\" ";
        // line 1006
        echo twig_safe_filter((isset($context['IsShowInventory']) ? $context['IsShowInventory'] : null));
        echo " onclick=\"if(this.checked) { \$('.HideIfShowInventoryDisabled').show(); } else { \$('.HideIfShowInventoryDisabled').hide(); }\" /> <label for=\"ShowInventory\">";
        echo getLang("YesShowInventory");
        echo "</label>
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('ShowInvHelp');\" onmouseover=\"ShowHelp('ShowInvHelp', '";
        // line 1007
        echo getLang("ShowInventory");
        echo "', '";
        echo getLang("ShowInventoryHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t\t<div style=\"display:none\" id=\"ShowInvHelp\"></div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr class=\"HideIfShowInventoryDisabled\">
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t&nbsp;&nbsp; <label for=\"ShowPreOrderInventory\">";
        // line 1013
        echo getLang("ShowPreOrderInventory");
        echo "</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"ShowPreOrderInventory\" id=\"ShowPreOrderInventory\" value=\"ON\" ";
        // line 1016
        echo twig_safe_filter((isset($context['IsShowPreOrderInventory']) ? $context['IsShowPreOrderInventory'] : null));
        echo " /> <label for=\"ShowPreOrderInventory\">";
        echo getLang("YesShowPreOrderInventory");
        echo "</label>
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('ShowPreOrderInventoryHelp');\" onmouseover=\"ShowHelp('ShowPreOrderInventoryHelp', '";
        // line 1017
        echo Interspire_Template_Extension::jsFilter(getLang("ShowPreOrderInventory"), "'");
        echo "', '";
        echo Interspire_Template_Extension::jsFilter(getLang("ShowPreOrderInventoryHelp"), "'");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t\t<div style=\"display:none\" id=\"ShowPreOrderInventoryHelp\"></div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t&nbsp;&nbsp; <label for=\"ShowCartSuggestions\">";
        // line 1023
        echo getLang("EnableWishlist");
        echo "?</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"PanelBottom\">
\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"EnableWishlist\" id=\"EnableWishlist\" value=\"ON\" ";
        // line 1026
        echo twig_safe_filter((isset($context['IsWishlistEnabled']) ? $context['IsWishlistEnabled'] : null));
        echo " /> <label for=\"EnableWishlist\">";
        echo getLang("YesEnableWishlist");
        echo "</label>
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('ShowWishlistHelp');\" onmouseover=\"ShowHelp('ShowWishlistHelp', '";
        // line 1027
        echo getLang("EnableWishlist");
        echo "?', '";
        echo getLang("EnableWishlistHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t\t<div style=\"display:none\" id=\"ShowWishlistHelp\"></div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t&nbsp;&nbsp; <label for=\"EnableProductComparisons\">";
        // line 1033
        echo getLang("EnableProductComparisons");
        echo "?</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"PanelBottom\">
\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"EnableProductComparisons\" id=\"EnableProductComparisons\" value=\"1\" ";
        // line 1036
        echo twig_safe_filter((isset($context['IsEnableProductComparisons']) ? $context['IsEnableProductComparisons'] : null));
        echo " /> <label for=\"EnableProductComparisons\">";
        echo getLang("YesEnableProductComparisons");
        echo "</label>
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('EnableProductComparisonsHelp');\" onmouseover=\"ShowHelp('EnableProductComparisonsHelp', '";
        // line 1037
        echo getLang("EnableProductComparisons");
        echo "', '";
        echo getLang("EnableProductComparisonsHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t\t<div style=\"display:none\" id=\"EnableProductComparisonsHelp\"></div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t&nbsp;&nbsp; <label for=\"EnableAccountCreation\">";
        // line 1043
        echo getLang("EnableAccountCreation");
        echo "?</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"PanelBottom\">
\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"EnableAccountCreation\" id=\"EnableAccountCreation\" value=\"ON\" ";
        // line 1046
        echo twig_safe_filter((isset($context['IsEnableAccountCreation']) ? $context['IsEnableAccountCreation'] : null));
        echo " /> <label for=\"EnableAccountCreation\">";
        echo getLang("YesEnableAccountCreation");
        echo "</label>
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('AccountCreationHelp');\" onmouseover=\"ShowHelp('AccountCreationHelp', '";
        // line 1047
        echo getLang("EnableAccountCreation");
        echo "?', '";
        echo getLang("EnableAccountCreationHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t\t<div style=\"display:none\" id=\"AccountCreationHelp\"></div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t&nbsp;&nbsp; <label for=\"BulkDiscountEnabled\">";
        // line 1053
        echo getLang("BulkDiscountEnabled");
        echo "?</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"PanelBottom\">
\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"BulkDiscountEnabled\" id=\"BulkDiscountEnabled\" value=\"ON\" ";
        // line 1056
        echo twig_safe_filter((isset($context['IsBulkDiscountEnabled']) ? $context['IsBulkDiscountEnabled'] : null));
        echo " /> <label for=\"BulkDiscountEnabled\">";
        echo getLang("YesBulkDiscountEnabled");
        echo "</label>
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('bulkdiscountenabled');\" onmouseover=\"ShowHelp('bulkdiscountenabled', '";
        // line 1057
        echo getLang("BulkDiscountEnabled");
        echo "', '";
        echo getLang("BulkDiscountEnabledHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t\t<div style=\"display:none\" id=\"bulkdiscountenabled\"></div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t&nbsp;&nbsp; <label for=\"EnableProductTabs\">";
        // line 1063
        echo getLang("EnableProductTabs");
        echo "?</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"EnableProductTabs\" id=\"EnableProductTabs\" value=\"ON\" ";
        // line 1066
        echo twig_safe_filter((isset($context['IsProductTabsEnabled']) ? $context['IsProductTabsEnabled'] : null));
        echo " /> <label for=\"EnableProductTabs\">";
        echo getLang("YesEnableProductTabs");
        echo "</label>
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('EnableProductTabsHelp');\" onmouseover=\"ShowHelp('EnableProductTabsHelp', '";
        // line 1067
        echo getLang("EnableProductTabs");
        echo "', '";
        echo getLang("EnableProductTabsHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t\t<div style=\"display:none\" id=\"EnableProductTabsHelp\"></div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"Heading2\" colspan=\"2\">";
        // line 1072
        echo getLang("ControlPanelDisplaySettings");
        echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t&nbsp;&nbsp; <label for=\"ShowCartSuggestions\">";
        // line 1076
        echo getLang("UseWYSIWYGEditor");
        echo "</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"PanelBottom\">
\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"UseWYSIWYG\" id=\"UseWYSIWYG\" value=\"ON\" ";
        // line 1079
        echo twig_safe_filter((isset($context['IsWYSIWYGEnabled']) ? $context['IsWYSIWYGEnabled'] : null));
        echo " /> <label for=\"UseWYSIWYG\">";
        echo getLang("YesEnableWYSIWYGEditor");
        echo "</label>
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('d39');\" onmouseover=\"ShowHelp('d39', '";
        // line 1080
        echo getLang("UseWYSIWYGEditor");
        echo "', '";
        echo getLang("UseWYSIWYGEditorHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t\t<div style=\"display:none\" id=\"d39\"></div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t&nbsp;&nbsp; <label for=\"ShowCartSuggestions\">";
        // line 1086
        echo getLang("ShowProductThumbnails");
        echo "</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"PanelBottom\">
\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"ShowThumbsInControlPanel\" id=\"ShowThumbsInControlPanel\" value=\"ON\" ";
        // line 1089
        echo twig_safe_filter((isset($context['IsProductThumbnailsEnabled']) ? $context['IsProductThumbnailsEnabled'] : null));
        echo " /> <label for=\"ShowThumbsInControlPanel\">";
        echo getLang("YesShowProductThumbnails");
        echo "</label>
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('d42');\" onmouseover=\"ShowHelp('d42', '";
        // line 1090
        echo getLang("ShowProductThumbnails");
        echo "', '";
        echo getLang("ShowProductThumbnailsHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t\t<div style=\"display:none\" id=\"d42\"></div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t</table>

\t\t\t\t<table width=\"100%\" class=\"Panel\">
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"Heading2\" colspan=\"2\">";
        // line 1098
        echo getLang("CategorySettings");
        echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t<span class=\"Required\">*</span> <label for=\"CategoryListMode\">";
        // line 1102
        echo getLang("CategoryListMode");
        echo ":</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<label><input type=\"radio\" name=\"CategoryListingMode\" value=\"single\" ";
        // line 1105
        echo twig_safe_filter((isset($context['CategoryListModeSingle']) ? $context['CategoryListModeSingle'] : null));
        echo " /> ";
        echo getLang("CategoryListModeSingle");
        echo "</label> <img onmouseout=\"HideHelp('categorylistmodehelp');\" onmouseover=\"ShowHelp('categorylistmodehelp', '";
        echo getLang("CategoryListMode");
        echo "', '";
        echo getLang("CategoryListModeHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t\t<div style=\"display:none\" id=\"categorylistmodehelp\"></div>
\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t<label><input type=\"radio\" name=\"CategoryListingMode\" value=\"emptychildren\" ";
        // line 1108
        echo twig_safe_filter((isset($context['CategoryListModeEmptyChildren']) ? $context['CategoryListModeEmptyChildren'] : null));
        echo " /> ";
        echo getLang("CategoryListModeEmptyChildren");
        echo "</label><br />
\t\t\t\t\t\t\t<label><input type=\"radio\" name=\"CategoryListingMode\" value=\"children\" ";
        // line 1109
        echo twig_safe_filter((isset($context['CategoryListModeChildren']) ? $context['CategoryListModeChildren'] : null));
        echo " /> ";
        echo getLang("CategoryListModeChildren");
        echo "</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t&nbsp;&nbsp; <label for=\"CategoryDisplayMode\">";
        // line 1114
        echo getLang("CategoryDisplayMode");
        echo ":</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<select name=\"CategoryDisplayMode\" id=\"CategoryDisplayMode\" class=\"Field200\">
\t\t\t\t\t\t\t\t<option value=\"grid\" ";
        // line 1118
        echo twig_safe_filter((isset($context['CategoryDisplayModeGrid']) ? $context['CategoryDisplayModeGrid'] : null));
        echo ">";
        echo getLang("CategoryDisplayModeGrid");
        echo "</option>
\t\t\t\t\t\t\t\t<option value=\"list\" ";
        // line 1119
        echo twig_safe_filter((isset($context['CategoryDisplayModeList']) ? $context['CategoryDisplayModeList'] : null));
        echo ">";
        echo getLang("CategoryDisplayModeList");
        echo "</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t&nbsp;&nbsp; <label for=\"CategoryListStyle\">";
        // line 1125
        echo getLang("CategoryListStyle");
        echo ":</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<select name=\"CategoryListStyle\" id=\"CategoryListStyle\" class=\"Field200 showByValue\">
\t\t\t\t\t\t\t\t<option value=\"flyout\" ";
        // line 1129
        if ((isset($context['CategoryListStyle']) ? $context['CategoryListStyle'] : null) == "flyout") {
            echo "selected=\"selected\"";
        }
        echo ">";
        echo getLang("CategoryListStyleFlyout");
        echo "</option>
\t\t\t\t\t\t\t\t<option value=\"static\" ";
        // line 1130
        if ((isset($context['CategoryListStyle']) ? $context['CategoryListStyle'] : null) == "static") {
            echo "selected=\"selected\"";
        }
        echo ">";
        echo getLang("CategoryListStyleStatic");
        echo "</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('CategoryListStyleHelp');\" onmouseover=\"ShowHelp('CategoryListStyleHelp', '";
        // line 1132
        echo Interspire_Template_Extension::jsFilter(getLang("CategoryListStyle"), "'");
        echo "', '";
        echo $this->getEnvironment()->getExtension('interspire')->jsFilter(nl2br($this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "CategoryListStyleHelp", array(), "any")));
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t\t<div style=\"display:none\" id=\"CategoryListStyleHelp\"></div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr class=\"showByValue_CategoryListStyle showByValue_CategoryListStyle_flyout\">
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t&nbsp;&nbsp; <label for=\"categoryFlyoutDropShadow\">";
        // line 1138
        echo getLang("categoryFlyoutDropShadow");
        echo "</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"categoryFlyoutDropShadow\" id=\"categoryFlyoutDropShadow\" value=\"1\" ";
        // line 1141
        if ($this->getAttribute((isset($context['ISC_CFG']) ? $context['ISC_CFG'] : null), "categoryFlyoutDropShadow", array(), "any")) {
            echo "checked=\"checked\"";
        }
        echo " /> <label for=\"categoryFlyoutDropShadow\">";
        echo getLang("YescategoryFlyoutDropShadow");
        echo "</label>
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('categoryFlyoutDropShadowHelp');\" onmouseover=\"ShowHelp('categoryFlyoutDropShadowHelp', '";
        // line 1142
        echo getLang("categoryFlyoutDropShadow");
        echo "', '";
        echo getLang("categoryFlyoutDropShadowHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t\t<div style=\"display:none\" id=\"categoryFlyoutDropShadowHelp\"></div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t<span class=\"Required\">*</span> <label for=\"CategoryListDepth\">";
        // line 1148
        echo getLang("CategoryListDepth");
        echo ":</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<input type=\"text\" name=\"CategoryListDepth\" id=\"CategoryListDepth\" value=\"";
        // line 1151
        echo twig_safe_filter((isset($context['CategoryListDepth']) ? $context['CategoryListDepth'] : null));
        echo "\" class=\"Field40\" /> <label for=\"CategoryListDepth\">";
        echo getLang("CategoryListDepthUnit");
        echo "</label>
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('CategoryListDepthHelp');\" onmouseover=\"ShowHelp('CategoryListDepthHelp', '";
        // line 1152
        echo getLang("CategoryListDepth");
        echo "', '";
        echo getLang("CategoryListDepthHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t\t<div style=\"display:none\" id=\"CategoryListDepthHelp\"></div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr class=\"showByValue_CategoryListStyle showByValue_CategoryListStyle_flyout\">
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t&nbsp;&nbsp; <label for=\"categoryFlyoutMouseOutDelay\">";
        // line 1158
        echo getLang("categoryFlyoutMouseOutDelay");
        echo "</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<input type=\"text\" name=\"categoryFlyoutMouseOutDelay\" id=\"categoryFlyoutMouseOutDelay\" value=\"";
        // line 1161
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['ISC_CFG']) ? $context['ISC_CFG'] : null), "categoryFlyoutMouseOutDelay", array(), "any"), "1");
        echo "\" class=\"Field40\" /> <label for=\"categoryFlyoutMouseOutDelay\">";
        echo getLang("categoryFlyoutMouseOutDelayUnit");
        echo "</label>
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('categoryFlyoutMouseOutDelayHelp');\" onmouseover=\"ShowHelp('categoryFlyoutMouseOutDelayHelp', '";
        // line 1162
        echo getLang("categoryFlyoutMouseOutDelay");
        echo "', '";
        echo getLang("categoryFlyoutMouseOutDelayHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t\t<div style=\"display:none\" id=\"categoryFlyoutMouseOutDelayHelp\"></div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t</table>

\t\t\t\t<table width=\"100%\" class=\"Panel\">
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"Heading2\" colspan=\"2\">";
        // line 1170
        echo getLang("ProductSettings");
        echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t&nbsp;&nbsp; <label for=\"ShowCartSuggestions\">";
        // line 1174
        echo getLang("ShowProductPrice");
        echo "?</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"PanelBottom\">
\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"ShowProductPrice\" id=\"ShowProductPrice\" value=\"ON\" ";
        // line 1177
        echo twig_safe_filter((isset($context['IsProductPriceShown']) ? $context['IsProductPriceShown'] : null));
        echo " /> <label for=\"ShowProductPrice\">";
        echo getLang("YesShowProductPrice");
        echo "</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t&nbsp;&nbsp; <label for=\"ShowCartSuggestions\">";
        // line 1182
        echo getLang("ShowProductSKU");
        echo "?</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"PanelBottom\">
\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"ShowProductSKU\" id=\"ShowProductSKU\" value=\"ON\" ";
        // line 1185
        echo twig_safe_filter((isset($context['IsProductSKUShown']) ? $context['IsProductSKUShown'] : null));
        echo " /> <label for=\"ShowProductSKU\">";
        echo getLang("YesShowProductSKU");
        echo "</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t&nbsp;&nbsp; <label for=\"ShowCartSuggestions\">";
        // line 1190
        echo getLang("ShowProductWeight");
        echo "?</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"PanelBottom\">
\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"ShowProductWeight\" id=\"ShowProductWeight\" value=\"ON\" ";
        // line 1193
        echo twig_safe_filter((isset($context['IsProductWeightShown']) ? $context['IsProductWeightShown'] : null));
        echo " /> <label for=\"ShowProductWeight\">";
        echo getLang("YesShowProductWeight");
        echo "</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t&nbsp;&nbsp; <label for=\"ShowCartSuggestions\">";
        // line 1198
        echo getLang("ShowProductBrand");
        echo "?</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"PanelBottom\">
\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"ShowProductBrand\" id=\"ShowProductBrand\" value=\"ON\" ";
        // line 1201
        echo twig_safe_filter((isset($context['IsProductBrandShown']) ? $context['IsProductBrandShown'] : null));
        echo " /> <label for=\"ShowProductBrand\">";
        echo getLang("YesShowProductBrand");
        echo "</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t&nbsp;&nbsp; <label for=\"ShowCartSuggestions\">";
        // line 1206
        echo getLang("ShowProductShipping");
        echo "?</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"PanelBottom\">
\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"ShowProductShipping\" id=\"ShowProductShipping\" value=\"ON\" ";
        // line 1209
        echo twig_safe_filter((isset($context['IsProductShippingShown']) ? $context['IsProductShippingShown'] : null));
        echo " /> <label for=\"ShowProductShipping\">";
        echo getLang("YesShowProductShipping");
        echo "</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t&nbsp;&nbsp; <label for=\"ShowProductRating\">";
        // line 1214
        echo getLang("ShowProductRating");
        echo "?</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"PanelBottom\">
\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"ShowProductRating\" id=\"ShowProductRating\" value=\"ON\" ";
        // line 1217
        echo twig_safe_filter((isset($context['IsProductRatingShown']) ? $context['IsProductRatingShown'] : null));
        echo " /> <label for=\"ShowProductRating\">";
        echo getLang("YesShowProductRating");
        echo "</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t&nbsp;&nbsp; <label for=\"ShowAddToCartLink\">";
        // line 1222
        echo getLang("ShowAddToCartLink");
        echo "?</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"PanelBottom\">
\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"ShowAddToCartLink\" id=\"ShowAddToCartLink\" value=\"ON\" ";
        // line 1225
        echo twig_safe_filter((isset($context['IsAddToCartLinkShown']) ? $context['IsAddToCartLinkShown'] : null));
        echo " /> <label for=\"ShowAddToCartLink\">";
        echo getLang("YesShowAddToCartLink");
        echo "</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t<span class=\"Required\">*</span> ";
        // line 1230
        echo getLang("TagCloudFontSize");
        echo ":
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<label>";
        // line 1233
        echo getLang("From");
        echo " <input type=\"text\" name=\"TagCloudMinSize\" id=\"TagCloudMinSize\" value=\"";
        echo twig_safe_filter((isset($context['TagCloudMinSize']) ? $context['TagCloudMinSize'] : null));
        echo "\" class=\"Field50\" />%</label>
\t\t\t\t\t\t\t<label>";
        // line 1234
        echo getLang("SearchTo");
        echo " <input type=\"text\" name=\"TagCloudMaxSize\" id=\"TagCloudMaxSize\" value=\"";
        echo twig_safe_filter((isset($context['TagCloudMaxSize']) ? $context['TagCloudMaxSize'] : null));
        echo "\" class=\"Field50\" />%</label>
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('tagsizehelp');\" onmouseover=\"ShowHelp('tagsizehelp', '";
        // line 1235
        echo getLang("TagCloudFontSize");
        echo "', '";
        echo getLang("TagCloudFontSizeHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t\t<div style=\"display:none\" id=\"tagsizehelp\"></div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t<span class=\"Required\">*</span> ";
        // line 1241
        echo getLang("DefaultPreOrderMessage");
        echo ":
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<input type=\"text\" name=\"DefaultPreOrderMessage\" id=\"DefaultPreOrderMessage\" value=\"";
        // line 1244
        echo twig_safe_filter((isset($context['DefaultPreOrderMessage']) ? $context['DefaultPreOrderMessage'] : null));
        echo "\" class=\"Field250\" />
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('DefaultPreOrderMessageHelp');\" onmouseover=\"ShowHelp('DefaultPreOrderMessageHelp', '";
        // line 1245
        echo Interspire_Template_Extension::jsFilter(getLang("DefaultPreOrderMessage"), "'");
        echo "', '";
        echo Interspire_Template_Extension::jsFilter(getLang("DefaultPreOrderMessageHelp"), "'");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t\t<div style=\"display:none\" id=\"DefaultPreOrderMessageHelp\"></div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t</table>

\t\t\t\t<table width=\"100%\" class=\"Panel\">
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"Heading2\" colspan=\"2\">";
        // line 1253
        echo getLang("SocialSettings");
        echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t&nbsp;&nbsp; <label for=\"ShowAddThisLink\">";
        // line 1257
        echo getLang("ShowAddThisLink");
        echo "?</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"PanelBottom\">
\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"ShowAddThisLink\" id=\"ShowAddThisLink\" value=\"1\" ";
        // line 1260
        echo twig_safe_filter((isset($context['IsAddThisLinkShown']) ? $context['IsAddThisLinkShown'] : null));
        echo " /> <label for=\"ShowAddThisLink\">";
        echo getLang("YesShowAddThisLink");
        echo "</label>
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('daddthis');\" onmouseover=\"ShowHelp('daddthis', '";
        // line 1261
        echo getLang("ShowAddThisLink");
        echo "', '";
        echo getLang("ShowAddThisLinkHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t\t<div style=\"display:none\" id=\"daddthis\"></div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t&nbsp;&nbsp; <label for=\"FacebookLikeButtonEnabled\">";
        // line 1267
        echo getLang("ShowFacebookLikeButton");
        echo "?</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"PanelBottom\">
\t\t\t\t\t\t\t<label for=\"FacebookLikeButtonEnabled\"><input type=\"checkbox\" name=\"FacebookLikeButtonEnabled\" id=\"FacebookLikeButtonEnabled\" value=\"1\" ";
        // line 1270
        if ((isset($context['FacebookLikeButtonEnabled']) ? $context['FacebookLikeButtonEnabled'] : null)) {
            echo "checked=\"checked\"";
        }
        echo " />";
        echo getLang("YesShowFacebookLikeButton");
        echo "</label>
\t\t\t\t\t\t\t";
        // line 1271
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['util']) ? $context['util'] : null), "tooltip", array("ShowFacebookLikeButton", "ShowFacebookLikeButtonHelp", ), "method"), "1");
        echo "
\t\t\t\t\t\t\t<div class=\"NodeJoin\" id=\"facebookLikeOptions\" ";
        // line 1272
        if ((isset($context['FacebookLikeButtonEnabled']) ? $context['FacebookLikeButtonEnabled'] : null) == false) {
            echo "style=\"display: none;\"";
        }
        echo ">
\t\t\t\t\t\t\t\t<div style=\"float: left;\">
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<img src=\"images/nodejoin.gif\" style=\"vertical-align: middle;\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t<label for=\"FacebookLikeButtonStyle\">";
        // line 1276
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "LayoutStyle", array(), "any"), "1");
        echo ":</label>
\t\t\t\t\t\t\t\t\t\t<select name=\"FacebookLikeButtonStyle\" id=\"FacebookLikeButtonStyle\">
\t\t\t\t\t\t\t\t\t\t\t<option value=\"standard\" ";
        // line 1278
        echo twig_escape_filter($this->env, (isset($context['FacebookLikeButtonStylestandard']) ? $context['FacebookLikeButtonStylestandard'] : null), "1");
        echo ">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "StyleStandard", array(), "any"), "1");
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"countonly\" ";
        // line 1279
        echo twig_escape_filter($this->env, (isset($context['FacebookLikeButtonStylecountonly']) ? $context['FacebookLikeButtonStylecountonly'] : null), "1");
        echo ">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "StyleCountOnly", array(), "any"), "1");
        echo "</option>
\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<img src=\"images/nodejoin.gif\" style=\"vertical-align: middle;\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t<label for=\"FacebookLikeButtonPosition\">";
        // line 1284
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "ButtonPosition", array(), "any"), "1");
        echo ":</label>
\t\t\t\t\t\t\t\t\t\t<select name=\"FacebookLikeButtonPosition\" id=\"FacebookLikeButtonPosition\">
\t\t\t\t\t\t\t\t\t\t\t<option value=\"above\" ";
        // line 1286
        echo twig_escape_filter($this->env, (isset($context['FacebookLikeButtonPositionabove']) ? $context['FacebookLikeButtonPositionabove'] : null), "1");
        echo ">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "Above", array(), "any"), "1");
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"below\" ";
        // line 1287
        echo twig_escape_filter($this->env, (isset($context['FacebookLikeButtonPositionbelow']) ? $context['FacebookLikeButtonPositionbelow'] : null), "1");
        echo ">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "Below", array(), "any"), "1");
        echo "</option>
\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t";
        // line 1289
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['util']) ? $context['util'] : null), "tooltip", array("ButtonPosition", "ButtonPositionHelp", ), "method"), "1");
        echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<img src=\"images/nodejoin.gif\" style=\"vertical-align: middle;\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t<label for=\"FacebookLikeButtonVerb\">";
        // line 1293
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "TextToDisplay", array(), "any"), "1");
        echo ":</label>
\t\t\t\t\t\t\t\t\t\t<select name=\"FacebookLikeButtonVerb\" id=\"FacebookLikeButtonVerb\">
\t\t\t\t\t\t\t\t\t\t\t<option value=\"like\" ";
        // line 1295
        echo twig_escape_filter($this->env, (isset($context['FacebookLikeButtonVerblike']) ? $context['FacebookLikeButtonVerblike'] : null), "1");
        echo ">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "Like", array(), "any"), "1");
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"recommend\" ";
        // line 1296
        echo twig_escape_filter($this->env, (isset($context['FacebookLikeButtonVerbrecommend']) ? $context['FacebookLikeButtonVerbrecommend'] : null), "1");
        echo ">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "Recommend", array(), "any"), "1");
        echo "</option>
\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<img src=\"images/nodejoin.gif\" style=\"vertical-align: middle;\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t<label for=\"FacebookLikeButtonShowFaces\">";
        // line 1301
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "ShowFaces", array(), "any"), "1");
        echo "?</label>
\t\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"FacebookLikeButtonShowFaces\" id=\"FacebookLikeButtonShowFaces\" value=\"1\" ";
        // line 1303
        if ((isset($context['FacebookLikeButtonShowFacesEnabled']) ? $context['FacebookLikeButtonShowFacesEnabled'] : null)) {
            echo "checked=\"checked\"";
        }
        echo " />
\t\t\t\t\t\t\t\t\t\t\t";
        // line 1304
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "YesShowFaces", array(), "any"), "1");
        echo "
\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<img src=\"images/nodejoin.gif\" style=\"vertical-align: middle;\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t<label for=\"FacebookLikeButtonAdminIds\"><span class=\"Required\">*</span> ";
        // line 1309
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "FacebookAdminIds", array(), "any"), "1");
        echo ":</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"FacebookLikeButtonAdminIds\" id=\"FacebookLikeButtonAdminIds\" value=\"";
        // line 1310
        echo twig_escape_filter($this->env, (isset($context['FacebookLikeButtonAdminIds']) ? $context['FacebookLikeButtonAdminIds'] : null), "1");
        echo "\" />
\t\t\t\t\t\t\t\t\t\t";
        // line 1311
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['util']) ? $context['util'] : null), "tooltip", array("FacebookAdminIds", "FacebookAdminIdsHelp", ), "method"), "1");
        echo "
\t\t\t\t\t\t\t\t\t\t<div style=\"padding-left:114px\" class=\"FieldHelp\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 1313
        echo getLang("FacebookAdminIdsLearnMore");
        echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<br class=\"Clear\"/>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t</table>

\t\t\t\t<table width=\"100%\" class=\"Panel\">
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"Heading2\" colspan=\"2\">";
        // line 1325
        echo getLang("RSSSettings");
        echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t&nbsp;&nbsp; <label for=\"RSSNewProducts\">";
        // line 1329
        echo getLang("RSSNewProductsEnabled");
        echo "</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"RSSNewProducts\" id=\"RSSNewProducts\" value=\"ON\" ";
        // line 1332
        echo twig_safe_filter((isset($context['IsRSSNewProductsEnabled']) ? $context['IsRSSNewProductsEnabled'] : null));
        echo " /> <label for=\"RSSNewProducts\">";
        echo getLang("YesRSSNewProductsEnabled");
        echo "</label>
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('rss1');\" onmouseover=\"ShowHelp('rss1', '";
        // line 1333
        echo getLang("RSSNewProductsEnabled");
        echo "', '";
        echo getLang("RSSNewProductsHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t\t<div style=\"display:none\" id=\"rss1\"></div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>

\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t&nbsp;&nbsp; <label for=\"RSSPopularProducts\">";
        // line 1340
        echo getLang("RSSPopularProductsEnabled");
        echo "</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"RSSPopularProducts\" id=\"RSSPopularProducts\" value=\"ON\" ";
        // line 1343
        echo twig_safe_filter((isset($context['IsRSSPopularProductsEnabled']) ? $context['IsRSSPopularProductsEnabled'] : null));
        echo " /> <label for=\"RSSPopularProducts\">";
        echo getLang("YesRSSPopularProductsEnabled");
        echo "</label>
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('rss2');\" onmouseover=\"ShowHelp('rss2', '";
        // line 1344
        echo getLang("RSSPopularProductsEnabled");
        echo "', '";
        echo getLang("RSSPopularProductsHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t\t<div style=\"display:none\" id=\"rss2\"></div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>

\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t&nbsp;&nbsp; <label for=\"RSSFeaturedProducts\">";
        // line 1351
        echo getLang("RSSFeaturedProductsEnabled");
        echo "</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"RSSFeaturedProducts\" id=\"RSSFeaturedProducts\" value=\"ON\" ";
        // line 1354
        echo twig_safe_filter((isset($context['IsRSSFeaturedProductsEnabled']) ? $context['IsRSSFeaturedProductsEnabled'] : null));
        echo " /> <label for=\"RSSFeaturedProducts\">";
        echo getLang("YesRSSFeaturedProductsEnabled");
        echo "</label>
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('rssfp');\" onmouseover=\"ShowHelp('rssfp', '";
        // line 1355
        echo getLang("RSSFeaturedProductsEnabled");
        echo "', '";
        echo getLang("RSSFeaturedProductsHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t\t<div style=\"display:none\" id=\"rssfp\"></div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>

\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t&nbsp;&nbsp; <label for=\"RSSCategories\">";
        // line 1362
        echo getLang("RSSCategoriesEnabled");
        echo "</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"RSSCategories\" id=\"RSSCategories\" value=\"ON\" ";
        // line 1365
        echo twig_safe_filter((isset($context['IsRSSCategoriesEnabled']) ? $context['IsRSSCategoriesEnabled'] : null));
        echo " /> <label for=\"RSSCategories\">";
        echo getLang("YesRSSCategoriesEnabled");
        echo "</label>
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('rss3');\" onmouseover=\"ShowHelp('rss3', '";
        // line 1366
        echo getLang("RSSCategoriesEnabled");
        echo "', '";
        echo getLang("RSSCategoriesHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t\t<div style=\"display:none\" id=\"rss3\"></div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>

\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t&nbsp;&nbsp; <label for=\"RSSProductSearches\">";
        // line 1373
        echo getLang("RSSProductSearchesEnabled");
        echo "</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"RSSProductSearches\" id=\"RSSProductSearches\" value=\"ON\" ";
        // line 1376
        echo twig_safe_filter((isset($context['IsRSSProductSearchesEnabled']) ? $context['IsRSSProductSearchesEnabled'] : null));
        echo " /> <label for=\"RSSProductSearches\">";
        echo getLang("YesRSSProductSearchesEnabled");
        echo "</label>
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('rss4');\" onmouseover=\"ShowHelp('rss4', '";
        // line 1377
        echo getLang("RSSProductSearchesEnabled");
        echo "', '";
        echo getLang("RSSProductSearchesHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t\t<div style=\"display:none\" id=\"rss4\"></div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>

\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t&nbsp;&nbsp; <label for=\"RSSLatestBlogEntries\">";
        // line 1384
        echo getLang("RSSLatestBlogEntriesEnabled");
        echo "</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"RSSLatestBlogEntries\" id=\"RSSLatestBlogEntries\" value=\"ON\" ";
        // line 1387
        echo twig_safe_filter((isset($context['IsRSSLatestBlogEntriesEnabled']) ? $context['IsRSSLatestBlogEntriesEnabled'] : null));
        echo " /> <label for=\"RSSLatestBlogEntries\">";
        echo getLang("YesRSSLatestBlogEntriesEnabled");
        echo "</label>
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('rss5');\" onmouseover=\"ShowHelp('rss5', '";
        // line 1388
        echo getLang("RSSLatestBlogEntriesEnabled");
        echo "', '";
        echo getLang("RSSLatestBlogEntriesHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t\t<div style=\"display:none\" id=\"rss5\"></div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>

\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t&nbsp;&nbsp; <label for=\"RSSSyndicationIcons\">";
        // line 1395
        echo getLang("RSSSyndicationIconsEnabled");
        echo "</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"RSSSyndicationIcons\" id=\"RSSSyndicationIcons\" value=\"ON\" ";
        // line 1398
        echo twig_safe_filter((isset($context['IsRSSSyndicationIconsEnabled']) ? $context['IsRSSSyndicationIconsEnabled'] : null));
        echo " /> <label for=\"RSSSyndicationIcons\">";
        echo getLang("YesRSSSyndicationIconsEnabled");
        echo "</label>
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('rss6');\" onmouseover=\"ShowHelp('rss6', '";
        // line 1399
        echo getLang("RSSSyndicationIconsEnabled");
        echo "', '";
        echo getLang("RSSSyndicationIconsHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t\t<div style=\"display:none\" id=\"rss6\"></div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>

\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t<span class=\"Required\">*</span> <label for=\"RSSItemsLimit\">";
        // line 1406
        echo getLang("RSSItemsLimit");
        echo ":</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<input type=\"text\" name=\"RSSItemsLimit\" id=\"RSSItemsLimit\" value=\"";
        // line 1409
        echo twig_safe_filter((isset($context['RSSItemsLimit']) ? $context['RSSItemsLimit'] : null));
        echo "\" class=\"Field40\" />
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('rss7');\" onmouseover=\"ShowHelp('rss7', '";
        // line 1410
        echo getLang("RSSItemsLimit");
        echo "', '";
        echo getLang("RSSItemsLimitHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t\t<div style=\"display:none\" id=\"rss7\"></div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>

\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t<span class=\"Required\">*</span> <label for=\"RSSCacheTime\">";
        // line 1417
        echo getLang("RSSCacheTime");
        echo ":</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<input type=\"text\" name=\"RSSCacheTime\" id=\"RSSCacheTime\" value=\"";
        // line 1420
        echo twig_safe_filter((isset($context['RSSCacheTime']) ? $context['RSSCacheTime'] : null));
        echo "\" class=\"Field40\" />";
        echo getLang("RSSMinutes");
        echo "\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('rss8');\" onmouseover=\"ShowHelp('rss8', '";
        // line 1421
        echo getLang("RSSCacheTime");
        echo "', '";
        echo getLang("RSSCacheTimeHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t\t<div style=\"display:none\" id=\"rss8\"></div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>

\t\t\t\t</table>
\t\t\t</div>

\t\t\t<div id=\"div3\" style=\"padding-top: 10px;  display: ";
        // line 1429
        echo twig_safe_filter((isset($context['HideBackupSettings']) ? $context['HideBackupSettings'] : null));
        echo "\">
\t\t\t\t<table width=\"100%\" class=\"Panel\">
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"Heading2\" colspan=\"2\">";
        // line 1432
        echo getLang("BackupSettings");
        echo "</td>
\t\t\t\t\t</tr>

\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t&nbsp;&nbsp; <label for=\"BackupsLocal\">";
        // line 1437
        echo getLang("EnableLocalBackups");
        echo "</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"BackupsLocal\" id=\"BackupsLocal\" onclick=\"ToggleLocalBackups();\" value=\"ON\" ";
        // line 1440
        echo twig_safe_filter((isset($context['IsBackupsLocalEnabled']) ? $context['IsBackupsLocalEnabled'] : null));
        echo " /> <label for=\"BackupsLocal\">";
        echo getLang("YesEnableLocalBackups");
        echo "</label>
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('backups1');\" onmouseover=\"ShowHelp('backups1', '";
        // line 1441
        echo getLang("EnableLocalBackups");
        echo "', '";
        echo getLang("EnableLocalBackupsHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t\t<div style=\"display:none\" id=\"backups1\"></div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>

\t\t\t\t\t<tr id=\"BackupsRemoteFTPContainer\" style=\"display: %%FTPBackupsHide%%\">
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t&nbsp;&nbsp; <label for=\"BackupsRemoteFTP\">";
        // line 1448
        echo getLang("EnableRemoteFTPBackups");
        echo "</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"BackupsRemoteFTP\" id=\"BackupsRemoteFTP\" onclick=\"ToggleFTPBackups();\" value=\"ON\" ";
        // line 1451
        echo twig_safe_filter((isset($context['IsBackupsRemoteFTPEnabled']) ? $context['IsBackupsRemoteFTPEnabled'] : null));
        echo " /> <label for=\"BackupsRemoteFTP\">";
        echo getLang("YesEnableRemoteFTPBackups");
        echo "</label>
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('backups2');\" onmouseover=\"ShowHelp('backups2', '";
        // line 1452
        echo getLang("EnableRemoteFTPBackups");
        echo "', '";
        echo getLang("EnableRemoteFTPBackupsHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t\t<div style=\"display:none\" id=\"backups2\"></div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr id=\"BackupsRemoteFTPSettings\" style=\"display: none;\">
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t&nbsp;&nbsp; ";
        // line 1458
        echo getLang("FTPServerDetails");
        echo ":
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<table>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td><span class=\"Required\">*</span> ";
        // line 1463
        echo getLang("FTPHostName");
        echo ":</td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"BackupsRemoteFTPHost\" id=\"BackupsRemoteFTPHost\" value=\"";
        // line 1465
        echo twig_safe_filter((isset($context['BackupsRemoteFTPHost']) ? $context['BackupsRemoteFTPHost'] : null));
        echo "\" class=\"Field150\" />
\t\t\t\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('backups3');\" onmouseover=\"ShowHelp('backups3', '";
        // line 1466
        echo getLang("FTPServerDetails");
        echo "', '";
        echo getLang("FTPServerDetailsHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t\t\t\t\t<div style=\"display:none\" id=\"backups3\"></div>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td><span class=\"Required\">*</span> ";
        // line 1471
        echo getLang("FTPUsername");
        echo ":</td>
\t\t\t\t\t\t\t\t\t<td><input type=\"text\" name=\"BackupsRemoteFTPUser\" id=\"BackupsRemoteFTPUser\" value=\"";
        // line 1472
        echo twig_safe_filter((isset($context['BackupsRemoteFTPUser']) ? $context['BackupsRemoteFTPUser'] : null));
        echo "\" class=\"Field150\" /></td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td><span class=\"Required\">*</span> ";
        // line 1475
        echo getLang("FTPPassword");
        echo ":</td>
\t\t\t\t\t\t\t\t\t<td><input type=\"password\" autocomplete=\"off\" name=\"BackupsRemoteFTPPass\" id=\"BackupsRemoteFTPPass\" value=\"";
        // line 1476
        echo twig_safe_filter((isset($context['BackupsRemoteFTPPass']) ? $context['BackupsRemoteFTPPass'] : null));
        echo "\" class=\"Field150\" /></td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>&nbsp;&nbsp; ";
        // line 1479
        echo getLang("FTPPath");
        echo ":</td>
\t\t\t\t\t\t\t\t\t<td><input type=\"text\" name=\"BackupsRemoteFTPPath\" id=\"BackupsRemoteFTPPath\" value=\"";
        // line 1480
        echo twig_safe_filter((isset($context['BackupsRemoteFTPPath']) ? $context['BackupsRemoteFTPPath'] : null));
        echo "\" class=\"Field150\" /></td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>&nbsp;</td>
\t\t\t\t\t\t\t\t\t<td><input type=\"button\" value=\"";
        // line 1484
        echo getLang("TestFTPSettings");
        echo "\" class=\"SmallButton\" onclick=\"DoTestFTPSettings()\" id=\"TestFTPSettings\" /> &nbsp;&nbsp;<img src=\"images/ajax-loader.gif\" style=\"vertical-align: middle; display: none;\" id=\"TestFTPSettingsLoading\" alt=\"\" />
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td colspan=\"2\" class=\"EmptyRow\">
\t\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"Heading2\" colspan=\"2\">";
        // line 1495
        echo getLang("AutomaticBackups");
        echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t&nbsp;&nbsp; <label for=\"BackupsAutomatic\">";
        // line 1499
        echo getLang("EnableAutomaticBackups");
        echo "</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"BackupsAutomatic\" id=\"BackupsAutomatic\" onclick=\"ToggleAutomaticBackups();\" value=\"ON\" ";
        // line 1502
        echo twig_safe_filter((isset($context['IsBackupsAutomaticEnabled']) ? $context['IsBackupsAutomaticEnabled'] : null));
        echo " /> <label for=\"BackupsAutomatic\">";
        echo getLang("YesEnableAutomaticBackups");
        echo "</label>
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('backups4');\" onmouseover=\"ShowHelp('backups4', '";
        // line 1503
        echo getLang("EnableAutomaticBackups");
        echo "', '";
        echo getLang("EnableAutomaticBackupsHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t\t<div style=\"display:none\" id=\"backups4\"></div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr class=\"BackupsAutomaticContainer\">
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t&nbsp;&nbsp; <label for=\"BackupsAutomaticPath\">";
        // line 1509
        echo getLang("BackupCronPath");
        echo ":</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<input type=\"text\" class=\"Field250\" name=\"BackupsAutomaticPath\" id=\"BackupsAutomaticPath\" value=\"";
        // line 1512
        echo twig_safe_filter((isset($context['BackupsAutomaticPath']) ? $context['BackupsAutomaticPath'] : null));
        echo "\" />
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('backups6');\" onmouseover=\"ShowHelp('backups6', '";
        // line 1513
        echo getLang("BackupCronPath");
        echo "', '";
        echo getLang("BackupCronPathHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t\t<div style=\"display:none\" id=\"backups6\"></div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr class=\"BackupsAutomaticContainer\">
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t&nbsp;&nbsp; <label for=\"BackupsAutomaticMethod\">";
        // line 1519
        echo getLang("AutomaticBackupMethod");
        echo ":</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<select name=\"BackupsAutomaticMethod\" id=\"BackupsAutomaticMethod\" class=\"Field250\">
\t\t\t\t\t\t\t\t<option value=\"local\" ";
        // line 1523
        echo twig_safe_filter((isset($context['IsBackupsAutomaticMethodLocal']) ? $context['IsBackupsAutomaticMethodLocal'] : null));
        echo " id=\"BackupsAutomaticLocal\">";
        echo getLang("AutomaticBackupLocal");
        echo "</option>
\t\t\t\t\t\t\t\t<option value=\"ftp\" ";
        // line 1524
        echo twig_safe_filter((isset($context['IsBackupsAutomaticMethodFTP']) ? $context['IsBackupsAutomaticMethodFTP'] : null));
        echo " id=\"BackupsAutomaticFTP\">";
        echo getLang("AutomaticBackupRemoteFTP");
        echo "</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('backups5');\" onmouseover=\"ShowHelp('backups5', '";
        // line 1526
        echo getLang("AutomaticBackupMethod");
        echo "', '";
        echo getLang("AutomaticBackupMethodHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t\t<div style=\"display:none\" id=\"backups5\"></div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr class=\"BackupsAutomaticContainer\">
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t&nbsp;&nbsp; ";
        // line 1532
        echo getLang("BackupSettings");
        echo ":
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<label><input type=\"checkbox\" name=\"BackupsAutomaticDatabase\" id=\"BackupsAutomaticDatabase\" value=\"ON\" ";
        // line 1535
        echo twig_safe_filter((isset($context['IsBackupsAutomaticDatabaseEnabled']) ? $context['IsBackupsAutomaticDatabaseEnabled'] : null));
        echo " /> ";
        echo getLang("SettingsBackupDatabase");
        echo "</label><br />
\t\t\t\t\t\t\t<label><input type=\"checkbox\" name=\"BackupsAutomaticImages\" id=\"BackupsAutomaticImages\" value=\"ON\" ";
        // line 1536
        echo twig_safe_filter((isset($context['IsBackupsAutomaticImagesEnabled']) ? $context['IsBackupsAutomaticImagesEnabled'] : null));
        echo " /> ";
        echo getLang("SettingsBackupProductImages");
        echo "</label><br />
\t\t\t\t\t\t\t<label><input type=\"checkbox\" name=\"BackupsAutomaticDownloads\" id=\"BackupsAutomaticDownloads\" value=\"ON\" ";
        // line 1537
        echo twig_safe_filter((isset($context['IsBackupsAutomaticDownloadsEnabled']) ? $context['IsBackupsAutomaticDownloadsEnabled'] : null));
        echo " /> ";
        echo getLang("SettingsBackupDigitalProducts");
        echo "</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t</table>
\t\t\t</div>

\t\t\t<div id=\"div4\" style=\"padding-top: 10px;\">
\t\t\t\t<table width=\"100%\" class=\"Panel\">
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"Heading2\" colspan=\"2\">";
        // line 1546
        echo getLang("SearchSettings");
        echo "</td>
\t\t\t\t\t</tr>

\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t&nbsp;&nbsp; <label for=\"SearchOptimisation\">";
        // line 1551
        echo getLang("SearchOptimisation");
        echo ":</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<select name=\"SearchOptimisation\" id=\"SearchOptimisation\" class=\"Field200\">
\t\t\t\t\t\t\t\t";
        // line 1555
        echo twig_safe_filter((isset($context['SearchOptimisationOptions']) ? $context['SearchOptimisationOptions'] : null));
        echo "
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('search8');\" onmouseover=\"ShowHelp('search8', '";
        // line 1557
        echo getLang("SearchOptimisation");
        echo "', '";
        echo getLang("SearchOptimisationHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t\t<div style=\"display:none\" id=\"search8\"></div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t&nbsp;&nbsp; <label for=\"SearchDefaultProductSort\">";
        // line 1563
        echo getLang("SearchDefaultProductSort");
        echo ":</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<select name=\"SearchDefaultProductSort\" id=\"SearchDefaultProductSort\" class=\"Field200\">
\t\t\t\t\t\t\t\t";
        // line 1567
        echo twig_safe_filter((isset($context['SearchDefaultProductSortOptions']) ? $context['SearchDefaultProductSortOptions'] : null));
        echo "
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('search1');\" onmouseover=\"ShowHelp('search1', '";
        // line 1569
        echo getLang("SearchDefaultProductSort");
        echo "', '";
        echo getLang("SearchDefaultProductSortHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t\t<div style=\"display:none\" id=\"search1\"></div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t&nbsp;&nbsp; <label for=\"SearchDefaultContentSort\">";
        // line 1575
        echo getLang("SearchDefaultContentSort");
        echo ":</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<select name=\"SearchDefaultContentSort\" id=\"SearchDefaultContentSort\" class=\"Field200\">
\t\t\t\t\t\t\t\t";
        // line 1579
        echo twig_safe_filter((isset($context['SearchDefaultContentSortOptions']) ? $context['SearchDefaultContentSortOptions'] : null));
        echo "
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('search2');\" onmouseover=\"ShowHelp('search2', '";
        // line 1581
        echo getLang("SearchDefaultContentSort");
        echo "', '";
        echo getLang("SearchDefaultContentSortHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t\t<div style=\"display:none\" id=\"search2\"></div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t&nbsp;&nbsp; <label for=\"SearchProductDisplayMode\">";
        // line 1587
        echo getLang("SearchProductDisplayMode");
        echo ":</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<select name=\"SearchProductDisplayMode\" id=\"SearchProductDisplayMode\" class=\"Field200\">
\t\t\t\t\t\t\t\t";
        // line 1591
        echo twig_safe_filter((isset($context['SearchProductDisplayModeOptions']) ? $context['SearchProductDisplayModeOptions'] : null));
        echo "
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('search6');\" onmouseover=\"ShowHelp('search6', '";
        // line 1593
        echo getLang("SearchProductDisplayMode");
        echo "', '";
        echo getLang("SearchProductDisplayModeHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t\t<div style=\"display:none\" id=\"search6\"></div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t&nbsp;&nbsp; <label for=\"SearchResultsPerPage\">";
        // line 1599
        echo getLang("SearchResultsPerPage");
        echo ":</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<input type=\"text\" name=\"SearchResultsPerPage\" id=\"SearchResultsPerPage\" value=\"";
        // line 1602
        echo twig_safe_filter((isset($context['SearchResultsPerPage']) ? $context['SearchResultsPerPage'] : null));
        echo "\" class=\"Field40\" />
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('search7');\" onmouseover=\"ShowHelp('search7', '";
        // line 1603
        echo getLang("SearchResultsPerPage");
        echo "', '";
        echo getLang("SearchResultsPerPageHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t\t<div style=\"display:none\" id=\"search7\"></div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t</table>
\t\t\t</div>

\t\t\t<div id=\"div5\" style=\"padding-top: 10px; ";
        // line 1610
        echo twig_safe_filter((isset($context['HideLoggingSettingsTab']) ? $context['HideLoggingSettingsTab'] : null));
        echo "\">
\t\t\t\t<table width=\"100%\" class=\"Panel\">
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"Heading2\" colspan=\"2\">";
        // line 1613
        echo getLang("SystemLogging");
        echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t&nbsp;&nbsp; ";
        // line 1617
        echo getLang("EnableSystemLogging");
        echo "?
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<label style=\"padding-left: 4px;\" for=\"EnableSystemLogging\"><input ";
        // line 1620
        echo twig_safe_filter((isset($context['IsSystemLoggingEnabled']) ? $context['IsSystemLoggingEnabled'] : null));
        echo " type=\"checkbox\" name=\"SystemLogging\" id=\"EnableSystemLogging\" value=\"ON\" onclick=\"ToggleSystemLogging()\" />";
        echo getLang("YesEnableSystemLogging");
        echo "</label>
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('logging1');\" onmouseover=\"ShowHelp('logging1', '";
        // line 1621
        echo getLang("EnableSystemLogging");
        echo "?', '";
        echo getLang("EnableSystemLoggingHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t\t<div style=\"display:none\" id=\"logging1\"></div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr class=\"SystemLoggingToggle\">
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t&nbsp;&nbsp; ";
        // line 1627
        echo getLang("ActionsToLog");
        echo ":
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td style=\"padding-left: 28px\">
\t\t\t\t\t\t\t<select name=\"SystemLogTypes[]\" id=\"SystemLogTypes\" multiple=\"multiple\" size=\"10\" class=\"Field250 ISSelectReplacement\">
\t\t\t\t\t\t\t\t<option value=\"general\" ";
        // line 1631
        echo twig_safe_filter((isset($context['IsGeneralLoggingEnabled']) ? $context['IsGeneralLoggingEnabled'] : null));
        echo ">";
        echo getLang("ActionsToLogGeneral");
        echo "</option>
\t\t\t\t\t\t\t\t<option value=\"payment\" ";
        // line 1632
        echo twig_safe_filter((isset($context['IsPaymentLoggingEnabled']) ? $context['IsPaymentLoggingEnabled'] : null));
        echo ">";
        echo getLang("ActionsToLogPayment");
        echo "</option>
\t\t\t\t\t\t\t\t<option value=\"shipping\" ";
        // line 1633
        echo twig_safe_filter((isset($context['IsShippingLoggingEnabled']) ? $context['IsShippingLoggingEnabled'] : null));
        echo ">";
        echo getLang("ActionsToLogShipping");
        echo "</option>
\t\t\t\t\t\t\t\t<option value=\"notification\" ";
        // line 1634
        echo twig_safe_filter((isset($context['IsNotificationLoggingEnabled']) ? $context['IsNotificationLoggingEnabled'] : null));
        echo ">";
        echo getLang("ActionsToLogNotification");
        echo "</option>
\t\t\t\t\t\t\t\t<option value=\"sql\" ";
        // line 1635
        echo twig_safe_filter((isset($context['IsSQLLoggingEnabled']) ? $context['IsSQLLoggingEnabled'] : null));
        echo ">";
        echo getLang("ActionsToLogSQL");
        echo "</option>
\t\t\t\t\t\t\t\t<option value=\"php\" ";
        // line 1636
        echo twig_safe_filter((isset($context['IsPHPLoggingEnabled']) ? $context['IsPHPLoggingEnabled'] : null));
        echo ">";
        echo getLang("ActionsToLogPHP");
        echo "</option>
\t\t\t\t\t\t\t\t<option value=\"accounting\" ";
        // line 1637
        echo twig_safe_filter((isset($context['IsAccountingLoggingEnabled']) ? $context['IsAccountingLoggingEnabled'] : null));
        echo ">";
        echo getLang("ActionsToLogAccounting");
        echo "</option>
\t\t\t\t\t\t\t\t<option value=\"emailintegration\" ";
        // line 1638
        echo twig_safe_filter((isset($context['IsEmailIntegrationLoggingEnabled']) ? $context['IsEmailIntegrationLoggingEnabled'] : null));
        echo ">";
        echo getLang("ActionsToLogEmailIntegration");
        echo "</option>
\t\t\t\t\t\t\t\t<option value=\"ebay\" ";
        // line 1639
        echo twig_safe_filter((isset($context['IsEbayLoggingEnabled']) ? $context['IsEbayLoggingEnabled'] : null));
        echo ">";
        echo getLang("ActionsToLogEbay");
        echo "</option>
\t\t\t\t\t\t\t\t<option value=\"shoppingcomparison\" ";
        // line 1640
        echo twig_safe_filter((isset($context['IsShoppingComparisonLoggingEnabled']) ? $context['IsShoppingComparisonLoggingEnabled'] : null));
        echo ">";
        echo getLang("ActionsToLogShoppingComparison");
        echo "</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr class=\"SystemLoggingToggle\">
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t&nbsp;&nbsp; ";
        // line 1646
        echo getLang("TypesOfMessages");
        echo ":
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td style=\"padding-left: 28px\">
\t\t\t\t\t\t\t<select name=\"SystemLogSeverity[]\" id=\"SystemLogSeverity\" multiple=\"multiple\" size=\"7\" class=\"Field250 ISSelectReplacement\">
\t\t\t\t\t\t\t\t<option value=\"errors\" ";
        // line 1650
        echo twig_safe_filter((isset($context['IsLoggingSeverityErrors']) ? $context['IsLoggingSeverityErrors'] : null));
        echo ">";
        echo getLang("TypesOfMessagesErrors");
        echo "</option>
\t\t\t\t\t\t\t\t<option value=\"warnings\" ";
        // line 1651
        echo twig_safe_filter((isset($context['IsLoggingSeverityWarnings']) ? $context['IsLoggingSeverityWarnings'] : null));
        echo ">";
        echo getLang("TypesOfMessagesWarnings");
        echo "</option>
\t\t\t\t\t\t\t\t<option value=\"success\" ";
        // line 1652
        echo twig_safe_filter((isset($context['IsLoggingSeveritySuccesses']) ? $context['IsLoggingSeveritySuccesses'] : null));
        echo ">";
        echo getLang("TypesOfMessagesSuccesses");
        echo "</option>
\t\t\t\t\t\t\t\t<option value=\"notices\" ";
        // line 1653
        echo twig_safe_filter((isset($context['IsLoggingSeverityNotices']) ? $context['IsLoggingSeverityNotices'] : null));
        echo ">";
        echo getLang("TypesOfMessagesNotices");
        echo "</option>
\t\t\t\t\t\t\t\t<option value=\"debug\" ";
        // line 1654
        echo twig_safe_filter((isset($context['IsLoggingSeverityDebug']) ? $context['IsLoggingSeverityDebug'] : null));
        echo ">";
        echo getLang("TypesOfMessagesDebug");
        echo "</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr class=\"SystemLoggingToggle\">
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t&nbsp;&nbsp; <label for=\"SystemLogMaxLength\">";
        // line 1660
        echo getLang("RestrictLogTo");
        echo ":</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td style=\"padding-left: 28px\">
\t\t\t\t\t\t\t<input type=\"text\" name=\"SystemLogMaxLength\" id=\"SystemLogMaxLength\" value=\"";
        // line 1663
        echo twig_safe_filter((isset($context['SystemLogMaxLength']) ? $context['SystemLogMaxLength'] : null));
        echo "\" class=\"Field40\" /> ";
        echo getLang("MostRecentEntries");
        echo "\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('logging2');\" onmouseover=\"ShowHelp('logging2', '";
        // line 1664
        echo getLang("RestrictLogTo");
        echo "', '";
        echo getLang("RestrictLogToHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t\t<div style=\"display:none\" id=\"logging2\"></div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t&nbsp;&nbsp; ";
        // line 1670
        echo getLang("HidePHPErrors");
        echo "?
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<label style=\"padding-left: 4px;\" for=\"HidePHPErrors\"><input ";
        // line 1673
        echo twig_safe_filter((isset($context['IsHidePHPErrorsEnabled']) ? $context['IsHidePHPErrorsEnabled'] : null));
        echo " type=\"checkbox\" name=\"HidePHPErrors\" id=\"HidePHPErrors\" value=\"1\" />";
        echo getLang("YesHidePHPErrors");
        echo "</label>
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('logging22');\" onmouseover=\"ShowHelp('logging22', '";
        // line 1674
        echo getLang("HidePHPErrors");
        echo "?', '";
        echo getLang("HidePHPErrorsHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t\t<div style=\"display:none\" id=\"logging22\"></div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t&nbsp;&nbsp; ";
        // line 1680
        echo getLang("EnableDebugMode");
        echo "?
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<label style=\"padding-left: 4px;\" for=\"DebugMode\"><input ";
        // line 1683
        echo twig_safe_filter((isset($context['IsDebugModeEnabled']) ? $context['IsDebugModeEnabled'] : null));
        echo " type=\"checkbox\" name=\"DebugMode\" id=\"DebugMode\" value=\"1\" />";
        echo getLang("YesEnableDebugMode");
        echo "</label>
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('logging23');\" onmouseover=\"ShowHelp('logging23', '";
        // line 1684
        echo getLang("EnableDebugMode");
        echo "?', '";
        echo getLang("EnableDebugModeHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t\t<div style=\"display:none\" id=\"logging23\"></div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t</table>

\t\t\t\t<table width=\"100%\" class=\"Panel\" style=\"display: ";
        // line 1690
        echo twig_safe_filter((isset($context['HideStaffLogs']) ? $context['HideStaffLogs'] : null));
        echo "\">
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"Heading2\" colspan=\"2\">";
        // line 1692
        echo getLang("AdministratorLogging");
        echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t&nbsp;&nbsp; ";
        // line 1696
        echo getLang("EnableAdministratorLogging");
        echo "?
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<label style=\"padding-left: 4px;\" for=\"EnableAdministratorLogging\"><input ";
        // line 1699
        echo twig_safe_filter((isset($context['IsAdministratorLoggingEnabled']) ? $context['IsAdministratorLoggingEnabled'] : null));
        echo " type=\"checkbox\" name=\"AdministratorLogging\" id=\"EnableAdministratorLogging\" value=\"ON\" onclick=\"ToggleAdministratorLogging()\" /> ";
        echo getLang("YesEnableAdministratorLogging");
        echo "</label>
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('logging3');\" onmouseover=\"ShowHelp('logging3', '";
        // line 1700
        echo getLang("EnableAdministratorLogging");
        echo "?', '";
        echo getLang("EnableAdministratorLoggingHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t\t<div style=\"display:none\" id=\"logging3\"></div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr class=\"AdministratorLoggingToggle\">
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t&nbsp;&nbsp; <label for=\"AdministratorLogMaxLength\">";
        // line 1706
        echo getLang("RestrictLogTo");
        echo ":</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<span style=\"padding-left: 28px;\"><input type=\"text\" name=\"AdministratorLogMaxLength\" id=\"AdministratorLogMaxLength\" value=\"";
        // line 1709
        echo twig_safe_filter((isset($context['AdministratorLogMaxLength']) ? $context['AdministratorLogMaxLength'] : null));
        echo "\" class=\"Field40\" /> ";
        echo getLang("MostRecentEntries");
        echo "\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('RestrictLogHelp');\" onmouseover=\"ShowHelp('RestrictLogHelp', '";
        // line 1711
        echo getLang("RestrictLogTo");
        echo "', '";
        echo getLang("RestrictLogToHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t\t<div style=\"display:none\" id=\"RestrictLogHelp\"></div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>

\t\t\t\t</table>
\t\t\t</div>

\t\t\t<div id=\"div6\" style=\"padding-top: 10px; display: none\">
\t\t\t\t<table width=\"100%\" class=\"Panel\">
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"Heading2\" colspan=\"2\">";
        // line 1722
        echo getLang("VendorSettings");
        echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t&nbsp;&nbsp; ";
        // line 1726
        echo getLang("VendorLogoUploading");
        echo ":
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"VendorLogoUploading\" id=\"VendorLogoUploading\" value=\"1\" ";
        // line 1730
        echo twig_safe_filter((isset($context['VendorLogoUploadingChecked']) ? $context['VendorLogoUploadingChecked'] : null));
        echo " onclick=\"\$(this).parent().siblings('.CheckToggle').toggle();\" /> ";
        echo getLang("YesAllowVendorLogoUploading");
        echo "\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('VendorLogoUploadingHelp');\" onmouseover=\"ShowHelp('VendorLogoUploadingHelp', '";
        // line 1732
        echo getLang("VendorLogoUploading");
        echo "', '";
        echo getLang("VendorLogoUploadingHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t\t<div style=\"display:none\" id=\"VendorLogoUploadingHelp\"></div>
\t\t\t\t\t\t\t<div style=\"";
        // line 1734
        echo twig_safe_filter((isset($context['HideVendorLogoUploading']) ? $context['HideVendorLogoUploading'] : null));
        echo "\" class=\"CheckToggle\">
\t\t\t\t\t\t\t\t<img src=\"images/nodejoin.gif\" alt=\"\" />
\t\t\t\t\t\t\t\t";
        // line 1736
        echo getLang("MaximumImageDimensions");
        echo ":
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"VendorLogoSizeW\" id=\"VendorLogoSizeW\" value=\"";
        // line 1737
        echo twig_safe_filter((isset($context['VendorLogoSizeW']) ? $context['VendorLogoSizeW'] : null));
        echo "\" class=\"Field40\" />
\t\t\t\t\t\t\t\tx
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"VendorLogoSizeH\" id=\"VendorLogoSizeH\" value=\"";
        // line 1739
        echo twig_safe_filter((isset($context['VendorLogoSizeH']) ? $context['VendorLogoSizeH'] : null));
        echo "\" class=\"Field40\" />
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\" style=\"vertical-align: top\">
\t\t\t\t\t\t\t&nbsp;&nbsp; ";
        // line 1745
        echo getLang("VendorPhotoUploading");
        echo ":
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"VendorPhotoUploading\" id=\"VendorPhotoUploading\" value=\"1\" ";
        // line 1749
        echo twig_safe_filter((isset($context['VendorPhotoUploadingChecked']) ? $context['VendorPhotoUploadingChecked'] : null));
        echo " onclick=\"\$(this).parent().siblings('.CheckToggle').toggle();\" /> ";
        echo getLang("YesAllowVendorPhotoUploading");
        echo "\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('VendorPhotoUploadingHelp');\" onmouseover=\"ShowHelp('VendorPhotoUploadingHelp', '";
        // line 1751
        echo getLang("VendorPhotoUploading");
        echo "', '";
        echo getLang("VendorPhotoUploadingHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t\t<div style=\"display:none\" id=\"VendorPhotoUploadingHelp\"></div>
\t\t\t\t\t\t\t<div style=\"";
        // line 1753
        echo twig_safe_filter((isset($context['HideVendorPhotoUploading']) ? $context['HideVendorPhotoUploading'] : null));
        echo "\" class=\"CheckToggle\">
\t\t\t\t\t\t\t\t<img src=\"images/nodejoin.gif\" alt=\"\" />
\t\t\t\t\t\t\t\t";
        // line 1755
        echo getLang("MaximumImageDimensions");
        echo ":
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"VendorPhotoSizeW\" id=\"VendorPhotoSizeW\" value=\"";
        // line 1756
        echo twig_safe_filter((isset($context['VendorPhotoSizeW']) ? $context['VendorPhotoSizeW'] : null));
        echo "\" class=\"Field40\" />
\t\t\t\t\t\t\t\tx
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"VendorPhotoSizeH\" id=\"VendorPhotoSizeH\" value=\"";
        // line 1758
        echo twig_safe_filter((isset($context['VendorPhotoSizeH']) ? $context['VendorPhotoSizeH'] : null));
        echo "\" class=\"Field40\" />
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t</table>
\t\t\t</div>

\t\t\t<div id=\"div7\" style=\"padding-top: 10px;\">
\t\t\t\t<table width=\"100%\" class=\"Panel\">
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"Heading2\" colspan=\"2\">";
        // line 1768
        echo getLang("CustomerGroupsSettings");
        echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t&nbsp;&nbsp; <label for=\"GuestCustomerGroup\">";
        // line 1772
        echo getLang("GuestCustomerGroup");
        echo ":</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<select name=\"GuestCustomerGroup\" id=\"GuestCustomerGroup\" size=\"5\" class=\"Field250\">
\t\t\t\t\t\t\t\t<option value=\"0\">";
        // line 1776
        echo getLang("GuestCustomerGroupNone");
        echo "</option>
\t\t\t\t\t\t\t\t";
        // line 1777
        echo twig_safe_filter((isset($context['CustomerGroupOptions']) ? $context['CustomerGroupOptions'] : null));
        echo "
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('GuestCustomerGroupHelp');\" onmouseover=\"ShowHelp('GuestCustomerGroupHelp', '";
        // line 1779
        echo getLang("GuestCustomerGroup");
        echo "', '";
        echo getLang("GuestCustomerGroupHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t\t<div style=\"display:none\" id=\"GuestCustomerGroupHelp\"></div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t</table>
\t\t\t\t<br />
\t\t\t\t<table width=\"100%\" class=\"Panel\">
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"Heading2\" colspan=\"2\">";
        // line 1787
        echo getLang("GoogleMapsSettings");
        echo "</td>
\t\t\t\t\t</tr>

\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t&nbsp;&nbsp; <label for=\"BackupsLocal\">";
        // line 1792
        echo getLang("GoogleMapsAPIKey");
        echo ":</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<input type=\"text\" name=\"GoogleMapsAPIKey\" id=\"GoogleMapsAPIKey\" value=\"";
        // line 1795
        echo twig_safe_filter((isset($context['GoogleMapsAPIKey']) ? $context['GoogleMapsAPIKey'] : null));
        echo "\" class=\"Field250\" />
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('gmapapikey');\" onmouseover=\"ShowHelp('gmapapikey', '";
        // line 1796
        echo getLang("GoogleMapsAPIKey");
        echo "', '";
        echo getLang("GoogleMapsAPIKeyHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t\t<div style=\"display:none\" id=\"gmapapikey\"></div>
\t\t\t\t\t\t\t<div style=\"padding-top:2px\">
\t\t\t\t\t\t\t\t<a href=\"http://www.google.com/apis/maps/signup.html\" target=\"_blank\" style=\"color:gray\">";
        // line 1799
        echo getLang("GoogleMapsAPILinkText");
        echo "</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t</table>
\t\t\t\t<br />
\t\t\t\t<table width=\"100%\" class=\"Panel\" style=\"";
        // line 1805
        echo twig_safe_filter((isset($context['HideProxyFields']) ? $context['HideProxyFields'] : null));
        echo "\">
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"Heading2\" colspan=\"2\">";
        // line 1807
        echo getLang("HTTPProxySettings");
        echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t<span class=\"Required\">&nbsp;</span> <label for=\"HTTPProxyServer\">";
        // line 1811
        echo getLang("HTTPProxyServer");
        echo ":</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<input type=\"text\" name=\"HTTPProxyServer\" id=\"HTTPProxyServer\" value=\"";
        // line 1814
        echo twig_safe_filter((isset($context['HTTPProxyServer']) ? $context['HTTPProxyServer'] : null));
        echo "\" class=\"Field250\" />
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('hp1');\" onmouseover=\"ShowHelp('hp1', '";
        // line 1815
        echo getLang("HTTPProxyServer");
        echo "', '";
        echo getLang("HTTPProxyServerHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t\t<div style=\"display:none\" id=\"hp1\"></div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t<span class=\"Required\">&nbsp;</span> <label for=\"HTTPProxyPort\">";
        // line 1821
        echo getLang("HTTPProxyPort");
        echo ":</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<input type=\"text\" name=\"HTTPProxyPort\" id=\"HTTPProxyPort\" value=\"";
        // line 1824
        echo twig_safe_filter((isset($context['HTTPProxyPort']) ? $context['HTTPProxyPort'] : null));
        echo "\" class=\"Field250\" />
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('hp2');\" onmouseover=\"ShowHelp('hp2', '";
        // line 1825
        echo getLang("HTTPProxyPort");
        echo "', '";
        echo getLang("HTTPProxyPortHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t\t<div style=\"display:none\" id=\"hp2\"></div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t<span class=\"Required\">&nbsp;</span> <label for=\"HTTPSSLVerifyPeer\">";
        // line 1831
        echo getLang("HTTPSSLVerifyPeer");
        echo ":</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t<input ";
        // line 1834
        echo twig_safe_filter((isset($context['IsHTTPSSLVerifyPeerEnabled']) ? $context['IsHTTPSSLVerifyPeerEnabled'] : null));
        echo " type=\"checkbox\" name=\"HTTPSSLVerifyPeer\" id=\"HTTPSSLVerifyPeer\" value=\"ON\" /> <label for=\"HTTPSSLVerifyPeer\">";
        echo getLang("YesHTTPSSLVerifyPeer");
        echo "</label>
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('hp3');\" onmouseover=\"ShowHelp('hp3', '";
        // line 1835
        echo getLang("HTTPSSLVerifyPeer");
        echo "', '";
        echo getLang("HTTPSSLVerifyPeerHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t\t<div style=\"display:none\" id=\"hp3\"></div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t</table>
\t\t\t\t<br />
\t\t\t\t<table width=\"100%\" class=\"Panel\">
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"Heading2\" colspan=\"2\">";
        // line 1843
        echo getLang("OrderSettings");
        echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t\t";
        // line 1845
        if ((!$this->getAttribute((isset($context['ISC_CFG']) ? $context['ISC_CFG'] : null), "HideDeletedOrdersActionSetting", array(), "any"))) {
            echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t\t<span class=\"Required\">*</span> <label for=\"DeletedOrdersAction\">";
            // line 1848
            echo getLang("DeletedOrders");
            echo ":</label>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<label><input type=\"radio\" name=\"DeletedOrdersAction\" value=\"delete\" ";
            // line 1851
            if ((isset($context['DeletedOrdersAction']) ? $context['DeletedOrdersAction'] : null) == "delete") {
                echo "checked=\"checked\"";
            }
            echo " /> ";
            echo getLang("DeletedOrdersAction_Delete");
            echo "</label> <img onmouseout=\"HideHelp('DeletedOrdersActionHelp');\" onmouseover=\"ShowHelp('DeletedOrdersActionHelp', '";
            echo Interspire_Template_Extension::jsFilter(getLang("DeletedOrders"), "'");
            echo "', '";
            echo Interspire_Template_Extension::jsFilter(getLang("DeletedOrdersActionHelp"), "'");
            echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" /><div style=\"display:none\" id=\"DeletedOrdersActionHelp\"></div><br />
\t\t\t\t\t\t\t\t<label><input type=\"radio\" name=\"DeletedOrdersAction\" value=\"purge\" ";
            // line 1852
            if ((isset($context['DeletedOrdersAction']) ? $context['DeletedOrdersAction'] : null) == "purge") {
                echo "checked=\"checked\"";
            }
            echo " /> ";
            echo getLang("DeletedOrdersAction_Purge");
            echo "</label><br />
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
        }
        // line 1855
        echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t<span class=\"Required\">&nbsp;</span> <label for=\"StartingOrderNumber\">";
        // line 1858
        echo getLang("StartingOrderNumber");
        echo ":</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<input id=\"StartingOrderNumber\" name=\"StartingOrderNumber\" value=\"";
        // line 1861
        echo twig_safe_filter((isset($context['StartingOrderNumber']) ? $context['StartingOrderNumber'] : null));
        echo "\" type=\"text\" class=\"Field70\" />
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('hStartingOrderNumber');\" onmouseover=\"ShowHelp('hStartingOrderNumber', '";
        // line 1862
        echo getLang("StartingOrderNumber");
        echo "', '";
        echo getLang("StartingOrderNumberHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t\t<div style=\"display:none\" id=\"hStartingOrderNumber\"></div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t<span class=\"Required\">&nbsp;</span> <label for=\"AbandonOrderLifetime\">";
        // line 1868
        echo getLang("AbandonOrderLifetime");
        echo ":</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<select name=\"AbandonOrderLifetime\" id=\"AbandonOrderLifetime\" class=\"Field70\">
\t\t\t\t\t\t\t\t";
        // line 1872
        echo twig_safe_filter((isset($context['AbandonOrderLifetimeOptions']) ? $context['AbandonOrderLifetimeOptions'] : null));
        echo "
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('hAbandonOrder');\" onmouseover=\"ShowHelp('hAbandonOrder', '";
        // line 1874
        echo getLang("AbandonOrderLifetime");
        echo "', '";
        echo getLang("AbandonOrderLifetimeHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t\t<div style=\"display:none\" id=\"hAbandonOrder\"></div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t</table>
\t\t\t\t";
        // line 1879
        if ((isset($context['ShowPCISettings']) ? $context['ShowPCISettings'] : null)) {
            echo "\t\t\t\t<br />
\t\t\t\t<table width=\"100%\" class=\"Panel\">
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"Heading2\" colspan=\"2\">";
            // line 1883
            echo getLang("PCISettingsPanel");
            echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t<label for=\"PCIPasswordMinLen\">";
            // line 1887
            echo getLang("PCIPasswordMinLen");
            echo ":</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<input id=\"PCIPasswordMinLen\" name=\"PCIPasswordMinLen\" value=\"";
            // line 1890
            echo twig_safe_filter((isset($context['PCIPasswordMinLen']) ? $context['PCIPasswordMinLen'] : null));
            echo "\" type=\"text\" class=\"Field40\" />
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('hPCIPasswordMinLen');\" onmouseover=\"ShowHelp('hPCIPasswordMinLen', '";
            // line 1891
            echo getLang("PCIPasswordMinLen");
            echo "', '";
            echo getLang("PCIPasswordMinLenHelp");
            echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t\t<div style=\"display:none\" id=\"hPCIPasswordMinLen\"></div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t<label for=\"PCIPasswordHistoryCount\">";
            // line 1897
            echo getLang("PCIPasswordHistoryCount");
            echo ":</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<input id=\"PCIPasswordHistoryCount\" name=\"PCIPasswordHistoryCount\" value=\"";
            // line 1900
            echo twig_safe_filter((isset($context['PCIPasswordHistoryCount']) ? $context['PCIPasswordHistoryCount'] : null));
            echo "\" type=\"text\" class=\"Field40\" />
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('hPCIPasswordHistoryCount');\" onmouseover=\"ShowHelp('hPCIPasswordHistoryCount', '";
            // line 1901
            echo getLang("PCIPasswordHistoryCount");
            echo "', '";
            echo getLang("PCIPasswordHistoryCountHelp");
            echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t\t<div style=\"display:none\" id=\"hPCIPasswordHistoryCount\"></div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t<label for=\"PCIPasswordExpiryTimeDay\">";
            // line 1907
            echo getLang("PCIPasswordExpiryTimeDay");
            echo ":</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<input id=\"PCIPasswordExpiryTimeDay\" name=\"PCIPasswordExpiryTimeDay\" value=\"";
            // line 1910
            echo twig_safe_filter((isset($context['PCIPasswordExpiryTimeDay']) ? $context['PCIPasswordExpiryTimeDay'] : null));
            echo "\" type=\"text\" class=\"Field40\" /> days
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('hPCIPasswordExpiryTimeDay');\" onmouseover=\"ShowHelp('hPCIPasswordExpiryTimeDay', '";
            // line 1911
            echo getLang("PCIPasswordExpiryTimeDay");
            echo "', '";
            echo getLang("PCIPasswordExpiryTimeDayHelp");
            echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t\t<div style=\"display:none\" id=\"hPCIPasswordExpiryTimeDay\"></div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t<label for=\"PCILoginAttemptCount\">";
            // line 1917
            echo getLang("PCILoginAttemptCount");
            echo ":</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<input id=\"PCILoginAttemptCount\" name=\"PCILoginAttemptCount\" value=\"";
            // line 1920
            echo twig_safe_filter((isset($context['PCILoginAttemptCount']) ? $context['PCILoginAttemptCount'] : null));
            echo "\" type=\"text\" class=\"Field40\" />
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('hPCILoginAttemptCount');\" onmouseover=\"ShowHelp('hPCILoginAttemptCount', '";
            // line 1921
            echo getLang("PCILoginAttemptCount");
            echo "', '";
            echo getLang("PCILoginAttemptCountHelp");
            echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t\t<div style=\"display:none\" id=\"hPCILoginAttemptCount\"></div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t<label for=\"PCILoginLockoutTimeMin\">";
            // line 1927
            echo getLang("PCILoginLockoutTimeMin");
            echo ":</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<input id=\"PCILoginLockoutTimeMin\" name=\"PCILoginLockoutTimeMin\" value=\"";
            // line 1930
            echo twig_safe_filter((isset($context['PCILoginLockoutTimeMin']) ? $context['PCILoginLockoutTimeMin'] : null));
            echo "\" type=\"text\" class=\"Field40\" /> minutes
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t<label for=\"PCILoginIdleTimeMin\">";
            // line 1935
            echo getLang("PCILoginIdleTimeMin");
            echo ":</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<input id=\"PCILoginIdleTimeMin\" name=\"PCILoginIdleTimeMin\" value=\"";
            // line 1938
            echo twig_safe_filter((isset($context['PCILoginIdleTimeMin']) ? $context['PCILoginIdleTimeMin'] : null));
            echo "\" type=\"text\" class=\"Field40\" /> minutes
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('hPCILoginIdleTimeMin');\" onmouseover=\"ShowHelp('hPCILoginIdleTimeMin', '";
            // line 1939
            echo getLang("PCILoginIdleTimeMin");
            echo "', '";
            echo getLang("PCILoginIdleTimeMinHelp");
            echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t\t<div style=\"display:none\" id=\"hPCILoginIdleTimeMin\"></div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t<label for=\"PCILoginInactiveTimeDay\">";
            // line 1945
            echo getLang("PCILoginInactiveTimeDay");
            echo ":</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<input id=\"PCILoginInactiveTimeDay\" name=\"PCILoginInactiveTimeDay\" value=\"";
            // line 1948
            echo twig_safe_filter((isset($context['PCILoginInactiveTimeDay']) ? $context['PCILoginInactiveTimeDay'] : null));
            echo "\" type=\"text\" class=\"Field40\" /> days
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('hPCILoginInactiveTimeDay');\" onmouseover=\"ShowHelp('hPCILoginInactiveTimeDay', '";
            // line 1949
            echo getLang("PCILoginInactiveTimeDay");
            echo "', '";
            echo getLang("PCILoginInactiveTimeDayHelp");
            echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t\t<div style=\"display:none\" id=\"hPCILoginInactiveTimeDay\"></div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t</table>
\t\t\t\t";
        }
        // line 1954
        echo "\t\t\t</div>

\t\t\t<table border=\"0\" cellspacing=\"0\" cellpadding=\"2\" width=\"100%\" class=\"PanelPlain\">
\t\t\t\t<tr>
\t\t\t\t\t<td width=\"200\" class=\"FieldLabel\">
\t\t\t\t\t\t&nbsp;
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<input type=\"submit\" disabled=\"disabled\" value=\"";
        // line 1963
        echo getLang("Save");
        echo "\" class=\"FormButton\" />
\t\t\t\t\t\t<input type=\"reset\" value=\"";
        // line 1964
        echo getLang("Cancel");
        echo "\" class=\"FormButton\" onclick=\"ConfirmCancel()\" />
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</table>

\t</tr>
\t</table>
\t</div>
\t</form>
\t<div id=\"stmpTestModal\" style=\"display: none;\">
\t\t<div class=\"ModalTitle\">";
        // line 1974
        echo getLang("TestSMTPSettings");
        echo "</div>
\t\t<div class=\"ModalContent\" style=\"padding:5px;\">
\t\t\t<div>
\t\t\t\t<div style=\"width: 208px; padding: 0px; margin: 10px auto 10px auto; position: relative; background: url('images/loadingAnimation.gif') no-repeat;\">
\t\t\t\t\t<div id=\"ProgressBarPercentage\" style=\"margin: 0; padding: 0; height: 13px; width: 0%; background: url('images/progressbar.gif') no-repeat; background-color: transparent;\">
\t\t\t\t\t\t&nbsp;
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div style=\"text-align: center; height: 20px;\" id=\"ProgressNote\">";
        // line 1983
        echo getLang("TestSMTPSettingsNote");
        echo "</div>
\t\t</div>
\t</div>
<script type=\"text/javascript\" src=\"script/product.images.reprocess.js?";
        // line 1986
        echo twig_escape_filter($this->env, (isset($context['JSCacheToken']) ? $context['JSCacheToken'] : null), "1");
        echo "\"></script>
<script type=\"text/javascript\">

\tProcessProductImages.lang['ModalTitle'] = '";
        // line 1989
        echo getLang("ProcessImagesModalTitle");
        echo "';
\tProcessProductImages.lang['ProcessProgress'] = '";
        // line 1990
        echo getLang("ProcessImagesProgress");
        echo "';
\tProcessProductImages.lang['ProcessFinished'] = '";
        // line 1991
        echo getLang("ProcessImagesFinished");
        echo "';

\tlang['ProductImagesStorewideThumbnailWidthInvalidValue']\t= '";
        // line 1993
        echo getLang("ProductImagesStorewideThumbnailWidthInvalidValue");
        echo "';
\tlang['ProductImagesStorewideThumbnailHeightInvalidValue'] = '";
        // line 1994
        echo getLang("ProductImagesStorewideThumbnailHeightInvalidValue");
        echo "';
\tlang['ProductImagesProductPageImageWidthInvalidValue']\t= '";
        // line 1995
        echo getLang("ProductImagesProductPageImageWidthInvalidValue");
        echo "';
\tlang['ProductImagesProductPageImageHeightInvalidValue']\t= '";
        // line 1996
        echo getLang("ProductImagesProductPageImageHeightInvalidValue");
        echo "';
\tlang['ProductImagesGalleryThumbnailWidthInvalidValue']\t= '";
        // line 1997
        echo getLang("ProductImagesGalleryThumbnailWidthInvalidValue");
        echo "';
\tlang['ProductImagesGalleryThumbnailHeightInvalidValue']\t= '";
        // line 1998
        echo getLang("ProductImagesGalleryThumbnailHeightInvalidValue");
        echo "';
\tlang['ProductImagesZoomImageWidthInvalidValue']\t= '";
        // line 1999
        echo getLang("ProductImagesZoomImageWidthInvalidValue");
        echo "';
\tlang['ProductImagesZoomImageHeightInvalidValue']\t= '";
        // line 2000
        echo getLang("ProductImagesZoomImageHeightInvalidValue");
        echo "';

\t\$(document).ready(function() {
\t\t\$('#ReprocessImages').bind('click', ProcessProductImages.launch);
\t});

\tfunction ShowTab(T) {
\t\ti = 0;
\t\twhile (document.getElementById(\"tab\" + i) != null) {
\t\t\tdocument.getElementById(\"div\" + i).style.display = \"none\";
\t\t\tdocument.getElementById(\"tab\" + i).className = \"\";
\t\t\ti++;
\t\t}

\t\tdocument.getElementById(\"div\" + T).style.display = \"\";
\t\tdocument.getElementById(\"tab\" + T).className = \"active\";

\t\tdocument.getElementById(\"currentTab\").value = T;
\t}

\tfunction ToggleDefaultProductImage()
\t{
\t\tif(\$('.DefaultProductImage:checked').val() == 'custom') {
\t\t\t\$('#DefaultProductImageCustomContainer').show();
\t\t}
\t\telse {
\t\t\t\$('#DefaultProductImageCustomContainer').hide();
\t\t}
\t}

\tfunction ToggleSystemLogging() {
\t\tvar siblings = \$('.SystemLoggingToggle');
\t\tif(g('EnableSystemLogging').checked) {
\t\t\tsiblings.show();
\t\t}
\t\telse {
\t\t\tsiblings.hide();
\t\t}
\t}
\tToggleSystemLogging();

\tfunction ToggleAdministratorLogging() {
\t\tvar siblings = \$('.AdministratorLoggingToggle');
\t\tif(g('EnableAdministratorLogging').checked) {
\t\t\tsiblings.show();
\t\t}
\t\telse {
\t\t\tsiblings.hide();
\t\t}
\t}
\tToggleAdministratorLogging();

\tfunction ConfirmCancel()
\t{
\t\tif(confirm(\"";
        // line 2054
        echo getLang("ConfirmCancelSettings");
        echo "\"))
\t\t\tdocument.location.href = \"index.php?ToDo=viewSettings\";
\t}

\t\$('#frmSettings').submit(function() {
\t\tvar StoreName = g(\"StoreName\");
\t\tvar StoreAddress = g(\"StoreAddress\");
\t\tvar SSL = g(\"SSL\");
\t\tvar SharedSSL = g(\"UseSharedSSL\");
\t\tvar SharedSSLPath = g(\"SharedSSLPath\");
\t\tvar SubdomainSSL = g(\"UseSubdomainSSL\");
\t\tvar SubdomainSSLPath = g(\"SubdomainSSLPath\");
\t\tvar ShopPath = g(\"ShopPath\");
\t\tvar CharacterSet = g(\"CharacterSet\");
\t\tvar MetaKeywords = g(\"MetaKeywords\");
\t\tvar MetaDesc = g(\"MetaDesc\");
\t\tvar DownloadDirectory = g(\"DownloadDirectory\");
\t\tvar ImageDirectory = g(\"ImageDirectory\");
\t\tvar serverStamp = g(\"serverStamp\");
\t\tvar AdminEmail = g(\"AdminEmail\");
\t\tvar OrderEmail = g(\"OrderEmail\");
\t\tvar DefaultTaxRate = g(\"DefaultTaxRate\");
\t\tvar WeightMeasurement = g(\"WeightMeasurement\");
\t\tvar LengthMeasurement = g(\"LengthMeasurement\");
\t\tvar DisplayDateFormat = g(\"DisplayDateFormat\");
\t\tvar ExportDateFormat = g(\"ExportDateFormat\");
\t\tvar ExtendedDisplayDateFormat = g(\"ExtendedDisplayDateFormat\");
\t\tvar CategoryPerRow = g(\"CategoryPerRow\");
\t\tvar CategoryImageWidth = g(\"CategoryImageWidth\");
\t\tvar CategoryImageHeight = g(\"CategoryImageHeight\");
\t\tvar CategoryDefaultImage = g(\"CategoryDefaultImage\");
\t\tvar BrandPerRow = g(\"BrandPerRow\");
\t\tvar BrandImageWidth = g(\"BrandImageWidth\");
\t\tvar BrandImageHeight = g(\"BrandImageHeight\");
\t\tvar BrandDefaultImage = g(\"BrandDefaultImage\");
\t\tvar HomeFeaturedProducts = g(\"HomeFeaturedProducts\");
\t\tvar HomeNewProducts = g(\"HomeNewProducts\");
\t\tvar HomeBlogPosts = g(\"HomeBlogPosts\");
\t\tvar CategoryProductsPerPage = g(\"CategoryProductsPerPage\");
\t\tvar CategoryListDepth = g(\"CategoryListDepth\");
\t\tvar ProductReviewsPerPage = g(\"ProductReviewsPerPage\");
\t\tvar TagCartQuantityBoxes = g(\"TagCartQuantityBoxes\");
\t\tvar TagCloudsEnabled = g(\"TagCloudsEnabled\");
\t\tvar ShowAddToCartQtyBox = g(\"ShowAddToCartQtyBox\");
\t\tvar CaptchaEnabled = g(\"CaptchaEnabled\");
\t\tvar ShowThumbsInCart = g(\"ShowThumbsInCart\");
\t\tvar ShowCartSuggestions = g(\"ShowCartSuggestions\");
\t\tvar AutoApproveReviews = g(\"AutoApproveReviews\");
\t\tvar RSSItemsLimit = g(\"RSSItemsLimit\");
\t\tvar RSSCacheTime = g(\"RSSCacheTime\");
\t\tvar HighestOrderNumber = parseInt('";
        // line 2104
        echo twig_safe_filter((isset($context['HighestOrderNumber']) ? $context['HighestOrderNumber'] : null));
        echo "');

\t\tif(StoreName.value == \"\") {
\t\t\tShowTab(0);
\t\t\talert(\"";
        // line 2108
        echo getLang("EnterStoreName");
        echo "\");
\t\t\tStoreName.focus();
\t\t\treturn false;
\t\t}

\t\tif(StoreAddress.value == \"\") {
\t\t\tShowTab(0);
\t\t\talert(\"";
        // line 2115
        echo getLang("EnterStoreAddress");
        echo "\");
\t\t\tStoreAddress.focus();
\t\t\treturn false;
\t\t}

\t\tif (SharedSSL.checked) {
\t\t\tif (SharedSSLPath.value == \"\" | SharedSSLPath.value == \"http://\") {
\t\t\t\tShowTab(0);
\t\t\t\talert(\"";
        // line 2123
        echo getLang("EnterSharedSSL");
        echo "\");
\t\t\t\tSharedSSLPath.focus();
\t\t\t\tSharedSSLPath.select();
\t\t\t\treturn false;
\t\t\t}
\t\t}
\t\telse if (SubdomainSSL.checked) {
\t\t\tif (SubdomainSSLPath.value == \"\" | SubdomainSSLPath.value == \"http://\") {
\t\t\t\tShowTab(0);
\t\t\t\talert(\"";
        // line 2132
        echo getLang("EnterSubdomainSSL");
        echo "\");
\t\t\t\tSubdomainSSLPath.focus();
\t\t\t\tSubdomainSSLPath.select();
\t\t\t\treturn false;
\t\t\t}
\t\t}

\t\tif(!\$(\"#NoSSL\").is(':checked') && \$('#UseControlPanelSSL').is(':checked')) {
\t\t\tif(!checkSSLWorks()) {
\t\t\t\tif(!confirm('";
        // line 2141
        echo getLang("SSLNotWorking");
        echo "')) {
\t\t\t\t\tShowTab(0);
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t}
\t\t}

\t\tif(ShopPath.value == \"\" || ShopPath.value == \"http://\") {
\t\t\tShowTab(0);
\t\t\talert(\"";
        // line 2150
        echo getLang("EnterShopPath");
        echo "\");
\t\t\tShopPath.focus();
\t\t\tShopPath.select();
\t\t\treturn false;
\t\t}

\t\tif('";
        // line 2156
        echo twig_escape_filter($this->env, (isset($context['CharacterSet']) ? $context['CharacterSet'] : null), "1");
        echo "' != \$('#CharacterSet').val()) {
\t\t\tvar confirmMsg = '";
        // line 2157
        echo Interspire_Template_Extension::jsFilter(getLang("ConfirmChangeCharacterSet"), "'");
        echo "';

\t\t\tif('";
        // line 2159
        echo twig_escape_filter($this->env, (isset($context['CharacterSet']) ? $context['CharacterSet'] : null), "1");
        echo "' == 'UTF-8') {
\t\t\t\tconfirmMsg = '";
        // line 2160
        echo Interspire_Template_Extension::jsFilter(getLang("ConfirmChangeCharacterSetUTF8"), "'");
        echo "';
\t\t\t}

\t\t\tif(!confirm(confirmMsg)) {
\t\t\t\tShowTab(0);
\t\t\t\t\$('#CharacterSet').focus();
\t\t\t\treturn false;
\t\t\t}
\t\t}

\t\tif(\$('#StartingOrderNumber').val() <= HighestOrderNumber) {
\t\t\tShowTab(7);
\t\t\tvar tooLowLang = '";
        // line 2172
        echo getLang("StartingOrderNumberTooLow");
        echo "';
\t\t\ttooLowLang = tooLowLang.replace(':currentHighest', HighestOrderNumber);
\t\t\ttooLowLang = tooLowLang.replace(':lowestPossible', (HighestOrderNumber+1));
\t\t\talert(tooLowLang);
\t\t\t\$('#StartingOrderNumber').focus();
\t\t\treturn false;
\t\t}

\t\tif(DownloadDirectory.value == \"\") {
\t\t\tShowTab(0);
\t\t\talert(\"";
        // line 2182
        echo getLang("EnterDownloadDirectory");
        echo "\");
\t\t\tDownloadDirectory.focus();
\t\t\treturn false;
\t\t}

\t\tif(ImageDirectory.value == \"\") {
\t\t\tShowTab(0);
\t\t\talert(\"";
        // line 2189
        echo getLang("EnterImageDirectory");
        echo "\");
\t\t\tImageDirectory.focus();
\t\t\treturn false;
\t\t}

\t\tif(serverStamp.value == \"\") {
\t\t\tShowTab(0);
\t\t\talert(\"";
        // line 2196
        echo getLang("EnterLicenseKey");
        echo "\");
\t\t\tserverStamp.focus();
\t\t\treturn false;
\t\t}

\t\tif(AdminEmail.value.indexOf(\"@\") == -1 || AdminEmail.value.indexOf(\".\") == -1) {
\t\t\tShowTab(0);
\t\t\talert(\"";
        // line 2203
        echo getLang("EnterValidAdminEmail");
        echo "\");
\t\t\tAdminEmail.focus();
\t\t\tAdminEmail.select();
\t\t\treturn false;
\t\t}

\t\tif (!ValidateSMTPSettings()) {
\t\t\treturn false;
\t\t} else {
\t\t\tif (smtpChecked == false) {
\t\t\t\tTestSMTPMailSettings(function() {
\t\t\t\t\t// submit again if test is successful
\t\t\t\t\t\$('#frmSettings').submit();
\t\t\t\t});
\t\t\t\treturn false;
\t\t\t}
\t\t}

\t\tif(OrderEmail.value.indexOf(\"@\") == -1 || OrderEmail.value.indexOf(\".\") == -1) {
\t\t\tShowTab(0);
\t\t\talert(\"";
        // line 2223
        echo getLang("EnterValidOrderEmail");
        echo "\");
\t\t\tOrderEmail.focus();
\t\t\tOrderEmail.select();
\t\t\treturn false;
\t\t}

\t\tif(!\$('#DimensionsDecimalToken').val()) {
\t\t\talert('";
        // line 2230
        echo getLang("EnterDecimalToken");
        echo "');
\t\t\t\$('#DimensionsDecimalToken').focus();
\t\t\t\$('#DimensionsDecimalToken').select();
\t\t\treturn false;
\t\t}

\t\tif(!\$('#DimensionsThousandsToken').val()) {
\t\t\talert('";
        // line 2237
        echo getLang("EnterThousandsToken");
        echo "');
\t\t\t\$('#DimensionsThousandsToken').focus();
\t\t\t\$('#DimensionsThousandsToken').select();
\t\t\treturn false;
\t\t}

\t\tif(!\$('#DimensionsDecimalPlaces').val() || isNaN(\$('#DimensionsDecimalPlaces').val())) {
\t\t\talert('";
        // line 2244
        echo getLang("EnterDecimalPlaces");
        echo "');
\t\t\t\$('#DimensionsDecimalPlaces').focus();
\t\t\t\$('#DimensionsDecimalPlaces').select();
\t\t\treturn false;
\t\t}

\t\tif(DisplayDateFormat.value == \"\") {
\t\t\tShowTab(1);
\t\t\talert(\"";
        // line 2252
        echo getLang("EnterDisplayDateFormat");
        echo "\");
\t\t\tDisplayDateFormat.focus();
\t\t\treturn false;
\t\t}

\t\tif(ExportDateFormat.value == \"\") {
\t\t\tShowTab(1);
\t\t\talert(\"";
        // line 2259
        echo getLang("EnterExportDateFormat");
        echo "\");
\t\t\tExportDateFormat.focus();
\t\t\treturn false;
\t\t}

\t\tif(ExtendedDisplayDateFormat.value == \"\") {
\t\t\tShowTab(1);
\t\t\talert(\"";
        // line 2266
        echo getLang("EnterExtendedDisplayDateFormat");
        echo "\");
\t\t\tExtendedDisplayDateFormat.focus();
\t\t\treturn false;
\t\t}

\t\tif(isNaN(HomeFeaturedProducts.value) || HomeFeaturedProducts.value == \"\") {
\t\t\tShowTab(2);
\t\t\talert(\"";
        // line 2273
        echo getLang("EnterHomeFeaturedProducts");
        echo "\");
\t\t\tHomeFeaturedProducts.focus();
\t\t\tHomeFeaturedProducts.select();
\t\t\treturn false;
\t\t}

\t\tif(isNaN(HomeNewProducts.value) || HomeNewProducts.value == \"\") {
\t\t\tShowTab(2);
\t\t\talert(\"";
        // line 2281
        echo getLang("EnterHomeNewProducts");
        echo "\");
\t\t\tHomeNewProducts.focus();
\t\t\tHomeNewProducts.select();
\t\t\treturn false;
\t\t}

\t\tif(isNaN(HomeBlogPosts.value) || HomeBlogPosts.value == \"\") {
\t\t\tShowTab(2);
\t\t\talert(\"";
        // line 2289
        echo getLang("EnterHomeBlogPosts");
        echo "\");
\t\t\tHomeBlogPosts.focus();
\t\t\tHomeBlogPosts.select();
\t\t\treturn false;
\t\t}

\t\tif(\$('.DefaultProductImage:checked').val() == 'custom') {
\t\t\tif((\$('#DefaultProductImageCustomCurrent').css('display') == 'none' || \$('#DefaultProductImageCustom').val()) && !IsValidImageExtension(\$('#DefaultProductImageCustom').val())) {
\t\t\t\tShowTab(2);
\t\t\t\talert('";
        // line 2298
        echo getLang("ChooseDefaultProductImageUpload");
        echo "');
\t\t\t\t\$('#DefaultProductImageCustom').focus();
\t\t\t\treturn false;
\t\t\t}
\t\t}

\t\tif(isNaN(CategoryProductsPerPage.value) || CategoryProductsPerPage.value == \"\") {
\t\t\tShowTab(2);
\t\t\talert(\"";
        // line 2306
        echo getLang("EnterCategoryProductsPerPage");
        echo "\");
\t\t\tCategoryProductsPerPage.focus();
\t\t\tCategoryProductsPerPage.select();
\t\t\treturn false;
\t\t}

\t\tif(isNaN(CategoryListDepth.value) || CategoryListDepth.value == \"\" || CategoryListDepth.value<=0) {
\t\t\tShowTab(2);
\t\t\talert(\"";
        // line 2314
        echo getLang("EnterCategoryListDepth");
        echo "\");
\t\t\tCategoryListDepth.focus();
\t\t\tCategoryListDepth.select();
\t\t\treturn false;
\t\t}

\t\tif(isNaN(ProductReviewsPerPage.value) || ProductReviewsPerPage.value == \"\") {
\t\t\tShowTab(2);
\t\t\talert(\"";
        // line 2322
        echo getLang("EnterProductReviewsPerPage");
        echo "\");
\t\t\tProductReviewsPerPage.focus();
\t\t\tProductReviewsPerPage.select();
\t\t\treturn false;
\t\t}

\t\tif(isNaN(CategoryPerRow.value) || CategoryPerRow.value == \"\" || CategoryPerRow.value <= 0) {
\t\t\tShowTab(2);
\t\t\talert(\"";
        // line 2330
        echo getLang("EnterCategoryPerRow");
        echo "\");
\t\t\tCategoryPerRow.focus();
\t\t\tCategoryPerRow.select();
\t\t\treturn false;
\t\t}

\t\tif(isNaN(BrandPerRow.value) || BrandPerRow.value == \"\" || BrandPerRow.value <= 0) {
\t\t\tShowTab(2);
\t\t\talert(\"";
        // line 2338
        echo getLang("EnterBrandPerRow");
        echo "\");
\t\t\tBrandPerRow.focus();
\t\t\tBrandPerRow.select();
\t\t\treturn false;
\t\t}

\t\tif(isNaN(CategoryImageWidth.value) || CategoryImageWidth.value == \"\") {
\t\t\tShowTab(2);
\t\t\talert(\"";
        // line 2346
        echo getLang("EnterCategoryImageWidth");
        echo "\");
\t\t\tCategoryImageWidth.focus();
\t\t\tCategoryImageWidth.select();
\t\t\treturn false;
\t\t}

\t\tif(isNaN(CategoryImageHeight.value) || CategoryImageHeight.value == \"\") {
\t\t\tShowTab(2);
\t\t\talert(\"";
        // line 2354
        echo getLang("EnterCategoryImageHeight");
        echo "\");
\t\t\tCategoryImageHeight.focus();
\t\t\tCategoryImageHeight.select();
\t\t\treturn false;
\t\t}

\t\tif(isNaN(BrandImageWidth.value) || BrandImageWidth.value == \"\") {
\t\t\tShowTab(2);
\t\t\talert(\"";
        // line 2362
        echo getLang("EnterBrandImageWidth");
        echo "\");
\t\t\tBrandImageWidth.focus();
\t\t\tBrandImageWidth.select();
\t\t\treturn false;
\t\t}

\t\tif(isNaN(BrandImageHeight.value) || BrandImageHeight.value == \"\") {
\t\t\tShowTab(2);
\t\t\talert(\"";
        // line 2370
        echo getLang("EnterBrandImageHeight");
        echo "\");
\t\t\tBrandImageHeight.focus();
\t\t\tBrandImageHeight.select();
\t\t\treturn false;
\t\t}

\t\tif(CategoryDefaultImage.value != \"\") {
\t\t\t// Make sure it has a valid extension
\t\t\timg = CategoryDefaultImage.value.split(\".\");
\t\t\text = img[img.length-1].toLowerCase();

\t\t\tif(ext != \"jpg\" && ext != \"png\" && ext != \"gif\") {
\t\t\t\tShowTab(2);
\t\t\t\talert(\"";
        // line 2383
        echo getLang("ChooseValidImage");
        echo "\");
\t\t\t\tCategoryDefaultImage.focus();
\t\t\t\tCategoryDefaultImage.select();
\t\t\t\treturn false;
\t\t\t}
\t\t}

\t\tif(BrandDefaultImage.value != \"\") {
\t\t\t// Make sure it has a valid extension
\t\t\timg = BrandDefaultImage.value.split(\".\");
\t\t\text = img[img.length-1].toLowerCase();

\t\t\tif(ext != \"jpg\" && ext != \"png\" && ext != \"gif\") {
\t\t\t\tShowTab(2);
\t\t\t\talert(\"";
        // line 2397
        echo getLang("ChooseValidImage");
        echo "\");
\t\t\t\tBrandDefaultImage.focus();
\t\t\t\tBrandDefaultImage.select();
\t\t\t\treturn false;
\t\t\t}
\t\t}

\t\tif (\$('#FacebookLikeButtonEnabled').attr('checked') && !\$('#FacebookLikeButtonAdminIds').val()) {
\t\t\t// no admin id entered for facebook
\t\t\tShowTab(2);
\t\t\talert(\"";
        // line 2407
        echo Interspire_Template_Extension::jsFilter(getLang("FacebookAdminIdsRequired"), "'");
        echo "\");
\t\t\t\$('#FacebookLikeButtonAdminIds').focus();
\t\t\treturn false;
\t\t}

\t\t// check image sizes
\t\tvar imageSizeChanges = false;
\t\tvar imageValueProblem  = false;

\t\t\$('.SetOriginalImageSizeValue').each(function() {
\t\t\tif(isNaN(\$(this).val()) || \$(this).val() == '') {

\t\t\t\timageValueProblem = true;

\t\t\t\tvar LanguageVariableKey = \$(this).attr('id') + 'InvalidValue';
\t\t\t\tLanguageVariableKey = LanguageVariableKey.replace('_height', 'Height');
\t\t\t\tLanguageVariableKey = LanguageVariableKey.replace('_width', 'Width');

\t\t\t\tvar alertMsg = lang[LanguageVariableKey];

\t\t\t\tif(\$(this).val().indexOf('%') != -1 || \$(this).val().indexOf('px') != -1) {
\t\t\t\t\talertMsg += '";
        // line 2428
        echo getLang("EnterNumberForImageSizesMeasurements");
        echo "';
\t\t\t\t}

\t\t\t\tShowTab(8);
\t\t\t\talert(alertMsg);

\t\t\t\t\$(this).focus();
\t\t\t\t\$(this).select();

\t\t\t\treturn false;
\t\t\t}
\t\t});

\t\tif(imageValueProblem) {
\t\t\treturn false;
\t\t}

\t\t\$('.SetOriginalImageSizeValue').each(function() {
\t\t\tif(\$(this).val() != \$.data(this, \"origValue\")) {
\t\t\t\timageSizeChanges = true;
\t\t\t\treturn;
\t\t\t}
\t\t});

\t\tif(imageSizeChanges){
\t\t\tif(confirm('";
        // line 2453
        echo getLang("ShouldImagesBeResized");
        echo "')) {
\t\t\t\t\$('#AutoResizeImages').val('yes');
\t\t\t}
\t\t}

\t\tif(isNaN(\$('#TagCloudMinSize').val()) || \$('#TagCloudMinSize').val() == '') {
\t\t\tShowTab(2);
\t\t\talert('";
        // line 2460
        echo getLang("EnterTagCloudMinSize");
        echo "');
\t\t\t\$('#TagCloudMinSize').focus();
\t\t\t\$('#TagCloudMinSize').select();
\t\t\treturn false;
\t\t}

\t\tif(isNaN(\$('#TagCloudMaxSize').val()) || \$('#TagCloudMaxSize').val() == '') {
\t\t\tShowTab(2);
\t\t\talert('";
        // line 2468
        echo getLang("EnterTagCloudMaxSize");
        echo "');
\t\t\t\$('#TagCloudMaxSize').focus();
\t\t\t\$('#TagCloudMaxSize').select();
\t\t\treturn false;
\t\t}

\t\tif(isNaN(RSSItemsLimit.value) || RSSItemsLimit.value == \"\") {
\t\t\tShowTab(2);
\t\t\talert(\"";
        // line 2476
        echo getLang("EnterRSSItemsLimit");
        echo "\");
\t\t\tRSSItemsLimit.focus();
\t\t\tRSSItemsLimit.select();
\t\t\treturn false;
\t\t}

\t\tif(isNaN(RSSCacheTime.value)) {
\t\t\tShowTab(2);
\t\t\talert(\"";
        // line 2484
        echo getLang("EnterValidRSSCacheTime");
        echo "\");
\t\t\tRSSCacheTime.focus();
\t\t\tRSSCacheTime.select();
\t\t\treturn false;
\t\t}

\t\tif(ValidateFTPSettings() == false)
\t\t{
\t\t\treturn false;
\t\t}

\t\tif(\$(\"#BackupsAutomatic:checked\").val() && !\$(\"#BackupsAutomaticDatabase:checked\").val() && !\$(\"#BackupsAutomaticImages:checked\").val() && !\$(\"#BackupsAutomaticDownloads:checked\").val()) {
\t\t\talert(\"";
        // line 2496
        echo getLang("AtLeastOnAutomaticBackup");
        echo "\");
\t\t\treturn false;
\t\t}

\t\tif(!\$(\"#SearchResultsPerPage\").val() || isNaN(\$(\"#SearchResultsPerPage\").val())) {
\t\t\tShowTab(4);
\t\t\talert(\"";
        // line 2502
        echo getLang("EnterSearchResultsPerPage");
        echo "\");
\t\t\t\$(\"#SearchResultsPerPage\").focus();
\t\t\t\$(\"#SearchResultsPerPage\").select();
\t\t\treturn false;
\t\t}

\t\tif(\$('#tab5').css('display') != 'none') {
\t\t\tif(g('EnableSystemLogging').checked == true) {
\t\t\t\tvar f = g('SystemLogTypes');
\t\t\t\tif(f.selectedIndex == -1) {
\t\t\t\t\tShowTab(5);
\t\t\t\t\talert('";
        // line 2513
        echo getLang("SelectOneMoreLoggingTypes");
        echo "');
\t\t\t\t\tg('SystemLogTypes').focus();
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t\tvar f = g('SystemLogSeverity');
\t\t\t\tif(f.selectedIndex == -1) {
\t\t\t\t\tShowTab(5);
\t\t\t\t\talert('";
        // line 2520
        echo getLang("SelectOneMoreLoggingSeverities");
        echo "');
\t\t\t\t\tg('SystemLogSeverity').focus();
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t\tif(isNaN(g('SystemLogMaxLength').value) && g('SystemLogMaxLength').value != '') {
\t\t\t\t\tShowTab(5);
\t\t\t\t\talert('";
        // line 2526
        echo getLang("EnterValidSystemLogLength");
        echo "');
\t\t\t\t\tg('SystemLogMaxLength').focus();
\t\t\t\t\tg('SystemLogMaxLength').select();
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t}

\t\t\tif(g('EnableAdministratorLogging').checked == true) {
\t\t\t\tif(isNaN(g('AdministratorLogMaxLength').value) && g('AdministratorLogMaxLength').value != '') {
\t\t\t\t\tShowTab(5);
\t\t\t\t\talert('";
        // line 2536
        echo getLang("EnterValidAdministratorLogLength");
        echo "');
\t\t\t\t\tg('AdministratorLogMaxLength').focus();
\t\t\t\t\tg('AdministratorLogMaxLength').select();
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t}
\t\t}
\t\tif(\$('#tab6').css('display') != 'none') {
\t\t\tif(\$('#VendorLogoUploading:checked').val()) {
\t\t\t\tif(isNaN(\$('#VendorLogoSizeW').val()) && \$('#VendorLogoSizeW').val() != '') {
\t\t\t\t\talert('";
        // line 2546
        echo getLang("EnterVendorLogoSizeDimensions");
        echo "');
\t\t\t\t\tShowTab(6);
\t\t\t\t\t\$('#VendorLogoSizeW').focus();
\t\t\t\t\t\$('#VendorLogoSizeW').select();
\t\t\t\t\treturn false;
\t\t\t\t}

\t\t\t\tif(isNaN(\$('#VendorLogoSizeH').val()) && \$('#VendorLogoSizeH').val() != '') {
\t\t\t\t\talert('";
        // line 2554
        echo getLang("EnterVendorLogoSizeDimensions");
        echo "');
\t\t\t\t\tShowTab(6);
\t\t\t\t\t\$('#VendorLogoSizeH').focus();
\t\t\t\t\t\$('#VendorLogoSizeH').select();
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t}

\t\t\tif(\$('#VendorPhotoUploading:checked').val()) {
\t\t\t\tif(isNaN(\$('#VendorPhotoSizeW').val()) && \$('#VendorPhotoSizeW').val() != '') {
\t\t\t\t\talert('";
        // line 2564
        echo getLang("EnterVendorPhotoSizeDimensions");
        echo "');
\t\t\t\t\tShowTab(6);
\t\t\t\t\t\$('#VendorPhotoSizeW').focus();
\t\t\t\t\t\$('#VendorPhotoSizeW').select();
\t\t\t\t\treturn false;
\t\t\t\t}

\t\t\t\tif(isNaN(\$('#VendorPhotoSizeH').val()) && \$('#VendorPhotoSizeH').val() != '') {
\t\t\t\t\talert('";
        // line 2572
        echo getLang("EnterVendorPhotoSizeDimensions");
        echo "');
\t\t\t\t\tShowTab(6);
\t\t\t\t\t\$('#VendorPhotoSizeH').focus();
\t\t\t\t\t\$('#VendorPhotoSizeH').select();
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t}
\t\t}

\t\treturn true;
\t});

\tfunction TestSSL() {
\t\t// See if the site is capable of handling HTTPS requests
\t\tvar https_url = \"";
        // line 2586
        echo twig_safe_filter((isset($context['HTTPSUrl']) ? $context['HTTPSUrl'] : null));
        echo "\";

\t\talert(\"";
        // line 2588
        echo getLang("TestSSLText");
        echo "\");
\t\twindow.open(https_url);
\t}

\tfunction ToggleLocalBackups()
\t{
\t\tif(\$('#BackupsLocal:checked').val()) {
\t\t\t\$('#BackupsAutomaticLocal').attr('disabled', false);
\t\t\tCheckAutomaticBackups();
\t\t}
\t\telse {
\t\t\t\$('#BackupsAutomaticLocal').attr('disabled', true);
\t\t\tCheckAutomaticBackups();
\t\t}
\t}

\tfunction CheckAutomaticBackups()
\t{
\t\tif(!\$('#BackupsLocal:checked').val() && (!\$('#BackupsRemoteFTPContainer:visible') || !\$('#BackupsRemoteFTP:checked').val())) {
\t\t\t\$('#BackupsAutomatic').attr('disabled', true);
\t\t\t\$('#BackupsAutomatic').attr('checked', false);
\t\t\t\$('.BackupsAutomaticContainer').hide();
\t\t}
\t\telse {
\t\t\t\$('#BackupsAutomatic').attr('disabled', false);
\t\t\tToggleAutomaticBackups();
\t\t}
\t}

\tfunction ToggleFTPBackups()
\t{
\t\tif(\$('#BackupsRemoteFTPContainer:visible')) {
\t\t\tif(\$('#BackupsRemoteFTP:checked').val()) {
\t\t\t\t\$('#BackupsRemoteFTPSettings').show();
\t\t\t\t\$('#BackupsAutomaticFTP').attr('disabled', false);
\t\t\t}
\t\t\telse {
\t\t\t\t\$('#BackupsRemoteFTPSettings').hide();
\t\t\t\t\$('#BackupsAutomaticFTP').attr('disabled', true);
\t\t\t\t\$('#BackupsAutomaticMethod').get()[0].selectedIndex = 0;
\t\t\t}
\t\t}
\t\telse {
\t\t\t\$('#BackupsAutomaticFTP').attr('disabled', true);
\t\t\t\$('#BackupsAutomaticMethod').get()[0].selectedIndex = 0;
\t\t}
\t\tCheckAutomaticBackups();
\t}

\tfunction ToggleAutomaticBackups()
\t{
\t\tif(\$('#BackupsAutomatic:checked').val()) {
\t\t\t\$('.BackupsAutomaticContainer').show();
\t\t} else {
\t\t\t\$('.BackupsAutomaticContainer').hide();
\t\t}
\t}

\tToggleLocalBackups();
\tToggleAutomaticBackups();
\tToggleFTPBackups();

\tfunction DoTestFTPSettings() {
\t\tresult = ValidateFTPSettings();
\t\tif(result == false) return false;

\t\tvar host = \$('#BackupsRemoteFTPHost').val();
\t\tvar user = \$('#BackupsRemoteFTPUser').val();
\t\tvar pass = \$('#BackupsRemoteFTPPass').val();
\t\tvar path = \$('#BackupsRemoteFTPPath').val();

\t\t\$('#TestFTPSettings').attr('disabled', true);
\t\t\$('#TestFTPSettings').val('";
        // line 2660
        echo getLang("TestingFTPSettings");
        echo "');
\t\t\$('#TestFTPSettingsLoading').show();

\t\tjQuery.ajax({
\t\t\ttype: 'POST',
\t\t\turl: 'remote.php?w=TestFTPSettings',
\t\t\tdata: 'host='+host+'&user='+user+'&pass='+pass+'&path='+path,
\t\t\tdataType: 'script',
\t\t\tsuccess: function() {
\t\t\t\t\$('#TestFTPSettings').attr('disabled', false);
\t\t\t\t\$('#TestFTPSettings').val('";
        // line 2670
        echo getLang("TestFTPSettings");
        echo "');
\t\t\t\t\$('#TestFTPSettingsLoading').hide();
\t\t\t}
\t\t});
\t}

\tfunction ValidateFTPSettings()
\t{
\t\tif(\$('#BackupsRemoteFTPContainer:visible') && \$('#BackupsRemoteFTP:checked').val()) {
\t\t\tif(\$('#BackupsRemoteFTPHost').val() == '') {
\t\t\t\tShowTab(3);
\t\t\t\talert('";
        // line 2681
        echo getLang("EnterFTPHostname");
        echo "');
\t\t\t\t\$('#BackupsRemoteFTPHost').focus();
\t\t\t\t\$('#BackupsRemoteFTPHost').select();
\t\t\t\treturn false;
\t\t\t}
\t\t\tif(\$('#BackupsRemoteFTPUser').val() == '') {
\t\t\t\tShowTab(3);
\t\t\t\talert('";
        // line 2688
        echo getLang("EnterFTPUsername");
        echo "');
\t\t\t\t\$('#BackupsRemoteFTPUser').focus();
\t\t\t\t\$('#BackupsRemoteFTPUser').select();
\t\t\t\treturn false;
\t\t\t}
\t\t\tif(\$('#BackupsRemoteFTPPass').val() == '') {
\t\t\t\tShowTab(3);
\t\t\t\talert('";
        // line 2695
        echo getLang("EnterFTPPassword");
        echo "');
\t\t\t\t\$('#BackupsRemoteFTPPass').focus();
\t\t\t\t\$('#BackupsRemoteFTPPass').select();
\t\t\t\treturn false;
\t\t\t}
\t\t}
\t\treturn true;
\t}

\tfunction ToggleMailSettings() {
\t\tif(\$('#MailUseSMTP').attr('checked') == true) {
\t\t\t\$('.SMTPOptions').show();
\t\t}
\t\telse {
\t\t\t\$('.SMTPOptions').hide();
\t\t}
\t}

\tvar smtpChecked = true;
\tvar disableLoadingIndicator;

\tfunction startSMTPTest() {
\t\tif(!ValidateSMTPSettings()) {
\t\t\treturn;
\t\t}

\t\tTestSMTPMailSettings();
\t}

\tfunction TestSMTPMailSettings(callback) {
\t\t\$('#TestSMTPSettings').attr('disabled', true);
\t\t\$('#TestSMTPSettings').val('";
        // line 2726
        echo getLang("TestingSMTPSettings");
        echo "');

\t\tvar email = \$('#AdminEmail').val();
\t\tvar host = \$('#MailSMTPServer').val();
\t\tvar user = \$('#MailSMTPUsername').val();
\t\tvar pass = \$('#MailSMTPPassword').val();
\t\tvar port = \$('#MailSMTPPort').val();

\t\tdisableLoadingIndicator = true;
\t\t\$.iModal({
\t\t\ttype: 'inline',
\t\t\tinline: '#stmpTestModal',
\t\t\twidth: 400,
\t\t\tclose: false
\t\t});

\t\tjQuery.ajax({
\t\t\ttype: 'POST',
\t\t\turl: 'remote.php?w=TestSMTPSettings',
\t\t\tdata: 'AdminEmail='+escape(email)+'&MailSMTPServer='+escape(host)+'&MailSMTPUsername='+escape(user)+'&MailSMTPPassword='+escape(pass)+'&MailSMTPPort='+escape(port),
\t\t\tdataType: 'xml',
\t\t\tsuccess: function(xml) {
\t\t\t\t\$.iModal.close();

\t\t\t\t\$('#TestSMTPSettings').attr('disabled', false);
\t\t\t\t\$('#TestSMTPSettings').val('";
        // line 2751
        echo getLang("TestSMTPSettings");
        echo "');
\t\t\t\tvar message = \$('message', xml).text();
\t\t\t\tmessage = message.replace('\\\\n', '\\n');
\t\t\t\tmessage = message.replace('\\\\n', '\\n');
\t\t\t\tif(\$('status', xml).text() == 1) {
\t\t\t\t\tsmtpChecked = true;
\t\t\t\t\tif (callback) {
\t\t\t\t\t\tcallback.call(this);
\t\t\t\t\t} else {
\t\t\t\t\t\talert(message);
\t\t\t\t\t}
\t\t\t\t}
\t\t\t\telse {
\t\t\t\t\t// test failed
\t\t\t\t\tsmtpChecked = false;
\t\t\t\t\tShowTab(0);
\t\t\t\t\t\$('#MailSMTPServer').focus();
\t\t\t\t\talert(message);
\t\t\t\t}

\t\t\t\tdisableLoadingIndicator = false;
\t\t\t}
\t\t});
\t}

\tfunction ValidateSMTPSettings() {
\t\tif(\$('#MailUseSMTP').attr('checked') == true) {
\t\t\tif(!\$('#MailSMTPServer').val()) {
\t\t\t\talert('";
        // line 2779
        echo getLang("EnterSMTPServer");
        echo "');
\t\t\t\t\$('#MailSMTPServer').focus();
\t\t\t\treturn false;
\t\t\t}
\t\t}

\t\treturn true;
\t}

\tvar sslChecked = false;
\tvar sslWorks = false;

\tfunction checkSSLWorks() {
\t\tif(sslChecked) {
\t\t\treturn sslWorks;
\t\t}
\t\tsslChecked = true;
\t\tvar imageLocation = document.location.toString();
\t\timageLocation = imageLocation.replace('http:', 'https:').replace(/index.php(.*)/g, '') + 'images/1x1.gif';

\t\t\$('<img />').load(function () {
\t\t\tsslWorks = true;
\t\t}).error(function () {
\t\t\tsslWorks = false;
\t\t}).attr('src', imageLocation);

\t\treturn sslWorks;
\t}

\t\$('#UseControlPanelSSL').bind('click', function () {
\t\tif(\$(this).is(':checked')) {
\t\t\tcheckSSLWorks();
\t\t}
\t});

\t\$(document).ready(function() {
\t\tShowTab(";
        // line 2815
        echo twig_safe_filter((isset($context['CurrentTab']) ? $context['CurrentTab'] : null));
        echo ");

\t\t\$('input[type=submit]').attr('disabled', '');

\t\tif (\$('#EnableCustomersAlsoViewed:checked').val()) {
\t\t\t\$('.HideIfCustomersAlsoViewedDisabled').show();
\t\t} else {
\t\t\t\$('.HideIfCustomersAlsoViewedDisabled').hide();
\t\t}

\t\tif(\$('#ShowInventory:checked').val()) {
\t\t\t\$('.HideIfShowInventoryDisabled').show();
\t\t}
\t\telse {
\t\t\t\$('.HideIfShowInventoryDisabled').hide();
\t\t}

\t\tToggleDefaultProductImage();
\t\t\$('.DefaultProductImage[type=radio]').click(ToggleDefaultProductImage);

\t\t\$('.SetOriginalImageSizeValue').each(function() {
\t\t\t\$.data(this, \"origValue\", \$(this).val());
\t\t});

\t\t\$(\"input:radio[name='UseSSL']\").click(function() {
\t\t\t\$(\"input:radio[name='UseSSL']\").each(function() {
\t\t\t\tif(\$(this).is(':checked')) {
\t\t\t\t\t\$(this).parent('label').nextAll('.NodeJoin:first').show();
\t\t\t\t}
\t\t\t\telse {
\t\t\t\t\t\$(this).parent('label').nextAll('.NodeJoin:first').hide();
\t\t\t\t}
\t\t\t});

\t\t\tif(\$(\"#NoSSL\").is(':checked')) {
\t\t\t\t\$('#UseControlPanelSSL').attr('disabled', 'disabled').removeAttr('checked');
\t\t\t} else {
\t\t\t\t\$('#UseControlPanelSSL').removeAttr('disabled');
\t\t\t}
\t\t});

\t\t\$(\"input:radio[name='UseSSL']:checked\").trigger('click');

\t\tif('";
        // line 2858
        echo twig_safe_filter((isset($context['RunImageResize']) ? $context['RunImageResize'] : null));
        echo "' == '1') {
\t\t\tProcessProductImages.launch();
\t\t}

\t\tif(\$('#DownForMaintenance').is(':checked')) {
\t\t\t\$('#DownForMaintenanceMessageRow').css('display', '');
\t\t}

\t\t\$('#DownForMaintenance').bind('click', function () {
\t\t\tif(\$(this).is(':checked')) {
\t\t\t\t\$('#DownForMaintenanceMessageRow').css('display', '');
\t\t\t} else {
\t\t\t\t\$('#DownForMaintenanceMessageRow').css('display', 'none');
\t\t\t}
\t\t});

\t\t\$(\"#FacebookLikeButtonEnabled\").change(function() {
\t\t\tif(\$(this).is(':checked')) {
\t\t\t\t\$(this).parent('label').nextAll('.NodeJoin:first').show();
\t\t\t}
\t\t\telse {
\t\t\t\t\$(this).parent('label').nextAll('.NodeJoin:first').hide();
\t\t\t}
\t\t});

\t\t// if any SMTP options has changed, force a test before save
\t\t\$(\".SMTPOptions input:text\").each(function() {
\t\t\t\$(this).bind('change', function() {
\t\t\t\tsmtpChecked = false;
\t\t\t});
\t\t});

\t\t";
        // line 2890
        if ((!$this->getAttribute((isset($context['TPL_CFG']) ? $context['TPL_CFG'] : null), "EnableFlyoutMenuSupport", array(), "any"))) {
            echo "\t\t\t// prevent selection of flyout style if not supported by current temlpate
\t\t\t\$('#CategoryListStyle').change(function(event){
\t\t\t\tif (\$(this).val() == 'flyout') {
\t\t\t\t\talert(\"";
            // line 2894
            echo Interspire_Template_Extension::jsFilter(getLang("CategoryListStyleFlyoutNotSupported"), "'");
            echo "\");
\t\t\t\t\t\$(this).val('static');
\t\t\t\t}
\t\t\t});
\t\t";
        }
        // line 2898
        echo "\t});
</script>
";
    }

}
