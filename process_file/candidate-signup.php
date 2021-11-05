<?php

    include 'connective.php';


    if(isset($_POST["submit"]))
    {
        $student_ID=$_POST["student_id"];
        $branch=$_POST["branch"];
        $fname=$_POST["F_name"];
        $lname=$_POST["L_name"];
        $username_for_student=$_POST["Email"];
        $password_of_student=$_POST["password"];



    $sql="INSERT INTO user_info(`student_Id`,`branch`,`F_name`,`L_Name`,`user_name`,`password`)
    values('{$student_ID}','{$branch}','{$fname}','{$lname}','{$username_for_student}','{$password_of_student}')";

    $query= mysqli_query($connection,$sql) or die("FAIL TO UPLOAD");

    }

?>