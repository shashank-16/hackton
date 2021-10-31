<?php 

include('connective.php');

if(isset($_POST['submit']))
{




$number_of_question=$_POST['no_of_question']; // session or form 

$checker=$_POST['check'];

$table=$_POST['Table_name']; // session or form


    if($checker=="createTable") //check box option will come here for the checking;
    {
        $sql_creation="CREATE TABLE `$table`(Username_test varchar(1000),score int)";
        $query_creation=mysqli_query($connection,$sql_creation) or die("creation of table is not happen");
        // $result = $mysqli->query("SHOW TABLES LIKE '".$table."'");

            for($i=1;$i<=$number_of_question;$i++)
            {
                $question= "question$i";
                $columns="ALTER TABLE `$table` ADD `$question`  BOOLEAN NULL DEFAULT NULL";
                $query_column=mysqli_query($connection,$columns) or die("columns didn't created ");
            }
        header("Location:Question_upload.php");
    
    }
    if($checker=="DeleteTable")
    {
        $sql_deletion="DROP TABLE {$table}";
        $query_deletion=mysqli_query($connection,$sql_deletion) or die("cannot delete the table");

        header("Location: after_teacherlogin.php");
    }

}

?>