
<?php
include('index1.html');
if(isset($_POST['p1']) && isset($_POST['p2'])  && isset($_POST['email'])  && isset($_POST['password'])  && isset($_POST['cpassword']) ){
$u1=$_POST['p1'];
$u2=$_POST['p2'];
$email=$_POST['email'];
$password=$_POST['password'];
$cpassword=$_POST['cpassword'];
	try{

			require('function.php');
		// $checkemail = 'SELECT email FROM login WHERE email=:mymail'; 
		// $c = $connection->prepare($checkemail);
		// $c->execute( array( ':mymail'=>$getemail) ); 
		// $res = $c->fetchAll();
		// if($res == 0){
			// die("ERROR");
		// }
		
////////////////////////////
		
		$insert = 'INSERT INTO login ( name1, name2, email, mobile, college, password )
		                       VALUES
		                       ( :name1, :name2, :email, :mobile, :college, :password); '; 

		$result = $connection->prepare($insert);
		$result->execute( array( ':name1'=>$name1, ':name2'=>$name2, ':email'=>$email,':mobile'=>$mobile,':college'=>$college, ':password'=>$password) ); 
		
		// $_SESSION['flag']='com';
		// header("Location: coming_soon.php");
		}

		catch(PDOException $e){
			die('error in reg');
			echo '$e';
		}
}
?>