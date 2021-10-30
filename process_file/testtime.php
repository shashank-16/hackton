<?php
session_start();
$_SESSION["username"]=$_POST["username"];

$_SESSION["score"]=0;



include 'connective.php';

if(isset($_POST["submit"]))
{

    $username=$_SESSION["username"] ; // will change
    $Password= $_POST["password"];

    $sql="SELECT *FROM user_info where user_name= '{$username}' and password='{$Password}'";

    $finally= mysqli_query($connection,$sql) or die("login fail");

    if(mysqli_num_rows($finally)>0)
    {
        $sql_username_insertion_in_online_test= "INSERT INTO online_test(Username_test,score) VALUES('{$username}','{$_SESSION["score"]}') ";
        $putting_name= mysqli_query($connection,$sql_username_insertion_in_online_test) or die($username);
        
      
        header("Location: subject.html");

    }
    else 
    {
        echo(1);
        header("Location: canndicate-login.php");
    }
}
else {
    echo(10);
}




?>