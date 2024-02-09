<?php define('TITLE', 'TASKS'); ?>
<?php include '../config/settings.php'; ?>
<?php include '../include/database.php'; ?>
<?php include '../include/header.php';?>
            
 <h2>TASKS</h2>   

 <table with="100%" border="1" cellpadding="10" style="margin-bottom: 20px;>
    <tr>
        <th width="40" nowrap="nowrap">№</th>    
        <th width="200" nowrap="nowrap" align="left">NAME</th>
        <th width="100%" align="left">DESCRIPTION</th>
        <th width="40" nowrap="nowrap"></th>
        <th width="40" nowrap="nowrap"></th>
    </tr>
    
        <?php
        $index = 1;
            $result = $connection->query('SELECT id, name, description FROM tm.tm_task; ');
            while($row = $result->fetch_object()){
        ?>
        <tr>
        <td align="center"><?php echo $index; ?>.</td>
        <td align="left"><?php echo $row->name; ?></td>
        <td align="left"><?php echo $row->description; ?></td>
        <td align="center">
            <a href="/task/edit/?id=<?php echo $row->id; ?>">
                <img src="/image/edit.png" width="32"/>
            </a>
        
        </td>
        <td align="center">
            <form name="formDelete<?php echo $row->id; ?>" action="/task/delete/" method="POST" style="display:none;">
                <input type="hidden" name="id"  value="<?php echo $row->id; ?>" />
            </form>
            <a href="#" onclick="document.forms['formDelete<?php echo $row->id; ?>'].submit();">
                <img src="/image/trash.png" width="32"/>
            </a>            
        </td>
        </tr>              
        <?php
            $index++;
            }
        ?>
</table>   

<form action="/task/create/" method="POST">
    <button type="submit">
    CREATE TASK
    </button>
</form>

<?php include '../include/footer.php';?>