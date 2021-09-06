<html>
<body>




<h2>Student Registration</h2>
<hr>
<form action="Output.php" method="get">


<table width="900" border="0">


<tr>
<td>Student Number:</td>
<td><input type="text" name="StudentNumber" size="40" maxlength="15" required>
</tr>


<tr>
<td>Last Name:</td>
<td><input type="text" name="LastName" size="40" maxlength="30" required>
</tr>


<tr>
<td>First Name:</td>
<td><input type="text" name="FirstName" size="40" maxlength="50" required>
</tr>


<tr>
<td>Middle Name:</td>
<td><input type="text" name="MiddleName" size="40" maxlength="30">
</tr>


<tr>
<td>Email Address:</td>
<td><input type="email" name="Email" size="40" maxlength="30" required>
</tr>


<tr>
<td>Course:</td>
<td>
   <select name="Course">
          <option value="ABM">SHS-Accountancy, Business and Management Strand</option>
  <option value="GAS">SHS-General Academics Strand</option>
  <option value="HUMSS">SHS-Humanities and Social Sciences Strand</option>
  <option value="STEM">SHS-Science, Technology, Engineering and Mathematics Strand</option>
   </select>
</td>
</tr>


<tr>
<td>Gender:</td>
<td>
   <select name="Gender">
          <option value="M">Male</option>
  <option value="F">Female</option>


   </select>
</td>
</tr>


<tr>
<td></td>
<td>
<input type="submit" name="Register Student" id="Register Student" value="Register Student" />
</td>
</tr>






</table>

</form>





</body>
</html>