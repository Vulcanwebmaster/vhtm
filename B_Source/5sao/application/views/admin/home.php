<article class="module width_full">
	<header><h3>Stats</h3></header>
		<!-- div class="module_content">
			<article class="stats_graph">
				<img src="http://chart.apis.google.com/chart?chxt=y&amp;chxt=y&amp;chs=520x140&cht=lc&chco=76A4FB,80C65A&chd=t:<?php echo $counting;?>&chma=40,20,20,30" width="520" height="140" alt="" />
			</article>
			
			<article class="stats_overview">
				<div class="overview_today">
					<p class="overview_day">Today</p>
					<p class="overview_count"><?php if ($today) echo $today->soluong/2; else echo '0';?></p>
					<p class="overview_type">Views</p>
				</div>
			</article>
			<div class="clear"></div>
		</div -->
		
		<div>
			<script type="text/javascript" src="https://www.google.com/jsapi"></script>
		    <script type="text/javascript">
		      google.load("visualization", "1", {packages:["corechart"]});
		      google.setOnLoadCallback(drawChart);
		      function drawChart() {
		        var data = google.visualization.arrayToDataTable([
		          ['Ngày tháng', 'Số lượng truy cập'],
		          <?php foreach ($counting as $row)
		          {
		          	echo "['".$row->ngaythang."',".$row->soluong."],";
		          }?>
		        ]);
		
		        var options = {
		          title: 'Thống kế số lượng truy cập'
		        };
		
		        var chart = new google.visualization.LineChart(document.getElementById('chart_div'));
		        chart.draw(data, options);
		      }
		    </script>
		    <div id="chart_div">
		    </div>
		</div>
</article><!-- end of stats article -->