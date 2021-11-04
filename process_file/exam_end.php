<?php
session_start();

require 'connective.php';

$table="online_test_".$_SESSION["table_name"];
// echo($_SESSION["score"].$_SESSION["username"]);
$subject=$_SESSION["table_name"];


$checking_existing="SELECT `user_name` FROM exam_record WHERE `user_name` = '{$_SESSION["username"]}'";
$query_existing=mysqli_query($connection,$checking_existing) or die("cannot check the exist id");

if(mysqli_num_rows($query_existing)>0) // if exist username then modify 
{
    //uncomment this for modifing the exam_record;---------------------------------------./////,,,./-------------------------


    // $modify_record="UPDATE `exam_record` SET `$subject` ={$_SESSION["score"]}  WHERE `user_name` = '{$_SESSION["username"]}'";    
    // $modify_query=mysqli_query($connection,$modify_record) or die("nope bitch");
    // header("Location: Exam-end.html");
    // echo("record has been modfiy");

}
else{ // no record 
    
    //add these
    $exam_record="INSERT INTO exam_record(`user_name`,`$subject`) values('{$_SESSION["username"]}','{$_SESSION["score"]}')";
    //upto here 


    
    $query_record=mysqli_query($connection,$exam_record) or die("cannot the total result in database");
    // header("Location: Exam-end.html");

    // header("Location: h.php");
    // echo("record has been modfiy else wala");
    
}    

$deleting_username="DELETE FROM $table WHERE `Username_test`='{$_SESSION["username"]}'";
$deleting_qeury=mysqli_query($connection,$deleting_username) or die("cannot delete from $table");
mysqli_close($connection);


?>