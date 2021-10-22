<?php

include 'connective.php';

if(isset($_POST["submit"]))
{
$username_for_student=$_POST["Email"];
$password_of_student=$_POST["password"];

$sql="INSERT INTO user_info(user_name,password) values('{$username_for_student}','{$password_of_student}')";

$query= mysqli_query($connection,$sql);

// header("Location : signup.php");


}

?>