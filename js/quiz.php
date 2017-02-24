
<!DOCTYPE html>

<?php

//header("Location: done.html");
require('function.php');
session_start();
// header("Location: 404.html");   //remove this when quiz start
$user = $_SESSION['user'];

$_SESSION['qqq'] = "YES";


// $_SESSION['que'] = 1;       //temporary for check
// $_SESSION['user'] = 'saoravpratihaar@gmail.com';        //temporary for check
//set session of question no. here when user come from login page,set session value 1 at there and set $qno = 1 here;



if(($_SESSION['que'] == -1) && (isset($_SESSION['user']))){



        if(isset($_SESSION['qno'])){
        $qno = $_SESSION['qno'] + 1;
        }

        else{
            $qno = 1;
        }
        $stmt = $connection->prepare("SELECT question FROM quiz 
                WHERE id = :id");
        
        /*** bind the parameters ***/
        $stmt->bindParam(':id', $qno, PDO::PARAM_STR);
        // $stmt->bindParam(':password', $getpass, PDO::PARAM_STR, 40);

        /*** execute the prepared statement ***/
        $stmt->execute();

        /*** check for a result ***/
        $user_id = $stmt->fetch();



    }


    else if(($_SESSION['que'] != -1) && (isset($_SESSION['user'])))
    {
        $qno = $_SESSION['que'];


        $stmt = $connection->prepare("SELECT question FROM quiz 
                WHERE id = :id");
        
        /*** bind the parameters ***/
        $stmt->bindParam(':id', $qno, PDO::PARAM_STR);
        // $stmt->bindParam(':password', $getpass, PDO::PARAM_STR, 40);

        /*** execute the prepared statement ***/
        $stmt->execute();

        /*** check for a result ***/
        $user_id = $stmt->fetch();
  
    }

    else{
        header('Location: 404.html');
    }



?>

<html lang="en">

   <!-- <head>

         <script type="text/javascript">
            $(document).ready(function(){
                $(("#submitform").submit)( function () {    
                  $.post(
                   'check.php',
                    $(this).serialize(),
                    function(data){
                        alert("Submit done");
                      document.getElementById("#msg").innerHTML = "Submit Success";
                      $("#submit").attr("disabled", true);
                      
                    }
                  );
                  return false;   
                });   
            });

            </script>   -->


        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Googlock Holmes'17</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">



        <script src='https://www.google.com/recaptcha/api.js'></script>

        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/scripts.js"></script>
       <!--  <script src="validation.js"></script> -->

      
        
     

        <script>
        	$(document).ready(function(){
        		$("#name1").click(function(){
        			$("#name1").focus();

        		});
        	});
        </script>
       

    </head>

    <body onload="document.login.login_email.focus();">
    	 <div class="row">
            <div class="col-md-6 left"><a href="http://www.daiict.ac.in" target="_blank"><img src="assets/img/da.png" alt="DAIICT Logo" width="20%" style="padding:10x 0px 0px 0px"></a></div>
            <div class="col-md-6 right"><a href="http://synapse.daiict.ac.in/" target="_blank"><img src="assets/img/logo.png" alt="ifest Logo" width="20%" style="padding:0px 0px 0px 0px"></a></div>
         </div>



         <div style="color:#211e1e" class="col-md-offset-3 col-md-6">
                        <h1 style="color:white" >Googlock Holmes 2017</h1>
                            <div class="description">
                                <p>
                                    Welcome <?php echo $user ?>
                                </p>

                    </div>
 		 </div>


 		<!--  <div style="color:white" class="col-md-offset-3 col-md-6">
						<h1 style="color:white" ><strong>i</strong>.decipher 2016</h1>
                            <div class="description">
                            	<p>
                                    Welcome <?php  $user ?>
                            	</p>
                            </div>

                    </div>

 -->
        <!-- Top content -->
      
        	
            <div>
<a href="chat/index.html" target="_blank" style="font-size: 25px"><u>Click here for hints</u></a>
</div>
                <div class="container">
                    
                        
                    
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                        	
                            <div class="form-bottom" style="background: rgba(0,0,0,0.3)">
			                    <div class="panel-group" id="accordion">
                                <h3 style="color:white"><?php echo "Question ".$qno  ?></h3>
                                    <img src="<?php echo ($user_id['question']) ?>" alt="<?php echo ($user_id['question']) ?>"> 
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <form id="submitform" method="post" action="check.php">
                                            <input type="text" name="answer" placeholder="Your Answer..." required>
                                            <p id="msg"></p>
                                            <input type="hidden" name="qno" value="<?php echo $qno ?>"> 
                                            <input type="hidden" name="user" value="<?php echo $user ?>">   
                                            <div style="text-align:left; padding-left:0px" class="col-md-6 left">
                                                <button id="submit" type="submit" class="btn">Submit</button>
                                            </div>  
                                       </form>
                                        <!-- </div> -->
                                            <div style="text-align:right; padding-right:10px" class="col-md-6 right">
                                            <form method="post" action="skip.php">
                                                <input type="hidden" name="qno" value="<?php echo $qno ?>"> 
                                                <input type="hidden" name="user" value="<?php echo $user ?>"> 
                                                <input type="hidden" name="answer" value="<?php echo 'NULL' ?>">   
                                                <button type="submit" class="btn">Skip</button>
                                            </form>
                                        </div>   
                                        </div>

                                    </div>

                                    
                                   <!--  <br>
                                    <div class="row">
                                        <div style="text-align:left" class="col-md-6 left">
                                            <form method="post" action="skip.php">
                                                <input type="hidden" name="qno" value="<?php echo $qno ?>"> 
                                                <input type="hidden" name="user" value="<?php echo $user ?>"> 
                                                <input type="hidden" name="answer" value="<?php echo 'NULL' ?>">   
                                                <button type="submit" class="btn">Skip</button>
                                            </form>
                                        </div> -->
                                       <!--  <div style="text-align:right" class="col-md-6 right">
                                            <button class="btn">Next</button>
                                        </div> -->
                                    </div>



    
		                    </div>
                        </div>
                    </div>
                </div>
                    <br>
		                   
		               <!--          <div class="btn azm-social azm-size-48 azm-r-square azm-android">
		                        	
		                        	
			                        	<a class="tn btn-primary btn-lg" href="http://www.facebook.com/">
			                        		<i class="fa fa-facebook"></i>
			                        
			                        	</a>
		                        
		                        </div>
		                    -->
          


        <div class="footer" style="color : #43424a;">
        	<div class="row">
        		<br>
        			<p><strong>Coordinators:<br>
                    <p>Parth Chauhan : 9998109590<br/>
                        Biren Prajapati : 9099260117<br/>
                        Hardik Sardhara : 9727664959<br/>
                        Jaymil Koshiya : 9574959597<br/>
                    </p></strong>
        		

        		
        	</div>
        </div>

</div>
        <!-- Javascript -->

       
       
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>
