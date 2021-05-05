<table border="1">
<hr><td>ID</td><td>Data</td></hr>
<?php
foreach($alldata as $value)
{
echo '<tr><td>'.$value->id.'</td><td>'.$value->fielddata.'</td></tr>';
}
?>
</table>