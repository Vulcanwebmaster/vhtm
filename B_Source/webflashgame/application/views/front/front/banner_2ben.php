<div class="banner_1" id="divAdRight" style="display: block; position: fixed; top: 43px">
<?php foreach ($list_banner as $banner)
		{?>
<a href="<?php echo $banner->link1 ?>">
<!-- 	<img src="<?php echo base_url();?>assets/flash_game/images/0006.gif" width="150"; height="165px" /> -->
		<?php echo $banner->image1 ?>
	</br>
</a>
<a href="<?php echo $banner->link2 ?>">
	<?php echo $banner->image2 ?>
	<!-- <img src="<?php echo base_url();?>assets/flash_game/images/0043.gif" width="150"; height="165px" /> -->
</a>
<a href="<?php echo $banner->link3 ?>">
<!-- 	<img src="<?php echo base_url();?>assets/flash_game/images/0006.gif" width="150"; height="165px" />--></br> 
<?php echo $banner->image3 ?>
</a>

</div>
<?php }?>
<?php foreach ($list_banner as $banner)
		{?>
			<style type="text/css">
			
		</style>
<div class="banner_1" id="divAdLeft" style="display: block; position: fixed; top:43px">
<a href="<?php echo $banner->link4 ?>">
	<!-- <img src="<?php echo base_url();?>assets/flash_game/images/casino_1335193446489.gif" width="150"; height="165px" /> -->
	<?php echo $banner->image4 ?></br>
</a>
<a href="<?php echo $banner->link5 ?>">
	<!-- <img src="<?php echo base_url();?>assets/flash_game/images/Hinh-03(3).jpg" width="150"; height="165px" /> -->
	<?php echo $banner->image5 ?>
</a></br>
<a href="<?php echo $banner->link6 ?>">
	<!-- <img src="<?php echo base_url();?>assets/flash_game/images/casino_1335193446489.gif" width="150"; height="165px" /> -->
	<?php echo $banner->image6 ?></br>
</a>

</div>
<?php } ?>
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
document.write("<script type='text/javascript' language='javascript'>MainContentW = 1000;LeftBannerW = 125;RightBannerW = 125;LeftAdjust = 40;RightAdjust = 5;TopAdjust = 10;ShowAdDiv();window.onresize=ShowAdDiv;;<\/script>");
</script>
<!---
MainContentW = 1000 : chiều rộng trang web
LeftAdjust = 5 : khoảng cách từ bìa trái trang web đến banner
RightAdjust = 5 : khoảng cách từ bìa phải trang web đến banner
TopAdjust = 10 : khoảng cách từ rìa trên trang web đến banner
---->