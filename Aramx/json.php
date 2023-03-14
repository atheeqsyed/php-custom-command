<?php

$array = [];
$array[] = 'Apple';
$array[] = 'Banana';
$array[] = 'Grapes';
 // echo json_encode($array);

if (isset($_GET['key']))
{
echo $array[$_GET['key']];
}
?>
