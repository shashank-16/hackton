<?php


$server_name = "localhost";
$user_name= "root";
$password="";
$database_name="hackthon"; //now i have changed the database name

$connection= mysqli_connect($server_name,$user_name,$password,$database_name) or die("die");

?>