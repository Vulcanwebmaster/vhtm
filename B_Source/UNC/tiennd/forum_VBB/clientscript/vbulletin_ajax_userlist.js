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
var vB_UserList_Highlighters=new Object();var vB_UserList_Filters=new Object();var vB_UserList_Savers=new Object();vB_XHTML_Ready.subscribe(function(){var C,A=null,B=null;if(vBulletin.elements.vB_UserList_Highlighter){for(C=0;C<vBulletin.elements.vB_UserList_Highlighter.length;C++){A=vBulletin.elements.vB_UserList_Highlighter[C][0];vB_UserList_Highlighters[A]=new vB_UserList_Highlighter(A)}vBulletin.elements.vB_UserList_Highlighter=null}if(vBulletin.elements.vB_UserList_Saver){for(C=0;C<vBulletin.elements.vB_UserList_Saver.length;C++){A=vBulletin.elements.vB_UserList_Saver[C][0];vB_UserList_Savers[A]=new vB_UserList_Saver(A)}vBulletin.elements.vB_UserList_Saver=null}if(vBulletin.elements.vB_UserList_Filter){for(C=0;C<vBulletin.elements.vB_UserList_Filter.length;C++){B=vBulletin.elements.vB_UserList_Filter[C];vB_UserList_Filters[C]=new vB_UserList_Filter(B[0],B[1],B[2])}vBulletin.elements.vB_UserList_Filter=null}});function vB_UserList_Saver(A){this.ajax_request=null;this.prefix=A;this.change_form=YAHOO.util.Dom.get(this.prefix+"_change_form");YAHOO.util.Event.on(this.change_form,"submit",this.handle_form_submit,this,true);this.add_form=YAHOO.util.Dom.get(this.prefix+"_add_form");YAHOO.util.Event.on(this.add_form,"submit",this.handle_form_submit,this,true)}vB_UserList_Saver.prototype.handle_form_submit=function(G){YAHOO.util.Event.stopEvent(G);var F=YAHOO.util.Event.getTarget(G);if(F.tagName!="FORM"){F=F.form}var B=null;var C=null;var H=YAHOO.util.Dom.get("incomingaction_reject");if(F.userlist.value=="buddy"){B="buddylist";C=false}else{if(F.userlist.value=="incoming"&&H.checked==true){B="incomingreqs";C=true}}if(B&&F.id.match(/_change_form$/)){for(var E=0;E<vB_UserList_Highlighters[B].items.length;E++){if(B=="buddylist"){if(vB_UserList_Highlighters[B].items[E].origfriend==true&&vB_UserList_Highlighters[B].items[E].friendcheck.checked==false){if(!confirm(vbphrase.remove_from_userlist_confirm)){return false}break}}if(vB_UserList_Highlighters[B].items[E].usercheck.checked==C){if(!confirm(vbphrase.remove_from_userlist_confirm)){return false}break}}}var A=F.id.replace(/_form$/,"_progress");YAHOO.util.Dom.setStyle(A,"display","");var D=new vB_Hidden_Form(F.action);if(YAHOO.util.Connect._submitElementValue&&YAHOO.util.Connect._submitElementValue.match(/^makefriends=/)){D.add_variable("makefriends",1)}D.add_variable("ajax",1);D.add_variables_from_object(F);if(YAHOO.util.Dom.getAttribute(F.filter,"origtext")==""&&F.filter.value!=""){D.add_variable("filter","")}this.ajax_request=YAHOO.util.Connect.asyncRequest("POST",F.action,{success:this.handle_ajax_response,failure:this.handle_ajax_failure,timeout:vB_Default_Timeout,scope:this,argument:[A,F.id]},SESSIONURL+"securitytoken="+SECURITYTOKEN+"&"+D.build_query_string())};vB_UserList_Saver.prototype.handle_ajax_failure=function(A){vBulletin_AJAX_Error_Handler(A);YAHOO.util.Event.removeListener(this.change_form,"submit",this.handle_form_submit);YAHOO.util.Event.removeListener(this.add_form,"submit",this.handle_form_submit);YAHOO.util.Dom.get(A.argument[1]).submit()};vB_UserList_Saver.prototype.handle_ajax_response=function(G){if(G.responseXML){var H,F,C,A,E=null;YAHOO.util.Dom.setStyle(G.argument[0],"display","none");H=G.responseXML.getElementsByTagName("error");if(H.length){YAHOO.util.Dom.get(this.prefix+"_error_message").innerHTML=H[0].firstChild.nodeValue;YAHOO.util.Dom.setStyle(this.prefix+"_error","display","block");return }else{YAHOO.util.Dom.setStyle(this.prefix+"_error","display","none")}if(this.add_form&&this.add_form.username){this.add_form.username.value=""}buddycountobj=YAHOO.util.Dom.get("buddycount");if(buddycountobj){buddycountobj.innerHTML=G.responseXML.getElementsByTagName("buddycount")[0].firstChild.nodeValue}pagenavobj=YAHOO.util.Dom.get("below_buddylist_pagenav");if(pagenavobj){if(G.responseXML.getElementsByTagName("pagenav")[0].firstChild){YAHOO.util.Dom.removeClass(pagenavobj,"hidden");pagenavobj.innerHTML=G.responseXML.getElementsByTagName("pagenav")[0].firstChild.nodeValue}else{YAHOO.util.Dom.addClass(pagenavobj,"hidden");pagenavobj.innerHTML=""}}if(G.responseXML.getElementsByTagName("pagenumber")[0]){var D=YAHOO.util.Dom.get("userlist").getElementsByTagName("input");for(var C=0;C<D.length;C++){if(D[C].type=="hidden"&&D[C].name=="pagenumber"){D[C].value=G.responseXML.getElementsByTagName("pagenumber")[0].firstChild.nodeValue}}}F=G.responseXML.getElementsByTagName("userlist");if(F.length){for(C=0;C<F.length;C++){A=F[C].getAttribute("type");if(vB_UserList_Highlighters[A]){vB_UserList_Highlighters[A].deactivate()}E=YAHOO.util.Dom.get(A);if(E&&F[C].firstChild){YAHOO.util.Dom.setStyle(A+"_container","display","block");YAHOO.util.Dom.setStyle(A+"_change_form","display","block");YAHOO.util.Dom.addClass(A+"_addmemberh2","hidden");YAHOO.util.Dom.removeClass(A+"_addmemberh3","hidden");E.innerHTML=F[C].firstChild.nodeValue}else{if(E&&F[C]){YAHOO.util.Dom.setStyle(A+"_container","display","none");YAHOO.util.Dom.setStyle(A+"_change_form","display","none");YAHOO.util.Dom.addClass(A+"_addmemberh3","hidden");YAHOO.util.Dom.removeClass(A+"_addmemberh2","hidden");E.innerHTML=""}}vB_UserList_Highlighters[A]=new vB_UserList_Highlighter(A)}}users=G.responseXML.getElementsByTagName("user");if(users.length){var B={};for(C=0;C<users.length;C++){B[users[C].getAttribute("username")]=users[C].getAttribute("userid")}for(filter in vB_UserList_Filters){vB_UserList_Filters[filter].update_userlist(B)}}}};function vB_UserList_Highlighter(E){var D,B,F,A,C;this.parentid=E;this.parent=YAHOO.util.Dom.get(E);this.items=new Array();var F=YAHOO.util.Dom.getElementsByClassName("avatar_label","label",this.parent);if(F.length){for(D=0;D<F.length;D++){A=F[D].getElementsByTagName("img");if(A.length){for(B=0;B<A.length;B++){if(A[B].id&&A[B].id.substr(0,8+this.parentid.length)==(this.parentid+"_avatar_")){console.log("rake");C=new vB_UserList_UserObject(A[B].id.substr(8+this.parentid.length),this.parentid);this.items.push(C);console.log("rake2")}}}}}this.check_all_checkbox=YAHOO.util.Dom.get(this.parentid+"_checkall");YAHOO.util.Event.on(this.check_all_checkbox,"click",this.check_all,this,true);this.show_avatars_checkbox=YAHOO.util.Dom.get(this.parentid+"_showavatars");if(this.show_avatars_checkbox){YAHOO.util.Event.on(this.show_avatars_checkbox,"click",this.show_avatars,this,true);this.show_avatars_checkbox.checked=(parseInt(fetch_cookie("vbulletin_userlist_hide_avatars_"+this.parentid))?false:true);this.show_avatars()}}vB_UserList_Highlighter.prototype.deactivate=function(){for(var A=0;A<this.items.length;A++){this.items[A].deactivate()}};vB_UserList_Highlighter.prototype.check_all=function(){var B,A;if(this.items.length){for(B=0;B<this.items.length;B++){this.items[B].usercheck.checked=this.check_all_checkbox.checked;this.items[B].shade_avatar()}}else{var A=this.parent.getElementsByTagName("input");for(B=0;B<A.length;B++){if(A[B].type=="checkbox"){A[B].checked=this.check_all_checkbox.checked}}}};vB_UserList_Highlighter.prototype.show_avatars=function(){console.log("hello");if(this.items.length&&this.show_avatars_checkbox){if(this.show_avatars_checkbox.checked){YAHOO.util.Dom.replaceClass(this.parent,"userlist_hideavatars","userlist_showavatars");console.info("checked")}else{YAHOO.util.Dom.replaceClass(this.parent,"userlist_showavatars","userlist_hideavatars");console.info("not checked")}var A=new Date();A.setTime(A.getTime()+(1000*86400*365));set_cookie("vbulletin_userlist_hide_avatars_"+this.parentid,(this.show_avatars_checkbox.checked?0:1),A)}};function vB_UserList_UserObject(A,B){this.avatar=YAHOO.util.Dom.get(B+"_avatar_"+A);YAHOO.util.Event.on(this.avatar,"click",this.avatar_click,this,true);this.usercheck=YAHOO.util.Dom.get(B+"_usercheck_"+A);if(this.usercheck.tagName=="INPUT"&&this.usercheck.getAttribute("type")=="checkbox"){YAHOO.util.Event.on(this.usercheck,"click",this.usercheck_click,this,true);this.shade_avatar()}this.friendcheck=YAHOO.util.Dom.get(B+"_friendcheck_"+A);if(this.friendcheck){YAHOO.util.Event.on(this.friendcheck,"click",this.set_friend,this,true);this.friend=this.friendcheck.checked;this.origfriend=this.friendcheck.checked}}vB_UserList_UserObject.prototype.shade_avatar=function(){YAHOO.util.Dom.setStyle(this.avatar,"opacity",(this.usercheck.checked?1:0.25));if(this.friendcheck){this.friendcheck.checked=(this.usercheck.checked?this.friend:false)}};vB_UserList_UserObject.prototype.avatar_click=function(A){YAHOO.util.Event.stopEvent(A);if(this.usercheck.tagName=="SELECT"){this.usercheck.focus()}else{this.usercheck.checked=!this.usercheck.checked;this.shade_avatar()}};vB_UserList_UserObject.prototype.usercheck_click=function(A){this.shade_avatar()};vB_UserList_UserObject.prototype.set_friend=function(A){this.friend=this.friendcheck.checked;if(this.friend){this.usercheck.checked=true;this.shade_avatar()}};vB_UserList_UserObject.prototype.deactivate=function(){YAHOO.util.Event.removeListener(this.avatar,"click",this.avatar_click);YAHOO.util.Event.removeListener(this.usercheck,"click",this.usercheck_click);YAHOO.util.Event.removeListener(this.friendcheck,"click",this.set_friend)};function vB_UserList_Filter(A,C,B){this.filterbox=YAHOO.util.Dom.get(A);this.containers=C;this.userlist=B;YAHOO.util.Event.on(this.filterbox,"keydown",this.ignore_submit,this,true);YAHOO.util.Event.on(this.filterbox,"keyup",this.perform_filter,this,true);YAHOO.util.Event.on(this.filterbox,"focus",this.handle_focus,this,true);YAHOO.util.Event.on(this.filterbox,"blur",this.handle_blur,this,true);this.labeltext=new String(this.filterbox.value);YAHOO.util.Dom.setStyle(this.filterbox,"display","inline")}vB_UserList_Filter.prototype.ignore_submit=function(D){if(D.keyCode==13){YAHOO.util.Event.stopEvent(D);var C=YAHOO.util.Dom.get("buddylist_change_form");var A=C.id.replace(/_form$/,"_progress");YAHOO.util.Dom.setStyle(A,"display","");var B=new vB_Hidden_Form(C.action);B.add_variable("ajax",1);B.add_variables_from_object(C);B.add_variable("do","buddylist");for(saver in vB_UserList_Savers){if(vB_UserList_Savers[saver].change_form){YAHOO.util.Dom.setAttribute(vB_UserList_Savers[saver].change_form.filter,"origtext",C.filter.value)}if(vB_UserList_Savers[saver].add_form){YAHOO.util.Dom.setAttribute(vB_UserList_Savers[saver].add_form.filter,"origtext",C.filter.value)}}this.ajax_request=YAHOO.util.Connect.asyncRequest("POST",C.action,{success:vB_UserList_Savers.buddylist.handle_ajax_response,failure:vB_UserList_Savers.buddylist.handle_ajax_failure,timeout:vB_Default_Timeout,scope:this,argument:[A,C.id]},SESSIONURL+"securitytoken="+SECURITYTOKEN+"&"+B.build_query_string())}};vB_UserList_Filter.prototype.update_userlist=function(A){this.userlist=A};vB_UserList_Filter.prototype.perform_filter=function(B){var A=YAHOO.util.Dom.get("buddylist_change_form");for(saver in vB_UserList_Savers){if(vB_UserList_Savers[saver].change_form&&vB_UserList_Savers[saver].change_form!=A){vB_UserList_Savers[saver].change_form.filter.value=A.filter.value}if(vB_UserList_Savers[saver].add_form){vB_UserList_Savers[saver].add_form.filter.value=A.filter.value}}};vB_UserList_Filter.prototype.handle_focus=function(A){YAHOO.util.Dom.removeClass(this.filterbox,"filterbox_inactive");if(this.filterbox.value==this.labeltext){this.filterbox.value=""}};vB_UserList_Filter.prototype.handle_blur=function(A){if(PHP.trim(this.filterbox.value)==""){YAHOO.util.Dom.addClass(this.filterbox,"filterbox_inactive");this.filterbox.value=this.labeltext}};