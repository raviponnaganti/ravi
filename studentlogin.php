<html>
<head>
</head>
<body>
<form action="studentsave.php">

<div align="center">

<h1 style="color: red;">STUDENT SIGN UP FORM</h1>
<table>
<tr><td>Student Name</td><td><input type="text" name="sname" id="sname"></td></tr>
<tr><td>Father Name</td><td><input type="text" name="fname" id="fname"></td></tr>
<tr><td>SEM</td><td>
<select name="sem">
<option value="I">I</option>
<option value="II">II</option>
<option value="III">III</option>
<option value="IV">IV</option>
<option value="V">V</option>
<option value="VI">VI</option>
<option value="VII">VII</option>
<option value="VIII">VIII</option>
</select></td></tr>
<tr><td>Section ID</td><td><input type="text" name="secid" id="secid"></td></tr>
<tr><td>Section</td>
<td><select name="sec" id="sec">
<option value="A">A</option>
<option value="B">B</option>
<option value="C">C</option>
<option value="D">D</option>
<option value="E">E</option>
<option value="F">F</option>
</select></td></tr>
<tr><td>Address</td><td><textarea name="addr"></textarea></td></tr>
<tr><td>Gender</td><td><input type="radio" name="sex" value="male">Male<input type="radio" name="sex" value="female">Female</td></tr>
<tr><td>Department_ID</td><td><input type="text" name="dep_id" id="dep_id"></td></tr>
<tr><td>Course_ID</td><td><input type="text" name="c_id" id="c_id"></td></tr>
<tr><td>Email_ID</td><td><input type="text" name="e_id" id="e_id"></td></tr>
<tr><td>Parent_PH_NO</td><td><input type="text" name="ppno" id="ppno"></td></tr>
<tr><td>Student_PH_NO</td><td><input type="text" name="spno" id="spno"></td></tr>
<tr><td>Date Of Birth</td><td><input type="date" name="dob" id="dob"></td></tr>
<tr><td>Date Of Joining</td><td><input type="date" name="doj" id="doj"></td></tr>
<tr><td>Student_Photo</td><td><input type="text" name="sp" id="sp"></td></tr>
<tr><td>Status</td><td><input type="text" name="status" id="status"></td></tr>
<tr><td>Regulation</td><td><input type="text" name="rgl" id="rgl"></td></tr>
<tr><td></td><td><input type="submit" value="Submit"></td></tr>

</table>

</div>
<div align="right">

<a href="studentview.php">CLick Here To View Records</a>
<a href="studentview1.php">CLick Here To perform Action</a>
<a href="studentview2.php">CLick Here To view Students List</a>
</div>
</form>
</body>
</html>