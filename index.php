<?php
 

 header("Location: thanks.php");
// grab recaptcha library
// require_once "captcha.php";
 require('function.php');


 session_start();

//if($_SESSION['qqq'] == "YES"){
 //    header("Location: quiz.php");
 //}

?>

<!DOCTYPE html>
<html>
<head>
<title>Googlock Holmes | Synapse'17</title>
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel='stylesheet' type='text/css' />

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Googlock Holmes"./>
<script type="text/javascript">
function logvalid(){
var team = document.getElementById('team_name');
	var password =document.getElementById('pass');
if(team.value==""){
	document.getElementById("error1").innerHTML="please fill the field Team Name";
	return false;
} 
if(password.value==""){
	document.getElementById("error1").innerHTML="please fill the field Password";
	return false;
}
return true;
}

function validation(){
	var name_1 = document.getElementById('p1');
	var name_2 = document.getElementById('p2');
	var team = document.getElementById('team');
	var email =document.getElementById('email');
	var mobile = document.getElementById('mno');
	var college = document.getElementById('college');
	var password =document.getElementById('password');
    var cpassword = document.getElementById('cpassword');
if(name_1.value==""){
	document.getElementById("error").innerHTML="please fill the field Participant1";
	return false;
} 
if(name_2.value==""){
	document.getElementById("error").innerHTML="please fill the field Participant2";
	return false;
}
if(team.value==""){
	document.getElementById("error").innerHTML="please fill the field Team Name";
	return false;
}
if(email.value==""){
	document.getElementById("error").innerHTML="please fill the field email";
	return false;
}
else{
		var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
	if (reg.test(email.value)==false)  
  {  
  	document.getElementById("error").innerHTML="please enter the valid  email";
  	return false;
  }  
}
if(mno.value==""){
	document.getElementById("error").innerHTML="please fill the field Mobile No.";
	return false;
}else{
var phoneno = /^\d{10}$/;  
	if(!mobile.value.match(phoneno)){
	document.getElementById("error").innerHTML="mobile no. is invalid </br> Enter Mobile No. without including +91 or 0<br>";		
		return false;
	}
}
if(college.value==""){
	document.getElementById("error").innerHTML="please fill the field college";
	return false;
}
if(password.value==""){
document.getElementById("error").innerHTML="please fill the field password";
	return false;	
}
if(cpassword.value==""){
document.getElementById("error").innerHTML="please fill the field Confirm Password";
	return false;	
}
if(password.value!=cpassword.value){
document.getElementById("error").innerHTML="password doesn't match with confirm password";
return false;
}
if(password.value.length<6)
{
	document.getElementById("error").innerHTML="password should have atleast 6 character";
	return false;
}
return true;
}
</script>
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
<body background="../images/back.jpg">

<div class="col-md-4">
	<a href= "http://daiict.ac.in" target="_blank"><img src="./images/da.png" alt="Smiley face" height="10%" width="10%"></a></div>
</div>

<div class="col-md-4">
	<h1>Googlock Holmes</h1>
</div>

<div class="col-md-4">
	<a href= "http://synapse.daiict.ac.in" target="_blank"><img src="./images/logo.png" alt="Smiley face" height="150" width="150"></a></div>
</div>
<div>
<a href="chat/index.html" target="_blank" style="font-size: 25px">Click here for hints</a>
</div>
<div class="main-content">
	<div class="sap_tabs">	
		<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
		 
			  <ul>
			  	  <li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span>Sign up</span></li>
				  <li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><span>Sign in</span></li>
				  <li class="resp-tab-item" aria-controls="rules" role="tab"><span>Rules</span></li>
				  <!-- <li class="resp-tab-item" aria-controls="sample" role="tab"><span>Sample Question</span></li> -->
			  </ul>		
			<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
				<div class="facts">
					<!--login1-->
					<div class="register">
						<form  action="#" method="POST" name="registration" onsubmit="return(validation());">	
							<input placeholder="Participant1" type="text"  name="p1"  id="p1">
							<input placeholder="Participant2" type="text"   name="p2" id="p2">
							<input placeholder="Team Name" type="text"   name="team" id="team">
							<input placeholder="Email Address" type="text"   name="email" id="email">
							<input placeholder="Mobile No." type="text"   name="mno" id="mno">
							<input placeholder="College" type="text"   name="college" id="college">
							<input placeholder="Password" type="password"   name="password" id="password">	
							<input placeholder="Confirm Password" type="password"   name="cpassword" id="cpassword">
								<div class="sign-up">
									<input type="submit" value="Create Account" name ="cracc" />
								</div>
								<br/>
							<p id="error"></p><br/>	
						</form>
					</div>
				</div>
			</div>	
			<div class="tab-2 resp-tab-content" aria-labelledby="tab_item-1">
				<div class="facts">
					<div class="register">
						<form action="log.php" method="POST" name="login" onsubmit="return (logvalid());" >										
							<input placeholder="Team Name" class="team" type="text"  name="getemail" id="team_name">									
							<input placeholder="Password" class="lock" type="password" name="getpass" id="pass" >										
							<div class="sign-up">
								<input type="submit" value="Sign in"/>
							</div>
							<p id="error1"></p><br/>	
						</form>

						<!-- <h3><a href="#"> Forgot Password</a></h3> -->
					</div>
				</div> 
			</div> 
			<div class = "tab-3 resp-tab-content" aria-labelledby="rules">
			<div class="rules">
				<p1>Rules<br/></p1>
				<ul style="list-style-type:circle">
					<li>Team Size is 2.                        </li>
					<li>Only one member can login at a time.        </li>                 
					<li>Ensure that your email address used during registration is used consistently by you as we shall contact you through that email 	address.                         </li>
					<li>You may use the internet during the event.                         </li>
					<li>The one team that finishes all questions first shall be declared winner.</li>
					<li>Further rules will be given at the time of the event.</li>
				</ul>
			</div>

			<div class="rules"><p1>Tips <br/></p1>
				<ul style="list-style-type:circle">
					<li>There will be questions in form of the images, which you will have to decode what it says or represents. To do this you collectively need to apply your general knowledge and skills of “connected thinking”.</li>
					<li>You need to acknowledge and retrieve your great knowledge of google search and google image search.</li>
				</ul>
			</div>
			</div>			        					            	      
		</div>	
	</div>
</div>


</body>
</html>
	