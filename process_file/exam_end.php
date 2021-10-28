<?php
session_start();

require 'connective.php';

echo($_SESSION["score"].$_SESSION["username"]);

$checking_existing="SELECT `user_name` FROM exam_record WHERE `user_name` = '{$_SESSION["username"]}'";
$query_existing=mysqli_query($connection,$checking_existing) or die("cannot check the exist id");

if(mysqli_num_rows($query_existing)>0)
{
    $modify_record="UPDATE `exam_record` SET `total_score` ={$_SESSION["score"]}  WHERE `user_name` = '{$_SESSION["username"]}'";    
    $modify_query=mysqli_query($connection,$modify_record) or die("nope bitch");
    header("Location: Exam-end.html");
    // echo("record has been modfiy");
    
}
else{
    
    $exam_record="INSERT INTO exam_record(`user_name`,`total_score`) values('{$_SESSION["username"]}','{$_SESSION["score"]}')";
    
    $query_record=mysqli_query($connection,$exam_record) or die("cannot the total result in database");
    // header("Location: h.php");
    // echo("record has been modfiy else wala");
    
}    

$deleting_username="DELETE FROM online_test WHERE `Username_test`='{$_SESSION["username"]}'";
$deleting_qeury=mysqli_query($connection,$deleting_username) or die("cannot delete from online_test");
mysqli_close($connection);


?>