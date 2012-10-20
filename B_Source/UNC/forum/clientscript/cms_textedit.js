/*======================================================================*\
|| #################################################################### ||
|| # vBulletin 4.0.5
|| # ---------------------------------------------------------------- # ||
|| # Copyright �2000-2010 vBulletin Solutions Inc. All Rights Reserved. ||
|| # This file may not be redistributed in whole or significant part. # ||
|| # ---------------- VBULLETIN IS NOT FREE SOFTWARE ---------------- # ||
|| # http://www.vbulletin.com | http://www.vbulletin.com/license.html # ||
|| #################################################################### ||
\*======================================================================*/
function vB_Text_Editor_CMS(A,G,B,D,C,F,E){this._construct(A,G,B,D,C,F,E);this.init(C)}vBulletin.extend(vB_Text_Editor_CMS,vB_Text_Editor);vB_Text_Editor_CMS.prototype._parent=vB_Text_Editor.prototype;vB_Text_Editor_CMS.prototype._construct=function(A,H,C,E,D,G,F){this._parent._construct.call(this,A,H,C,E,D,G,F);this.dialog_props={};this.dialog=null;this.dialog_overlay=null;this.dialog_submitted=false;this.dialog_confirm_callback=null;this.formatstate=null;this.formatoptions={p:{description:vbphrase.formatting_normal},pagebreak:{description:vbphrase.page_break,extra:"pagebreak",tag:"h3"},h1:{description:vbphrase.heading_1},h2:{description:vbphrase.heading_2},h3:{description:vbphrase.heading_3},h4:{description:vbphrase.heading_4},h5:{description:vbphrase.heading_5},h6:{description:vbphrase.heading_6}};this.tablebuttons=YAHOO.util.Dom.getElementsByClassName("tablebutton","img",A+"_controls");for(var B=0;B<this.tablebuttons.length;B++){this.button_context(this.tablebuttons[B],"mouseout");YAHOO.util.Dom.addClass(this.tablebuttons[B],"imagebutton_disabled")}YAHOO.util.Dom.removeClass(A+"_cmd_configtable","imagebutton_selected")};vB_Text_Editor_CMS.prototype.init=function(A){this._parent.init.call(this,A);if(this.wysiwyg_mode){if(PHP.in_array("subscript",contextcontrols)<0){contextcontrols.push("subscript");contextcontrols.push("superscript")}if(is_moz){this.editdoc.execCommand("enableInlineTableEditing",false,false)}}};vB_Text_Editor_CMS.prototype.init_popup_formatting=function(C){menu=this.init_menu_container("formatting","auto","auto","auto");for(var A in this.formatoptions){if(YAHOO.lang.hasOwnProperty(this.formatoptions,A)){var B=document.createElement(this.formatoptions[A].tag?this.formatoptions[A].tag:A);B.innerHTML=this.formatoptions[A].description;B.title=this.formatoptions[A].description;B.extra=this.formatoptions[A].extra;B.cmd=C.cmd;B.controlkey=C.id;B.editorid=this.editorid;B.className="oformat";B.onmouseover=B.onmouseout=B.onmouseup=B.onmousedown=vB_Text_Editor_Events.prototype.menuoption_onmouseevent;B.onclick=vB_Text_Editor_Events.prototype.formatting_option_format_onclick;menu.appendChild(B)}}return menu};vB_Text_Editor_CMS.prototype.recreate_editor=function(A,F,B,D,C,E){return new vB_Text_Editor_CMS(A,F,B,D,C,E)};vB_Text_Editor_CMS.prototype.set_context=function(){this._parent.set_context.call(this);this.set_table_context();this.set_format_context()};vB_Text_Editor_CMS.prototype.set_table_context=function(){var F=true;var A=true;var E=YAHOO.util.Dom.get(this.editorid+"_cmd_configtable");var D=this.get_selection_container_element();if(D){var C=YAHOO.util.Dom.getAncestorByTagName(D,"table");if(C&&YAHOO.util.Dom.hasClass(C,"wysiwyg_dashes")){E.state=true;if(D.tagName.toLowerCase()!="tr"&&D.tagName.toLowerCase()!="tbody"){for(var B=0;B<this.tablebuttons.length;B++){YAHOO.util.Dom.removeClass(this.tablebuttons[B],"imagebutton_disabled")}F=false}else{YAHOO.util.Dom.removeClass(this.editorid+"_cmd_configtable","imagebutton_disabled");A=false}this.button_context(E,"mouseout")}}if(F){E.state=false;if(A){this.button_context(E,"mouseout")}for(var B=0;B<this.tablebuttons.length;B++){this.button_context(this.tablebuttons[B],"mouseout");YAHOO.util.Dom.addClass(this.tablebuttons[B],"imagebutton_disabled")}if(!A){YAHOO.util.Dom.removeClass(this.editorid+"_cmd_configtable","imagebutton_disabled")}}};vB_Text_Editor_CMS.prototype.set_format_context=function(){if(!this.buttons.formatting||!this.wysiwyg_mode){return }var E;try{E=this.editdoc.queryCommandValue("formatblock")}catch(F){E=""}var A=E.match(/(\d+)/);if(A){E="h"+A[1]}else{E="p"}if(E=="h3"){var D=this.get_selection_container_element();if(D){if((D.tagName.toLowerCase()=="h3"&&YAHOO.util.Dom.hasClass(D,"wysiwyg_pagebreak"))||YAHOO.util.Dom.getElementsByClassName("wysiwyg_pagebreak","h3",D).length){E="pagebreak"}else{var C=YAHOO.util.Dom.getAncestorByTagName(D,"h3");if(C&&YAHOO.util.Dom.hasClass(C,"wysiwyg_pagebreak")){E="pagebreak"}}}}if(E!=this.formatstate){this.formatstate=E;if(this.popupmode){var G=fetch_object(this.editorid+"_formatting_out");G.innerHTML=this.formatoptions[E].description}else{}var B=fetch_object(this.editorid+"_cmd_insertpagebreak");B.state=(E=="pagebreak");this.button_context(B,"mouseout")}};vB_Text_Editor.prototype.switch_editor_ajax=function(){var A=(this.wysiwyg_mode?0:1);YAHOO.util.Connect.asyncRequest("POST","editor.php?r=switch",{success:do_switch_editor_mode,timeout:vB_Default_Timeout,argument:[this.editorid,A]},SESSIONURL+"securitytoken="+SECURITYTOKEN+"&do=editorswitch&towysiwyg="+A+"&parsetype="+this.parsetype+"&allowsmilie="+this.parsesmilies+"&message="+PHP.urlencode(this.get_editor_contents())+(this.ajax_extra?("&"+this.ajax_extra):"")+(typeof this.textobj.form["options[allowbbcode]"]!="undefined"?"&allowbbcode="+this.textobj.form["options[allowbbcode]"].checked:""))};vB_Text_Editor_CMS.prototype.previewbreak=function(C){if(this.wysiwyg_mode){var A=YAHOO.util.Dom.getElementsByClassName("previewbreak","hr",this.editdoc.documentElement.childNodes[1]);if(A.length==0){return this.insert_text('<hr class="previewbreak" title="'+vbphrase.preview_break+'">',false)}else{alert(vbphrase.this_message_already_contains_a_preview_break)}}else{var B=this.editdoc.value.match(/\[prbreak\]\[\/prbreak\]/i);if(B){alert(vbphrase.this_message_already_contains_a_preview_break)}else{return this.insert_text("[PRBREAK][/PRBREAK]")}}};vB_Text_Editor_CMS.prototype.createtablecell=function(A){if(A.table){var B=document.createElement("td");B.className=A.td.className;B.innerHTML=(is_ie)?"<p></p>":"<br />";return B}else{return false}};vB_Text_Editor_CMS.prototype.createtablerow=function(B){if(B.table){var C=document.createElement("tr");C.className=B.tr.className;YAHOO.util.Dom.setAttribute(C,"valign","top");for(var A=0;A<B.colcount;A++){var D=this.createtablecell(B);if(D){C.appendChild(D)}}return C}else{return false}};vB_Text_Editor_CMS.prototype.inserttablecolumn=function(F){var E=this.fetchtable();if(E.table){for(var C=0;C<E.rows.length;C++){var D=0;var B=E.rows[C].getElementsByTagName("td");for(var A=0;A<B.length;A++){if(B[A].parentNode==E.rows[C]){if(D==E.tdpos){var G=this.createtablecell(E);if(G){if(F=="after"){E.rows[C].insertBefore(G,nextSibling(B[A]))}else{E.rows[C].insertBefore(G,B[A])}}break}D++}}}}};vB_Text_Editor_CMS.prototype.inserttablecolumnafter=function(A){this.inserttablecolumn("after")};vB_Text_Editor_CMS.prototype.inserttablecolumnbefore=function(A){this.inserttablecolumn("before")};vB_Text_Editor_CMS.prototype.inserttablerowafter=function(B){var A=this.fetchtable();var C=this.createtablerow(A);if(C){A.tr.parentNode.insertBefore(C,nextSibling(A.tr))}};vB_Text_Editor_CMS.prototype.inserttablerowbefore=function(B){var A=this.fetchtable();var C=this.createtablerow(A);if(C){A.tr.parentNode.insertBefore(C,A.tr)}};vB_Text_Editor_CMS.prototype.focuscell=function(C){if(C){if(is_moz){var A=this.editdoc.createRange();A.selectNode(C.firstChild);var B=this.editwin.getSelection();B.removeAllRanges();B.addRange(A);A.collapse(true)}else{try{var A=this.editdoc.selection.createRange();A.moveToElementText(C);A.select();A.collapse(true);A.select()}catch(D){}}}};vB_Text_Editor_CMS.prototype.deletetablecolumn=function(F){var E=this.fetchtable();if(E.table){if(E.colcount>1){if(E.tdpos==0){this.focuscell(nextSibling(E.td))}else{this.focuscell(previousSibling(E.td))}for(var C=0;C<E.rows.length;C++){var D=0;var B=E.rows[C].getElementsByTagName("td");for(var A=0;A<B.length;A++){if(B[A].parentNode==E.rows[C]){if(D==E.tdpos){E.rows[C].removeChild(B[A]);break}D++}}}}else{E.table.parentNode.removeChild(E.table)}}};vB_Text_Editor_CMS.prototype.deletetablerow=function(F){var E=this.fetchtable();if(E.table){if(E.rowcount>1){if(E.trpos==0){var G=nextSibling(E.tr)}else{var G=previousSibling(E.tr)}var D=0;var C=null;var B=G.getElementsByTagName("td");for(var A=0;A<B.length;A++){if(B[A].parentNode==G){if(D==E.tdpos){this.focuscell(B[A]);break}D++}}E.tr.parentNode.removeChild(E.tr)}else{E.table.parentNode.removeChild(E.table)}}};vB_Text_Editor_CMS.prototype.fetchtable=function(F){var H={table:null,tbody:null,tr:null,tdpos:0,td:null,tdpos:0,rowcount:0,colcount:0,rows:null,width:null};var B=this.get_selection_container_element();if(B&&B.tagName.toLowerCase()!="td"){if(B.tagName.toLowerCase()=="tr"){B=B.firstChild}else{var B=YAHOO.util.Dom.getAncestorByTagName(B,"td")}}if(B){if(B.tagName.toLowerCase()!="td"){var B=YAHOO.util.Dom.getAncestorByTagName(B,"td")}H.td=B;var G=B.parentNode;if(G&&G.tagName.toLowerCase()=="tr"){H.tr=G;var A=G.parentNode;if(A){if(A.tagName.toLowerCase()=="table"){H.table=A;var I=A;var E=null}else{if(A.tagName.toLowerCase()=="tbody"){H.tbody=A;var I=A.parentNode;var E=A;if(I&&I.tagName.toLowerCase()=="table"){H.table=I}}}}}}if(G){var C=G.getElementsByTagName("td");for(var D=0;D<C.length;D++){if(C[D]==B){H.tdpos=D}if(C[D].parentNode==G){H.colcount++}}}if(I){H.width1=YAHOO.util.Dom.getStyle(I,"width");H.width2=I.width;H.rows=I.getElementsByTagName("tr");for(var D=0;D<H.rows.length;D++){if(H.rows[D]==G){H.trpos=D}if(H.rows[D].parentNode==I||H.rows[D].parentNode==E){H.rowcount++}}}for(D in H){}return H};vB_Text_Editor_CMS.prototype.tableoverlay=function(A){this.create_editor_dialog('<img src="'+IMGDIR_MISC+'/lightbox_progress.gif" alt="" />',this.inserttable_confirm);this.dialog_props={range:this.get_range_from_selection(this.get_selection_object()),type:A};if(A=="config"){this.dialog_props.table=this.fetchtable()}YAHOO.util.Connect.asyncRequest("POST","editor.php?r=tableoverlay",{success:this.inserttable_ajax,failure:this.remove_editor_dialog,timeout:vB_Default_Timeout,scope:this},"sessionurl="+SESSIONURL+"&securitytoken="+SECURITYTOKEN+"&ajax=1&type="+A)};vB_Text_Editor_CMS.prototype.deletetable=function(B){var A=this.fetchtable();if(A){A.table.parentNode.removeChild(A.table)}};vB_Text_Editor_CMS.prototype.configtable=function(A){this.tableoverlay("config")};vB_Text_Editor_CMS.prototype.inserttable=function(A){this.tableoverlay("insert")};vB_Text_Editor_CMS.prototype.inserttable_ajax=function(E){if(E.responseXML){var A=E.responseXML.getElementsByTagName("html");if(A.length){this.create_editor_dialog(A[0].firstChild.nodeValue,this.inserttable_confirm,true);var D=this;YAHOO.util.Event.on(this.dialog.width_percent,"click",function(){D.dialog.width_type[2].checked=true});YAHOO.util.Event.on(this.dialog.width_pixels,"click",function(){D.dialog.width_type[1].checked=true});var B=this.dialog_props.type;if(B=="config"){YAHOO.util.Dom.get("irows").disabled="disabled";YAHOO.util.Dom.get("icolumns").disabled="disabled";var C=this.fetchtable();YAHOO.util.Dom.get("overlay_width_type_auto").checked=false;YAHOO.util.Dom.get("overlay_width_type_percent").checked=false;YAHOO.util.Dom.get("overlay_width_type_pixels").checked=false;if(!C.width2){YAHOO.util.Dom.get("overlay_width_type_auto").checked=true}else{if(C.width2.match(/%$/)){YAHOO.util.Dom.get("overlay_width_type_percent").checked=true;this.dialog.width_percent.value=C.width2.replace(/%$/,"")}else{YAHOO.util.Dom.get("overlay_width_type_pixels").checked=true;this.dialog.width_pixels.value=C.width2}}if(YAHOO.util.Dom.hasClass(C.table,"wysiwyg_cms_table_outer_border")){this.dialog["class"].selectedIndex=1}else{if(YAHOO.util.Dom.hasClass(C.table,"wysiwyg_cms_table_grid")){this.dialog["class"].selectedIndex=2}}}return }}this.remove_editor_dialog()};vB_Text_Editor_CMS.prototype.inserttable_confirm=function(){var F=this.dialog_props.range;if(F&&J=="insert"){this.select_range(F)}var B={rows:parseInt(this.dialog.elements.rows.value,10),columns:parseInt(this.dialog.elements.columns.value,10),width:"","class":this.dialog.elements["class"].value};var I="";for(var E=0;E<this.dialog.elements.width_type.length;E++){if(this.dialog.elements.width_type[E].checked){I=this.dialog.elements.width_type[E].value}}switch(I){case"pixels":B.width=this.dialog.elements.width_pixels.value;break;case"percent":if(this.dialog.elements.width_percent.value){B.width=this.dialog.elements.width_percent.value+"%";break}case"auto":default:B.width=""}var J=this.dialog_props.type;if(J=="config"){var M=this.dialog_props.table;var L="";M.table.width=B.width;if(B["class"]=="outer_border"){if(!YAHOO.util.Dom.hasClass(M.table,"wysiwyg_cms_table_outer_border")){L="outer"}}else{if(B["class"]=="grid"){if(!YAHOO.util.Dom.hasClass(M.table,"wysiwyg_cms_table_grid")){L="grid"}}else{if(YAHOO.util.Dom.hasClass(M.table,"wysiwyg_cms_table_outer_border")||YAHOO.util.Dom.hasClass(M.table,"wysiwyg_cms_table_grid")){L="none"}}}if(L){if(L=="grid"){YAHOO.util.Dom.addClass(M.table,"wysiwyg_cms_table_grid");YAHOO.util.Dom.removeClass(M.table,"wysiwyg_cms_table_outer_border")}else{if(L=="outer"){YAHOO.util.Dom.addClass(M.table,"wysiwyg_cms_table_outer_border");YAHOO.util.Dom.removeClass(M.table,"wysiwyg_cms_table_grid")}else{YAHOO.util.Dom.removeClass(M.table,"wysiwyg_cms_table_outer_border");YAHOO.util.Dom.removeClass(M.table,"wysiwyg_cms_table_grid")}}for(var E=0;E<M.rows.length;E++){if(L=="grid"){YAHOO.util.Dom.addClass(M.rows[E],"wysiwyg_cms_table_grid_tr");YAHOO.util.Dom.removeClass(M.rows[E],"wysiwyg_cms_table_outer_border_tr")}else{if(L=="outer"){YAHOO.util.Dom.addClass(M.rows[E],"wysiwyg_cms_table_outer_border_tr");YAHOO.util.Dom.removeClass(M.rows[E],"wysiwyg_cms_table_grid_tr")}else{YAHOO.util.Dom.removeClass(M.rows[E],"wysiwyg_cms_table_outer_border_tr");YAHOO.util.Dom.removeClass(M.rows[E],"wysiwyg_cms_table_grid_tr")}}var C=M.rows[E].getElementsByTagName("td");for(var K=0;K<C.length;K++){if(C[K].parentNode==M.rows[E]){if(L=="grid"){YAHOO.util.Dom.addClass(C[K],"wysiwyg_cms_table_grid_td");YAHOO.util.Dom.removeClass(C[K],"wysiwyg_cms_table_outer_border_td")}else{if(L=="outer"){YAHOO.util.Dom.addClass(C[K],"wysiwyg_cms_table_outer_border_td");YAHOO.util.Dom.removeClass(C[K],"wysiwyg_cms_table_grid_td")}else{YAHOO.util.Dom.removeClass(C[K],"wysiwyg_cms_table_outer_border_td");YAHOO.util.Dom.removeClass(C[K],"wysiwyg_cms_table_grid_td")}}}}}}this.remove_editor_dialog();return }if(B.rows<1){B.rows=1}if(B.columns<1){B.columns=1}if(!B.width.match(/^\d+%?$/)){B.width=""}if(!B["class"].match(/^[a-zA-Z0-9_]+$/)){B["class"]=""}var H=this.get_selection(),D="";var N,A;if(this.wysiwyg_mode){if(!B["class"]){B["class"]=["wysiwyg_dashes"]}else{B["class"]=["wysiwyg_dashes","wysiwyg_cms_table_"+B["class"]]}D+="<table";if(B.width){D+=' width="'+B.width+'"'}if(B["class"]){D+=' class="'+B["class"].join(" ")+'"'}D+=">";for(N=0;N<B.rows;N++){D+='<tr valign="top"';if(B["class"]){D+=' class="'+B["class"].join("_tr ")+'_tr"'}D+=">";for(A=0;A<B.columns;A++){D+="<td";if(B["class"]){D+=' class="'+B["class"].join("_td ")+'_td"'}D+=">"+H+"</td>";H=""}D+="</tr>"}D+="</table>";if(is_ie){D+="<p></p>"}else{D+="<br />"}}else{var G=[];if(B.width){G.push("width:"+B.width)}if(B["class"]){G.push("class:"+B["class"])}D+="[table";if(G.length){D+='="'+G.join(", ")+'"'}D+="]\n";for(N=0;N<B.rows;N++){D+="[tr]\n";for(A=0;A<B.columns;A++){D+="\t[td]"+H+"[/td]\n";H=""}D+="[/tr]\n"}D+="[/table]\n"}this.remove_editor_dialog();this.insert_text(D)};vB_Text_Editor_CMS.prototype.subscript=function(A){if(this.wysiwyg_mode){this.editdoc.execCommand("subscript",false,true)}else{this.wrap_tags("sub",false)}};vB_Text_Editor_CMS.prototype.superscript=function(A){if(this.wysiwyg_mode){this.editdoc.execCommand("superscript",false,true)}else{this.wrap_tags("sup",false)}};vB_Text_Editor_CMS.prototype.inserthorizontalrule=function(A){if(this.wysiwyg_mode){this.editdoc.execCommand("inserthorizontalrule",false,true)}else{this.wrap_tags("hr",false)}};vB_Text_Editor_CMS.prototype.insertpagebreak=function(C){if(this.wysiwyg_mode){var B=fetch_object(this.editorid+"_cmd_insertpagebreak");if(B&&B.state){this.apply_formatblock("<p>");var A=this.get_selection_container_element();if(A){YAHOO.util.Dom.removeClass(this.find_by_tag_name(A,"p"),"wysiwyg_pagebreak")}}else{this.apply_formatblock("<h3>");var A=this.get_selection_container_element();if(A){YAHOO.util.Dom.addClass(this.find_by_tag_name(A,"h3"),"wysiwyg_pagebreak")}}}else{this.wrap_tags("page",false)}};vB_Text_Editor_CMS.prototype.formatting=function(F,A){var C=A.tagName.match(/^h[1-6]$/i);if(this.wysiwyg_mode){var B;if(C){B="<"+A.tagName+">"}else{B="<p>"}this.apply_formatblock(B);var D=this.get_selection_container_element();if(D){var G=this.find_by_tag_name(D,"h3");if(!G||!G.length){G=YAHOO.util.Dom.getAncestorByTagName(D,"h3")}if(A.extra=="pagebreak"){YAHOO.util.Dom.addClass(G,"wysiwyg_pagebreak")}else{YAHOO.util.Dom.removeClass(G,"wysiwyg_pagebreak")}}}else{if(C){var E=(A.extra=="pagebreak"?"page":A.tagName);this.wrap_tags(E,false)}}};vB_Text_Editor_CMS.prototype.find_by_tag_name=function(A,B){if(!A||!A.tagName){return[]}if(A.tagName.toLowerCase()==B.toLowerCase()){return[A]}else{return A.getElementsByTagName(B)}};vB_Text_Editor_CMS.prototype.apply_formatblock=function(B){var A=this.get_range_from_selection();if(!A){return }if(A.collapsed&&A.insertNode){A.insertNode(this.editdoc.createTextNode(" "))}this.editdoc.execCommand("formatblock",false,B)};vB_Text_Editor_CMS.prototype.get_selection_container_element=function(A){if(typeof (A)=="undefined"){A=this.get_range_from_selection()}var B;if(A.commonAncestorContainer){if(A.commonAncestorContainer.nodeName=="#text"){B=A.commonAncestorContainer.parentNode}else{B=A.commonAncestorContainer}}else{if(typeof (A.parentElement)!="undefined"){B=A.parentElement()}}return B};vB_Text_Editor_CMS.prototype.select_range=function(A){if(A.select){A.select()}else{var B=this.get_selection_object();if(B&&B.removeAllRanges){B.removeAllRanges();B.addRange(A)}}};vB_Text_Editor_CMS.prototype.get_selection_object=function(){var B,A;if(this.wysiwyg_mode){B=this.editwin;A=this.editdoc}else{B=window;A=document}if(B.getSelection){return B.getSelection()}else{return A.selection}};vB_Text_Editor_CMS.prototype.get_range_from_selection=function(A){if(typeof (A)=="undefined"){A=this.get_selection_object()}if(!A){return null}if(A.createRange){return A.createRange()}else{if(A.getRangeAt){return A.getRangeAt(0)}else{if(this.editdoc.createRange){return this.editdoc.createRange()}else{return null}}}};vB_Text_Editor_Events.prototype.formatting_option_format_onclick=function(A){vB_Editor[this.editorid].format(A,this.cmd,this);vBmenu.hide()};