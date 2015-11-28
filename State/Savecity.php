<?php
include_once 'db.php';
$id=$_GET['state'];
$city=$_GET['city'];
$sql=mysql_query("insert into city(state_id,city)values('$id','$city')");
header('location:Addcity.php?CITY ADDED SUCCESSFULLY');
?>