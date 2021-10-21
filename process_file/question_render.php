<?php
  
    
    include 'connective.php';
    // $count=1;
    $count=$_POST['count'];
    $query = "SELECT question_id FROM optionsheet where question_no ='{$count}' ";

    $result = mysqli_query($connection, $query) or die("database cant load");
    if (mysqli_num_rows($result) > 0) {

       while ($rowforjoin = mysqli_fetch_assoc($result)) {
    ?>
        <textarea disabled style="height: 100%; width:100%; border:2px solid green; border-radius: 8px; resize: none;" name ="question" id= "questions"><?php echo  $rowforjoin['question_id'] ?></textarea> 
    
    <?php }
   }
   ?>


<!---->