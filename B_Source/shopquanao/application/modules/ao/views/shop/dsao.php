<div class="subscribesec">
	<div class="feedlist">
		<ul style="float: left">
			<li><span>Hỗ trợ trực tuyến: </span></li>
			<!-- chat yahoo start 1 -->
			<li><a href="ymsgr:sendim?vananhshop01"> <img border="0"
					src="http://opi.yahoo.com/online?u=vananhshop01&amp;m=g&amp;t=2">
			</a>
			</li>
			<li><a href="ymsgr:sendim?vananhshop01"> <img border="0"
					src="http://opi.yahoo.com/online?u=vananhshop01&amp;m=g&amp;t=2">
			</a>
			</li>
			<li><a href="ymsgr:sendim?vananhshop01"> <img border="0"
					src="http://opi.yahoo.com/online?u=vananhshop01&amp;m=g&amp;t=2">
			</a>
			</li>
			<!-- chat yahoo end 1 -->
		</ul>
		<ul style="float: right">
			<li><a href="http://www.vananhshop.com/feeds/posts/default"><img
					title="subscribe"
					src="http://2.bp.blogspot.com/_4HKUHirY_2U/TP8O1PPQk1I/AAAAAAAAI-Y/OprutrrAa6M/s1600/rss.png"
					alt="RSS">
			</a>
			</li>
			<li><a
				href="https://www.facebook.com/pages/vananhshop/127616774009510"><img
					title="Facebook"
					src="http://1.bp.blogspot.com/_4HKUHirY_2U/TP8OrKbfrbI/AAAAAAAAI-A/paIKvGLnLRM/s1600/facebook.png"
					alt="Facebook">
			</a>
			</li>
			<li><a href="http://twitter.com/vananhshop"><img title="Twitter"
					src="http://1.bp.blogspot.com/_4HKUHirY_2U/TP8PC7OMGzI/AAAAAAAAI_A/rvwJ94Czplg/s1600/twitter.png"
					alt="Twitter">
			</a>
			</li>
			</ul>
	</div>
	<div class="clear"></div>
</div>
<div class="main-container col2-right-layout">
	<?php 
	
		foreach ($list as $index => $product) 
		{
	?>
		<div class="post hentry">
			<a name="1655744853648508510"></a>
			<h3 class="post-title entry-title">
				<a href="<?php echo site_url()."/chitietsp/get_inf/".$product['id'];?>"><?php echo $product['name'];?></a>
			</h3>
			<div class="post-header-line-1"></div>
			<div class="post-body entry-content">
				<p></p>
				<div id="summary1655744853648508510">
					<span style="float: left; padding: 0px 10px 5px 0px;"><img
						src="<?php echo convert_image_path($product['image']);?>"
						width="200px" height="270px" style="opacity: 1;">
					</span>
					<div>Mã...</div>
				</div>
				<p></p>
				<div style="clear: both;"></div>
			</div>
			<div class="post-footer">
				<div class="post-footer-line post-footer-line-1"></div>
				<div class="post-footer-line post-footer-line-2"></div>
				<div class="post-footer-line post-footer-line-3"></div>
			</div>
		</div>
	<?php 
	
		}
	?>
</div>
