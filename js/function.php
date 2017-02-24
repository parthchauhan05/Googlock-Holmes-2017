<?php


//mysql server details
$host = '14.139.122.117';
$db = 'synapse';
$user = 'synapse';
$psw = 'Daiict$17@';



try{
//connection to MySQL
$connection = new PDO("mysql:host=$host;dbname=$db", $user, $psw);
$connection->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
}

catch(PDOException $e){
	die('Connection Error');
	echo '$e';
}
//SQL Syntex

                  

