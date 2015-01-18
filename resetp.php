<html>
<body bgcolor=gray>
<?php
include('header.php');
?>
<?php $dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="appraisal";

  $fname=$_GET['fname'];
  if($fname!="nakul")
  {
   $lname=$_GET['lname'];
   $email=$_GET['email'];
  }
?>
<center>
<table width=980px bgcolor=0066cc >
<td><br>
<h3><center>A Confirmation Code is sent your email id. Please enter that code.</h3></center>


<form action="insertp.php" method="POST">
<center>
<table width=500px bgcolor=0066cc >
<td><br>
USN &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp :&nbsp &nbsp <input type="text" value="" name="usn" placeholder="1RNXXXXXXX"  pattern="(.){10,10}" align="right" required/>
<br><br>CONFIRMATION CODE &nbsp&nbsp&nbsp: &nbsp &nbsp<input type="text" value="ENTER CODE " name="name" pattern="(.){6,6}"  align="right" required/>
<br><br>PASSWORD &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp  &nbsp &nbsp  &nbsp  &nbsp &nbsp &nbsp&nbsp: &nbsp&nbsp <input type="password" value="" name="name" pattern="(.){6,10}" align="right" required/>
<pre>                          min of 6 and max of 10 character</pre>
CONFIRM PASSWORD &nbsp &nbsp&nbsp&nbsp: &nbsp &nbsp<input type="password" value="" name="name"  pattern="(.){6,10}" align="right" required/>
<br><br>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp
<input type="submit" name="submit" value="RESET"></center></center>
</td>
</table>
</td>
</table>

</body>
</html>