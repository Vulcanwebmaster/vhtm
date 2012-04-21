<div style="width: 70%;">
<fieldset>
    <legend><?=$title?></legend>
    <table class="admin">
        <thead>
            <tr>
                <th width="200">Cấu hình</th>
                <th>Giá trị</th>
            </tr>
        </thead>
        <tr>
            <td><b>SERVER IP</b></td>
            <td><?=$_SERVER['SERVER_ADDR']?></td>
        </tr>
        <tr>
            <td><b>SERVER NAME</b></td>
            <td> <?=$_SERVER['SERVER_NAME']?> </td>
        </tr> 
        <tr>
            <td><b>SERVER SOFTWARE</b></td>
            <td> <?=$_SERVER['SERVER_SOFTWARE']?> </td>
        </tr>         
        <tr>
            <td><b>SERVER PORT</b></td>
            <td> <?=$_SERVER['SERVER_PORT']?></td>
        </tr>         
               
    </table>
</fieldset>
</div>