<?php

// include 'connective.php';
// $server_name = "localhost";
// $user_name= "root";
// $password="";
// $database_name="hackton";

// $connection= mysqli_connect($server_name,$user_name,$password,$database_name) or die("die");
include 'connective.php';

if(isset($_POST['submit']))
{
$question= $_POST["question"]; // choose your name id
$options_1= $_POST["option_1"];

$options_2= $_POST["option_2"];
$options_3= $_POST["option_3"];
$options_4= $_POST["option_4"];
$correct_answers=$_POST["answer"];


$sql="INSERT INTO optionsheet(question_id,option1,option2,option3,option4) VALUES(
'{$question}','{$options_1}','{$options_2}','{$options_3}','{$options_4}')";
$query=mysqli_query($connection,$sql) or die("question didnt upload");

$answer_sql= "INSERT INTO test(question,answer) VALUES('{$question}','{$correct_answers}')";
$query_ans = mysqli_query($connection,$answer_sql) or die("answer did uplaod");

header("Location: Question_upload.php");
}


else
{
    echo("requested");
}
?>