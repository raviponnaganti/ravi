<html>
<head>
<script>
function getcity()
{
alert(1);
$state=document.getElementById("state").value;
alert($state);
var xmlhttp;
if (window.XMLHttpRequest)
     {// code for IE7+, Firefox, Chrome, Opera, Safari
         xmlhttp=new XMLHttpRequest();
     }
    else
     {// code for IE6, IE5
       xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
     }
 xmlhttp.onreadystatechange=function()
   {
    if (xmlhttp.readyState==4 && xmlhttp.status==200)
      {
       $status=xmlhttp.responseText;
        alert($status);
      $temp=status.split("::");//special symbol
       for($i=1;i<=temp.length;i++)
       	{
            document.getElementById("city").options[i]=new Option(temp[i],temp[i]);            // id
           }
         }
}
xmlhttp.open("GET","getcity.php?state="+$state,true);                 //
xmlhttp.send();

}

</script>
</head>
<body>
<div align="center">
<h1 style="color: red">STUDENT LOGIN FORM</h1>
<table>
<tr><td>NAME</td><td><input type="text" name="name" id="name"></td></tr>
<tr><td>AGE</td><td><input type="text" name="age" id="age"></td></tr>
<tr><td>SEX</td><td><input type="radio" name="sex" value="male">MALE<input type="radio" name="sex" value="femlale">FEMALE</td></tr>
<tr><td>MOBILE</td><td><input type="text" name="pno" id="pno"></td></tr>
<tr><td>STATE</td>
<td><select name="state" id="state" onchange="getcity()">
<option value=""></option>
<?php 

include_once 'db.php';
$sql=mysql_query("select * from state");
while($row=mysql_fetch_array($sql))
{
?>
	<option value="<?php echo $row['id'];?>"><?php echo $row['state'];?></option>
<?php 
}

?>
</select></td></tr>
<tr><td>CITY</td><td><select name="city" id="city"><option value=""></option></select></td></tr>
<tr><td></td><td><input type="submit" value="SUBMIT"></td></tr>
</table>
</div>
</body>
</html>