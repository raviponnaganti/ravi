<?php
include_once 'db.php';
$s1=$_GET['state'];
$query=mysql_query("insert into state(state)value('$s1')");
header('location:Addstates.php?state added successfully');
echo $s1;
?>
