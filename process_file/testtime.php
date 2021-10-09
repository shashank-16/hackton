<?php

include 'connective.php';

if(isset($_POST["submit"]))
{

    $username= $_POST["username"];
    $Password= $_POST["password"];

    $sql="SELECT *FROM user_info where user_name= '{$username}' and password='{$Password}'";

    $finally= mysqli_query($connection,$sql) or die("login fail");

    if(mysqli_num_rows($finally)>0)
    {
        echo("in there");
        header("Location: http:question.php");

    }
    else 
    {
        echo(1);
        header("Location: http:home.php");
    }
}
else {
    echo(10);
}



?>