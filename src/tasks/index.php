<?php define('TITLE', 'TASKS'); ?>
<?php include '../config/settings.php'; ?>
<?php include '../include/database.php'; ?>
<?php include '../include/header.php';?>
            
 <h2>TASKS</h2>   

 <table with="100%" border="1" cellpadding="10">
    <tr>
        <th width="40" nowrap="nowrap">№</th>    
        <th width="200" nowrap="nowrap" align="left">NAME</th>
        <th width="100%" align="left">DESCRIPTION</th>
    </tr>
    
        <?php
            $result = $connection->query('SELECT id, name, description FROM tm.tm_task; ');
            while($row = $result->fetch_object()){
        ?>
        <tr>
        <td align="center">01.</td>
        <td align="left"><?php echo $row->name; ?></td>
        <td align="left"><?php echo $row->description; ?></td>
        </tr>              
        <?php
            }
        ?>
</table>   

<?php include '../include/footer.php';?>