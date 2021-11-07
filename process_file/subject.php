<?php 

session_start();
session_destroy();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Examination</title>

    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Font+Name"> -->
    <link rel="stylesheet" href="subject.css" />
</head>

<body>

    <div class="instruction">
        <p style="color: white;">Please Read The Instruction care fully.</p>
        <ul>
            <li>Procced for key binding.</li>
            <li>Choose Key wisely according to your comfort.</li>
        </ul>
    </div>


    <!-- <div class="background">
        <div class="file">
            <div class="page page1">
            <h4>Item 1</h4>
            </div>
            <div class="page page2">
            <h4>Item 2</h4>
            </div>
            <div class="page page3">
            <h4>Item 3</h4>
            </div>
        </div>
    </div> -->


    <div class="file">
    
    <?php
    include('connective.php');

    $show_subject="SELECT * FROM subject_info";
    

    $query_subject=mysqli_query($connection,$show_subject) or die("cannot show subject");

    if (mysqli_num_rows($query_subject) > 0) {
        while ($row = mysqli_fetch_assoc($query_subject)) {
    ?>

            <div class="main">
                <div class="sub-div">

                
                    <form id="nm" action="key-bindings.php" method="POST" class="form-group" name="<?php echo ($row["subject"]); ?>">
                        <div class="sub-name">
                            <select name="subject" style="display: none;">
                                <option value="<?php echo ($row["subject"]); ?>"></option>
                            </select>

                           Subject : <?php  echo ($row["subject"]); 
                           
                           require 'connective.php';
                           $subject=$row["subject"];
                           $sql_existing="SELECT `user_name` FROM `user_info` WHERE `user_name`= '{$_SESSION["username"]}' AND `$subject`=True ";
                           $existing=mysqli_query($connection,$sql_existing) or die("cannot disable button");

                           ?>
                        </div>


                        <div class="time-div">
                            Time:4:00 PM
                        </div>


                        <div class="duration-div" name="duration">
                            <select name="duration" style="display: none;">
                                <option value="<?php echo ($row["duration"]); ?>"></option>
                            </select>
                           Duration :  <?php echo ($row["duration"]); ?>
                        </div>


                        <div class="no-ques-div" name="question_no" >
                            <select name="question_no" style="display: none;">
                                <option value="<?php echo ($row["no_question"]); ?>"></option>
                            </select>
                           Number of question : <?php echo ($row["no_question"]); ?>
                        </div>


                        <div class="total-marks-div">
                            Total marks:100
                        </div>
                        <?php
                        if(mysqli_num_rows($existing)>0)
                        {
                           echo '<div class="already_given" style="margin-left:40px;">
                            Already given the test 
                        </div>';
                        }
                        else{
                       echo ' <button type="submit" style="margin-left: 50px;" name="submit" class="btn btn-lg btn-primary" onclick="change()">Test Time</button>';
                        }?>


                    </form>
                </div>

        <?php

    }
    }
        ?>
            </div>

    </div>
</body>

<script>
    function change() {
        console.log(document.getElementsById('nm').name);
    }
    $(document).ready(function(){
        $(".file").mouseenter(function(){
            $(".sub-div").animate({"margin-left":"320px"},500);
            // $(".sub-div").animate({"margin-left":"640px"},500);
        })
        $(".file").mouseleave(function(){
            $(".sub-div").animate({"margin-left":"20px"},200);
        })
    })
</script>

</html>