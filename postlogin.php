<?php 
 session_start();
if(!isset($_SESSION['sid'])){
		echo '<script language="javascript">';
		echo 'window.location="index1.html"';
		echo '</script>';
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Googlock Holems | Synapse'17</title>
<link href="css/style.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Googlock Holems"./> 
<!--<script type="text/javascript">
// function validation(){

// 	var i=0;
// 	var name_1 = document.getElementById('p1');
// 	var name_2 = document.getElementById('p2');
// 	var team = document.getElementById('team');
// 	var email =document.getElementById('email');
// 	var mobile = document.getElementById('mno');
// 	var college = document.getElementById('college');
// 	var password =document.getElementById('password');
//     var cpassword = document.getElementById('cpassword');
// if(name_1.value==""){
// 	document.getElementById("error").innerHTML="please fill the field Participant1";
// 	return false;
// } 
// if(name_2.value==""){
// 	document.getElementById("error").innerHTML="please fill the field Participant2";
// 	return false;
// }
// if(team.value==""){
// 	document.getElementById("error").innerHTML="please fill the field Team Name";
// 	return false;
// }
// if(email.value==""){
// 	document.getElementById("error").innerHTML="please fill the field email";
// 	return false;
// }
// else{
// 		var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
// 	if (reg.test(email.value)==false)  
//   {  
//   	document.getElementById("error").innerHTML="please enter the valid  email";
//   	return false;
//   }  
// }
// if(mno.value==""){
// 	document.getElementById("error").innerHTML="please fill the field Mobile No.";
// 	return false;
// }else{
// var phoneno = /^\d{10}$/;  
// 	if(!mobile.value.match(phoneno)){
// 	document.getElementById("error").innerHTML="mobile no. is invalid </br> Enter Mobile No. without including +91 or 0<br>";		
// 		return false;
// 	}
// }
// if(college.value==""){
// 	document.getElementById("error").innerHTML="please fill the field college";
// 	return false;
// }
// if(password.value==""){
// document.getElementById("error").innerHTML="please fill the field password";
// 	return false;	
// }
// if(cpassword.value==""){
// document.getElementById("error").innerHTML="please fill the field Confirm Password";
// 	return false;	
// }
// if(password.value!=cpassword.value){
// document.getElementById("error").innerHTML="password doesn't match with confirm password";
// return false;
// }
// if(password.value.length<6)
// {
// 	document.getElementById("error").innerHTML="password should have atleast 6 character";
// 	return false;
// }
// return true;
// }
// </script>-->
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
</script>
<script src="js/jquery.min.js"></script>
<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
				<script type="text/javascript">
					$(document).ready(function () {

						$('#horizontalTab').easyResponsiveTabs({
							type: 'default', //Types: default, vertical, accordion           
							width: 'auto', //auto or any width like 600px
							fit: true   // 100% fit in a container
						});
					});

				   </script>
</head>
<body>
	<h1> Googlock Holems</h1>
	<div class="main-content">
		<div class="sap_tabs">	
			<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
			 
				  <ul>
				  	  <li class="resp-tab-item" aria-controls="sample" role="tab"><span>Sample Question</span></li>
					  <li class="resp-tab-item" aria-controls="hint" role="tab"><span>Hint</span></li>
					  <!-- <li class="resp-tab-item" aria-controls="rules" role="tab"><span>Rules</span></li> -->
					  <!-- <li class="resp-tab-item" aria-controls="sample" role="tab"><span>Sample Question</span></li> -->
				  </ul>		
				<div class="tab-1 resp-tab-content" aria-labelledby="sample">

					<img src="./images/sample.jpg" alt = "SAmple Question" style="width:80%;height:80%;"/>			
				</div>	
				<div class="tab-2 resp-tab-content" aria-labelledby="hint">
					<div class="rules">
	
						<p1> Hint: </p1><br/>
						<p2> Answer is "How I met your mother".<br/>
							Simple logic representation of all images and merge them together.<br/>
						</p2>
					</div>  
				</div> 
			        					            	      
			</div>	
		</div>
	</div>
	<div class="logout" aria-controls="logout" >
		<spna><a href="./logout.php">Log Out</a></span>
	</div>
</body>
</html>
