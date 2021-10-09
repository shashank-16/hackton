<?php
include 'connective.php';

$number_id= $_GET['numberof_question'];


$sql="SELECT *FROM optionsheet where question_id='$number_id'";



?>