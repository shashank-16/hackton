<?php 
session_start();
require 'connective.php';


$current_question="question".$_POST["count"];

$table_name="online_test_".$_SESSION["table_name"];


$color="SELECT *FROM `$table_name` WHERE `$current_question` IS NOT NULL";

$color_query=mysqli_query($connection,$color) or die("color changing problem in $current_question");

if(mysqli_num_rows($color_query)>0)
{


?>


<?php
}

?>