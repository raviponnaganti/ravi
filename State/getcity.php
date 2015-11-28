<?php
include_once 'db.php';
$state=$_GET['state'];
$sql=mysql_query("select * from city where state_id='$state'");
$data="";
while($row=mysql_fetch_array($sql))
	{
			$data="::"+$row["city"];
			echo ($data+"::");
	}
?>