<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<div id="title-panel">
	<div id="title">
		<div id="title-left"></div>
		<div id="title-center">
			<h1>Giới thiệu</h1>
		</div>
		<div id="title-right"></div>
	</div>
</div>

<div id="content-panel">
	<hr style="border:none">
	<div id="gioithieu-content">

				<ul class="list">
					<?php 
					{
						foreach($list as $item)
						{?>
					<li style="clear:both">
						<style type="text/css">
							p{margin-top:5px; margin-bottom:3px}
						</style>
						<table>
							<tr>
								<td style="padding:0 10px; text-align:justify; vertical-align:0">
									<h3><?php echo $item->ten?></h3></a>
									<p style="color:#005274"><?php echo $item->noidung?></p>				
								</td>
							</tr>
						</table>
					</li>
					<li><hr/></li>
					<?php 	
						}
					}
					?>
				</ul>

	</div>
</div>