<html>
<meta name="google-site-verification" content="Hs8I9MoxK4nO_uDo66MISS0VUmlxAWkuFOE4-zIGnA8" />
<body bgcolor=666666>      
  
<table width=100% bgcolor=0066cc >
<td>
<center>
<img src="images/logo.jpg" height=118px alt="R.N.S. INSTIOTUTE OF TECNOLOGY"><img src="images/header.jpg" alt="R.N.S. INSTIOTUTE OF TECNOLOGY">
</center>
</td>
</table>
<?php
if(!isset($_COOKIE['user'])) {
    include('links.php');
} else {
    
	include('linksl.php');
	
	
	
$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="login";
$dberror="oops could't been able connect to the server";
$dbconn=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname) or die();
 
       if($dbconn==true) 
      {   
          
		    $usn=$_COOKIE["user"];
            $sql = "UPDATE studentlogin SET chon=now() WHERE usn='$usn'";
			
	  }
	    if ($dbconn->query($sql) === TRUE) {
            //echo "Record updated successfully";
          } else {
          //echo "Error updating record: " . $dbconn->error;
          }
	}		
?>

<center>
<table width=980px height=35px bgcolor=yellow >
<td>
<center>
<h1>CAMPUS CONNECT</h1>
</center>
</td>
</table>
</center>
</html>
