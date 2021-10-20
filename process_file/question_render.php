<?php
  
    
    include 'connective.php';
    // $count=1;
    $count=$_POST['count'];
    $query = "SELECT question_id FROM optionsheet where question_no ='{$count}' ";

    $result = mysqli_query($connection, $query) or die("database cant load");
    if (mysqli_num_rows($result) > 0) {

       while ($rowforjoin = mysqli_fetch_assoc($result)) {
    ?>
        <textarea name ="question" id= "questions" cols="100" row="10"><?php echo  $rowforjoin['question_id'] ?></textarea> 
    
    <?php }
   }
   ?>


<!---->