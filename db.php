<?php

global $conn;
$host = "localhost";
$user = "***";
$pass = "***";
$db = "***";

$conn = new mysqli($host, $user, $pass, $db);

if($conn -> connect_error){
    die("Connect'on failed : ".$conn ->connect_error);
}

?>