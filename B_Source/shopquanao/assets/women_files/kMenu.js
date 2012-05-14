var o_ChannelIndex='home';
var o_ChannelRoot='home';

var kMenu = {
    current : '',
    idmenu : '',
    delayhide : null,
	getObject:function(name){
        return document.getElementById(name);
    },
    
	subForm : function(){return this.getObject('sub_FormSearch');},
    clear_delayhide: function(){
        if(kMenu.delayhide)
	        clearTimeout(kMenu.delayhide);
    },
    WriteMenu:function() {
	    kMenu.delayhide = setTimeout("kMenu.SetCurrent()",500);
    },
    SetCurrent:function(){
        try
        {
            var curmenu = document.getElementById('mn_'+this.current);
            curmenu.parentNode.className = 'selected';
            kMenu.showsubmenu(curmenu.parentNode,true);
            if(this.getObject(kMenu.menuselect)!=undefined && kMenu.menuselect != 'mn_' + kMenu.current){
                this.getObject(kMenu.menuselect).parentNode.className = '';
            }
            kMenu.menuselect = 'mn_' + kMenu.current;
        }catch(Err){}
    },
    menuselect:'mn_home',
    addEvent:function(obj, type, fn) {
	    if ( obj.attachEvent ) {
	        obj['e'+type+fn] = fn;
            obj[type+fn] = function(){obj['e'+type+fn]( window.event );}
            obj.attachEvent( 'on'+type, obj[type+fn] );
        } else
            obj.addEventListener( type, fn, false );
    },
    removeEvent:function(obj, type, fn){
        if ( obj.detachEvent ) {
            obj.detachEvent( 'on'+type, obj[type+fn] );
            obj[type+fn] = null;
        } else
            obj.removeEventListener( type, fn, false );
    },
    Init:function(idmenu,current){
        if(current=='anh' || current=='italy' || current=='duc' || current=='tbn')
            current = '1';
        this.current = current;
        this.idmenu = idmenu;
        this.menuselect = 'mn_'+current;
        var menu = document.getElementById(idmenu);
        var smenus = menu.getElementsByTagName('li');
        for(var i=0;i<smenus.length;i++){
            if(smenus[i].innerHTML!=''){
                this.addEvent(smenus[i], "mouseover", function(e){
                    if(document.getElementById(kMenu.menuselect)!=undefined){
                        document.getElementById(kMenu.menuselect).parentNode.className = '';
                    }
                    if(kMenu.menuselect != this.getElementsByTagName('a')[0].id)
                        kMenu.menuselect = this.getElementsByTagName('a')[0].id;
                    this.className = 'selected';
                    kMenu.showsubmenu(this,false);
                    kMenu.clear_delayhide();
                });
                this.addEvent(smenus[i], "mouseout", function(e){
                    kMenu.WriteMenu();
                });
            }
        }
        //document.getElementById('main').className = 'hide';
        this.SetCurrent();
        var main = document.getElementById('main');
        main.onmouseover = function(){
            kMenu.clear_delayhide();
        }
        main.onmouseout = function(){
            kMenu.WriteMenu();
        }
    },
    setTimeSearch:function(time,search){

        if(search)
            kMenu.subForm().className = '';
        else
            kMenu.subForm().className = 'hide';
    },
    showsubmenu:function(menuid,isinit){
        var smenuid = menuid.getElementsByTagName('a')[0].id;
        var submenuid = 'sub_' + smenuid.substring(3,smenuid.length);
        var obj = document.getElementById(submenuid);
        if(obj!=undefined){
            if(obj.innerHTML.length == 0){
				this.setTimeSearch(true,true);
                document.getElementById('main').innerHTML = document.getElementById('sub_home').innerHTML;

            }
            else{
                var tleft = obj.getAttribute('title');
                var main = document.getElementById('main');
                if(submenuid!='sub_home1'){
                    var searchlength = 122;
                    if(tleft<400 && tleft >= 0){
                        this.setTimeSearch(tleft>=searchlength?true:false,true);
						if(tleft>searchlength)
							tleft = tleft - searchlength;
                    }else{
						if(isinit){
							tleft = -searchlength - tleft;
							this.setTimeSearch(tleft>=searchlength?true:false,true);
							if(tleft>searchlength)
								tleft = tleft - searchlength;
						}
						else
							this.setTimeSearch(true,false);
                    }
                }
                var ul = obj.getElementsByTagName('ul')[0];
                if(ul!=undefined){
                    // Truong hop trinh duyet la IE7 ko ho tro ham setAttribute
                    if (window.ActiveXObject){
                        if(tleft>0)
                            obj.innerHTML = '<ul style="padding-left: '+tleft+'px">' + obj.innerHTML.replace(/<[^>]*ul[^>]*>/ig,'') + '</ul>';
                        else
                            obj.innerHTML = '<ul style="padding-left: '+(-tleft)+'px">' + obj.innerHTML.replace(/<[^>]*ul[^>]*>/ig,'') + '</ul>';
                    }else{
						if(tleft>0)
							ul.setAttribute('style','padding-left: '+tleft+'px;');
						else
							ul.setAttribute('style','padding-left: '+(-tleft)+'px;');
					}
                }else{
                    this.setTimeSearch(true,true);
                }
                main.innerHTML = obj.innerHTML;
            }
        }
    }
};
function showmenu(li){
    if(li.className != 'show'){
        li.className = 'show';
    }else{
        li.className = '';
    }
}