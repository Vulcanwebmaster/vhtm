<div id="divAdRight" style="display: block; position: fixed;">
<a href="http://vietdesigner.net">
	
	<img src="<?php echo base_url();?>assets/flash_game/images/0006.gif" width="150"; height="165px" /></br>
	<img src="<?php echo base_url();?>assets/flash_game/images/boss_mario.gif" width="150"; height="165px" />
</a>
</div>
<div id="divAdLeft" style="display: block; position: fixed;">
<a href=" http://vietdesigner.net">
	<img src="<?php echo base_url();?>assets/flash_game/images/casino_1335193446489.gif" width="150"; height="165px" /></br>
	<img src="<?php echo base_url();?>assets/flash_game/images/mario.gif" width="150"; height="165px" />
	
	
</a>
</div>
<script>
    function FloatTopDiv()
    {
        startLX = ((document.body.clientWidth -MainContentW)/2)-LeftBannerW-LeftAdjust , startLY = TopAdjust+80;
        startRX = ((document.body.clientWidth -MainContentW)/2)+MainContentW+RightAdjust , startRY = TopAdjust+80;
        var d = document;
        function ml(id)
        {
            var el=d.getElementById?d.getElementById(id):d.all?d.all[id]:d.layers[id];
            el.sP=function(x,y){this.style.left=x + 'px';this.style.top=y + 'px';};
            el.x = startRX;
            el.y = startRY;
            return el;
        }
        function m2(id)
        {
            var e2=d.getElementById?d.getElementById(id):d.all?d.all[id]:d.layers[id];
            e2.sP=function(x,y){this.style.left=x + 'px';this.style.top=y + 'px';};
            e2.x = startLX;
            e2.y = startLY;
            return e2;
        }
        window.stayTopLeft=function()
        {
            if (document.documentElement && document.documentElement.scrollTop)
                var pY =  document.documentElement;
            else if (document.body)
                var pY =  document.body;
            if (document.body.scrollTop > 30){startLY = 3;startRY = 3;} else {startLY = TopAdjust;startRY = TopAdjust;};
            ftlObj.y += (pY+startRY-ftlObj.y)/16;
            ftlObj.sP(ftlObj.x, ftlObj.y);
            ftlObj2.y += (pY+startLY-ftlObj2.y)/16;
            ftlObj2.sP(ftlObj2.x, ftlObj2.y);
            setTimeout("stayTopLeft()", 1);
        }
        ftlObj = ml("divAdRight");
        //stayTopLeft();
        ftlObj2 = m2("divAdLeft");
        stayTopLeft();
    }
    function ShowAdDiv()
    {
        var objAdDivRight = document.getElementById("divAdRight");
        var objAdDivLeft = document.getElementById("divAdLeft");
        if (document.body.clientWidth < 1000)
        {
            objAdDivRight.style.display = "none";
            objAdDivLeft.style.display = "none";
        }
        else
        {
            objAdDivRight.style.display = "block";
            objAdDivLeft.style.display = "block";
            FloatTopDiv();
        }
    }
</script>
<script>
document.write("<script type='text/javascript' language='javascript'>MainContentW = 1000;LeftBannerW = 125;RightBannerW = 125;LeftAdjust = 30;RightAdjust = 5;TopAdjust = 300;ShowAdDiv();window.onresize=ShowAdDiv;;<\/script>");
</script>
<!---
MainContentW = 1000 : chiều rộng trang web
LeftAdjust = 5 : khoảng cách từ bìa trái trang web đến banner
RightAdjust = 5 : khoảng cách từ bìa phải trang web đến banner
TopAdjust = 10 : khoảng cách từ rìa trên trang web đến banner
---->