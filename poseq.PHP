<?php
include('header.php');
?>
<html>
	<head>
		<title>Pose Questions</title>
	</head>
	<body>
	<table>
     <tr>
	 <td>
	  </tr>
	 </td>
	 </table>
	<center>
	 <table  width=980px bgcolor=white>
     <tr>
	 <td>
	 <fieldset >
		<form action="submit.php" method="POST"><br>
	    Select the Department: <br><br>
            <input type="radio" name="department" value="General" checked/>General<br>		
            <input type="radio" name="department" value="Electronics and Communication"/>Electronics and Communication<br>
			<input type="radio" name="department" value="Computer Science"/>Computer Science<br>
			<input type="radio" name="department" value="Information Science"/>Information Science<br>
			<input type="radio" name="department" value="Mechanical"/>Mechanical<br>
			<input type="radio" name="department" value="Instrumentation Technology"/>Instrumentation Technology<br>
			<input type="radio" name="department" value="Civil"/>Civil<br>
			<input type="radio" name="department" value="Electronics and Communication"/>Electronics and Communication<br>
			What's your Question? <br><br>

		    <textarea name="comment" style="width: 300px; height: 150px;" placeholder="enter your QUESTION here...max in 140 characters"></textarea><br><br>
			<input type="checkbox" name="mail" value="Notify"/>Notify  me via mail when answered<br>
			<input type="submit" name="submit" value="Submit"/><br>
		</form>
	</fieldset >
	
     </tr>
	 </td>
	 </table>
	</body>
	</html>