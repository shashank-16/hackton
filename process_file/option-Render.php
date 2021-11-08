<?php
session_start();

        include 'connective.php';

        $optionsheet="optionsheet_".$_SESSION["table_name"];
      
        // wait for second
        
        
        $count=$_POST['count'];
        $query = "SELECT option1,option2,option3,option4 FROM `$optionsheet` where question_no ='{$count}' ";

        $result = mysqli_query($connection, $query) or die("database cant load");
        if (mysqli_num_rows($result) > 0) {

       while ($rowforjoin = mysqli_fetch_assoc($result)) {


        ?>

        <ul class="options">
       
        <li style="list-style: none;"><label for="option1"><input type="radio" id="opt-1" name="select" class="option-1" value="<?php echo  $rowforjoin['option1'] ?>"><?php echo  $rowforjoin['option1'] ?></label></li>
        <li style="list-style: none;"><label for="option1"><input type="radio" id="opt-2" name="select" class="option-1" value="<?php echo  $rowforjoin['option2'] ?>"><?php echo  $rowforjoin['option2'] ?></label></li>
        <li style="list-style: none;"><label for="option1"><input type="radio" id="opt-3" name="select" class="option-1" value="<?php echo  $rowforjoin['option3'] ?>"><?php echo  $rowforjoin['option3'] ?></label></li>
        <li style="list-style: none;"><label for="option1"><input type="radio" id="opt-4" name="select" class="option-1" value="<?php echo  $rowforjoin['option4'] ?>"><?php echo  $rowforjoin['option4'] ?></label></li>

        </ul>

        <?php }
   
    } 
    else{
        session_destroy();
        header("Location :Login.php");
    }
?>