

<?php
session_start();

// echo($_SESSION["score"]);
//data json -> process and databases 

include 'connective.php';
// use json or these method
// header("location: correct_answer.php");


$answer=$_POST["answer"];
$question=$_POST["question"]; 

$sql=" SELECT *  FROM test where question='{$question}' AND answer='{$answer}'";
$correct_query= mysqli_query($connection,$sql) or die("error");

if(mysqli_num_rows($correct_query)>0)
{
    
    $_SESSION["score"]+=1;
    $score=$_SESSION["score"];
   

    $correct_sql="UPDATE `online_test` SET `score`='{$score}' WHERE `Username_test`='{$_SESSION["username"]}'";
    $query = mysqli_query($connection,$correct_sql) or die("server fail to load the correct answer");
    mysqli_close($connection);
    // header("Location: question.php");
}


?>
