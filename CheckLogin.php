<?php
// Start Session because we will save some values to session varaible.
session_start();
// include connection file
include('index1.html');
include("configPDO.php");
// Define $myusername and $mypassword
if (isset($_POST)){
$UserName=$_POST['team_name']; 
$Password=$_POST['pass']; 
// We Will prepare SQL Query
    $STM = $dbh->prepare("SELECT * FROM login WHERE team_name = :UserName AND password = :Password");
// bind paramenters, Named paramenters alaways start with colon(:)
    $STM->bindParam(':UserName', $UserName);
    $STM->bindParam(':Password', $Password);
// For Executing prepared statement we will use below function
    $STM->execute();
// Count no. of records	
$count = $STM->rowCount();
//just fetch. only gets one row. So no foreach loop needed :)
$row  = $STM -> fetch();
// User Redirect Conditions will go here
	if($count==1)
	{
	
    	// Save type and other information in Session for future use.
		$_SESSION['sid']=session_id();
		
		// if user type is ACTAdmin only then he can access protected page.
	echo '<script language="javascript">';
		echo 'window.location="postlogin.php"';
		echo '</script>';
      
		// header("Location: postlogin.html");
		 // header("Location")  

	}
	else 
	{
	  	echo '<script language="javascript">';
		echo 'alert("Wrong Team Name or Password")';
		echo '</script>';
	}
// Closing MySQL database connection 
    $dbh = null;


}
?>