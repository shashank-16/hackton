<?php

include 'connective.php';


if(isset($_POST["submit"]))
{
$username_for_student=$_POST["Email"];
$password_of_student=$_POST["password"];
$name= $_POST["F_name"]+$_POST["L_name"];
$gender=$_POST["gender"];
$student_id=$_POST["student_id"];
$branch=$_POST["branch"];




$sql="INSERT INTO user_info(user_name,password,student_Id,branch,name_student,Gender)
 values('{$username_for_student}','{$password_of_student}','{$student_id}','{$branch}','{$name}','{$gender}')";


$query= mysqli_query($connection,$sql) or die("FAIL TO UPLOAD");

}

?>