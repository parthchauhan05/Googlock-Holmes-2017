
<?php
session_start();
//login var
$qno = 'q'.$_POST['qno'];
$ans = $_POST['answer'];
$_SESSION['qno'] = $_POST['qno'];
//flag for check whether user select login or register
	// if(isset($ans)){
        try{
        require('function.php');
        $user = $_POST['user'];
        $insert = 'UPDATE login SET '.$qno.' = :ans WHERE team_name = :email'; 

        $result = $connection->prepare($insert);
        $result->execute( array(':ans'=>$ans,':email'=>$user) );  //get session from quiz page where it store the email of //user;

            if($_POST['qno'] == 20){
                $_SESSION['user'] = $user;
                $insert = 'UPDATE login SET  lastq = 1 WHERE team_name = :email'; 
                $result = $connection->prepare($insert);

                $result->execute( array(':email'=>$user) );

                header("Location: thanks.php");
            }
        // $result->execute();
        else{
                $_SESSION['que'] = $_POST['qno']+1;
                header("Location: quiz.php");
            }
        }
        catch(PDOException $e){
            echo $e;
        }
?>