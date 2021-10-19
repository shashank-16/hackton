<?php

$server_name = "localhost";
$user_name= "root";
$password="";
$database_name="hackton";


if(isset($_POST['submit']))
{
$variable=$_POST["select"];
// $correct_sql="" or die("answer ");
// $correct_query=mysqli_connect($connection,$correct_query);

echo($variable);
}
else 
{
    echo(0);

}
?>
