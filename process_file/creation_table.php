<?php 

session_start();


include('connective.php');

if(isset($_POST['submit']))
{

$_SESSION["number_question"]= $_POST["no_of_question"]; 
$time=90;

$number_of_question=$_POST['no_of_question']; // session or form 

$checker=$_POST['check'];

$_SESSION["table_name"]=$_POST['Table_name']; // session or form

$tablename=$_SESSION["table_name"];
$table="online_test_".$_SESSION["table_name"]; //table name change here for further testing


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

        $sql_subject= "INSERT INTO subject_info VALUES('{$tablename}','{$time}','{$number_of_question}')";
        $query_subject=mysqli_query($connection,$sql_subject);
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