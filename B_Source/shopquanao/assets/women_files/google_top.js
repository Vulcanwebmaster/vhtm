(function(){var i=function(d){var c=[],e;for(e in d)c.push(e+"="+d[e]);return c.join("\n")};var j=function(d){for(var c,e=d.origin,b=d.data.split("\n"),f={},a=0;a<b.length;a++){var g=b[a].indexOf("=");-1!=g&&(f[b[a].substr(0,g)]=b[a].substr(g+1))}if("google_loc_request"==f[0]&&{"http://googleads.g.doubleclick.net/":1,"http://pagead2.googlesyndication.com/":1,"https://googleads.g.doubleclick.net":1,"https://pagead2.googlesyndication.com":1}.hasOwnProperty(e)){b={};b[1]=f[1];b[2]=2;for(var a=window,f=0,g=a,h=0;a!=a.parent;){a=a.parent;h++;try{c=!!a.location.href||""===a.location.href}catch(k){c=
!1}c&&(g=a,f=h)}c=g;b[3]=c.location.href;b[4]=c.document.referrer;b[5]=f;d.source.postMessage(i(b),e)}};window.addEventListener?window.addEventListener("message",j,!1):window.attachEvent&&window.attachEvent("onmessage",j);})();
