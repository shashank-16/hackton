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


$optionsheet="optionsheet_".$_SESSION["table_name"];
$test="test_".$_SESSION["table_name"];


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
    


        $sql_subject= "INSERT INTO subject_info VALUES('{$tablename}','{$number_of_question}','{$time}')";
        $query_subject=mysqli_query($connection,$sql_subject);


        $sql_optionsheet="CREATE TABLE `$optionsheet`(question_id varchar(1000),option1 varchar(1000),option2 varchar(1000),option3 varchar(1000),option4 varchar(1000), question_no int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY)";
        $sql_test=" CREATE TABLE `$test`(question varchar(1000),answer varchar(1000))";

        mysqli_query($connection,$sql_optionsheet) or die("optionsheet error");
        mysqli_query($connection,$sql_test) or die("test table error");

        header("Location:Question_upload.php");
    
    }
    if($checker=="DeleteTable")
    {
        $sql_deletion="DROP TABLE {$table}";
        $sql_optionsheet="DROP TABLE {$optionsheet}";
        $sql_test="DROP TABLE {$test}";

mysqli_query($connection,$sql_optionsheet);
mysqli_query($connection,$sql_test);
        $query_deletion=mysqli_query($connection,$sql_deletion) or die("cannot delete the table");

        header("Location: after_teacherlogin.php");
    }

}

?>