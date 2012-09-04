<table cellpadding="0" cellspacing="0" border="1" width="80%">
        <tr>
            <th>STT</th>
            <th>Tên bài hát</th>
            <th>Ca sĩ</th>
            <th>Nhạc sĩ</th>
            <th>Thể loại</th>
            <th>Album</th>
            <th>Đường dẫn</th>
        </tr>
    	<?php foreach($query as $row)
		{
    	?>
    		<tr>
    		
    			<td><?php echo $row->stt;?></td>
    		
    			<td><?php echo $row->song;?></td>
    		
    			<td><?php echo $row->singer;?></td>
    			
    			<td><?php echo $row->musician;?></td>
    			
    			<td><?php echo $row->categories;?></td>
    			
    			<td><?php echo $row->album;?></td>
    			
    			<td><?php echo $row->url;?></td>
    		</tr>
    	<?php
		}
		?>
    </table>