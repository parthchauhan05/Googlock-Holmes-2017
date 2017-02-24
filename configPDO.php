<?php
// mysql hostname
$hostname = 'localhost';
// mysql username
$username = 'synapse';
// mysql password
$password = 'Daiict$17@';
// Database Connection using PDO
try {
$dbh = new PDO("mysql:host=$hostname;dbname=synapse", $username, $password);
    }
catch(PDOException $e)
    {
    echo $e->getMessage();
    }
?>
