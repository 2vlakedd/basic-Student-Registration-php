<?php
$StudentNumber=$_GET['StudentNumber'];
$LastName=$_GET['LastName'];
$FirstName=$_GET['FirstName'];
$MiddleName=$_GET['MiddleName'];
$Email=$_GET['Email'];	
$Course=$_GET['Course'];
$Gender=$_GET['Gender'];

if($Course=='ABM')
$LongCourse='SHS-Accountancy, Business and Management Strand';
elseif($Course=='STEM')
$LongCourse='SHS-Science, Technology ,Engineering and Mathematic Strand';
elseif($Course=='HUMSS')
$LongCourse='SHS-Humanities and Social Sciences';
elseif($Course=='GAS')
$LongCourse='SHS-General Academic Strand';
else
$LongCourse='SHS-
Technical-Vocational-Livelihood ';

if($Gender=='M')
$LongGender='Male';
else
$LongGender='Female';

echo"<h2>StudentNumber Registration</h2><hr>";
echo"<h2>Welcome<b></h2>".$LastName.",".$FirstName.",".$MiddleName."</b><hr>";
echo"<h2>Your Email Address:<b></h2>".$LongCourse."</b><hr>";
echo"<h2>Your Gender:<b></h2>".$LongGender."</b><hr>";
?>	