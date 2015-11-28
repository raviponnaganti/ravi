<html>
<head>

</head>
<body>
<form action="Savecity.php">
<div align="center">
<h1 style="color: red">ADD CITY</h1>
<table>
<tr><td>STATE</td>
<td><select name="state" id="state">
<option value=""></option>
<?php include_once 'db.php';
$sql=mysql_query("select * from  state");
while($row=mysql_fetch_array($sql))
{
	?>
	
	<option value="<?php echo $row["id"];?>"><?php echo $row["state"];?></option>
<?php 
}

?>
</select></td></tr>
<tr><td>CITY</td><td><input type="text" name="city" id="city"></td></tr>
<tr><td></td><td><input type="submit" value="ADD CITY"></td></tr>
</table>
</div>
</form>
</body>
</html>