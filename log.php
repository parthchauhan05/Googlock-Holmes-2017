<?php
include('function.php');
session_start();

//login var
 $getemail = $_POST['getemail'];
 $getpass = $_POST['getpass'];

//flag for check whether user select login or register
		 try
     {

      
        /*** prepare the select statement ***/
        // $query = 'SELECT `email` , `password` FROM `login` 
        //             WHERE `email` = 'saoravpratihaar@gmail.com' AND `password` = 'saorav08'';

        $stmt = $connection->prepare("SELECT * FROM login 
                    WHERE team_name = :email AND password = :password");
        
        /*** bind the parameters ***/
        $stmt->bindParam(':email', $getemail, PDO::PARAM_STR);
        $stmt->bindParam(':password', $getpass, PDO::PARAM_STR, 40);
 //header("Location: thanks.php"); 
        /*** execute the prepared statement ***/
        $stmt->execute();

        /*** check for a result ***/
        $user_id = $stmt->fetch();

        /*** if we have no result then fail boat ***/
             
        if($user_id == false)
        {
            //echo "<script></ ";
                echo "<h1 align='center'>Login Failed! Email or Password Incorrect !  Please Go Back And Try Correct Username And Password</h1>";
              //   header("Location: index.php");
        }
        /*** if we do have a result, all is well ***/
        else if($user_id['lastq'] == 1){
                    $_SESSION['user'] = $getemail;
                    header("Location: thanks.php");
                    exit();
            }
        else
        {       

                // print_r($user_id['END']);
                // echo "<script> alert(".$user_id['END'].");</script>";
               
                /*** set the session user_id variable ***/
                {
                    $_SESSION['user'] = $getemail;
                    $_SESSION['que'] = -1;
                    $_SESSION['flag'] = 'com';


                     header("Location: quiz.php"); // change this when quiz start
                // header("Location: quiz.php");

                echo "in login";
            }
                // echo "Name1: " . $user_id['name1']. ", Name2: ".$user_id['name2']."<br>";
         
                /*** tell the user we are logged in ***/
                // $message = 'You are now logged in';
        }


     }


     catch(Exception $e)
     {
         /*** if we are here, something has gone wrong with the database ***/
         echo "Error. Please Contact Coordinators";
         // $message = 'We are unable to process your request. Please try again later';
     }


	
?>