<?php

$host="localhost";
$username="root";
$password="root";
$db_name="states";
$con=mysql_connect("$host","$username","$password") or die ("cannot connect");
mysql_select_db("$db_name") or die("cannot select db");
return $con;
?>