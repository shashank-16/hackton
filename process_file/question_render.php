<?php
    include 'connective.php';
    $where=2;
    $query = "SELECT * FROM optionsheet where question_no ='{$where}' ";

    $result = mysqli_query($connection, $query) or die("database cant load");
    if (mysqli_num_rows($result) > 0) {



            while ($rowforjoin = mysqli_fetch_assoc($result)>0) {


            ?>
                <p> <?php echo  $rowforjoin['question_id'] ?></p>

                </div>
                    </div>
                    <hr>

                    <ul class="options">
                        <!-- <input type="checkbox" name="" id=""> -->
                        <li><input type="checkbox" id="opt-1" name="select" class="option-1"><?php echo  $rowforjoin['option1'] ?></li>
                        <li><input type="checkbox" id="opt-2" name="select" class="option-1"><?php echo  $rowforjoin['option2'] ?></li>
                        <li><input type="checkbox" id="opt-3" name="select" class="option-1"><?php echo  $rowforjoin['option3'] ?></li>
                        <li><input type="checkbox" id="opt-4" name="select" class="option-1"><?php echo  $rowforjoin['option4'] ?></li>

                    </ul>

                <?php 
            }
    } ?>