<?php
  
    
    include 'connective.php';
    $count=$_POST['count'];
    $query = "SELECT question_id FROM optionsheet where question_no ='{$count}' ";

    $result = mysqli_query($connection, $query) or die("database cant load");
    if (mysqli_num_rows($result) > 0) {

       while ($rowforjoin = mysqli_fetch_assoc($result)) {
    ?>
        <p> <?php echo  $rowforjoin['question_id'] ?></p>
    
    <?php }
   }
   ?>